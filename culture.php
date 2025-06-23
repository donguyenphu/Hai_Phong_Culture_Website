<?php
    $level = './';
    require_once './data/festivalInfo.php';
    $htmlFestivalStorage = '';
    foreach ($festival as $key => $value) {
        $htmlFestivalStorage .='<div class="titleIntroductionWrapper">
                            <a href="'.$value['linkTitle'].'" class="titleFoodMain">
                                '.$value['title'].'
                            </a>
                        </div>'; 
        $htmlFestivalStorage .= '<div class="allInfoTravelWrapper">';

        $htmlFestivalStorage .= '<div class="imageAndContentCuisineWrapper">
                            <div class="imgCNSwrapper">
                                <img src="'.$value['mainImage'].'" class="imgCNSmain">
                            </div>
                            <div class="foodDetailWrapper">
                                <p class="foodDetailMain cuisine">
                                    '.$value['description'].'
                                </p>
                            </div> 
                        </div>';
        $htmlFestivalStorage .= '</div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>Hai Phong City - Festival</title>
</head>
<body>
    <div id="preloader"></div>
    <?php require_once './elements/header.php'; ?>
    <div class="peopleContact">
        <div class="overallTitleWrapper">
            <h1 class="overallTitleMain">
                Festivals
            </h1>
        </div>
        <div class="peopleInformationWrapper">
            <?php
                echo $htmlFestivalStorage;
            ?>
        </div>
    </div>
    <?php require_once './elements/script.php';?>
</body>
</html>