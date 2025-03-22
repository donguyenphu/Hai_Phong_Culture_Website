<?php
$level = '../';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../elements/head.php'; ?>
    <title>Hai Phong City - Cat Ba Island</title>
</head>

<body>
    <div id="preloader"></div>
    <?php require_once '../elements/header.php'; ?>
    <div class="peopleContact">
        <div class="peopleInformationWrapper">
            <div class="titleIntroductionWrapper">
                <h2 class="titleFoodMain">
                    Cat Ba Island
                </h2>
            </div>
            <div id="DoSonBeachWrapper">
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        Location:
                    </h3>
                    <p class="locationDetailMain">Hai Phong city, Vietnam</p>
                </div>
                <div id="googleMapWrapperDoSon">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29858.147847747812!2d106.77530875644953!3d20.699319529182965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a6c608b8feabd%3A0x5bf0cbf27e7679c2!2zQsOjaSBiaeG7g24gxJDhu5MgU8ahbg!5e0!3m2!1svi!2s!4v1735183178118!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="googleMapMainDoSon"></iframe>
                </div>
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain">
                        Time to travel:
                    </h3>
                    <p class="locationDetailMain">From April to October</p>
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
                        <img src="<?php echo $level; ?>image/horseShoeCrab.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Cat Ba horseshoe crab</h3>
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
                        <img src="<?php echo $level; ?>image/CatBaGrouper.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Cat Ba grouper</h3>
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
                        <img src="<?php echo $level; ?>image/CatBaGeoduck.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Cat Ba geoduck</h3>
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
                        <img src="<?php echo $level; ?>image/CatBaMantisShrimp.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Cat Ba mantis shrimp</h3>
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
                        <img src="<?php echo $level; ?>image/CatBaLobster.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Cat Ba lobster</h3>
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
                        <img src="<?php echo $level; ?>image/vermicelliWithShrimp.jpg" class="imgCNSmain">
                    </div>
                    <div class="foodDetailWrapper">
                        <div class="infoDoSonWrapper">
                            <h3 class="infoDoSonMain">Cat Ba vermicelli with shrimp</h3>
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
    <?php require_once '../elements/script.php';?>
</body>

</html>