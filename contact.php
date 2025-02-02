<?php
$level = './';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './elements/head.php'; ?>
    <title>Hai Phong City - Contact</title>
</head>

<body>
    <div id="preloader"></div>
    <?php require_once './elements/header.php'; ?>
    <div class="containerContact">
        <div class="contactInformationWrapper">
            <div class="contactIntroductionWrapper">
                <h1 class="contactIntroductionMain">Contact me</h1>
            </div>
            <div class="wayToContactWrapper">
                <div class="socialWrapper">
                    <div class="socialItemWrapper">
                        <a href="https://www.facebook.com/bestofsuy/" id="Facebook" class="social"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="socialItemWrapper">
                        <a href="https://twitter.com/" id="X" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
                    </div>
                    <div class="socialItemWrapper">
                        <a href="https://www.instagram.com/phujk32/" id="Instagram" class="social"><i class="fa-brands fa-square-instagram"></i></a>
                    </div>
                    <div class="socialItemWrapper">
                        <a href="https://www.linkedin.com/" id="LinkedIn" class="social"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <div class="socialItemWrapper">
                        <a href="https://github.com/donguyenphu" id="Github" class="social"><i class="fa-brands fa-square-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="locationAndAddressWrapper">
                <div class="addressAndPhoneWrapper">
                    <!-- <i class="fa-solid fa-map-location-dot" id="map"></i> -->
                    <div class="mapWrapper">
                        <i class="fa-solid fa-map-location-dot" id="map"></i>
                    </div>
                    <div class="LAdetailWrapper">
                        <h1 class="LAdetailMain">Address: Number 64/96 Le Ich Moc, Thuy Nguyen District, Hai Phong City</h1>
                    </div>
                </div>
                <div class="addressAndPhoneWrapper">
                    <!-- <i class="fa-solid fa-phone-volume" id="phone"></i> -->
                    <div class="phoneWrapper">
                        <i class="fa-solid fa-phone-volume" id="phone"></i>
                    </div>
                    <div class="LAdetailWrapper">
                        <h1 class="LAdetailMain">Phone: (+84) 849566286</h1>
                    </div>
                </div>
                <div class="addressAndPhoneWrapper">
                    <!-- <i class="fa-solid fa-phone-volume" id="phone"></i> -->
                    <div class="gmailWrapper">
                        <i class="fa-solid fa-square-envelope" id="Gmail"></i>
                    </div>
                    <div class="LAdetailWrapper">
                        <h1 class="LAdetailMain">Gmail: donguyenphu022008@gmail.com</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="googleMapWrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.891451853306!2d106.67795077417374!3d20.91668638070472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bfbc27bc233%3A0x89f213ed1023838c!2zSGFtIExvbmcgX3Ro4buLIHRy4bqlbiBuw7ppIMSRw6hvX2h1eeG7h24gdGjhu6d5IG5ndXnDqm5fdHAgaOG6o2kgcGjDsm5n!5e0!3m2!1svi!2s!4v1733414497134!5m2!1svi!2s" width="" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="googleMap"></iframe>
    </div>
    <script src="./loader/loader.js"></script>
</body>

</html>