<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Day2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color: #E4B4B4; " class="container">

    <div style='color: green'> ruy6u6ud</div>

    <h4>Exercise 1</h4>
    <h5>***********************</h5>
    <p> please inter your name and your surname:</p>
    <form method="POST" />
    name:<input type="text" name="name" />
    surname:<input type="text" name="surname" />
    <input type="submit" name="submit" />
    </form>

    <?php



    if (isset($_POST['submit'])) {
        if ($_POST["name"] || $_POST["surname"]) {
            echo "Welcome Dear " . $_POST['name'] . "  " . $_POST['surname'] . "<br />";
        } else {
            echo "please insert your name, or please insert your surname";
        }
    }


    echo "<br><br><h4>Exercise 2</h4>";
    echo "<h5>***********************</h5>";

    function divide($num1, $num2)
    {
        $div = $num1 / $num2;
        echo " If you divide the $num1 by the $num2 ,the result  is : $div";
    };
    divide(30, 4);

    echo "<br><br><h4>Exercise 3</h4>";
    echo "<h5>***********************</h5>";

    function grades($Math, $Physics, $English)
    {

        echo "Your grades are :<br> Math : $Math <br> Physics: $Physics <br> English: $English";
        $sum = $Math + $Physics + $English;
        $Average = $sum / 3;
        echo "<br> The sum of your grades is: $sum <br>";
        echo "your Average: $Average <br>";
    };
    grades(2, 1, 3);


    echo "<br><br><h4>Exercise 4</h4>";
    echo "<h5>***********************</h5>";

    function box($width, $height, $depth)
    {
        $area = $width * $height;
        $volume = $width * $height * $depth;
        return  array($area, $volume);
    }
    $return_value = box(10, 20, 30);
    echo  "The area of the box is: $return_value[0]";
    echo  "<br>The volume of the box is: $return_value[1] ";

    echo "<br><br><h4>Exercise 5</h4>";
    echo "<h5>***********************</h5>";

    function numberOfMinutes($minutes)
    {
        $minutes = 200;
        $hour = round($minutes / 60);
        $minute = $minutes % 60;
        return array($minutes, $hour, $minute);
    }
    $return_value = numberOfMinutes(10, 20, 30);
    echo "$return_value[0] minutes minutes = $return_value[1] hour(s) and $return_value[2] minute(s).";


    echo "<br><br><h4>Exercise 6</h4>";
    echo "<h5>***********************</h5>";

    echo "<p> please inter your name and your surname:</p>";
    ?>
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

    echo "<br><br><h4><div style='color: green'>Advanced Exercise</div></h4>";
    echo "<h5>***********************</h5>";

    function convert($fa)
    {
        $fa=200;
        $ca =round(($fa-32)/1.8);

        return  array($fa, $ca);
    }
    $return_value = convert(200);
    echo  "$return_value[0]  degree fahrenheit ~ $return_value[1] centigrade.";


    
    switch ($return_value[1]) {
        case 0<$return_value[1] && $return_value[1]<5:
             echo "===>  weather is Very cold";
            break;
            case 6<$return_value[1] && $return_value[1]<10:
                echo "===>  weather is Verycold";
               break;
               case 11<$return_value[1] && $return_value[1]<15:
                echo "===>  weather is VeryPleasant";
               break;
               case 16<$return_value[1] && $return_value[1]<20:
                echo "===>  weather is VeryWarm";
               break;
               case $return_value[1]>21:
                echo "===>  weather is VeryHot";
               break;
        default:
            echo  "please enter correct number";
    }

    echo "<br><br><h4><div style='color: green'>...:::  the End :::... </div></h4>";
  

















    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>