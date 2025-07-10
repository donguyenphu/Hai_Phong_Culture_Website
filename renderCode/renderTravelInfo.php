<?php
    require_once '../data/cuisinesInfo.php';
    require_once '../data/travelInfo.php';
    $sequence = ['CatBaIsland.php', 'DoSonBeach.php', 'LanHa.php'];
    $currentUrl = $_SERVER["SCRIPT_NAME"];
    $fileName = pathinfo($currentUrl, PATHINFO_BASENAME);
    $keyTravelsInfo = 0;
    foreach ($sequence as $key => $value) {
        if ($value == $fileName) {
            $keyTravelsInfo = $key;
            break;
        }
    }
    $htmlTravels = '';
    foreach($travelLocation as $key => $value) {
        if ($key == $keyTravelsInfo) {
            $htmlTravels .= '
                <div class="titleIntroductionWrapper">
                    <h2 class="titleFoodMain">
                        '.$value['title'].'
                    </h2>
                </div>
            ';
            /// Do Son Beach Wrapper start
            $htmlTravels .= '<div id="DoSonBeachWrapper">';
            $htmlTravels .= '
                <div class="locationTitleWrapper">
                    <h3 class="locationTitleMain" style = "display: inline-block;">
                        Location:
                    </h3>
                    <p class="locationDetailMain">'.$value['Address'].'</p>
                </div>
                <div id="googleMapWrapperDoSon">
                    <iframe src="'.$value['GoogleMap'].'" width="600" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="googleMapMainDoSon"></iframe>
                </div>
            ';
            /// Travel time
            $htmlTravels .= '
                <div class="locationTitleWrapper" style = "display: block;">
                    <h3 class="locationTitleMain">
                        Time to travel:
                    </h3>
                    <p class="locationDetailMain">';
            foreach ($value['TimeToTravel'] as $key2 => $value2) {
                $htmlTravels .= '+ '.$value2.'</br>';
            }
            $htmlTravels .= '
                    </p>
                </div>
            ';
            /// Weather
            $htmlTravels .= '
                <div class="locationTitleWrapper" style = "display: inline-block;">
                    <h3 class="locationTitleMain">
                        Weather:
                    </h3>
                    <p class="locationDetailMain">';
            foreach ($value['Weather'] as $key2 => $value2) {
                $htmlTravels .= '+ '.$value2.'</br>';
            }
            $htmlTravels .= '
                    </p>
                </div>
            ';
            /// Costs
            $htmlTravels .= '
                <div class="locationTitleWrapper" style = "display: inline-block;">
                    <h3 class="locationTitleMain">
                        Costs & Entrance fees:
                    </h3>
                    <p class="locationDetailMain">';
            foreach ($value['Costs'] as $key2 => $value2) {
                $htmlTravels .= '+ '.$value2.'</br>';
            }
            $htmlTravels .= '
                    </p>
                </div>
            ';
            /// Activities Time
            $htmlTravels .= '
                <div class="locationTitleWrapper" style = "display: inline-block;">
                    <h3 class="locationTitleMain">
                        Time for activities:
                    </h3>
                    <p class="locationDetailMain">';
            foreach ($value['ActivitiesTime'] as $key2 => $value2) {
                $htmlTravels .= '+ '.$value2.'</br>';
            }
            $htmlTravels .= '
                    </p>
                </div>
            ';
            /// Must-do Activities
            $htmlTravels .= '
                <div class="locationTitleWrapper" style = "display: inline-block;">
                    <h3 class="locationTitleMain">
                        Must-do activities:
                    </h3>
                    <p class="locationDetailMain">';
            foreach ($value['Activities'] as $key2 => $value2) {
                $htmlTravels .= '+ '.$value2.'</br>';
            }
            $htmlTravels .= '
                    </p>
                </div>
            ';
            $htmlTravels .= '<div class="locationTitleWrapper">
                                <h3 class="locationTitleMain">
                                    Cuisines:
                                </h3>
                            </div>';
            $htmlTravels .= '</div>';
            /// DSB end
            foreach ($value['cuisineLists'] as $key2 => $value2) {
                foreach($dishesInformation as $key3 => $value3) {
                    if ($value2 == $value3['title']) {
                        $htmlTravels .= '
                            <div class="allInfoTravelWrapper">
                                <div class="imageAndContentCuisineWrapper">
                                    <div class="imgCNSwrapper">
                                        <img src="../'.$value3['mainImage'].'" class="imgCNSmain">
                                    </div>
                                    <div class="foodDetailWrapper">
                                        <div class="infoDoSonWrapper">
                                            <a href = "../cuisineDishes/'.$value3['linkTitle'].'">
                                            <h3 class="infoDoSonMain">'.$value3['title'].'</h3>
                                            </a>
                                        </div>
                                        <p class="foodDetailMain cuisine">
                                            '.$value3['description'].'
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        ';
                    }
                }
            }
        }
    }
?>