<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username=$_POST['username'];
    $useremail=$_POST['emailadd'];
    $amount=$_POST['amountintial'];
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "customerinfo");
    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($connect == false) {
        die("Sorry failed to connect") . mysqli_connect_error();
    }
    $sqladd = "INSERT INTO `customers` (Name, Email, Balance)
VALUES ('$username', '$useremail', '$amount')";
 $result5= mysqli_query($connect, $sqladd);
 if($result5){
    echo '<script type ="text/JavaScript">';
    echo 'alert(" CUSTOMER INSERTED SUCCESSFULLY ")';
    echo '</script>';
    header("refresh:1;url=customers.php");
 }
 $connect->close();

    ?>
</body>
</html>