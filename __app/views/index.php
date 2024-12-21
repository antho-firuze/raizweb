<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?= base_url() ?>images/favicon.ico" rel="shortcut icon" type="image/ico" />
    <link href="<?= base_url() ?>css/generals.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>css/template.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>css/camera.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>css/template-medium.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="<?= base_url() ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/css_browser_selector.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/camera.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/camera.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/jquery.mobile.customized.min.js" type="text/javascript"></script>

    <title>Home | The Company</title>
</head>

<body class="home">

    <nav class="main-nav" id="main-nav">
        <div id="outmenu-icon">
            <div class="wrapmenuicon">
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
            </div>
        </div>
        <div class="inside">
            <div class="moduletable_menu">
                <div class="modinside">
                    <ul class="menu">
                        <li class="item-101 current">
                            <a href="<?= base_url() ?>"><span class="text">Home</span></a>
                        </li>
                        <li class="item-102">
                            <a href="<?= base_url('frontend/entry') ?>"><span class="text">Entry</span></a>
                        </li>
                        <li class="item-103">
                            <a href="<?= base_url('frontend/profile') ?>"><span class="text">Profile</span></a>
                        </li>
                        <li class="item-104">
                            <a href="<?= base_url('frontend/summary') ?>"><span class="text">Summary</span></a>
                        </li>
                        <li class="item-105">
                            <?= base_url('frontend/subscribe') ?>"><span class="text">Subscribe</span></a>
                        </li>
                        <li class="item-106">
                            <a href="<?= base_url('frontend/redeem') ?>"><span class="text">Redeem</span></a>
                        </li>
                        <li class="item-107">
                            <a href="#"><span class="text">Login</span></a>
                        </li>
                    </ul>
                    <div class="clean"></div>
                </div>
            </div>
            <div class="clean"></div>
        </div>
        <div class="clean"></div>
    </nav>

    <div id="wrapper">
        <div id="outer">
            <div id="inner">
                <header id="header" class="container">
                    <div class="inside">
                        <div id="logo">
                            <div class="logoinside">
                                <a class="link" href="index.html">
                                    <span class="logoimg"> <img src="<?= base_url() ?>images/logo.png" alt="The Company" /></span>
                                </a>
                            </div>
                        </div>
                        <div id="toppanel">
                            <div class="toppanelinside">
                                <div class="topcontact">
                                    <div class="moduletable sosmed">
                                        <div class="modinside">
                                            <div class="custom sosmed">
                                                <div id="sosmed">
                                                    <ul>
                                                        <li class="facebook">
                                                            <a class="link" href="https://web.facebook.com/#" target="_blank" rel="noopener noreferrer">
                                                                <span class="text">Facebook</span></a>
                                                        </li>
                                                        <li class="instagram">
                                                            <a class="link" href="https://www.instagram.com/#" target="_blank" rel="noopener noreferrer">
                                                                <span class="text">Instagram</span></a>
                                                        </li>
                                                        <li class="youtube">
                                                            <a class="link" href="https://www.youtube.com/#" target="_blank" rel="noopener noreferrer">
                                                                <span class="text">Youtube</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clean"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="mainmenu">
                                    <nav class="menu">
                                        <div class="moduletable_menu">
                                            <div class="modinside">
                                                <ul class="menu">
                                                    <li class="item-101 current">
                                                        <a href="<?= base_url() ?>"><span class="text">Home</span></a>
                                                    </li>
                                                    <li class="item-102">
                                                        <a href="<?= base_url('frontend/entry') ?>"><span class="text">Entry</span></a>
                                                    </li>
                                                    <li class="item-103">
                                                        <a href="<?= base_url('frontend/profile') ?>"><span class="text">Profile</span></a>
                                                    </li>
                                                    <li class="item-104">
                                                        <a href="<?= base_url('frontend/summary') ?>"><span class="text">Summary</span></a>
                                                    </li>
                                                    <li class="item-105">
                                                        <a href="<?= base_url('frontend/subscribe') ?>"><span class="text">Subscribe</span></a>
                                                    </li>
                                                    <li class="item-106">
                                                        <a href="<?= base_url('frontend/redeem') ?>"><span class="text">Redeem</span></a>
                                                    </li>
                                                    <li class="item-107 hide">
                                                        <a href="#"><span class="text">Login</span></a>
                                                    </li>
                                                </ul>
                                                <div class="clean"></div>
                                            </div>
                                        </div>
                                        <div class="clean"></div>
                                    </nav>
                                    <div id="menu-icon">
                                        <div class="wrapmenuicon">
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                        </div>
                                    </div>
                                    <div class="clean"></div>
                                </div>
                                <div class="clean"></div>
                            </div>
                        </div>
                        <div class="clean"></div>
                    </div>
                    <div class="clean"></div>

                </header>
                <div class="clean"></div>

                <div id="slideshow" class="container">
                    <div class="inside">
                        <div class="moduletable slideshow">
                            <div class="modinside">
                                <div class="slideshowck slideshow camera_wrap camera_amber_skin" id="camera_wrap_1">
                                    <div data-thumb="images/th/slide-01_th.jpg" data-src="<?= base_url() ?>images/slide-01.jpg">
                                        <div class="camera_caption fadeFromBottom">
                                            <div class="camera_caption_title"> Lorem ipsum dolor sit amet consetetur </div>
                                            <div class="camera_caption_desc"> Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum </div>
                                            <div class="camera_readmore_link"></div>
                                        </div>
                                    </div>
                                    <div data-thumb="images/th/slide-02_th.jpg" data-src="<?= base_url() ?>images/slide-02.jpg">
                                        <div class="camera_caption fadeFromBottom">
                                            <div class="camera_caption_title"> Stet clita kasd gubergren no sea takimata </div>
                                            <div class="camera_caption_desc"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros </div>
                                            <div class="camera_readmore_link"></div>
                                        </div>
                                    </div>
                                    <div data-thumb="images/th/slide-03_th.jpg" data-src="<?= base_url() ?>images/slide-03.jpg">
                                        <div class="camera_caption fadeFromBottom">
                                            <div class="camera_caption_title"> Sanctus est lorem ipsum dolor sit amet </div>
                                            <div class="camera_caption_desc"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim </div>
                                            <div class="camera_readmore_link"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clean"></div>
                    </div>
                </div>
                <div class="clean"></div>

                <section id="container-panel-1" class="container">
                    <div class="inside TickerNews">
                        <div class="moduletable runningtext ti_wrapper">
                            <div class="ti_slide">
                                <ul class="wrapscroll ti_content">
                                    <?php foreach ($running_text as $k => $v) { ?>
                                        <li class="ti_news"><?= $v ?></li>
                                    <?php }; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="clean"></div>

                <section id="content" class="container">
                    <div class="inside">
                        <div class="contentinside">
                            <div id="maincontent">
                                <div class="inside">
                                    <div class="blog home">
                                        <?php foreach ($products as $k => $v) { ?>
                                            <div class="items-row cols-1 row-0">
                                                <div class="span12">
                                                    <div class="item column-1">
                                                        <div class="wraptitle">
                                                            <div class="page-header">
                                                                <h2><?= $v['portfolio_name'] ?></h2>
                                                            </div>
                                                        </div>
                                                        <div class="wrapcontent">
                                                            <div class="wrapblogimg"><img src="<?= base_url() ?>images/timbangan.png" /></div>
                                                            <div class="wrapcontentinside">
                                                                <div class="divWrap">
                                                                    <div class="column colNav">
                                                                        <div class="item-row row-1">
                                                                            <div class="divCell">
                                                                                <h3>NAV/Unit</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-2">
                                                                            <div class="divCell"><?= $v['nav_per_unit'] ?></div>
                                                                        </div>
                                                                        <div class="item-row row-3">
                                                                            <div class="divCell date"><?= $v['position_date'] ?></div>
                                                                        </div>
                                                                        <div class="item-row row-4">
                                                                            <div class="divCell">
                                                                                <div class="boxlevel">
                                                                                    <ul class="wraplevel">
                                                                                        <li <?= ($v['risk_score'] != null && $v['risk_score'] > 0) ? 'class="activelevel"' : '' ?>><span>1</span></li>
                                                                                        <li <?= ($v['risk_score'] != null && $v['risk_score'] > 1) ? 'class="activelevel"' : '' ?>><span>2</span></li>
                                                                                        <li <?= ($v['risk_score'] != null && $v['risk_score'] > 2) ? 'class="activelevel"' : '' ?>><span>3</span></li>
                                                                                        <li <?= ($v['risk_score'] != null && $v['risk_score'] > 3) ? 'class="activelevel"' : '' ?>><span>4</span></li>
                                                                                        <li <?= ($v['risk_score'] != null && $v['risk_score'] > 4) ? 'class="activelevel"' : '' ?>><span>5</span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-5">
                                                                            <div class="divCell desclevel">
                                                                                <div class="wrapdesclevel">
                                                                                    <span class="left">Konservatif</span>&nbsp;<span class="right">Agresif</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-6">
                                                                            <div class="divCell">
                                                                                <div class="readmore">
                                                                                    <a class="btn" href="#">
                                                                                        <span class="text">Lihat Detail</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="column colMTD">
                                                                        <div class="item-row row-1">
                                                                            <div class="divCell">
                                                                                <h3>MTD</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-2">
                                                                            <div class="divCell percent"><?= $v['mtd'] ?></div>
                                                                        </div>
                                                                        <div class="item-row row-3">
                                                                            <div class="divCell">
                                                                                <h3>1Y</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-4">
                                                                            <div class="divCell percent"><?= $v['1y'] ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="column colYTD">
                                                                        <div class="item-row row-1">
                                                                            <div class="divCell">
                                                                                <h3>YTD</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-2">
                                                                            <div class="divCell percent"><?= $v['ytd'] ?></div>
                                                                        </div>
                                                                        <div class="item-row row-3">
                                                                            <div class="divCell">
                                                                                <h3>2Y</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-4">
                                                                            <div class="divCell percent"><?= $v['2y'] ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="column colTujuan">
                                                                        <div class="item-row row-1">
                                                                            <div class="divCell colinvest">
                                                                                <h3>Tujuan Investasi</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-2">
                                                                            <div class="divCell colinvest descinvest"><?= $v['tujuan_investasi'] ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-row row-3">
                                                                            <div class="divCell colinvest">
                                                                                <div class="colfee">
                                                                                    <span class="subscription">
                                                                                        <ul>
                                                                                            <li class="label">Subscription Fee:</li>
                                                                                            <li class="percent"><?= $v['subs_fee'] ?></li>
                                                                                        </ul>
                                                                                    </span>
                                                                                    <span class="redemption">
                                                                                        <ul>
                                                                                            <li class="label">Redemption Fee:</li>
                                                                                            <li class="percent"><?= $v['redm_fee'] ?></li>
                                                                                        </ul>
                                                                                    </span>
                                                                                    <span class="switching">
                                                                                        <ul>
                                                                                            <li class="label">Switching Fee:</li>
                                                                                            <li class="percent"><?= $v['swit_fee'] ?></li>
                                                                                        </ul>
                                                                                    </span>
                                                                                    <div class="clean"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clean"></div>
                                                                </div>
                                                                <div class="clean"></div>
                                                            </div>
                                                            <div class="clean"></div>
                                                        </div>
                                                        <div class="clean"></div>
                                                    </div>
                                                    <div class="clean"></div>
                                                    <!-- end item -->
                                                </div>
                                                <!-- end span -->
                                            </div>
                                        <?php }; ?>
                                    </div>
                                    <div class="clean"></div>
                                </div>
                            </div>
                            <div id="sidecontent">
                                <div class="inside">

                                </div>
                                <div class="clean"></div>
                            </div>
                        </div>
                        <div class="clean"></div>
                    </div>
                </section>
                <div class="clean"></div>

                <section id="container-panel-2" class="container">
                    <div class="inside">
                        <div class="clean"></div>
                    </div>
                </section>
                <div class="clean"></div>

                <section id="container-panel-3" class="container">
                    <div class="inside">
                        <div class="clean"></div>
                    </div>
                </section>
                <div class="clean"></div>

                <section id="container-panel-4" class="container">
                    <div class="inside">
                        <div class="clean"></div>
                    </div>
                </section>
                <div class="clean"></div>

                <section id="container-panel-5" class="container">
                    <div class="inside">
                        <div class="moduletable contactinfo phone">
                            <div class="modinside">
                                <div class="title"> <span class="left"></span>
                                    <h3><span class="firstword">Do</span> you need help?</h3>
                                    <span class="right"></span>
                                    <div class="clean"></div>
                                </div>
                                <div class="contactinfo contactinfo phone">
                                    <span class="info_telephone"><a href="tel:+6221 123 45678">+6221 123 45678</a></span>
                                </div>
                                <div class="clean"></div>
                            </div>
                        </div>
                        <div class="moduletable contactinfo address">
                            <div class="modinside">
                                <div class="contactinfo contactinfo address">
                                    <div class="info_image">
                                        <img src="<?= base_url() ?>images/logo-putih.png" title="The Company Corp." alt="The Company Corp." class="contactIcon" />
                                    </div>
                                    <div class="wrapAllinfo_address">
                                        <span class="info_name">The Company Corp.</span>
                                        <div class="wrapinfo_address">
                                            <span class="info_address">DBS Bank Tower 28th Floor, Ciputra World 1</span> <span class="info_state">DKI Jakarta</span>
                                        </div>
                                        <span class="info_email"><span><a href="mailto:support@company.co.id">support@company.co.id</a></span></span>
                                    </div>
                                </div>
                                <div class="clean"></div>
                            </div>
                        </div>
                        <div class="clean"></div>
                    </div>
                </section>
                <div class="clean"></div>

                <section id="footer">
                    <div class="inside">
                        <div class="moduletable footer">
                            <div class="modinside">
                                <div class="clean"></div>
                                <div class="footer1 footer">Copyright &#169; 2018 THE COMPANY - Social Entrepreneur Society. All Rights Reserved. Powered by <a href="http://www.trickytech.co/" target="_blank">Tricky</a></div>
                                <div class="clean"></div>
                            </div>
                        </div>
                        <div class="clean"></div>
                    </div>
                    <div class="clean"></div>
                </section>
            </div>
            <div class="clean"></div>

        </div>
        <div class="mask"></div>
    </div>

    <section id="hidden-panel-1">
        <div class="inside">
            <div class="container">
                <div class="flat-form">
                    <ul class="tabs">
                        <li>
                            <a href="#login" class="active">Login</a>
                        </li>
                        <li>
                            <a href="#register">Register</a>
                        </li>
                        <li>
                            <a href="#reset">Reset Password</a>
                        </li>
                    </ul>
                    <div id="login" class="form-action show">
                        <h1>Login</h1>
                        <p>
                            Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            Maecenas sed diam eget risus varius bladit sit amet non
                        </p>
                        <form>
                            <ul>
                                <li><input type="text" name="email" placeholder="Email" /></li>
                                <li><input type="password" name="password" placeholder="Kata Sandi" /></li>
                                <li><input type="submit" value="Masuk" class="button" /></li>
                            </ul>
                        </form>
                    </div>
                    <!--/#login.form-action-->
                    <div id="register" class="form-action hide">
                        <h1>Register</h1>
                        <p>
                            You should totally sign up for our super awesome service.
                            It's what all the cool kids are doing nowadays.
                        </p>
                        <form>
                            <ul>
                                <li><input type="text" name="nama_depan" placeholder="Nama Depan" /></li>
                                <li><input type="text" name="nama_belakang" placeholder="Nama Belakang" /></li>
                                <li><input type="text" name="handphone" placeholder="Handphone" /></li>
                                <li><input type="text" name="email" placeholder="Email" /></li>
                                <li>
                                    <p><input id="nasabah_baru" type="radio" name="nasabah" value="nasabah_baru">
                                        <label for="nasabah_baru">Nasabah Baru</label>
                                    </p>
                                    <p><input id="sudah_nasabah" type="radio" name="nasabah" value="sudah_nasabah">
                                        <label for="sudah_nasabah">Sudah menjadi nasabah</label>
                                    </p>
                                </li>
                                <li><input type="submit" value="Daftar" class="button" /></li>
                            </ul>
                        </form>
                    </div>
                    <!--/#register.form-action-->
                    <div id="reset" class="form-action hide">
                        <h1>Reset Password</h1>
                        <p>
                            To reset your password enter your email
                            and we'll send you a link to reset your password.
                        </p>
                        <form>
                            <ul>
                                <li><input type="text" name="email" placeholder="Email" /> </li>
                                <li><input type="submit" value="Kirim" class="button" /></li>
                            </ul>
                        </form>
                    </div>
                    <!--/#register.form-action-->
                </div>
            </div>
            <div class="clean"></div>
        </div>
    </section>

    <section id="hidden-panel-2">
        <div class="inside">

            <div class="clean"></div>
        </div>
    </section>

    <div class="clean"></div>

    <script src="<?= base_url() ?>js/jquery.tickerNews.min.js"></script>

    <script src="<?= base_url() ?>js/example.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/page/index.js" type="text/javascript"></script>

</body>

</html>