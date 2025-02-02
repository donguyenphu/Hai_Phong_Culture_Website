<?php
$level = '../';
require_once '../renderCode/renderCuisinesInfo.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../elements/head.php'; ?>
    <title>Hai Phong City - Cuisines</title>
</head>

<body>
    <div id="preloader"></div>
    <?php require_once '../elements/header.php'; ?>
    <div class="peopleContact">
        <div class="overallTitleWrapper">
            <h1 class="overallTitleMain">
                Cuisines
            </h1>
        </div>
        <div class="peopleInformationWrapper">
            <?php
            echo $htmlCuisines;
            ?>
            <!-- overall view of cuisines -->
        </div>
    </div>
    <script src="../loader/loader.js"></script>
</body>

</html>