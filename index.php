<?php
$url = "https://api.covid19api.com/live/country/philippines";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
?>
<!DOCTYPE html>

<head>
    <title>Covid-19 Live Counts</title>

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <class="d-inline-block align-top alt="">Live Count Covid-19
        </a>
    </nav>

    <h2 style="text-align: center; margin-top:10px; margin-bottom:15px">Philippines</h2>

    <div class="card border-info mb-3" style="width: 19rem; margin: auto; float: none; margin-bottom:10px;">
        <img class="card-img-top" src="bendera.png" alt="Card image cap" style="height: 175px;">
        <div class="card-header" style="text-align: center; height: 60px;">
            <h3>Cases</h3>
        </div>
        <div class="card-box" style="text-align: center;">
            <p class="card-text"><h5>Confirmed :</h5></p>
            <p class="card-text"><h2> <?= $data[0] ["Confirmed"] ?></h2></p>
            <p class="card-text"><h5>Active :</h5></p>
            <p class="card-text"><h2> <?= $data[0] ["Active"]?></h2></p>
            <p class="card-text"><h5>Recovered :</h5></p>
            <p class="card-text"><h2><?= $data[0] ["Recovered"]?></h2></p>
            <p>Last Update : <br><?= $data[0] ["Date"] ?> </p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>