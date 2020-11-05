<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
    <title>MMS Exchange</title>
    <link rel="icon" href="img/logo.svg" type="image/icon type">

    <meta name="title" content="MMS Exchange">
    <meta name="description" content="Testing for Our SWD 7 Student ....">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mms-it.com/">
    <meta property="og:title" content="MMS Exchange">
    <meta property="og:description" content="Testing for Our SWD 7 Student ....">
    <meta property="og:image" content="img/logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mms-it.com/">
    <meta property="twitter:title" content="MMS Exchange">
    <meta property="twitter:description" content="Testing for Our SWD 7 Student ....">
    <meta property="twitter:image" content="img/logo.png">

    <title>Exchange Calculator</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="vendor/animate_it/animate.min.css">
    <link rel="stylesheet" href="css/night-mode.css">

</head>
<body>

<section class="app animate__animated animate__slideInDown">
    <div class="output">
        <div class="brand-container">
            <img src="img/logo.svg" class="logo" alt="">
            <p class="brand">MMEx</p>
        </div>
        <div class="result-container">
            <p class="result" id="result">0.00</p>
        </div>
    </div>
    <div class="divider"></div>
    <form class="calc" id="calc">
        <div class="input-container container">
            <label>Input</label>
            <input type="number" class="input" id="input" min="1" autofocus required>
        </div>
        <div class="from-container container">
            <label>From</label>
            <select id="from" class="from" onchange="test()" required>
                <option value="" selected>Select Currency</option>
            </select>
        </div>
        <div class="to-container container">
            <label>To</label>
            <select id="to" class="to" required>

            </select>
        </div>
        <div class="calculate-container container">
            <button class="calc-btn" id="calcBtn">Calculate</button>
        </div>
    </form>
    <div class="history-container ">
        <table class="history">
            <thead>
            <tr>
                <th>Date</th>
                <th>From</th>
                <th>To</th>
                <th>Result</th>
            </tr>
            </thead>
            <tbody id="historyList">

            </tbody>
        </table>
    </div>
</section>

<button class="mode-change animate__animated animate__slideInUp" onclick="changeMode()">
    <i class="fas fa-moon" id="modeIcon"></i>
</button>

<script>

    <?php

    $x = file_get_contents("https://forex.cbm.gov.mm/api/latest");


    ?>

    let data = <?php echo $x; ?>;



</script>
<script src="js/app.js"></script>
</body>
</html>

