<?php
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

$num = "";

if (isset($_POST['num'])) {
    $num = $_POST['input'] . $_POST['num'];
} elseif (isset($_POST['op'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    $num = "";
} elseif (isset($_POST['equal'])) {
    $num = $_POST['input'];
    switch ($_COOKIE['op']) {
        case "+":
            $result = $_COOKIE['num'] + $num;
            break;
        case "-":
            $result = $_COOKIE['num'] - $num;
            break;
        case "*":
            $result = $_COOKIE['num'] * $num;
            break;
        case "/":
            $result = $_COOKIE['num'] / $num;
            break;
    }
    $num = $result;
}
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator </title>
    <style>
        body {
            background-color: darkgray;
        }

        .calc {

            margin: auto;
            background-color: black;
            border: 2px solid whitesmoke;
            color: whitesmoke;
            width: 26%;
            height: 600px;
            border-radius: 20px;
            box-shadow: 10px 10px 40px;
        }

        .maininput {
            background-color: black;
            border: 1px solid grey;
            height: 115px;
            width: 98.2%;
            font-size: 50px;
            color: whitesmoke;
            font-weight: 500;
        }

        .number1 {
            margin-left: 3%;
        }

        .numbtn {
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: rgb(155, 154, 154);
        }

        .numbtn:hover {
            background-color: rgb(136, 133, 133);
            color: whitesmoke;
        }

        .calbtn {
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: orange;
        }

        .calbtn:hover {
            background-color: rgb(211, 140, 7);
            color: whitesmoke;
        }

        .c {
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: red;
        }

        .c:hover {
            background-color: rgb(188, 16, 16);
            color: whitesmoke;
        }

        .equal {
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: rgb(8, 181, 8);
        }

        .equal:hover {
            background-color: green;
            color: whitesmoke;
        }
        @media (max-width:600px){
            body{
                background-color: darkgray;
            }
            .calc{
                width: 85%;
                height: 650px; 
               margin-top: 20%;
            }
            .maininput{
                height: 100px;
            width: 98.2%;
            font-size: 40px;
            }  
              .numbtn {
            padding: 25px 30px;
            margin-top: 5%;
         
          
        }
        .calbtn{
            padding: 25px 30px;
        }
        .equal{
            padding: 25px 30px;
        }



        }
        @media (max-width: 1280px) {
    .calc {
        width: 45%;
        height: 700px;
    }

    .maininput {

        height: 120px;
        width: 98.2%;
        font-size: 45px; 
      
    }
    .numbtn {
       
        padding: 30px 35px; 
        margin-top: 5%; 
   
       
    }
    .calbtn {
        padding: 30px 35px; 
    }
    .equal {
        padding: 30px 35px; 
    }
    .c {
        padding: 30px 35px; 
    }
    form div{
        margin-left: 20%;
    }
}



    </style>


</head>


<body>
    <div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo htmlspecialchars($num); ?>"> <br> <br>
           <div> <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+"> <br><br>
            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="-"><br><br>
            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="calbtn" name="op" value="*"><br><br>
            <input type="submit" class="c" name="num" value=".">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="op" value="/">
            </div>
        </form>
    </div>
</body>

</html>