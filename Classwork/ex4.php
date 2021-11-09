<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <title ></title>
   </head>
   <body>

       <?php
       function area($area1, $area2)
       {
           $area = $area1 * $area2;
           return  $area;
       }
       $return_area = area(3, 4);
       echo  "area = width x height = $return_area<br><br>";
       

       function volume($volume1, $volume2, $volume3)
       {
           $volume = $volume1 * $volume2 * $volume3;
           return  $volume;
       }
       $return_volume = volume(5, 7, 2);
       echo  "volume = width x height x depth = $return_volume<br><br>";

       function box($width, $height,$depth)
    {
        $area = $width* $height;
        $volume = $width* $height* $depth;
        return  array($area, $volume);
    }
    $return_value =box(10, 20,30);  
    echo  "The area of the box is: $return_value[0]";
    echo  "<br>The volume of the box is: $return_value[1] ";




       ?>
   </body>
</html>

