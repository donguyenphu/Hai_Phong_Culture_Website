<?php
require_once '../data/festivalInfo.php';
$sequence = ['CatBa.php', 'DoSon.php', 'HoaPhuongDo.php', 'LeChan.php', 'TrangTrinh.php'];
$currentUrl = $_SERVER["SCRIPT_NAME"];
$fileName = pathinfo($currentUrl, PATHINFO_BASENAME);
$keyFestivalInfo = 0;
foreach ($sequence as $key => $value) {
    if ($value == $fileName) {
        $keyFestivalInfo = $key;
        break;
    }
}
$htmlFestivals = '';
foreach ($festival as $key => $value) {
    if ($key == $keyFestivalInfo) {
        $htmlFestivals .= '<div class="titleIntroductionWrapper">
                                <h3 class="titleFoodMain">
                                    ' . $value['title'] . '
                                </h3>
                            </div>';
        $htmlFestivals .= '<div class="descriptionCuisinesWrapper">';
        // start
        $htmlFestivals .= '<div class="imageAndContentCuisineWrapper">
                                <div class="imgCNSwrapper">
                                    <img src="' . $level . $value['mainImage'] . '" class="imgCNSmain">
                                </div>
                                <div class="foodDetailWrapper">
                                    <p class="foodDetailMain"><strong>
                                        ' . $value['description'] . '
                                    </strong></p>
                                </div> 
                            </div>';

        if (isset($value['Notes'])) {
            $htmlFestivals .= '<div class="introduceIngredientWrapper">
                                    <h3 class="foodDetailMain">
                                        <strong>
                                            *'.$value['Notes'].'
                                        </strong>
                                    </h3>
                                </div>';
        }

        $htmlFestivals .= '<div class="ingredientWrapper">
                                <div class="introduceIngredientWrapper">
                                    <h3 class="introduceIngredientMain" style="color: #DDD;">
                                        Meaning:
                                    </h3>
                                </div>
                            <div class="detailIngredientWrapper">';

        foreach ($value['Meaning'] as $key3 => $value3) {
            $htmlFestivals .= '<li class="detailIngredientMain" id="detailIngredientMainList" style="text-indent: 50px;">'.($key3 + 1).'.'.$value3.'</li>';
        }
        
        $htmlFestivals .= '</div>';
        $htmlFestivals .= '</div>';

        $htmlFestivals .= '<div class="ingredientWrapper">
                                <div class="introduceIngredientWrapper">
                                    <h3 class="introduceIngredientMain" style="color: #DDD;">
                                        Key Activities:
                                    </h3>
                                </div>
                            <div class="detailIngredientWrapper">';

        foreach ($value['KeyActivities'] as $key3 => $value3) {
            $htmlFestivals .= '<li class="detailIngredientMain" id="detailIngredientMainList" style="text-indent: 50px;">'.($key3 + 1).'.'.$value3.'</li>';
        }

        $htmlFestivals .= '</div>';
        $htmlFestivals .= '</div>';

        

        $htmlFestivals .= '<div class="ingredientWrapper">
                                <div class="introduceIngredientWrapper">
                                    <h3 class="introduceIngredientMain" style="color: #DDD;">
                                        Here are some prominent images of the festival:
                                    </h3>
                                </div>
                            <div class="detailIngredientWrapper">';

        // image area start
        $htmlFestivals .= '<div class="eventsImagesWrapper" style="margin-top: 20px;">';

        foreach($value['ImagesFestival'] as $key3 => $value3) {
            $htmlFestivals .= '
                <div class="eventsOnlyImageWrapper" style="width: 25%;">
                    <img src="'.$value3.'" class="eventsImage">
                </div>
            ';
        }

        $htmlFestivals .= '</div>';
        // image area end

        // end
        $htmlFestivals .= '</div>';
    }
}
