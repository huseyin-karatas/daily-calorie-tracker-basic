<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
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
                    <i class="far fa fa-question-circle"></i>
                    Help
                </h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-8 offset-sm-2">
                <div class="card shadow shadow-3-soft rounded-3">
                    <div class="card-header">
                        <h3>Frequently Asked Questions (FAQ)</h3>
                    </div>
                    <div class="card-body">
                        <h5>
                            <mark>
                                Why do I need to know my daily calorie needs?
                            </mark>
                        </h5>
                        <p>
                            Knowing your daily calorie needs helps you maintain a healthy and balanced diet. It ensures that you consume the right amount of calories to meet your body's energy requirements and avoid deficiencies or excesses.
                        </p>
                        <hr>
                        <h5>
                            <mark>
                                If I exceed my daily calorie needs, what would it be?
                            </mark>
                        </h5>
                        <p>
                            Consuming more calories than your daily needs can lead to weight gain over time. The excess calories are stored as fat in your body, which can contribute to various health issues such as obesity and increased risk of chronic diseases.
                        </p>

                        <hr>
                        <h5>
                            <mark>
                                If I don't meet my daily calorie needs, what would it be?
                            </mark>
                        </h5>
                        <p>
                            Failing to meet your daily calorie needs consistently can lead to insufficient energy intake. This can result in feelings of fatigue, weakness, nutritional deficiencies, and hindered bodily functions.
                        </p>

                        <hr>
                        <h5>
                            <mark>
                                How can I know calorie value of the nutrition?
                            </mark>
                        </h5>
                        <p>
                            In our <a href="foods-calories">Calorie Values</a> page, you can find the nutrition’s value.
                        </p>
                        <hr>
                        <h5>
                            <mark>
                                Is the application paid?
                            </mark>
                        </h5>
                        <p>
                            No, it’s completely free.
                        </p>

                        <hr>
                        <h5>
                            <mark>
                                How can I calculate my daily calorie needs?
                            </mark>
                        </h5>
                        <p>
                            You can find the calculator on the homepage.
                        </p>

                        <hr>
                        <h5>
                            <mark>
                                Can my daily calorie needs change over time?
                            </mark>
                        </h5>
                        <p>
                            Yes, your daily calorie needs can change depending on factors such as weight loss or gain, changes in physical activity levels, and aging. It's important to reassess your needs periodically.
                        </p>

                        <hr>
                        <h5>
                            <mark>
                                How can I prevent exceeding my daily calorie needs?
                            </mark>
                        </h5>
                        <p>
                            To prevent exceeding your daily calorie needs, it's important to be mindful of portion sizes, make healthier food choices, and be aware of the calorie content of the foods you consume. Tracking your intake using our website can help you stay within your target range.
                        </p>

                        <hr>
                        <h5>
                            <mark>
                                Can I rely solely on calorie counting to achieve my health goals?
                            </mark>
                        </h5>
                        <p>
                            Calorie counting can be a useful tool, but it's not the sole determinant of health. It's important to also focus on other aspects such as macronutrient balance, portion sizes, regular physical activity, and overall lifestyle habits to achieve your health goals.
                        </p>

                        <hr>
                        <h5>
                            <mark>
                                How can I use the website to track my progress effectively?
                            </mark>
                        </h5>
                        <p>
                            To track your progress effectively, make sure to enter your food intake accurately and consistently. Regularly review your tracking data, monitor changes in your weight and body measurements, and adjust your calorie intake or activity level as needed to align with your goals.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>