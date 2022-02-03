<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css">

</head>

<body>
    <?php
    $sender = $_POST["inputfrom"];
    if (empty($sender)) {
        echo '<script type ="text/JavaScript">';
        echo 'alert(" CHECK THE SENDERS DETAILS ")';
        echo '</script>';
    }
    $receiver = $_POST["inputto"];
    if (empty($receiver)) {
        echo '<script type ="text/JavaScript">';
        echo 'alert(" CHECK THE RECEIVERS DETAILS ")';
        echo '</script>';
    }
    $amount = $_POST["inputamount"];
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "customerinfo");

    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($connect == false) {
        die("Unsuccessul");
    }
    $sql = "SELECT Balance FROM `customers` WHERE `Name`='$sender'";
    $result = mysqli_query($connect, $sql);
    $sqlr = "SELECT Balance FROM `customers` WHERE `Name`='$receiver'";
    $result3 = mysqli_query($connect, $sqlr);
    //num_rows returns number of row
    $num = mysqli_num_rows($result);
    $num3 = mysqli_num_rows($result3);
    if ($num > 0) {
        if ($num3 > 0) {
            //mysqlfetchassoc returns next row
            //while loop will return null at last then it will exit the loop
            while ($row = mysqli_fetch_assoc($result)) {
                while ($row2 = mysqli_fetch_assoc($result3)) {
                    $data = $row["Balance"];
                    $datar = $row2["Balance"];
                    if ($data < $amount) {
                        echo "<div class='msg1'>";
                        echo "Amount to be transfered is more than the currrent balance present";
                        echo "<br>";
                        echo " CURRENT BALANCE ₹ " . $data;
                        echo "</div>";
                        header("refresh:3;url=customers.php");
                    } else {
                        $finalbalancesender = $data - $amount;
                        $finalbalancereceiver = $datar + $amount;
                        $sqle = "UPDATE `customers` SET `Balance`='$finalbalancesender' WHERE `Name`='$sender'";
                        $result2 = mysqli_query($connect, $sqle);
                        $sqler = "UPDATE `customers` SET `Balance`='$finalbalancereceiver' WHERE `Name`='$receiver'";
                        $result4 = mysqli_query($connect, $sqler);
                        $sqlh = "INSERT INTO `customerhistory` (Sender,Reciever,Amount) VALUES ('$sender','$receiver','$amount')";
                        $result5 = mysqli_query($connect, $sqlh);
                        if ($result2) {
                            if ($result4) {
                                echo '<script type ="text/JavaScript">';
                                echo 'alert(" TRANSACTION SUCCESSFUL ")';
                                echo '</script>';
                                if ($result5) {
                                    header("refresh:1;url=history.php");
                                }
                            } else {
                                echo "eroro";
                            }
                        } else {
                            echo "error";
                        }
                    }
                }
            }
        }
    } else {

        echo "<div class='msg'>";
        echo "<i class='fa fa-times-circle'></i>";
        echo "<h3>check the senders details entered</h3>";
        echo "</div>";
    }








    $connect->close();
    ?>
</body>

</html>