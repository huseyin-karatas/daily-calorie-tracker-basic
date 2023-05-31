<!DOCTYPE html>
<html lang="en">
<?php

$user_id = $_GET['user_id'];
$gender = $_GET['gender'];
$weight = $_GET['weight'];
$body_fat = $_GET['body-fat'];
$activity_level = $_GET['activity-level'];

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Calculated!
    </title>

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



    /* ÖNCE GET İLE ALDIĞIMIZ DEĞERLERİ DATABASE'E KAYDEDİYORUZ. */
    if ($gender == 'male') {
        /* Basal Metabolic Rate Calculation for male */
        if ($body_fat == 1014) {
            $BMR = $weight * 24;
        } elseif ($body_fat == 1520) {
            $BMR = $weight * 24 * 0.95;
        } elseif ($body_fat == 2128) {
            $BMR = $weight * 24 * 0.90;
        } elseif ($body_fat == '28up') {
            $BMR = $weight * 24 * 0.85;
        }

        /* BMR x ACTIVITY LEVEL = DAILY CALORIE NEED */
        if ($activity_level = 'very-light') {
            $daily_calorie_need = $BMR * 1.3;
        } elseif ($activity_level = 'light') {
            $daily_calorie_need = $BMR * 1.55;
        } elseif ($activity_level = 'moderate') {
            $daily_calorie_need = $BMR * 1.65;
        } elseif ($activity_level = 'heavy') {
            $daily_calorie_need = $BMR * 1.80;
        } elseif ($activity_level = 'very-heavy') {
            $daily_calorie_need = $BMR * 2;
        }
    } elseif ($gender == 'female') {
        /* Basal Metabolic Rate Calculation for female */
        if ($body_fat == 1418) {
            $BMR = $weight * 1 * 24 * 1;
        } elseif ($body_fat == 1928) {
            $BMR = $weight * 1 * 24 * 0.95;
        } elseif ($body_fat == 2938) {
            $BMR = $weight * 1 * 24 * 0.90;
        } elseif ($body_fat == '38up') {
            $BMR = $weight * 1 * 24 * 0.85;
        }

        /* BMR x ACTIVITY LEVEL = DAILY CALORIE NEED */
        if ($activity_level = 'very-light') {
            $daily_calorie_need = $BMR * 1.3;
        } elseif ($activity_level = 'light') {
            $daily_calorie_need = $BMR * 1.55;
        } elseif ($activity_level = 'moderate') {
            $daily_calorie_need = $BMR * 1.65;
        } elseif ($activity_level = 'heavy') {
            $daily_calorie_need = $BMR * 1.80;
        } elseif ($activity_level = 'very-heavy') {
            $daily_calorie_need = $BMR * 2;
        }
    }



    /*   
     $baglan = mysqli_connect('localhost', 'root', 'mysql', 'calculator');
    $insert_user_data_sql = "INSERT INTO users (user_id, daily_calorie_need, gender, weight, body_fat, activity_level VALUES ('$user_id', '$daily_calorie_need', '$gender', '$weight', '$body_fat', '$activity_level'";
    $save_user_data = mysqli_query($baglan, $insert_user_data_sql);
 */



    $save = $baglan->query("INSERT INTO users (user_id, daily_calorie_need, gender, weight, body_fat, activity_level VALUES ('$user_id', '$daily_calorie_need', '$gender', '$weight', '$body_fat', '$activity_level' ");
    ?>

</head>
<style>
 /*    body {
        background-image: url('images/ssscribble.svg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    } */
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
                <a href="howtouse" class="text-white  underly">
                    <i class="far fa fa-info-circle"></i>
                    How To Use
                </a>
            </div>
            <div class="col-sm-6 text-center">
                <a href="index" class="text-decoration-none text-white">
                    <h4 class="text-white">
                        <i class="fas fa-utensils fa-1x"></i> <br>
                        Daily Calorie Calculator
                    </h4>
                </a>
            </div>
            <div class="col-sm-3 d-flex justify-content-center align-items-center">
                <div>
                    <a href="help" class="text-white  underly">
                        <i class="far fa fa-question-circle"></i>
                        Help/FAQ
                    </a>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div>
                    <a href="foods-calories" class="text-white  underly">
                        <i class="fas fa-pizza-slice"></i>
                        Calorie Values
                    </a>
                </div>
            </div>
        </div>
       <!--  <div class="row">
            <div class="col-sm-6 offset-sm-3  rounded-bottom bg-dark text-white text-center p-2">
                <span style="font-size:17px;"> User id: <strong><?php /* $user_id  */?></strong></span>
            </div>
        </div> -->
    </div>

    <div class="container">



        <div class="row mt-3">
            <div class=" col-sm-8 offset-sm-2 p-1">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <?php
                        $daily_needs_sql = $baglan->query("SELECT * FROM users WHERE user_id = '$user_id'");
                        $daily_need_from_mysql = $daily_needs_sql->fetchAll(PDO::FETCH_ASSOC);

                        ?>
                        <div class="row mt-3">
                            <div class="col-sm-8 text-center offset-sm-2 alert alert-success shadow shadow-5-strong ">
                                <h1>
                                    <?= $daily_calorie_need ?>
                                    Calories
                                </h1>
                                <p>is your daily calorie need.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row ">
            <div class="col-sm-6 offset-sm-3 ">
                <div class="card shadow shadow-5-soft rounded-3 mt-2">
                    <div class="card-header bg-primary text-white">
                        <h5>Add Consumption</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input name="c_name" placeholder="Nutrition Name" class="form-control" type="text">
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="c_calorie" placeholder="Calorie value" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <button class="btn btn-success form-control" type="submit" value="submit" name="add_c">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <?php
        if (isset($_POST['add_c'])) {
            if (isset($_POST['c_name'])) {
                $name = $_POST['c_name'];
            }
            if (isset($_POST['c_calorie'])) {
                $calorie = $_POST['c_calorie'];
            }
            /* $insert_consumption_sql = "INSERT INTO consumptions (user_id, daily_need , name, calorie) VALUES ('$user_id', '$daily_calorie_need', '$name', '$calorie')";
            $insert_consumption = mysqli_query($baglan, $insert_consumption_sql) or die("Tüketi: $insert_consumption_sql"); */
            $c_add = $baglan->query("INSERT INTO consumptions (user_id, daily_need , name, calorie) VALUES ('$user_id', '$daily_calorie_need', '$name', '$calorie') ");

        ?>

            <div class="row  mt-5 mb-5">
                <div class="col-sm-8  p-0 card shadow shadow-5-soft rounded-3" style="height:500px; overflow-x:hidden; overflow-y:scroll;">
                    <div class="card-header">
                        <h5>
                            Your Consumptions
                        </h5>
                    </div>
                    <div class="card-body card">
                        <!-- Eklenen şeyler listelenecek -->
                        <?php
                        $consumptions_sql = $baglan->query("SELECT * FROM consumptions WHERE user_id = '$user_id' ");
                        $consumptions = $consumptions_sql->fetchAll(PDO::FETCH_ASSOC);  ?>


                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Food Names</th>
                                    <th scope="col">Food Calories</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <? foreach ($consumptions as $list) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $list['name'] ?>
                                        </td>
                                        <td>
                                            <?= $list['calorie'] ?>
                                        </td>
                                    </tr>
                                <?
                                }
                                ?>
                                <tr class="table-active ">
                                    <td>
                                        <strong>Total Calorie Intake:</strong>
                                    </td>
                                    <td>
                                        <?php
                                        $total_consumption_query = $baglan->query("SELECT SUM(calorie) as totalConsumptions FROM consumptions WHERE user_id = '$user_id'  ");
                                        $total_consumption = $total_consumption_query->fetch(PDO::FETCH_ASSOC);
                                        $total_co = $total_consumption['totalConsumptions'];
                                        ?>
                                        <strong><?= $total_co ?></strong>

                                    </td>
                                </tr>



                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="col-sm-4  d-flex justify-content-center   ">
                    <div class="shadow shadow-5-soft rounded-3 alert alert-primary p-5 text-center d-flex align-items-center" style="height:300px; overflow-x:hidden; overflow-y:hidden;">
                        <div>
                            <?php
                            $remained_query = $baglan->query("SELECT * FROM consumptions WHERE user_id = '$user_id' LIMIT 1");
                            $remained = $remained_query->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($remained as $remianed_c) {
                                $users_saved_need = $remianed_c['daily_need'];

                                $total_consumption_query = $baglan->query("SELECT SUM(calorie) as totalConsumptions FROM consumptions WHERE user_id = '$user_id'  ");
                                $total_consumption = $total_consumption_query->fetch(PDO::FETCH_ASSOC);
                                $total_co = $total_consumption['totalConsumptions'];
                                /*  echo "total co: " . $total_co;
                        echo "<br> saved need: " . $users_saved_need; */

                                $remained_need_calculated = $users_saved_need -  $total_co;

                                if ((isset($users_saved_need)) && isset($total_co) && $users_saved_need >= $total_co) { ?>

                                    <h1>
                                        <?= $remained_need_calculated ?> Calories
                                    </h1>
                                    <p>is your daily remained need</p>

                                <? } elseif ((isset($users_saved_need)) && isset($total_co) && $users_saved_need == $total_co) { ?>
                                    <h1>0 Calories</h1>
                                    <p>is your daily remained need</p>
                                <? } elseif ((isset($users_saved_need)) && isset($total_co) && $total_co >= $users_saved_need) {
                                ?>
                                    You took
                                    <h1><?php echo $total_co - $users_saved_need; ?> Extra Calories</h1>
                                    <p>than your daily need</p>
                                <? }
                                ?>

                            <?

                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        <?
        }
        ?>


    </div>

</body>

</html>