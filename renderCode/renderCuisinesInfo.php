<?php
    require_once '../data/cuisinesInfo.php';
    $sequence = ['crabNoodleSoup.php', 'coconutIceCream.php', 'spicyBread.php', 'stirfriedBeanSprouts.php', 'steamedRiceRoll.php'];
    $currentUrl = $_SERVER["SCRIPT_NAME"];
    $fileName = pathinfo($currentUrl, PATHINFO_BASENAME);
    $keyCuisineInfo = 0;
    foreach ($sequence as $key => $value) {
        if ($value == $fileName) {
            $keyCuisineInfo = $key;
            break;
        }
    }
    $htmlCuisines = '';
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
            // location
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
            // ingredient
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
            // end Ingredient Wrapper
            if (isset($value['video'])) {
                $htmlCuisines .= '<div class="introduceIngredientWrapper">
                                    <h1 class="introduceIngredientMain">
                                        Eating the cuisine:
                                    </h1>
                                </div>';
                $htmlCuisines .= '<div class = "videosWrapper">';
                foreach ($value['video'] as $value2) {
                    $htmlCuisines .= '<div class = "onlyVideoWrapper">';
                    $htmlCuisines .= '<video controls = "" class = "onlyVideoMain" src="'.$value2.'" type="video/mp4" src="'.$value2.'" type="video/mp4"></video>';
                    $htmlCuisines .= '</div>';
                }
                $htmlCuisines .= '</div>';   
            }
            // end
            $htmlCuisines .= '</div>';
        }
    }
?>