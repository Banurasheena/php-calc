<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    num1: <input type="number" step="0.001" name="num1"><br>
    op: <input type="text" name="op"><br>
    num2: <input type="number" name="num2"><br>
    <input type="submit">
    </form>


    <?php
    if(isset($_POST['Submit'])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo $num1 + $num2;
    }elseif($op == "-"){
        echo $num1 - $num2;
    }elseif($op == "/"){
        echo $num1 / $num2;
    }elseif($op == "*"){
        echo $num1 * $num2;
    }
    }else{
        echo "Invalid Operator";
    }

    ?>

</body>
</html>