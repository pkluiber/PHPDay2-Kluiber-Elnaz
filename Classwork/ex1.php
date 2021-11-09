<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <title ></title>
   </head>
   <body>
       <form action="ex1.php"  method ="POST">
        First Name: <input type="text"   name="fname" />
        Surname: <input type ="text"  name="sname" />
           <input  type="submit"  name="submit"  />
        </form>

       <?php
       if( isset($_POST['submit']))
       {
           if( $_POST["fname"] || $_POST["sname"] )
           {
               echo "<h1>Welcome ". $_POST[ 'fname'] ." ". $_POST['sname']. "</h1>" ;
              
           }
       }
       ?>
   </body>
</html>

