<?php
$level = '../';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../elements/head.php'; ?>
    <title>Hai Phong City - Do Son Beach</title>
</head>

<body>
    <?php require_once '../elements/header.php'; ?>
    <div class="peopleContact">
        <div class="peopleInformationWrapper">
            <div class="titleIntroductionWrapper">
                <h2 class="titleFoodMain">
                    Do Son beach
                </h2>
            </div>
            <div id="DoSonBeachWrapper">
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        Location:
                    </h3>
                    <p class="locationDetailMain">Do Son Tourist Area, Van Huong, Do Son, Hai Phong, Vietnam</p>
                </div>
                <div id="googleMapWrapperDoSon">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29858.147847747812!2d106.77530875644953!3d20.699319529182965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a6c608b8feabd%3A0x5bf0cbf27e7679c2!2zQsOjaSBiaeG7g24gxJDhu5MgU8ahbg!5e0!3m2!1svi!2s!4v1735183178118!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="googleMapMainDoSon"></iframe>
                </div>
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        Time to travel:
                    </h3>
                    <p class="locationDetailMain">May, June, July</p>
                </div>
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        Cuisines:
                    </h3>
                </div>
            </div>
            <div class="allInfoTravelWrapper">
                <div class="imageAndContentCuisineWrapper">
                    <div class="imgCNSwrapper">
                        <img src="<?php echo $level; ?>image/NomSuaDoSon.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Do Son jellyfish salad</h3>
                        </div>
                        <p class="foodDetailMain cuisine">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed explicabo itaque ipsam. Quos reprehenderit distinctio maxime quia! Nulla, minima?
                        </p>
                    </div> 
                </div>
            </div>
            <div class="allInfoTravelWrapper">
                <div class="imageAndContentCuisineWrapper">
                    <div class="imgCNSwrapper">
                        <img src="<?php echo $level; ?>image/LauCuaDongNemCuaBe.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Do Son crab hotpot, crab spring rolls</h3>
                        </div>
                        <p class="foodDetailMain cuisine">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed explicabo itaque ipsam. Quos reprehenderit distinctio maxime quia! Nulla, minima?
                        </p>
                    </div> 
                </div>
            </div>
            <div class="allInfoTravelWrapper">
                <div class="imageAndContentCuisineWrapper">
                    <div class="imgCNSwrapper">
                        <img src="<?php echo $level; ?>image/CaMoiMotNangDoSon.jpeg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Do Son sun-dried anchovies</h3>
                        </div>
                        <p class="foodDetailMain cuisine">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed explicabo itaque ipsam. Quos reprehenderit distinctio maxime quia! Nulla, minima?
                        </p>
                    </div> 
                </div>
            </div>
            <div class="allInfoTravelWrapper">
                <div class="imageAndContentCuisineWrapper">
                    <div class="imgCNSwrapper">
                        <img src="<?php echo $level; ?>image/HaiSanDoSon.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Do Son fresh seafood</h3>
                        </div>
                        <p class="foodDetailMain cuisine">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed explicabo itaque ipsam. Quos reprehenderit distinctio maxime quia! Nulla, minima?
                        </p>
                    </div> 
                </div>
            </div>
            <!-- leave the original name below each cuisine -->
        </div>
    </div>
</body>

</html>