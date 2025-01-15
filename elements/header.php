<?php
    $curName = basename(__FILE__);
?>
<header>
    <!-- illustrated image of Hai Phong -->
    <!-- link section -->
    <div class="imageAndSidebarWrapper">
        <div class="imageHeaderWrapper">
            <img src="./image/hai-phong-la-thanh-pho-to-chuc-chinh-quyen-do-thi-thu-4.jpg" class="imageHeaderMain">
        </div>
        <div class="sidebarWrapper">
            <div class="logoWebsiteWrapper">
                <div class="fullBrand">
                    <div class="logo">
                        <img src="./image/HaiPhongLogo.png" class="logoMain">
                    </div>
                    <a href="index.html" class="brandName">Hai Phong</a>
                </div>
            </div>
            <div class="allSectionWrapper">
                <!--  Home,His, cul,travel, cui,peo&mus,con-->
                <div class="sectionLinkWrapper <?php echo $curName == 'index.php' ? 'active' : '';?>"><a href="index.php" class="sectionLinkMain">Home</a></div>
                <div class="sectionLinkWrapper <?php echo $curName == 'history.php' ? 'active' : '';?>"><a href="history.php" class="sectionLinkMain">History</a></div>
                <div class="sectionLinkWrapper <?php echo $curName == 'culture.php' ? 'active' : '';?>"><a href="culture.php" class="sectionLinkMain">Culture</a></div>
                <div class="sectionLinkWrapper <?php echo $curName == 'travel.php' ? 'active' : '';?>"><a href="travel.php" class="sectionLinkMain">Travel</a></div>
                <div class="sectionLinkWrapper <?php echo $curName == 'cuisine.php' ? 'active' : '';?>"><a href="cuisine.php" class="sectionLinkMain">Cuisines</a></div>
                <div class="sectionLinkWrapper <?php echo $curName == 'people.php' ? 'active' : '';?>"><a href="people.php" class="sectionLinkMain">People and Song</a></div>
                <div class="sectionLinkWrapper <?php echo $curName == 'contact.php' ? 'active' : '';?>"><a href="contact.php" class="sectionLinkMain">Contact</a></div>
            </div>
        </div>
    </div>
</header>