<?php

$level = './';
require_once './data/home.php';
$html = '';
foreach ($data as $key => $value) {
    $html .= '<div class="point">
                    <div>
                        <div class="infoWrapper">
                            <a class="infoMain" href="./' . $value['link'] . '">' . $value['title'] . '</a>
                        </div>
                        <div class="imageWrapper">
                            <img src="./image/' . $value['image'] . '" class="imageMain">
                        </div>
                    </div>
                </div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './elements/head.php'; ?>
    <title>Hai Phong City - Home</title>
</head>

<body>
    <div id="preloader"></div>
    <?php require_once './elements/header.php';
    ?>
    <div class="container">
        <div class="timeline">
            <!-- 7 elements -->
            <?php
            echo $html;
            ?>
        </div>
    </div>
    <?php require_once './elements/script.php';?>
</body>

</html>