<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <title ></title>
   </head>
   <body>

       <?php
    //    function hour($hour1, $min2)
    //    {
    //        $hour = $hour1 / $min2;
    //        return  $hour;
    //    }
    //    $return_hour = hour(200, 60);
    //    echo  "This is hours = $return_hour<br><br>";
    //    echo "Now we get results, but we do without decimal.<br><br>";


    //    function decimal($min2, $decimal1)
    //    {
    //        $decimal = $min2 * $decimal1;
    //        return  $decimal;
    //    }
    //    $return_decimal = decimal(60, 3);
    //    echo  "This is minutes = $return_decimal<br><br>";

    //    function minutes($min1, $min2)
    //    {
    //        $minute = $min1 - $min2;
    //        return  $minute;
    //    }
    //    $return_minute = minutes(200, 180);
    //    echo  "This is minutes = $return_minute<br><br>";


       function numberOfMinutes($minutes){
        $minutes=200;
        $hour = round($minutes/60);
        $minute = $minutes%60;
        return array($minutes ,$hour , $minute);
    }
    $return_value =numberOfMinutes(10, 20,30);
echo "$return_value[0] minutes minutes = $return_value[1] hour(s) and $return_value[2] minute(s).";





       
       ?>
   </body>
</html>

