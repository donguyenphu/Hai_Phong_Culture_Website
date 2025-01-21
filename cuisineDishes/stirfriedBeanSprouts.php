<?php
    $level = '../';
    $keyCuisineInfo = 3;
    require_once '../data/cuisinesInfo.php';
    $htmlCuisines = '';
    $htmlOverallCuisines = '';
    foreach($dishesInformation as $key => $value) {
        if ($key == $keyCuisineInfo) {
            $htmlCuisines .='<div class="titleIntroductionWrapper">
                                <a href="'.$value['linkTitle'].'" class="titleFoodMain">
                                    '.$value['title'].'
                                </a>
                            </div>'; 
            $htmlCuisines .= '<div class="descriptionCuisinesWrapper">';
            
            $htmlCuisines .= '<div class="imageAndContentCuisineWrapper">
                                <div class="imgCNSwrapper">
                                    <img src="'.$level.$value['mainImage'].'" class="imgCNSmain">
                                </div>
                                <div class="foodDetailWrapper">
                                    <p class="foodDetailMain">
                                        '.$value['description'].'
                                    </p>
                                </div> 
                            </div>';
            $htmlCuisines .= '<div class="locationWrapper">';
            foreach ($value['GoogleMapLocation'] as $key2 => $value2) {
                $htmlCuisines.= '<div class="locationDetailWrapper">
                                    <iframe src="'.$value2['Frame'].'" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="BMC"></iframe>
                                    <div class="describeLocationWrapper">
                                        <h2 class="describeLocationMain">
                                            '.$value2['LocationName'].'
                                        </h2>
                                    </div>
                                </div>';
            }
            $htmlCuisines .= '</div>';
            $htmlCuisines .= '<div class="ingredientWrapper">
                                <div class="introduceIngredientWrapper">
                                    <h1 class="introduceIngredientMain">
                                        Main ingredient:
                                    </h1>
                                </div>
                                <div class="detailIngredientWrapper">';

            foreach ($value['mainIngredients'] as $key3 => $value3) {
                $htmlCuisines .='<ul class="detailIngredientMain" id="detailIngredientMainList">
                                    '.($key3+1).'.'.$value3['nameIngredient'];
                foreach ($value3['moreInfo'] as $key4 => $value4) {
                    $htmlCuisines .= '<li class="describeIngredient">';
                    $htmlCuisines .= $value4;
                    $htmlCuisines .= '</li>';
                }
                $htmlCuisines .= '</ul>';
            } 
            $htmlCuisines .= '</div>';
            $htmlCuisines .= '</div>';
            $htmlCuisines .= '</div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../elements/head.php'; ?>
    <title>Hai Phong City - Cuisines</title>
</head>
<body>
    <?php require_once '../elements/header.php'; ?>
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
            <!-- overall view of cuisines -->
        </div> 
    </div>
</body>
</html>