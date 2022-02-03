<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
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
        <h2>ENTER CUSTOMER DETAILS</h2>
        <div class="container" style="width: 25%;">
            <form action="addcustomer.php" method="post" class="formcont">
                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label">User Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="emailadd" class="col-md-4 col-form-label">Email</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="emailadd" name="emailadd" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="amountintial" class="col-md-4 col-form-label">Amount</label>
                    <div class="col-md-8">
                        <input type="int" class="form-control" id="amountintial" name="amountintial" placeholder="Enter Intial Balance" required>
                    </div>
                </div>
                <div class=" p-4 mb-4">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary submitbut" value="ADD CUSTOMER">
                    </div>

                </div>
            </form>
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