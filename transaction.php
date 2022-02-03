<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Sparks Foundation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Terms & Conditions</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="section2">
        <h2>TRANSACTION</h2>
        <div class="container" style="width: 25%;">
            <form action="confirm.php" method="post" class="formcont">
                <?php
                define("DB_SERVER", "localhost");
                define("DB_USER", "root");
                define("DB_PASSWORD", "");
                define("DB_DATABASE", "customerinfo");
                $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
                if ($connect == false) {
                    die("Sorry failed to connect") . mysqli_connect_error();
                }
                ?>
                <?php
                $sql = "SELECT * FROM customers";
                $result = mysqli_query($connect, $sql);
                $num = mysqli_num_rows($result);
                echo "<div class='form-group row'>";
                echo " <label for='inputfrom' class='col-md-4 col-sm-6 col-form-label'>SENDER</label>";
                echo " <div class='col-md-8 col-sm-6'>";
                echo "<select name='inputfrom' class='option'>";
                echo "<option disabled selected>--Sender--</option>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                }
                echo "</select>";
                echo "</div>";
                echo "</div>";
                ?>
                <?php
                $sql = "SELECT * FROM customers";
                $result = mysqli_query($connect, $sql);
                $num = mysqli_num_rows($result);
                echo "<div class='form-group row'>";
                echo " <label for='inputfrom' class='col-md-4 col-form-label'>RECEIVER</label>";
                echo " <div class='col-md-8'>";
                echo "<select name='inputto' class='option'>";
                echo "<option disabled selected>--Receiver--</option>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                }
                echo "</select>";
                echo "</div>";
                echo "</div>";
                ?>
                <div class="form-group row">
                    <label for="inputamount" class="col-md-4 col-form-label">AMOUNT</label>
                    <div class="col-md-8">
                        <input type="int" class="form-control" id="inputamount" name="inputamount" placeholder="Amount" required>
                    </div>
                </div>

                <div>
                    <div class="text-center">
                        <input type="submit" class="submitbut" value="CONFIRM">
                    </div>

                </div>
            </form>
        </div>
    </section>
    <section id="section3">
        <div class="container-fluid">
            <div class="row">   
                    <button type="button" class="button1" onclick="location.href='history.php'"> TRANSACTION HISTORY</button>               
            </div>
        </div>
    </section>
    <section id="section4">
        <div class="container-fluid">
            <a href="" class="mx-3  text-white fs-4"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="" class="mx-3 text-white"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="" class="mx-3  text-white"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <div class="my-2">
                <p>MADE WITH <i class="fa fa-heart" style="color: red;"></i> BY SARANG</p>
            </div>
        </div>
    </section>
























    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>