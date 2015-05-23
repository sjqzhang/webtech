


This article was written in 2003 and remains one of our most popular posts. If you’re keen to learn more about mastering database management, you may find this [recent article on MySQL](http://www.sitepoint.com/dbninja-mysql-client/) of great interest.




#### Whether you want to build your own forum, publish the messages from a mailing list on your Website, or write your own cms: there will be a moment that you’ll want to store hierarchical data in a database. And, unless you’re using a XML-like database, tables aren’t hierarchical; they’re just a flat list. You’ll have to find a way to translate the hierarchy in a flat file.




Storing trees is a common problem, with multiple solutions. There are two major approaches: the adjacency list model, and the modified preorder tree traversal algorithm. 


In this article, we’ll explore these two methods of saving hierarchical data. I’ll use the tree from a fictional online food store as an example. This food store organizes its food by category, by colour and by type. The tree looks like this:


![http://sitepointstatic.com/graphics/sitepoint_tree.gif](http://sitepointstatic.com/graphics/sitepoint_tree.gif)


This article contains a number of code examples that show how to save and retrieve data. Because I use that language myself, and many other people use or know that language too, I chose to write the examples in PHP. You can probably easily translate them to your own language of choice.



#### The Adjacency List Model


The first, and most elegant, approach we’ll try is called the ‘adjacency list model’ or the ‘recursion method’. It’s an elegant approach because you’ll need just one, simple function to iterate through your tree. In our food store, the table for an adjacency list looks like this:


![http://sitepointstatic.com/graphics/table01.gif](http://sitepointstatic.com/graphics/table01.gif)





As you can see, in the adjacency list method, you save the ‘parent’ of each node. We can see that ‘Pear’ is a child of ‘Green’, which is a child of ‘Fruit’ and so on. The root node, ‘Food’, doesn’t have a parent value. For simplicity, I’ve used the ‘title’ value to identify each node. Of course, in a real database, you’d use the numerical id of each node.




#### Give Me the Tree




Now that we’ve inserted our tree in the database, it’s time to write a display function. This function will have to start at the root node — the node with no parent — and should then display all children of that node. For each of these children, the function should retrieve and display all the child nodes of that child. For these children, the function should again display all children, and so on.


As you might have noticed, there’s a regular pattern in the description of this function. We can simply write one function, which retrieves the children of a certain parent node. That function should then start another instance of itself for each of these children, to display all their children. This is the recursive mechanism that gives the ‘recursion method’ its name.



```
<?php 


// $parent is the parent of the children we want to see 


// $level is increased when we go deeper into the tree, 


//        used to display a nice indented tree 


function display_children($parent, $level) { 


    // retrieve all children of $parent 


    $result = mysql_query('SELECT title FROM tree '. 


                           'WHERE parent="'.$parent.'";'); 




    // display each child 


    while ($row = mysql_fetch_array($result)) { 


        // indent and display the title of this child 


        echo str_repeat('  ',$level).$row['title']."n"; 




        // call this function again to display this 


        // child's children 


        display_children($row['title'], $level+1); 


    } 


} 


?>
```

To display our whole tree, we’ll run the function with an empty string as $parent and $level = 0: display_children('',0); For our food store tree, the function returns:



```
Food


  Fruit


    Red


      Cherry


    Yellow


      Banana


  Meat


    Beef


    Pork
```

Note that if you just want to see a subtree, you can tell the function to start with another node. For example, to display the ‘Fruit’ subtree, you would run display_children('Fruit',0);




#### The Path to a Node




With almost the same function, it’s possible to look up the path to a node if you only know the name or id of that node. For instance, the path to ‘Cherry’ is ‘Food’ > ‘Fruit’ > ‘Red’. To get this path, our function will have to start at the deepest level: ‘Cherry’. It then looks up the parent of this node and adds this to the path. In our example, this would be ‘Red’. If we know that ‘Red’ is the parent of ‘Cherry’, we can calculate the path to ‘Cherry’ by using the path to ‘Red’. And that’s given by the function we’ve just used: by recursively looking up parents, we’ll get the path to any node in the tree.



```
<?php 


// $node is the name of the node we want the path of 


function get_path($node) { 


    // look up the parent of this node 


    $result = mysql_query('SELECT parent FROM tree '. 


                           'WHERE title="'.$node.'";'); 


    $row = mysql_fetch_array($result); 




    // save the path in this array 


    $path = array(); 




    // only continue if this $node isn't the root node 


    // (that's the node with no parent) 


    if ($row['parent']!='') { 


        // the last part of the path to $node, is the name 


        // of the parent of $node 


        $path[] = $row['parent']; 




        // we should add the path to the parent of this node 


        // to the path 


        $path = array_merge(get_path($row['parent']), $path); 


    } 




    // return the path 


    return $path; 


} 


?>
```

This function now returns the path to a given node. It returns that path as an array, so to display the path we can use print_r(get_path('Cherry')); If you do this for ‘Cherry’, you’ll see:



```
Array 


( 


    [0] => Food 


    [1] => Fruit 


    [2] => Red 


)
```



#### Disadvantages




As we’ve just seen, this is a great method. It’s easy to understand, and the code we need is simple, too. What then, are the downsides of the adjacency list model? In most programming languages, it’s slow and inefficient. This is mainly caused by the recursion. We need one database query for each node in the tree. 


As each query takes some time, this makes the function very slow when dealing with large trees.


The second reason this method isn’t that fast, is the programming language you’ll probably use. Unlike languages such as Lisp, most languages aren’t designed for recursive functions. For each node, the function starts another instance of itself. So, for a tree with four levels, you’ll be running four instances of the function at the same time. As each function occupies a slice of memory and takes some time to initiate, recursion is very slow when applied to large trees.





#### Go to page:

 [1](http://www.sitepoint.com/hierarchical-data-database) | [2](http://www.sitepoint.com/hierarchical-data-database-2/) | [3](http://www.sitepoint.com/hierarchical-data-database-3/)




[Storing Hierarchical Data in a Database](http://www.sitepoint.com/series/storing-hierarchical-data-in-a-database/)
[Storing Hierarchical Data in a Database, Part 2 >>](http://www.sitepoint.com/hierarchical-data-database-2/)



        
          
    

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






        



                
        
        

                    


            

        
            
http://twitter.com/zx1986                張旭
            
        


        
            
great job!





        

