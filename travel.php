<?php
    require_once './data/travelInfo.php';
    $htmlTravelStorage = '';
    foreach ($travelLocation as $key => $value) {
        $htmlTravelStorage.='<div class="allInfoTravelWrapper">';
        $htmlTravelStorage.='<div class="travelImageStorage">';
        foreach ($value['imageStorage'] as $key2 => $value2) {
            $htmlTravelStorage .=  '<div class="imageIntroduceTravel">
                                        <a href="'.$value2['link'].'"><img src="'.$value2['image'].'" class="imageIntroduceMain"></a>
                                    </div>';
        }
        $htmlTravelStorage.='</div>';
        $htmlTravelStorage .= '<div class="titleIntroductionWrapper">
                                    <a href="'.$value['descriptionPHP'].'" class="titleIntroductionMain">'.$value['title'].'</a>
                                </div>';
        $htmlTravelStorage.='</div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>Hai Phong City - Travel</title>
</head>
<body>
    <?php require_once './elements/header.php'; ?>
    <div class="peopleContact">
        <div class="overallTitleWrapper">
            <h1 class="overallTitleMain">
                Travel
            </h1>
        </div>
        <div class="peopleInformationWrapper">
            <?php
                echo $htmlTravelStorage;
            ?>
            <!-- INFO END -->
        </div>
    </div>
</body>
</html>