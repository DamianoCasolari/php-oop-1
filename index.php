<?php

include __DIR__ . './db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!--link google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!--link font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"
        defer></script>
    <!-- link css  -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="my_container">
        <div id="app" class="d-flex flex-wrap">

            <div class="card my_card bg-dark text-light">
                <div class="card-body">

                    <h5 class="card-title">
                        <?= $Movies[0]->title ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted ">
                        <?= $Movies[0]->year ?>
                    </h6>
                    <p class="card-text">
                        <?= $Movies[0]->description ?>
                    </p>
                    <p class="card-text">
                        <?= $Movies[0]->country ?>
                    </p>
                </div>
            </div>
            <div class="card my_card bg-dark text-light">
                <div class="card-body">

                    <h5 class="card-title">
                        <?= $Movies[1]->title ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted ">
                        <?= $Movies[1]->year ?>
                    </h6>
                    <p class="card-text">
                        <?= $Movies[1]->description ?>
                    </p>
                    <p class="card-text">
                        <?= $Movies[1]->country ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- link axios  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js"
        integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link Vue.js  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- link javascript  -->
    <script src="./assets/js/app.js"></script>
</body>

</html>