<?php
    $level = '../';
    require_once '../renderCode/renderTravelInfo.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../elements/head.php'; ?>
    <title>Hai Phong City - Cat Ba Island</title>
</head>

<body>
    <div id="preloader"></div>
    <?php require_once '../elements/header.php'; ?>
    <div class="peopleContact">
        <div class="overallTitleWrapper">
            <h1 class="overallTitleMain">
                Travels
            </h1>
        </div>
        <div class="peopleInformationWrapper">
            <?php echo $htmlTravels; ?>
        </div>
    </div>
    <?php require_once '../elements/script.php';?>
</body>

</html>