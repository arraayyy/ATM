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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="transactions.css">
</head>
<body>
    <header>
    <div class="overlay"></div>

    <img src="./assets/img/bank.jpg">

    <div class="container h-100">
        <div class="d-flex h-100">
            <div class="w-50">
                <div class="container">
                    <form class="card mt-5 px-3 py-3 container bg-transparent" action="transacs.php" style="width: 35rem; height: 15rem;" method = "POST">
                        <div class="card-header h3 text-center fw-bold fs-2  text-white">WELCOME TO RA BANKING</div>
                        
                            <div class="row align-items-center">

                            <!---------- USERNAME ---------->
                            <div class="row  text-white text-center">
                                <div class="">
                                        <div class="">
    
                                            <?php
                                                include 'functions.php';

                                                if(isset($_POST['wdSubmit'])) {
                                                    $amount = $_POST['withdraw'];
                                                    $val1 = $_POST['wd'];

                                                if($val1 == 1) {
                                                    $user = $person1;
                                                } else if($val1 == 2) {
                                                    $user = $person2;
                                                }

                                                $user->withdraw($amount);

                                                    echo $user->showBal(); ?>
                                                    <br><br>
                                                    <a href="index.php" class="btn btn-warning mt-2">Finish Transaction</a>

                                                    <?php
                                                }

                                                if(isset($_POST['depSubmit'])) {
                                                    $amount = $_POST['deposit'];
                                                    $val1 = $_POST['dep'];

                                                    if($val1 == 1) {
                                                        $user = $person1;
                                                    } else if($val1 == 2) {
                                                        $user = $person2;
                                                    }

                                                    $user->deposit($amount);
                                                    echo "Your current balance is: <b>₱ " . $user->showBal(); "" ?>
                                                    <br><br>
                                                    <a href="index.php" class="btn btn-warning">Finish Transaction</a>

                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         
</header>
</body>
</html>