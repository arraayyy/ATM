<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="transactions.css">
</head>
<body>

<header>

    <!---------- BACKGROUND IMG ---------->
    <div class="overlay"></div>

    <img src="./assets/img/bank.jpg">

    <div class="container h-100">
        <div class="d-flex h-100">
            <div class="w-50">

     <?php
        include 'functions.php';

        if(isset($_POST['submit'])) {
            $user = $_POST['username'];

            if(strtoupper($user) === strtoupper($person1->name) || strtoupper($user) === strtoupper($person2->name)) {
                if(strtoupper($user) === strtoupper($person1->name)){
                    $person =$person1;
                    $val1 = 1;
                }else if(strtoupper($user) === strtoupper($person2->name)){
                    $person = $person2;
                    $val1 = 2;
                }
                
        ?>

            <div class="container">
                <div class="card bg-transparent mt-5 px-3 py-3 container">
                    <div class="card-header h3 text-center fw-bold fs-2  text-white">WELCOME TO RA BANKING</div>
                    <div class="card-body">
                        <h4 class="text-center text-white"><?php echo $person->name; ?></h4>
                        <hr size="6";>

                        <div class="row text-center">
                            <div class="col-lg-6">
                                <a class="btn btn-lg btn-warning btn-outline-light" href="transactions.php?val1=1&&val2=<?php echo $val1 ?>">Withdraw</a>
                            </div>
                            <div class="col-lg-6">
                                <a class="btn btn-lg btn-warning btn-outline-light" href="transactions.php?val1=2&&val2=<?php echo $val1 ?>">Deposit</a>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-lg-6">
                                <a class="btn btn-lg btn-warning btn-outline-light mt-3" href="transactions.php?val1=3&&val2=<?php echo $val1 ?>">Show Balance</a>
                            </div>

                            <div class="col-lg-6">
                                <a class="btn btn-lg btn-warning btn-outline-light mt-3" href="transactions.php?val1=4&&val2=<?php echo $val1 ?>">Transfer</a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </header>
        <?php
            } else {
                echo "Invalid User";
            } 
        }
        ?>

            
</body>
</html>