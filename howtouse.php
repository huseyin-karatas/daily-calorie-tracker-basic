<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How To Use?</title>
    <!--  BOOTSTRAP v5.2.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

    <?php 
   $user_id = $_GET['user_id']; 
    ?>
</head>
<style>
    .underly {
        text-decoration: none;
    }

    .underly:hover {
        text-decoration: underline;
    }
</style>

<body>
    <div class="container-fluid">
    <div class="row shadow shadow-5-soft p-2 bg-primary">
            <div class="col-sm-3 d-flex justify-content-center align-items-center">

                <div>
                    <a href="howtouse?user_id=<?= $user_id ?>" class="text-white  underly">
                        <i class="far fa fa-info-circle"></i>
                        How To Use
                    </a>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div>
                    <a href="help?user_id=<?= $user_id ?>" class="text-white  underly">
                        <i class="far fa fa-question-circle"></i>
                        Help/FAQ
                    </a>
                </div>

            </div>
            <div class="col-sm-6 text-center">
                <a href="home?user_id=<?= $user_id ?>" class="text-decoration-none text-white">
                    <h4 class="text-white">
                        <i class="fas fa-utensils fa-1x"></i> <br>
                        Daily Calorie Calculator
                    </h4>
                </a>
            </div>
            <div class="col-sm-3 d-flex justify-content-center align-items-center">
                <div>
                    <a href="foods-calories?user_id=<?= $user_id ?>" class="text-white  underly">
                        <i class="fas fa-pizza-slice"></i>
                        Calorie Values
                    </a>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div>
                    <a href="logout" class="text-white  underly">
                        Log out
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-sm-4 offset-sm-4 bg-primary bg-opacity-75 rounded-3">
                <h2 class="text-white text-center pt-1">
                    <i class="far fa fa-info-circle"></i>
                    How To Use
                </h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-10 offset-sm-1">
                <div class="card shadow shadow-3-soft rounded-3 p-5">
                    <h4><strong><u>Step One:</u></strong> Enter your <strong class="mark">Gender</strong>, <strong class="mark">Weight</strong>, <strong class="mark">Body Fat Percentage</strong>, and <strong class="mark">Activity Level</strong>.</h4>
                    <div class="row border-2 border-bottom">
                        <div class="col-sm-8 mb-3">
                            <img src="images/step1.png" class="img-fluid " alt="">
                        </div>
                    </div>

                    <h4 class="mt-4">
                        <strong><u>Step Two:</u></strong> <strong class="mark">See</strong> your daily calorie need and <strong class="mark">add</strong> your daily intakes.
                    </h4><br>
                    <div class="row border-2 border-bottom">
                        <div class="col-sm-8 mb-4">
                            <img src="images/step2.png" class="img-fluid shadow shadow-5-strong rounded-3" alt="">
                        </div>
                    </div>

                    <h4 class="mt-4">
                        <strong><u>Step Three:</u></strong> <strong class="mark">Track</strong> your remained daily calorie need.
                    </h4><br>
                    <div class="row">
                        <div class="col-sm-8">
                            <img src="images/step3.png" class="img-fluid shadow shadow-5-strong rounded-3" alt="">
                        </div>
                    </div>
                </div>

               
            </div>
        </div>

    </div>
</body>

</html>