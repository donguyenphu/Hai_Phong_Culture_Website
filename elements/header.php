<?php
$currentUrl = $_SERVER["SCRIPT_NAME"];
$fileName = pathinfo($currentUrl, PATHINFO_BASENAME);

$menus = [
    ['name' => 'Home', 'link' => 'index.php'],
    ['name' => 'History', 'link' => 'history.php'],
    ['name' => 'Culture', 'link' => 'culture.php'],
    [
        'name' => 'Travel',
        'link' => 'travel.php',
        'child' => ['LanHa.php', 'CatBaIsland.php', 'DoSonBeach.php']
    ],
    [
        'name' => 'Cuisines', 
        'link' => 'cuisine.php',
        'child' => ['crabNoodleSoup.php', 'spicyBread.php', 'steamedRiceRoll.php', 'stirfriedBeanSprouts.php', 'coconutIceCream.php', 'FreshSpringRolls.php']
    ],
    [
        'name' => 'People and Song', 
        'link' => 'people.php',
        'child' => ['eventsPersonality.php']
    ],
    ['name' => 'Contact', 'link' => 'contact.php'],
];

$htmlMenu = '';
foreach ($menus as $key => $value) {
    $active = '';
    if ($fileName == $value['link'] || (isset($value['child']) && in_array($fileName, $value['child']))) {
        $active = 'active';
    }

    $htmlMenu .= '<div class="sectionLinkWrapper"><a href="' . $level . $value['link'] . '" class="sectionLinkMain ' . $active . '">' . $value['name'] . '</a></div>';
}

?>
<header>
    <!-- illustrated image of Hai Phong -->
    <!-- link section -->
    <div class="imageAndSidebarWrapper">
        <div class="imageHeaderWrapper">
            <img src="<?php echo $level; ?>image/hai-phong-la-thanh-pho-to-chuc-chinh-quyen-do-thi-thu-4.jpg" class="imageHeaderMain">
        </div>
        <div class="sidebarWrapper">
            <div class="logoWebsiteWrapper">
                <div class="fullBrand">
                    <div class="logo">
                        <img src="<?php echo $level; ?>image/HaiPhongLogo.png" class="logoMain">
                    </div>
                    <a href="index.html" class="brandName">Hai Phong</a>
                </div>
            </div>
            <div class="allSectionWrapper">
                <!--  Home,His, cul,travel, cui,peo&mus,con-->
                <?php echo $htmlMenu; ?>
            </div>
        </div>
    </div>
</header>