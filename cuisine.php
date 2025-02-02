<?php
    $level = './';
    require_once './data/cuisinesInfo.php';
    $htmlCuisines = '';
    $htmlOverallCuisines = '';
    foreach ($dishesInformation as $key => $value) {
        $htmlOverallCuisines .='<div class="titleIntroductionWrapper">
                            <a href="'.'./cuisineDishes/'.$value['linkTitle'].'" class="titleFoodMain">
                                '.$value['title'].'
                            </a>
                        </div>'; 
        $htmlOverallCuisines .= '<div class="allInfoTravelWrapper">';

        $htmlOverallCuisines .= '<div class="imageAndContentCuisineWrapper">
                            <div class="imgCNSwrapper">
                                <img src="'.$value['mainImage'].'" class="imgCNSmain">
                            </div>
                            <div class="foodDetailWrapper">
                                <p class="foodDetailMain cuisine">
                                    '.$value['description'].'
                                </p>
                            </div> 
                        </div>';
        $htmlOverallCuisines .= '</div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>Hai Phong City - Cuisines</title>
</head>
<body>
    <div id="preloader"></div>
    <?php require_once './elements/header.php'; ?>
    <div class="peopleContact">
        <div class="overallTitleWrapper">
            <h1 class="overallTitleMain">
                Cuisines
            </h1>
        </div>
        <div class="peopleInformationWrapper">
            <?php
                echo $htmlOverallCuisines; 
            ?>
        </div> 
    </div>
    <script src="./loader/loader.js"></script>
</body>
</html>