<?php
require_once("database/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/user_nav2.css">
    <title>home page</title>

</head>

<body>
    <nav class="sidebar close navbar">

        <header>
            <div class="image-text">
                <span class="image">
                    <img src=" img/logo.png" alt="">
                </span>

                <div class="text logo-text">

                    <span class="peofession">Get City Jobs</span>

                    <span class="profession" style="font-size:15px">Balaghat</span>

                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <!-- <i class='bx bx-search icon'></i> -->
                    <!-- <input type="text" placeholder="Search Jobs..."> -->
                    <a href="account.php" id="sidebar-for-home-icon">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">MY PROFILE</span>
                    </a>
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="home_page.php" id="myButton" onclick="myFunction()">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">HOME</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="view_jobs.php">
                            <i class='bx bx-detail icon'></i>
                            <span class="text nav-text">JOB LIST</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="post_jobs.php">
                            <i class='bx bx-send icon'></i>
                            <span class="text nav-text">POST JOBS</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="aboutus.php">
                            <i class='bx bxs-user-detail icon'></i>
                            <span class="text nav-text">ABOUT US</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="contactus.php">
                            <i class='bx bx-mail-send icon'></i>
                            <span class="text nav-text">CONTACT US </span>
                        </a>
                    </li>

                    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    <div id="google_translate_element"></div>
                    <style>
                        /* Hide language dropdown */
                        .goog-te-combo {
                            display: none;
                        }

                        /* Hide Google Translate attribution */
                        .goog-logo-link {
                            display: none !important;
                        }

                        .goog-te-gadget {
                            display: none !important;
                        }

                        .VIpgJd-ZVi9od-l4eHX-hSRGPd {
                            display: none;
                        }
                    </style>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en',
                                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
                                autoDisplay: false,
                                includedLanguages: 'hi,mr',
                                gaTrack: true,
                                gaId: 'YOUR_API_KEY',
                                googleAttribution: ''
                            }, 'google_translate_element');

                            // Add event listener to Hindi language hyperlink
                            var hindiLink = document.getElementById('hindi-link');
                            hindiLink.addEventListener('click', function() {
                                var langSelect = document.querySelector('select.goog-te-combo');
                                langSelect.value = 'hi';
                                langSelect.dispatchEvent(new Event('change'));
                            });

                            var marathiLink = document.getElementById('marathi-link');
                            marathiLink.addEventListener('click', function() {
                                var langSelect = document.querySelector('select.goog-te-combo');
                                langSelect.value = 'mr';
                                langSelect.dispatchEvent(new Event('change'));
                            });
                        }
                    </script>

                    <li class="nav-link">
                        <a href="#" id="hindi-link">
                            <i class='bx bxs icon'><span style="font-weight:500; font-size:17px; margin-left:3px;">हिन्दी </span></i>
                            <span id="text-nav-text-id" class="text nav-text"> भाषा में अनुवाद</span>
                            <style>
                                #text-nav-text-id {
                                    margin-left: -4px;
                                }
                            </style>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#" id="marathi-link">
                            <i class='bx bxs icon'><span style="font-weight:500; font-size:17px; margin-left:3px;"> मराठी</span></i>
                            <span class="text nav-text"> भाषा में अनुवाद</span>
                            <style>
                                span.text.nav-text {
                                    margin-left: 0px;
                                }
                            </style>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>
    <script src="js/dark_togg.js"></script>
</body>
<script>
    // for toggel btn

    document.onkeydown = function(event) {
        if (event.ctrlKey && event.key === "?") {
            document.getElementById("myButton").click();
        }
    };

    function myFunction() {

    }
</script>

</html>