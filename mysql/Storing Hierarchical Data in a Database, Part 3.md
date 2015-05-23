
Storing Hierarchical Data in a Database, Part 3







#### Automating the Tree Traversal




Now that you’ve seen some of the handy things you can do with this table, it’s time to learn how we can automate the creation of this table. While it’s a nice exercise the first time and with a small tree, we really need a script that does all this counting and tree walking for us.


Let’s write a script that converts an adjacency list to a modified preorder tree traversal table.



```
<?php   


function rebuild_tree($parent, $left) {   


    // the right value of this node is the left value + 1   


    $right = $left+1;   


   


    // get all children of this node   


    $result = mysql_query('SELECT title FROM tree '.   


                           'WHERE parent="'.$parent.'";');   


    while ($row = mysql_fetch_array($result)) {   


        // recursive execution of this function for each   


        // child of this node   


        // $right is the current right value, which is   


        // incremented by the rebuild_tree function   


        $right = rebuild_tree($row['title'], $right);   


    }   


   


    // we've got the left value, and now that we've processed   


    // the children of this node we also know the right value   


    mysql_query('UPDATE tree SET lft='.$left.', rgt='.   


                 $right.' WHERE title="'.$parent.'";');   


   


    // return the right value of this node + 1   


    return $right+1;   


}   


?>
```

This is a recursive function. You should start it with rebuild_tree('Food',1); The function then retrieves all children of the ‘Food’ node. 





If there are no children, it sets its left and right values. The left value is given, 1, and the right value is the left value plus one. If there are children, this function is repeated and the last right value is returned. That value is then used as the right value of the ‘Food’ node.


The recursion makes this a fairly complex function to understand. However, this function achieves the same result we did by hand at the beginning of this section. It walks around the tree, adding one for each node it sees. After you’ve run this function, you’ll see that the left and right values are still the same (a quick check: the right value of the root node should be twice the number of nodes).




#### Adding a Node




How do we add a node to the tree? There are two approaches: you can keep the parent column in your table and just rerun the rebuild_tree() function — a simple but not that elegant function; or you can update the left and right values of all nodes at the right side of the new node.


The first option is simple. You use the adjacency list method for updating, and the modified preorder tree traversal algorithm for retrieval. If you want to add a new node, you just add it to the table and set the parent column. Then, you simply rerun the rebuild_tree() function. This is easy, but not very efficient with large trees.


The second way to add, and delete nodes is to update the left and right values of all nodes to the right of the new node. Let’s have a look at an example. We want to add a new type of fruit, a ‘Strawberry’, as the last node and a child of ‘Red’. First, we’ll have to make some space. The right value of ‘Red’ should be changed from 6 to 8, the 7-10 ‘Yellow’ node should be changed to 9-12 etc. Updating the ‘Red’ node means that we’ll have to add 2 to all left and right values greater than 5. 


We’ll use the query:



```
UPDATE tree SET rgt=rgt+2 WHERE rgt>5;   


UPDATE tree SET lft=lft+2 WHERE lft>5;
```

Now we can add a new node ‘Strawberry’ to fill the new space. This node has left 6 and right 7.



```
INSERT INTO tree SET lft=6, rgt=7, title='Strawberry';
```

If we run our display_tree() function, we’ll see that our new ‘Strawberry’ node has been successfully inserted into the tree:



```
Food   


  Fruit   


    Red   


      Cherry   


      Strawberry   


    Yellow   


      Banana   


  Meat   


    Beef   


    Pork
```



#### Disadvantages




At first, the modified preorder tree traversal algorithm seems difficult to understand. It certainly is less simple than the adjacency list method. However, once you’re used to the left and right properties, it becomes clear that you can do almost everything with this technique that you could do with the adjacency list method, and that the modified preorder tree traversal algorithm is much faster. Updating the tree takes more queries, which is slower, but retrieving the nodes is achieved with only one query.



#### Conclusion


You’re now familiar with both ways to store trees in a database. While I have a slight preference for the modified preorder tree traversal, in your particular situation the adjacency list method might be better. I’ll leave that to your own judgement.


One last note: as I’ve already said I don’t recommend that you use the title of a node to refer to that node. You really should follow the basic rules of database normalization. I didn’t use numerical ids because that would make the examples less readable.




#### Further Reading




More on Trees in SQL by database wizard Joe Celko: 

[http://searchdatabase.techtarget.com/tip/1,289483,sid13_gci537290,00.html](http://searchdatabase.techtarget.com/tip/1,289483,sid13_gci537290,00.html)


Two other ways to handle hierarchical data: 

[http://www.evolt.org/article/Four_ways_to_work_with_hierarchical_data/17/4047/index.html](http://www.evolt.org/article/Four_ways_to_work_with_hierarchical_data/17/4047/index.html)


Xindice, the ‘native XML database': 

[http://xml.apache.org/xindice/](http://xml.apache.org/xindice/)


An explanation of recursion: 

[http://www.strath.ac.uk/IT/Docs/Ccourse/subsection3_9_5.html](http://www.strath.ac.uk/IT/Docs/Ccourse/subsection3_9_5.html)


If you enjoyed reading this post, you’ll love [Learnable](https://learnable.com/); the place to learn fresh skills and techniques from the masters. Members get instant access to all of SitePoint’s ebooks and interactive online courses, like [PHP & MySQL Web Development for Beginners](https://learnable.com/courses/php-mysql-web-development-for-beginners-13).





#### Go to page:

 [1](http://www.sitepoint.com/hierarchical-data-database) | [2](http://www.sitepoint.com/hierarchical-data-database-2/) | [3](http://www.sitepoint.com/hierarchical-data-database-3/)




[Storing Hierarchical Data in a Database](http://www.sitepoint.com/series/storing-hierarchical-data-in-a-database/)
[<< Storing Hierarchical Data in a Database, Part 2](http://www.sitepoint.com/hierarchical-data-database-2/)



        
          
    

          [
        ![http://0.gravatar.com/avatar/87a33eff78a8372e7283c9d959d081cd?s=96&d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D96&r=G](http://0.gravatar.com/avatar/87a33eff78a8372e7283c9d959d081cd?s=96&d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D96&r=G)](http://www.sitepoint.com/author/gijs-van-tulder/)
    

          
    [Gijs Van Tulder](http://www.sitepoint.com/author/gijs-van-tulder/)
  



  
        Gijs is a full time Dutch student in economics and a spare time Web developer. He spends his time developing scripts using PHP, MySQL and other external programs. Visit him at [http://gvtulder.f2o.org/](http://gvtulder.f2o.org/)



        



    



          



                  
            
#### You might also like:


            

  
[PHP](http://www.sitepoint.com/php/)
    
    [18 Critical Oversights in Web Development](http://www.sitepoint.com/18-critical-oversights-web-development/)
      
        by [George Fekete](http://www.sitepoint.com/author/gfekete/)


      


      
      Sep 12, 2014




      

              
  
[Learnable](https://learnable.com?utm_source=sitepoint&utm_medium=related-items&utm_content=js-bootstrap)
    [Book: Jump Start Bootstrap](https://learnable.com/books/jump-start-bootstrap?utm_source=sitepoint&utm_medium=related-items&utm_content=js-bootstrap)
      
        by [Syed Fazle Rahman](http://www.sitepoint.com/author/sfrahman/)


      


      PREMIUM




    



              
  
[PHP](http://www.sitepoint.com/php/)
    
    [Database Versioning with Ladder Migrations](http://www.sitepoint.com/database-versioning-ladder-migrations/)
      
        by [Lukas White](http://www.sitepoint.com/author/lwhite/)


      


      
      Apr 21, 2014




      

          



        
        
          
![http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2015/01/1421991954rsz_jsninja1_medium_3d.png](http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2015/01/1421991954rsz_jsninja1_medium_3d.png)



  
    Free  JavaScript: Novice to Ninja  Sample
  
  Get a free 32-page chapter of  JavaScript: Novice to Ninja  and receive updates on exclusive offers from SitePoint.


  
Claim Now






        



                
        
        

                    


            

        
            
                PostgreSQL PressAccount
            
        


        
            
This is a Celko Tree, first introduced by Joe Celko in his book SQL For Smarties.  You should credit him





        



    

        
            
                Anonymous
            
        


        
            
Incorrect.  Kamfonas was way ahead of Celko.  Do your research my friend.





        



    







    
        
            
                Anonymous
            
        


        
            
How to create unorderlist with links for every item?





        



    


    
        
            
                Anonymous
            
        


        
            
No, you first do:


    UPDATE tree SET rgt=rgt+2 WHERE rgt>5;


    UPDATE tree SET lft=lft+2 WHERE lft>5;  


Which will move all from 6 (including it) to +2, so what is free now is 6 and 7





        



    


    
        
            
http://www.devsign.it                Grab
            
        


        
            
And how about moving subtrees or a child from a parent to anotger?





        



    


    
        
            
http://localhost:8080/                Jack Nicholas
            
        


        
            
Hello,


My name is jack and i am new to programing and i am wanting to build a dynamic menu structure, thankyou very much for the code that you have provided it is great, my question is how do i add the ul and li side of it so that has a structure of


 Item 1


       Sub Item 1


       Sub Item 1


       Sub Item 1


 Item 1


       Sub Item 1


       Sub Item 1


       Sub Item 1


— Below is my atempt at the code


<?php


	include('dbconnect.php');


	// $parent is the parent of the children we want to see


	// $level is increased when we go deeper into the tree,


	//        used to display a nice indented tree


	function display_children($parent, $level) { 


		// retrieve all children of $parent


		$result = mysql_query('SELECT * FROM menu WHERE parent="'.$parent.'";');  


		// display each child


		while ($row = mysql_fetch_array($result))


		{


        // indent and display the title of this child


        echo "”;


		echo str_repeat(‘  ‘,$level).$row['title'].”n”; 


        // call this function again to display this


        // child’s children


		?>


— My results 


Website Design


                      What is good website design


   Our Friendly Process


   Our Friendly Portfolio


                        Baypark Speedway


 Website  Hosting





        



    


            




    






