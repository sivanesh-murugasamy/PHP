<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting user Input</title>
</head>
<body>
    <form action="userinp.php" method="post">
    Num 1 <input type="number" name="num1"><br>
    Num 2<input type="number" name="num2">
    <input type="submit">
    </form>

    <?php 
     echo "The Addition of two numbers:".$_POST['num1']+$_POST['num2']."<br>";
     echo "The Subtraction of two numbers:".$_POST['num1']-$_POST['num2']."<br>";
     echo "The Multiplication of two numbers:".$_POST['num1']*$_POST['num2']."<br>";
     echo "The dividion of two numbers:".$_POST['num1']/$_POST['num2']."<br>";
   
    ?>
</body>
</html>