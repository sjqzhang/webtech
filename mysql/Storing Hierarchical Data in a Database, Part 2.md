




#### Modified Preorder Tree Traversal


Now, let’s have a look at another method for storing trees. Recursion can be slow, so we would rather not use a recursive function. We’d also like to minimize the number of database queries. Preferably, we’d have just one query for each activity.


We’ll start by laying out our tree in a horizontal way. Start at the root node (‘Food’), and write a 1 to its left. Follow the tree to ‘Fruit’ and write a 2 next to it. In this way, you walk (traverse) along the edges of the tree while writing a number on the left and right side of each node. The last number is written at the right side of the ‘Food’ node. In this image, you can see the whole numbered tree, and a few arrows to indicate the numbering order.


![http://sitepointstatic.com/graphics/sitepoint_numbering.gif](http://sitepointstatic.com/graphics/sitepoint_numbering.gif)


We’ll call these numbers left and right (e.g. the left value of ‘Food’ is 1, the right value is 18). As you can see, these numbers indicate the relationship between each node. Because ‘Red’ has the numbers 3 and 6, it is a descendant of the 1-18 ‘Food’ node. In the same way, we can say that all nodes with left values greater than 2 and right values less than 11, are descendants of 2-11 ‘Fruit’. The tree structure is now stored in the left and right values. This method of walking around the tree and counting nodes is called the ‘modified preorder tree traversal’ algorithm.


Before we continue, let’s see how these values look in our table:


![http://sitepointstatic.com/graphics/table02.gif](http://sitepointstatic.com/graphics/table02.gif)


Note that the words ‘left’ and ‘right’ have a special meaning in SQL. Therefore, we’ll have to use ‘lft’ and ‘rgt’ to identify the columns. Also note that we don’t really need the ‘parent’ column anymore. We now have the lft and rgt values to store the tree structure.




#### Retrieve the Tree




If you want to display the tree using a table with left and right values, you’ll first have to identify the nodes that you want to retrieve. For example, if you want the ‘Fruit’ subtree, you’ll have to select only the nodes with a left value between 2 and 11. In SQL, that would be:



```
SELECT * FROM tree WHERE lft BETWEEN 2 AND 11;
```

That returns:


![http://sitepointstatic.com/graphics/table03.gif](http://sitepointstatic.com/graphics/table03.gif)





Well, there it is: a whole tree in one query. To display this tree like we did our recursive function, we’ll have to add an ORDER BY clause to this query. If you add and delete rows from your table, your table probably won’t be in the right order. We should therefore order the rows by their left value.



```
SELECT * FROM tree WHERE lft BETWEEN 2 AND 11 ORDER BY lft ASC;
```

The only problem left is the indentation.


To show the tree structure, children should be indented slightly more than their parent. We can do this by keeping a stack of right values. Each time you start with the children of a node, you add the right value of that node to the stack. You know that all children of that node have a right value that is less than the right value of the parent, so by comparing the right value of the current node with the last right node in the stack, you can see if you’re still displaying the children of that parent. When you’re finished displaying a node, you remove its right value from the stack. If you count the elements in the stack, you’ll get the level of the current node.



```
<?php  


function display_tree($root) {  


    // retrieve the left and right value of the $root node  


    $result = mysql_query('SELECT lft, rgt FROM tree '.  


                           'WHERE title="'.$root.'";');  


    $row = mysql_fetch_array($result);  


  


    // start with an empty $right stack  


    $right = array();  


  


    // now, retrieve all descendants of the $root node  


    $result = mysql_query('SELECT title, lft, rgt FROM tree '.  


                           'WHERE lft BETWEEN '.$row['lft'].' AND '.  


                           $row['rgt'].' ORDER BY lft ASC;');  


  


    // display each row  


    while ($row = mysql_fetch_array($result)) {  


        // only check stack if there is one  


        if (count($right)>0) {  


            // check if we should remove a node from the stack  


            while ($right[count($right)-1]<$row['rgt']) {  


                array_pop($right);  


            }  


        }  


  


        // display indented node title  


        echo str_repeat('  ',count($right)).$row['title']."n";  


  


        // add this node to the stack  


        $right[] = $row['rgt'];  


    }  


}  


?>
```

If you run this code, you’ll get exactly the same tree as with the recursive function discussed above. Our new function will probably be faster: it isn’t recursive and it only uses two queries.




#### The Path to a Node




With this new algorithm, we’ll also have to find a new way to get the path to a specific node. To get this path, we’ll need a list of all ancestors of that node. 


With our new table structure, that really isn’t much work. When you look at, for example, the 4-5 ‘Cherry’ node, you’ll see that the left values of all ancestors are less than 4, while all right values are greater than 5. To get all ancestors, we can use this query:



```
SELECT title FROM tree WHERE lft < 4 AND rgt > 5 ORDER BY lft ASC;
```

Note that, just like in our previous query, we have to use an ORDER BY clause to sort the nodes. This query will return:



```
+-------+


| title |


+-------+


| Food  |


| Fruit |


| Red   |


+-------+
```

We now only have to join the rows to get the path to ‘Cherry’.




#### How Many Descendants




If you give me the left and right values of a node, I can tell you how many descendants it has by using a little math.


As each descendant increments the right value of the node with 2, the number of descendants can be calculated with:



```
descendants = (right â€“ left - 1) / 2
```

With this simple formula, I can tell you that the 2-11 ‘Fruit’ node has 4 descendant nodes and that the 8-9 ‘Banana’ node is just a child, not a parent.





#### Go to page:

 [1](http://www.sitepoint.com/hierarchical-data-database) | [2](http://www.sitepoint.com/hierarchical-data-database-2/) | [3](http://www.sitepoint.com/hierarchical-data-database-3/)




[Storing Hierarchical Data in a Database](http://www.sitepoint.com/series/storing-hierarchical-data-in-a-database/)
[<< Storing Hierarchical Data in a Database](http://www.sitepoint.com/hierarchical-data-database/)[Storing Hierarchical Data in a Database, Part 3 >>](http://www.sitepoint.com/hierarchical-data-database-3/)



        
          
    

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






        



                
        
        

                    


            

        
            
                ivan malik
            
        


        
            
how to create a collapsible menu from items in db ie to show only one level at the time, for example:


when you click on ‘food’ you get the two items: ‘fruit’ and ‘meat'; then when you click on fruit you should see ‘red’ and ‘yellow’ etc.


tia





        



    


    
        
            
http://www.idiotideas.com                bhupendra
            
        


        
            
thank you for this article.I want to create a a portion of website in which I need a tree like hierarchy but


ithas two levels of depth and childs are multiple. Can you suggest design in RDBMS for it. I need to navigate page only and nothing else with its help





        



    


    
        
            
                Ben Laidler
            
        


        
            
Hi Gijs, for the MPTT method, when you are trying to create the indented tree list, you are fetching all nodes with a lft value BETWEEN a parent node’s lft and rght value.  


I believe this would include the parent node itself in the result set (at least in MySQL)?  So surely when you are “popping” rght values out of the $right array stack if they have a rght > [last value in $right], none would have a higher rght value than the parent node itself and so all child nodes would be discarded?





        



    


    
        
            
                nuno
            
        


        
            
hi, i have a problem


I have several users and each user have a diferent struture in is information treeview.


How can a do this.


I think  abaut the problem. Putting the users in the level below the root and below each user put the Hierarchical information acording the need of each user.  But i have a little problem. If i have 1000 users, if a add a node in the lowest level of the user number 1, it could be a litle slow, because it need to calculate for the others nodes for each user.


ex


                                            root


           ———————————————————————-  ……


          user1                       user2                           user3 ……


    ————-                   —————                  ————–…….


   item1    item2               ert1          ert2


——-       ——-              ——– …       ———— ……


a1   a2     b1   b2           w4    rt        tyu      tre 


Someone have some idea or this algorithm dont work in this situation?





        

