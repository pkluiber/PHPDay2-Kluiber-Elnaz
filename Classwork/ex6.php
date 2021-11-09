<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <title ></title>
   </head>
   <body>

   <!-- POST -->

   <form method='POST' />
    name:<input type='text' name='name' />
    surname:<input type='text' name='surname' />
    hobbies:<input type="text" name="hobbies" />
    <input type='submit' name='submit' />
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (($_POST["name"] || $_POST["surname"] )&& (strlen($_POST["name"]) > 6)) {
            echo "<div style='color: red'>Welcome Dear  " . $_POST['name'] . "</div><br />";
        } else if(($_POST["name"] || $_POST["surname"]) && (strlen($_POST["name"]) <= 6)) {
            echo "<div style='color: green'>Welcome Dear  " . $_POST['name'] . "</div><br />";
        }
        else {"please insert your name, or please insert your surname";}
    }
    ?>



   </body>
</html>

