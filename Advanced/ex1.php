<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <title ></title>
   </head>
   <body>

   <!-- POST -->

       <form  method ="POST">
       ° F: <input type="number"   name="Fahrenheit" />
             <input  type="submit"  name="submit"  />
        </form>


       <?php
      function celsius($deg)
      {
        $result = ($deg - 32) * 5/9;
          return  $result;
      }
     if(isset($_POST["submit"])){
        echo celsius($_POST["Fahrenheit"]);
     
        
     }
       ?>

   </body>
</html>