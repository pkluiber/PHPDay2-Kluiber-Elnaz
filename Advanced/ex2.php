<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <title ></title>
   </head>
   <body>

       <!-- <form  method ="POST">
       Celsius: <input type="number"   name="celsius"/>
                <input  type="submit"  name="submit"/>
        </form>
 -->

       <?php

       
$temperatur = 3;

if ($temperatur < "5") {
  echo "Very cold!";
} elseif ($temperatur < "10") {
    echo "cold!";
} elseif ($temperatur < "15") {
    echo "pleasant!";
} elseif ($temperatur < "20") {
    echo "warm!";
} else {
  echo "hot!";
}


       ?>

   </body>
</html>