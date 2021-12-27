<?php
    include 'functions.php';

    $val1=$_GET['val1'];
    $val2=$_GET['val2'];

    if($val2 == 1) {
        $user = $person1;
    } else if($val2 == 2) {
        $user = $person2;
    }

    $userPIN = $user->showPIN();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RA BANKING</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="transactions.css">
</head>
</head>
<body>
    <header>

    <?php

    switch($val1) {

    case 1:
        if(isset($_POST['pinSubmit'])) {
            $pin = $_POST['pin'];
            if($pin == $userPIN) {
    ?>

        
        <div class="container">
            <form action="process.php" method="POST" class="card mt-5 px-3 py-3 container bg-transparent" style="width: 35rem; height: 10rem;">
                <input type="hidden" name="wd" value="<?php echo $val2?>">
                <div class="card-header h3 text-center fw-bold fs-2 mb-5 text-white">Enter amount to withdraw</div>
                <div class="row align-items-center mt-3">
                    <div class="row text-center">
                        <div class="box">
                            
                            <input type="text" class="mt-5" id="withdraw" name="withdraw" required>
                            <input type="submit" name="wdSubmit" value="Enter">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    <?php
            } else {
                echo "<script type='text/javascript'>alert('Incorrect PIN');</script>";
            }
        }

    break;

    case 2:
        if(isset($_POST['pinSubmit'])) {
            $pin = $_POST['pin'];
            if($pin == $userPIN) {
    ?>

        <div class="container">
            <form action="process.php" method="POST" class="card mt-5 px-3 py-3 container bg-transparent" style="width: 35rem; height: 15rem;">
                <div class="card-header h3 text-center fw-bold fs-2 mb-5 text-white">Enter amount to deposit</div>
                <div class="row align-items-center mt-3">
                    <div class="row text-center">
                        <div class="box">
                            <input type="hidden" name="dep" value="<?php echo $val2?>">
                            <input type="text" class="mt-5" id="deposit" name="deposit" required>
                            <input type="submit" name="depSubmit">
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    
    <?php
            } else {
                echo "<script type='text/javascript'>alert('Incorrect PIN');</script>";
            }
        }

    break;

    case 3:
        if(isset($_POST['pinSubmit'])) {
            $pin = $_POST['pin'];
            if($pin == $userPIN) {
    ?>
            
                <div class="container">
                    <form action="process.php" method="POST" class="card mt-5 px-3 py-3 container bg-transparent" style="width: 35rem; height: 15rem;">
                        <div class="card-header h3 text-center fw-bold fs-2 text-white">Balance</div>
                            <div class="row align-items-center">
                                <div class="row text-center">
                                    <div class="">
                                        <h3 class="text-white ">₱<?php echo $user->showBal(); ?></h3>
                                        <br>
                                        <a href="index.php" class="btn btn-warning">Finish Transaction</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

    <?php
            } else {
                echo "<script type='text/javascript'>alert('Incorrect PIN');</script>";
            }
        }
    break;

    case 4:
        if(isset($_POST['pinSubmit'])) {
            $pin = $_POST['pin'];
            if($pin == $userPIN) {
    ?>
        
                <div class="container">
                <form action="process.php" method="POST" class="card mt-5 px-3 py-3 container bg-transparent" style="width: 35rem; height: 15rem;">
                    <div class="card-header h3 text-center fw-bold fs-2 mb-5 text-white">Enter amount to transfer</div>
                        <div class="row align-items-center">
                            <div class="row text-center">
                                <div class="box">
                                    <input type="text" class="mt-5" id="transfer" name="transfer">
                                    <input type="submit" name="trSubmit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    
    <?php
            } else {
                echo "<script type='text/javascript'>alert('Incorrect PIN');</script>";
            }

    break;
}
}
?>

        <!---------- BACKGROUND IMG ---------->
        <div class="overlay"></div>

        <img src="./assets/img/bank.jpg">

        <div class="container h-100">
            <div class="d-flex h-100">
                <div class="w-50">

                    <!---------- CARD ---------->
                    
                    <div class="container">
                        <form class="card mt-5 px-3 py-3 container bg-transparent" style="width: 35rem; height: 15rem;"  method="POST">
                            <div class="card-header h3 text-center fw-bold fs-2 text-white">WELCOME TO RA BANKING</div>
                            <div class="row align-items-center">
                          
                                <div class="row text-white">
                                    <div class="box">
                                        <p class="text-center mt-5 mb-3">Please enter your PIN number</p>
                                        <input type="text" class="" id="pin" name="pin" required>
                                        <!-- <button type="submit" name="pinSubmmit" onclick="smoothScroll(document.getElementById('result'))">Enter</button> -->
                                        <input type="submit" name="pinSubmit" value="Enter">
                                        <!-- <a href="transactions.php#result" class="btn" name="pinSubmit">Enter</a> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
        
        <!-- <script>
           
        </script> -->
       

</header>
</body>
</html>


