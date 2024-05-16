//------------------Session----------------------------------------//
//a session is a way to store the information in the variables to be used to across multiple pages
//a php session is created with session_start() function and it is destroyed with session_destroy() function
//a php global variable known as $SESSION,is used to set values to session variables
//we can unset all values set to the session variables using session_unset() function   
//------------------Session----------------------------------------// 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <h3>User's ID: <input type="text" name="id"></h3>
    <h3>User's Name: <input type="text" name="name"></h3>
    <h3>User's Type: <input type="text" name="type"></h3>
    <input type="submit" value="Submit"/>
</form>

<?php
 session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $_SESSION['ID']=$_POST['id'];
    $_SESSION['Name']=$_POST['name'];
    $_SESSION['TYPE']=$_POST['type'];

    echo "<h2> Following Session Variable created</h2>";
    foreach ($_SESSION as $key=>$val)
    {
       echo "<h3>".$key."=>".$val."</h3>"; 
    }
    echo "<a href='test.php'><b>Click Here</b></a>";

 }
?>
</body>
</html>