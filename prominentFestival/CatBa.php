<?php
$level = '../';
require_once '../renderCode/renderFestivalInfo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../elements/head.php'; ?>
    <title>Hai Phong City - Festivals</title>
</head>
<body>
    <div id="preloader"></div>
    <?php require_once '../elements/header.php'; ?>
    <div class="peopleContact">
        <div class="overallTitleWrapper">
            <h1 class="overallTitleMain">
                Festivals
            </h1>
        </div>
        <div class="peopleInformationWrapper">
            <?php
            echo $htmlFestivals;
            ?>
            <!-- overall view of cuisines -->
        </div>
    </div>
    <div class="popUpWrapper">
        <div class="popUpImageOnlyWrapper">
            <span class="close"><i class="fa-solid fa-xmark"></i></span>
            <img src="" class="popUpImageOnlyMain">
        </div>
    </div>
    <?php require_once '../elements/script.php'; ?>
</body>
</html>