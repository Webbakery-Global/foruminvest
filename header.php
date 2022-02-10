<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
global $post;
$page_slug = $post->post_name;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="nl">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/upk8hso.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/aos.css">
    <script src="https://kit.fontawesome.com/8b8989bbb2.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>


<body <?php echo body_class(); ?>>
<?php do_action('wp_body_open'); ?>
<div class="site" id="page">
    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar">
        <nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">
            <div class="container">
                <?php if (!has_custom_logo()) { ?>
                    <?php if (is_front_page() && is_home()) : ?>
                        <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                                         title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                                                         itemprop="url"><?php bloginfo('name'); ?></a></h1>
                    <?php else : ?>
                        <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
                            <svg id="forum_logo" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 386.37 43.45"
                                 xml:space="preserve">

        <g id="Layer_1">
            <g>
                <path class="st0" d="M49.86,41.44c-11.56,0-19.45-9.27-19.45-19.58c0-10.31,7.88-19.64,19.45-19.64c11.5,0,19.25,9.2,19.25,19.58
			C69.11,31.92,61.43,41.44,49.86,41.44z M49.86,8.14c-6.9,0-11.89,5.78-11.89,13.66c0,7.89,4.99,13.74,11.89,13.74
			c6.9,0,11.7-6.05,11.7-13.74C61.56,14.24,56.76,8.14,49.86,8.14z"/>
                <path class="st0" d="M94.77,40.66c-3.94-5.59-6.24-9.13-9.72-15.25h-2.83v15.25h-6.9V3.2c3.75-0.26,7.49-0.52,11.23-0.52
			c7.88,0,14.19,3.22,14.19,11.3c0,5.06-3.35,9.13-7.95,10.51c3.35,5.72,6.04,9.86,10.91,16.17H94.77z M85.63,8.73l-3.42,0.07v10.84
			h3.48c5.91,0,7.56-2.17,7.56-5.85C93.25,10.43,90.89,8.59,85.63,8.73z"/>
                <path class="st0" d="M123.74,41.31c-7.75,0-15.04-4.47-15.04-12.68V3.01h6.9v24.05c0,6.71,4.73,8.35,8.34,8.35
			c4.34,0,8.87-1.71,8.87-8.41V3.01h6.9v24.25C139.71,37.04,133.01,41.31,123.74,41.31z"/>
                <path class="st0" d="M183.73,40.66l-1.77-27.93L168.1,39.51l-11.63-26.65l-2.1,27.79h-6.57l2.82-37.65h7.75
			c3.94,8.61,7.09,14.67,10.51,23.01c3.88-8.41,7.49-14.67,11.57-23.01h6.96l2.89,37.65H183.73z"/>
            </g>
            <g>
                <polygon class="st0" points="2.35,32.06 2.35,40.6 9.34,40.6 9.34,25.06 		"/>
                <polygon class="st0" points="9.57,24.82 22.92,24.83 22.92,18.83 15.56,18.83 		"/>
                <polygon class="st0" points="2.35,3.52 2.35,9.5 23.67,9.5 29.7,3.51 		"/>
            </g>
            <path class="st1" d="M8.12,20.54c0,1.88-1.52,3.4-3.4,3.4c-1.88,0-3.4-1.53-3.4-3.4c0-1.88,1.52-3.4,3.4-3.4
		C6.6,17.13,8.12,18.66,8.12,20.54z"/>
            <g>
                <path class="st2" d="M199.76,41.8V1.98h4.73V41.8H199.76z"/>
                <path class="st2" d="M243.07,41.8L220,8.51V41.8h-4.45V1.98h5.35l23.21,33.43V1.91h4.45v39.9H243.07z"/>
                <path class="st2" d="M271.26,42.18l-17.61-40.2h5l12.72,30.01l11.96-30.01h4.66L271.26,42.18z"/>
                <path class="st2" d="M293.71,41.8V1.98h22.73v4.1h-18v13.41h15.71v4.1h-15.71V37.7h19.32v4.1H293.71z"/>
                <path class="st2" d="M336.03,42.63c-4.45,0-7.65-0.63-10.77-2.08l0.7-4.8c3.13,1.88,5.77,2.78,9.8,2.78c4.1,0,7.58-2.78,7.58-6.67
			c0-3.96-3.89-5.49-7.58-7.71c-4.93-2.99-10.36-5.7-10.36-11.82c0-6.19,4.52-11.05,11.96-11.05c5.21,0,7.51,0.63,10.7,1.95
			l-0.35,4.8c-3.4-2.08-6.12-2.64-10.08-2.64c-4.52,0-6.81,3.41-6.81,6.53c0,4.24,4.03,5.84,7.85,8.13
			c4.87,2.92,9.94,5.49,9.94,11.26C348.61,38.81,342.15,42.63,336.03,42.63z"/>
                <path class="st2" d="M370.51,6.01V41.8h-4.73V6.01h-13v-4.1h30.72v4.1H370.51z"/>
            </g>
        </g>
                                <g id="Layer_2">
                                </g>
</svg>
                        </a>
                    <?php endif; ?>
                    <?php
                } else {
                    the_custom_logo();
                    ?>
                    <?php
                }
                ?>


                <!-- The WordPress Menu goes here -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container_class' => 'mobilenav',
                        'container_id' => 'navbarNavDropdown',
                        'menu_class' => 'navbar-nav ml-auto',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'depth' => 3,
                        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
                <div class="language_switcher">
                    <svg width="21px" height="21px" viewBox="0 0 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>icon-global</title>
                        <defs>
                            <path d="M1219.13741,19.1865967 C1219.10453,19.1249852 1219.09891,19.1037561 1219.08542,19.0906412 C1218.33178,18.3562562 1217.7303,17.5105364 1217.23968,16.5823534 C1217.21124,16.5284787 1217.14259,16.4608759 1217.09121,16.4595549 C1216.68675,16.4494593 1216.282,16.4539882 1215.81837,16.4539882 C1216.74388,17.6237583 1217.81852,18.5146724 1219.13741,19.1865967 Z M1230.03102,16.4487045 C1229.87707,16.4441285 1229.79644,16.4957859 1229.72058,16.6320767 C1229.51535,17.000708 1229.3122,17.3747174 1229.06338,17.7137224 C1228.7001,18.208832 1228.29771,18.6753059 1227.90287,19.1652261 C1229.18307,18.5123136 1230.25658,17.6225317 1231.18251,16.4521483 C1230.76021,16.4521483 1230.39538,16.4594134 1230.03102,16.4487045 Z M1216.67566,5.18110522 C1216.83494,5.18568127 1216.90462,5.13039128 1216.96963,4.98641087 C1217.38787,4.06016206 1217.91477,3.20052542 1218.58886,2.43590075 C1218.74729,2.2562083 1218.9134,2.08326197 1219.07593,1.90724922 C1217.54531,2.64163423 1216.33692,3.73417758 1215.36583,5.17709528 C1215.8447,5.17709528 1216.26049,5.1692641 1216.67566,5.18110522 Z M1227.94495,1.88856762 C1228.11574,2.1164737 1228.31097,2.31918793 1228.49346,2.53279976 C1229.12929,3.27676144 1229.62768,4.10733782 1230.03998,4.99287395 C1230.07522,5.06859104 1230.16901,5.16629203 1230.2386,5.16883952 C1230.68388,5.18478493 1231.13,5.17695375 1231.63411,5.17695375 C1230.66038,3.73299819 1229.45407,2.64045484 1227.94495,1.88856762 Z M1221.69347,19.8595117 C1221.58717,19.6248123 1221.45531,19.4117666 1221.34213,19.1892386 C1220.93134,18.3815896 1220.66879,17.5211038 1220.44228,16.6475031 C1220.42336,16.5745223 1220.34406,16.462244 1220.29122,16.4613004 C1219.56353,16.4489876 1218.83561,16.4529975 1218.04446,16.4529975 C1218.93567,17.9987584 1220.04145,19.2228277 1221.69347,19.8595117 Z M1228.67944,16.4527144 C1228.08409,16.4516766 1227.48845,16.4629516 1226.89357,16.4466288 C1226.66542,16.4403072 1226.57035,16.5054569 1226.51751,16.7354388 C1226.29416,17.7068348 1225.97382,18.6450662 1225.4775,19.5157892 C1225.41409,19.6270768 1225.34719,19.7362887 1225.28189,19.8464912 C1226.95443,19.2166005 1228.06903,18.0009756 1228.94501,16.4671031 C1228.82932,16.4605928 1228.75436,16.4528088 1228.67944,16.4527144 Z M1220.05188,5.18091652 C1220.21559,5.1827092 1220.27588,5.14010949 1220.31193,4.97122028 C1220.59566,3.64105264 1220.96559,2.34051137 1221.70257,1.17545888 C1221.70668,1.1689958 1221.69347,1.15154077 1221.67865,1.11597025 C1219.79593,1.89861606 1218.61825,3.35894161 1217.72435,5.17709528 C1218.53342,5.17709528 1219.29272,5.1723777 1220.05188,5.18091652 Z M1225.61894,1.74571943 C1226.15008,2.76023408 1226.45052,3.85310766 1226.68424,4.96532331 C1226.72359,5.15246954 1226.7987,5.18223744 1226.96212,5.18006735 C1227.53407,5.17247206 1228.10616,5.17714246 1228.67821,5.17714246 L1229.27436,5.17714246 C1228.38561,3.36059276 1227.20443,1.90055027 1225.28548,1.15531483 C1225.39696,1.35194339 1225.51416,1.5455527 1225.61894,1.74571943 Z M1213.8019,11.2213476 C1213.92631,12.7954611 1214.39225,14.2404545 1215.20948,15.5712826 C1215.23779,15.6174205 1215.2995,15.6723803 1215.34644,15.6730879 C1215.82819,15.6805417 1216.31002,15.6776639 1216.76294,15.6776639 C1216.55186,14.9341268 1216.3096,14.2141304 1216.14867,13.4763016 C1215.98765,12.7378595 1215.90787,11.9816793 1215.79068,11.2213476 L1213.8019,11.2213476 Z M1231.5239,15.6828061 C1231.67879,15.6870519 1231.77489,15.6427067 1231.83731,15.5033023 C1232.14996,14.8051011 1232.49876,14.1207696 1232.76966,13.4068117 C1233.03329,12.71196 1233.14364,11.9735179 1233.19455,11.2202154 L1231.15831,11.2202154 C1231.07995,12.7612587 1230.76389,14.2383316 1230.18057,15.6786075 C1230.64826,15.6786075 1231.08631,15.6708706 1231.5239,15.6828061 Z M1215.1465,5.94610729 C1214.95764,5.93964421 1214.86777,6.01238923 1214.78987,6.17156023 C1214.35677,7.05615285 1214.04742,7.98079768 1213.90145,8.95441095 C1213.83016,9.42975388 1213.80355,9.91179576 1213.75543,10.4038389 L1215.81946,10.4038389 C1215.83573,8.88227922 1216.07427,7.4146886 1216.57659,5.95124945 C1216.06955,5.95124945 1215.60758,5.96191117 1215.1465,5.94610729 Z M1233.208,10.4131797 C1233.208,10.2649063 1233.21262,10.1412586 1233.20724,10.0179884 C1233.14784,8.65243893 1232.79763,7.36321985 1232.19247,6.13985813 C1232.12595,6.00536004 1232.04806,5.94228606 1231.88755,5.94705081 C1231.46459,5.95950521 1231.04098,5.95044746 1230.61764,5.95224014 C1230.55951,5.95247602 1230.50148,5.96573241 1230.426,5.97512038 C1230.93468,7.42487857 1231.15472,8.90317808 1231.1835,10.4131797 L1233.208,10.4131797 Z M1221.20625,16.4704997 C1221.4621,17.4573222 1221.74447,18.4086685 1222.28688,19.253492 C1222.4698,19.5383392 1222.7056,19.8033726 1222.96414,20.021985 C1223.29057,20.2979632 1223.68701,20.2914058 1224.02519,20.0308069 C1224.23278,19.8709283 1224.4255,19.6744884 1224.57515,19.4598387 C1225.18442,18.5860493 1225.50123,17.5872442 1225.76175,16.5677289 C1225.76883,16.5398952 1225.7626,16.5086649 1225.7626,16.4704997 L1221.20625,16.4704997 Z M1216.64235,11.2160167 C1216.63509,11.2526723 1216.62565,11.275128 1216.62716,11.2967816 C1216.64103,11.4919949 1216.65306,11.6874441 1216.67255,11.8821384 C1216.79903,13.1446089 1217.0998,14.3626869 1217.59541,15.532457 C1217.64939,15.6598787 1217.72492,15.6820513 1217.84678,15.6809153 C1218.38755,15.6757297 1218.92841,15.6786075 1219.46927,15.6786546 L1220.17473,15.6786546 C1220.0239,14.1833247 1219.87496,12.7067235 1219.7246,11.2160167 L1216.64235,11.2160167 Z M1229.13608,15.6832307 C1229.29974,15.6853536 1229.36811,15.6261008 1229.42684,15.4839603 C1229.80838,14.5606835 1230.08428,13.6078748 1230.23129,12.6199673 C1230.29994,12.1590129 1230.34268,11.694143 1230.39868,11.2185642 L1227.27454,11.2185642 C1227.12352,12.7120072 1226.97425,14.1881366 1226.82356,15.6786075 C1227.56988,15.6786075 1228.3531,15.6729935 1229.13608,15.6832307 Z M1217.52328,5.9593165 C1217.46133,5.96007132 1217.36976,6.05536635 1217.34419,6.1257054 C1216.92948,7.26665108 1216.70142,8.44703569 1216.62777,9.65732973 C1216.61282,9.90354001 1216.6256,10.1514486 1216.6256,10.4103492 L1219.71851,10.4103492 C1219.83419,8.92653008 1219.94889,7.45507105 1220.06608,5.95186274 C1219.23026,5.95186274 1218.3767,5.94832455 1217.52328,5.9593165 Z M1230.38104,10.4087924 C1230.3891,10.3561914 1230.39595,10.3329337 1230.39567,10.3098176 C1230.37887,8.86496572 1230.13769,7.46002451 1229.65377,6.09678666 C1229.60513,5.95964673 1229.51941,5.9495983 1229.40203,5.95001081 C1228.62589,5.95247602 1227.8497,5.95082487 1227.07351,5.95224014 C1227.01478,5.95233449 1226.95604,5.9655437 1226.93353,5.9682799 C1227.04992,7.45908099 1227.16485,8.93049285 1227.2803,10.4087924 L1230.38104,10.4087924 Z M1225.91508,5.1661505 C1225.74731,4.07223906 1225.18305,2.32305634 1224.54255,1.49115905 C1224.40512,1.31264598 1224.24934,1.14012424 1224.07331,1.00123881 C1223.69442,0.702474745 1223.28288,0.703323908 1222.91139,1.01180618 C1222.71517,1.17475125 1222.53839,1.37288943 1222.39256,1.58272719 C1221.87161,2.33211409 1221.58019,3.18448566 1221.33524,4.05360463 C1221.23258,4.41784865 1221.14949,4.78756506 1221.05466,5.1661505 L1225.91508,5.1661505 Z M1220.5967,11.2118181 C1220.58523,11.2483793 1220.57674,11.2627679 1220.57684,11.2771093 C1220.58552,12.7149321 1220.738,14.1386492 1221.0123,15.5490628 C1221.02277,15.6027488 1221.13878,15.672852 1221.20587,15.6731822 C1222.73518,15.6802586 1224.26448,15.677145 1225.79379,15.6811576 C1225.92947,15.6815324 1225.97755,15.6419047 1226.00406,15.5033023 C1226.23986,14.2690902 1226.36281,13.0228954 1226.41858,11.7691053 C1226.42674,11.5854029 1226.41971,11.4010401 1226.41971,11.2118181 L1220.5967,11.2118181 Z M1220.91459,5.95889192 C1220.66492,7.43841801 1220.55693,8.91492485 1220.5597,10.4061977 L1226.44122,10.4061977 C1226.43683,8.90388572 1226.33719,7.42752041 1226.08167,5.95889192 L1220.91459,5.95889192 Z M1223.63611,0.000829713372 C1229.33919,0.0716877001 1234.02462,4.73680394 1233.9999,10.5539522 C1233.97498,16.3317558 1229.23723,21.075514 1223.35152,20.9990893 C1217.6843,20.9254951 1213.0017,16.3019407 1213,10.4926709 C1213.00047,4.68505214 1217.76139,-0.0721983582 1223.63611,0.000829713372 Z"
                                  id="path-1"></path>
                        </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Forum-invest-project-detail" transform="translate(-1303.000000, -47.000000)">
                                <g id="NAV" transform="translate(90.000000, 47.000000)">
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <use id="icon-global" fill="#29346C" xlink:href="#path-1"></use>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <ul class="languages">
                        <li class="english"><a href="<?php echo get_site_url();?>/en/<?= $page_slug ?>">EN</a></li>
                        <li class="italian"><a href="<?php echo get_site_url();?>/it/<?= $page_slug ?>">IT</a></li>
                        <li class="nederlands"><a href="<?php echo get_site_url();?>/<?= $page_slug ?>">NL</a></li>
                    </ul>
                </div>

                <!-- Hamburger menu -->
                <div class="hamburger d-lg-none">
                    <div class="hamburgerTop"></div>
                    <div class="hamburgerMiddle"></div>
                    <div class="hamburgerBottom"></div>
                </div>


            </div><!-- .container -->
        </nav><!-- Navigation end -->
    </div><!-- #wrapper-navbar end -->



