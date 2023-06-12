<!DOCTYPE html>
<html lang="en">

<head>
    <?php


    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Nutrition Calculator</title>

    <!--  BOOTSTRAP v5.2.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <?php

    /*  LOCAL DATABASE BAĞLANTISI: */
    try {
        $baglan = new PDO("mysql:host=localhost;dbname=calculator", 'root', 'mysql', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $hata) {
        echo 'Hata: ' . $hata->getMessage();
    }

    ?>
    <?php
    $user_id = $_GET['user_id'];
    if (isset($_POST['calculate-submit'])) {
        $gender = $_POST['gender'];
        $weight = $_POST['weight'];
        $body_fat = $_POST['body-fat'];
        $activity_level = $_POST['activity-level'];



        header('Location: calculate?user_id= ' . $user_id . '&gender=' . $gender . '&weight=' . $weight . '&body-fat=' . $body_fat . '&activity-level=' . $activity_level . '');

    ?>
    <?

    }
    ?>

</head>
<style>
    body {
        /*    background-image: url('images/ttten (5).svg');
        background-position: center;
        background-repeat: cover;
        background-color: black;
        width: 100%;
        height: 100%; */
        background-color: whitesmoke;
    }
</style>
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

        <div class="row">
            <div class="col-sm-6 offset-sm-3 ">
                <div class="card shadow shadow-5-soft rounded-3 ">
                    <div class="card-header pt-3">
                        <div class="text-center border-bottom border-dark border-opacity-25 mb-3 pb-2">
                            <?php
                            $kullanici = $baglan->query("SELECT * FROM users WHERE user_id = '$user_id'");
                            $kullanici_data = $kullanici->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($kullanici_data as $row) {
                            ?>
                                <h2>Welcome, <strong><?= $row['firstname'] . " "    . $row['lastname'] ?></strong></h2>
                            <? } ?>
                        </div>

                        <h5 class="text-center">Calculate Your Daily Calorie Need</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <select name="gender" class="form-select form-control">
                                            <option value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') { ?> selected <? } ?>>Male</option>
                                            <option value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') { ?> selected <? } ?>>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <input name="weight" type="text" class="form-control" <?php if (isset($_POST['weight'])) { ?> value="<?= $_POST['weight'] ?>" <? } ?> placeholder="Your body weight (kg)">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                    <a href="https://www.calculator.net/body-fat-calculator.html">Click</a>
                                    to calculate your body fat percentage
                                </div>
                            </div>


                            <div class="form-group">
                                <!-- Erkekler için body-fat seçme yeri. -->
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <select name="body-fat" class="form-select form-control">
                                            <option value="0">
                                                Choose your body fat percentage
                                            </option>
                                            <option disabled>
                                                FOR MEN:
                                            </option>
                                            <option value="1014" <?php if (isset($_POST['body-fat']) && $_POST['body-fat'] == 1014) { ?> selected <? } ?>>
                                                10-14
                                            </option>

                                            <option value="1520" <?php if (isset($_POST['body-fat']) && $_POST['body-fat'] == 1520) { ?> selected <? } ?>>
                                                15-20
                                            </option>

                                            <option value="2128" <?php if (isset($_POST['body-fat']) && $_POST['body-fat'] == 2128) { ?> selected <? } ?>>
                                                21-28
                                            </option>

                                            <option value="2128" <?php if (isset($_POST['body-fat']) && ($_POST['body-fat'] == '2128')) { ?> selected <? } ?>>
                                                28+
                                            </option>
                                            <option disabled>
                                                FOR WOMEN:
                                            </option>
                                            <option value="1418" <?php if (isset($_POST['body-fat']) && $_POST['body-fat'] == 1418) { ?> selected <? } ?>>
                                                14-18
                                            </option>
                                            <option value="1928" <?php if (isset($_POST['body-fat']) && $_POST['body-fat'] == 1928) { ?> selected <? } ?>>
                                                19-28
                                            </option>
                                            <option value="2938" <?php if (isset($_POST['body-fat']) && $_POST['body-fat'] == 2938) { ?> selected <? } ?>>
                                                29-38
                                            </option>
                                            <option value="38up" <?php if (isset($_POST['body-fat']) && $_POST['body-fat'] == '38up') { ?> selected <? } ?>>
                                                38up
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <select name="activity-level" class="form-select form-control">
                                            <option value="0">
                                                Choose your activity level
                                            </option>

                                            <option value="very-light" <?php if (isset($_POST['activity-level']) && $_POST['activity-level'] == 'very-light') { ?> selected <? } ?>>
                                                Very Light (little or no exercise)
                                            </option>

                                            <option value="light" <?php if (isset($_POST['activity-level']) &&  $_POST['activity-level'] == 'light') { ?> selected <? } ?>>
                                                Light (light exercise or sports 1-3 days a week)
                                            </option>

                                            <option value="moderate" <?php if (isset($_POST['activity-level']) &&  $_POST['activity-level'] == 'moderate') { ?> selected <? } ?>>
                                                Moderate (moderate exercise or sports 3-5 days a week)
                                            </option>

                                            <option value="heavy" <?php if (isset($_POST['activity-level']) &&  $_POST['activity-level'] == 'heavy') { ?> selected <? } ?>>
                                                Heavy (hard exercise or sports 6-7 days a week)
                                            </option>

                                            <option value="very-heavy" <?php if (isset($_POST['activity-level']) &&  $_POST['activity-level'] == 'very-heavy') { ?> selected <? } ?>>
                                                Very Heavy (very hard exercise or sports, physical job or training twice a day)
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <button type="submit" value="submit" name="calculate-submit" class="btn btn-success form-control text-white text-decoration-none">
                                            Calculate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>