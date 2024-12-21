<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?= base_url() ?>images/favicon.png" rel="shortcut icon" type="image/png" />
    <link href="<?= base_url() ?>css/generals.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>css/template.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>css/template-medium.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="<?= base_url() ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/css_browser_selector.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/camera.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/jquery.mobile.customized.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title>Histori | Avrist Asset Management</title>
</head>

<body class="subscribe">

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
                        <li class="item-101">
                            <a href="<?= base_url() ?>"><span class="text">Beranda</span></a>
                        </li>
                        <li class="item-104">
                            <a href="nabung.html"><span class="text">Nabung Investasi Yuk</span></a>
                        </li>
                        <li class="item-103">
                            <a href="<?= base_url('frontend/profile') ?>"><span class="text">Profil</span></a>
                        </li>
                        <li class="item-104">
                            <a href="<?= base_url('frontend/summary') ?>"><span class="text">Ringkasan</span></a>
                        </li>
                        <li class="item-105 current">
                            <a href="history.html"><span class="text">Histori</span></a>
                        </li>
                        <li class="item-103">
                            <a href="http://avrist-am.com/contact-us" target="_blank"><span class="text">Hubungi Kami</span></a>
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
                                                        <li class="twitter">
                                                            <a class="link" href="https://www.twitter.com/#" target="_blank" rel="noopener noreferrer">
                                                                <span class="text">Twitter</span></a>
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
                                                    <li class="item-101">
                                                        <a href="<?= base_url() ?>"><span class="text">Beranda</span></a>
                                                    </li>
                                                    <li class="item-104">
                                                        <a href="nabung.html"><span class="text">Nabung Investasi Yuk</span></a>
                                                    </li>
                                                    <li class="item-103">
                                                        <a href="<?= base_url('frontend/profile') ?>"><span class="text">Profil</span></a>
                                                    </li>
                                                    <li class="item-104">
                                                        <a href="<?= base_url('frontend/summary') ?>"><span class="text">Ringkasan</span></a>
                                                    </li>
                                                    <li class="item-105 current">
                                                        <a href="history.html"><span class="text">Histori</span></a>
                                                    </li>
                                                    <li class="item-103">
                                                        <a href="http://avrist-am.com/contact-us" target="_blank"><span class="text">Hubungi Kami</span></a>
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

                    </div>
                </div>
                <div class="clean"></div>

                <section id="container-panel-1" class="container">
                    <div class="inside">

                    </div>
                </section>
                <div class="clean"></div>

                <section id="content" class="container">
                    <div class="inside">
                        <div class="contentinside">
                            <div id="maincontent">
                                <div class="inside">
                                    <div class="item-page">
                                        <form>
                                            <div id="wrapHeadID" class="divTable">
                                                <div class="divTableBody">
                                                    <div class="divTableRow">
                                                        <div id="nasabahID" class="divTableCell">
                                                            <div class="IDnasabah">
                                                                <div class="IDnama">Mochammad Junaidi</div>
                                                                <div class="IDcs">
                                                                    <div class="colCIF">
                                                                        <span class="label">CIF:</span>
                                                                        <span class="value">xxx-xxx-xxxxx</span>
                                                                    </div>
                                                                    <div class="colSID">
                                                                        <span class="label">SID:</span>
                                                                        <span class="value">IDDxxxx</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mataUang">
                                                                    <div class="colUang">
                                                                        <span class="label">Investasi Syariah:</span>
                                                                        <span class="value">Agresif (Avrist Equity Amar Syariah)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="divTableCell">
                                                            <div class="wrapBtn">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="wrapFilter" class="divTable">
                                                <div class="divTableBody">
                                                    <div class="divTableRow rowFilter">
                                                        <div class="divTableCell">
                                                            <span class="control-label">
                                                                <label class="form_status" for="form_status">Status: </label>
                                                            </span>
                                                            <span class="controls">
                                                                <select name="form_status">
                                                                    <option value="aktif">Aktif</option>
                                                                    <option value="tidak aktif">Tidak Aktif</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                        <div class="divTableCell">
                                                            <span class="control-label">
                                                                <label class="form_periodewaktudari" for="form_periodewaktudari">Periode Tanggal Transaksi: </label>
                                                            </span>
                                                            <span class="controls">
                                                                <input type="text" id="form_periodewaktudari" name="form_periodewaktudari">
                                                            </span>
                                                            <span class="control-label">
                                                                <label class="form_periodewaktuke" for="form_periodewaktuke"> s/d </label>
                                                            </span>
                                                            <span class="controls">
                                                                <input type="text" id="form_periodewaktuke" name="form_periodewaktuke">
                                                            </span>
                                                        </div>
                                                        <div class="divTableCell">
                                                            <span class="searchbtn"><button>Cari</button></span>
                                                        </div>
                                                    </div>
                                                    <div class="divTableRow title">
                                                        <div class="divTableCell">
                                                            <h3>Histori Transaksi</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="wrapTransaksi" class="divTable">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td>Tanggal</td>
                                                        <td class="product">Produk</td>
                                                        <td>Nilai Transaksi</td>
                                                        <td>Status</td>
                                                        <td>Unit</td>
                                                        <td>NAB/Unit</td>
                                                        <td>Tanggal NAB</td>
                                                        <td>Aksi Batal</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-label="Tanggal">12-Jan-18</td>
                                                        <td data-label="Produk" class="product">Reksa Dana Avrist Ada Kas Mutiara</td>
                                                        <td data-label="Nilai Transaksi">2,500,000.00</td>
                                                        <td data-label="Status">NOT COMPLETE</td>
                                                        <td data-label="Unit">12,537.9876</td>
                                                        <td data-label="NAB/Unit">1,200.75</td>
                                                        <td data-label="Tanggal NAB">13-Jan-18</td>
                                                        <td data-label="Aksi Batal">
                                                            <button class="btnCancel" title="Batalkan Transaksi">Batalkan Transaksi</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Tanggal">12-Jan-18</td>
                                                        <td data-label="Produk" class="product">Reksa Dana Avrist Index 30</td>
                                                        <td data-label="Nilai Transaksi">2,500,000.00</td>
                                                        <td data-label="Status">PENDING</td>
                                                        <td data-label="Unit">12,537.9876</td>
                                                        <td data-label="NAB/Unit">1,200.75</td>
                                                        <td data-label="Tanggal NAB">13-Jan-18</td>
                                                        <td data-label="Aksi Batal">
                                                            <button class="btnCancel" title="Batalkan Transaksi">Batalkan Transaksi</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Tanggal">12-Jan-18</td>
                                                        <td data-label="Produk" class="product">Reksa Dana Avrist Prime Bond Fund</td>
                                                        <td data-label="Nilai Transaksi">2,500,000.00</td>
                                                        <td data-label="Status">PROCESSED</td>
                                                        <td data-label="Unit">12,537.9876</td>
                                                        <td data-label="NAB/Unit">1,200.75</td>
                                                        <td data-label="Tanggal NAB">13-Jan-18</td>
                                                        <td data-label="Aksi Batal">
                                                            <button class="btnCancel" title="Batalkan Transaksi">Batalkan Transaksi</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Tanggal">12-Jan-18</td>
                                                        <td data-label="Produk" class="product">Reksa Dana Avrist Terproteksi Spirit 6</td>
                                                        <td data-label="Nilai Transaksi">2,500,000.00</td>
                                                        <td data-label="Status">ALLOCATE</td>
                                                        <td data-label="Unit">12,537.9876</td>
                                                        <td data-label="NAB/Unit">1,200.75</td>
                                                        <td data-label="Tanggal NAB">13-Jan-18</td>
                                                        <td data-label="Aksi Batal">
                                                            <button class="btnCancel" title="Batalkan Transaksi">Batalkan Transaksi</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- DivTable.com -->
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
                                    <h3><span class="firstword">Butuh Bantuan?</span></h3>
                                    <span class="right"></span>
                                    <div class="clean"></div>
                                </div>
                                <div class="contactinfo contactinfo phone">
                                    <span class="info_telephone"><a href="tel:+6221 2521662">+6221 252 1662</a></span>
                                </div>
                                <div class="clean"></div>
                            </div>
                        </div>
                        <div class="moduletable contactinfo address">
                            <div class="modinside">
                                <div class="contactinfo contactinfo address">
                                    <div class="info_image">
                                        <img src="<?= base_url() ?>images/logo-putih.png" title="avrist-am" alt="avrist-am" class="contactIcon" />
                                    </div>
                                    <div class="wrapAllinfo_address">
                                        <span class="info_name">PT. Avrist Asset Management</span>
                                        <div class="wrapinfo_address">
                                            <span class="info_address">World Trade Centre V, Lantai 9</span>
                                            <span class="info_state">Jalan Jenderal Sudirman kav. 29-31 Jakarta 12920 Indonesia</span>
                                        </div>
                                        <span class="info_email"><span><a href="mailto:cs.avram@avrist.com">cs.avram@avrist.com</a></span></span>
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
                                <div class="footer1 footer">Copyright &#169; 2018 PT. Avrist Asset Management - Pilihan Tepat Reksa Dana. All Rights Reserved. Powered by <a href="http://www.simpi-pro.com/" target="_blank">simpiPRO</a></div>
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

            <div class="clean"></div>
        </div>
    </section>

    <section id="hidden-panel-2">
        <div class="inside">
            <div class="item-page">
                <div class="page-header">
                    <h3>FORM SUBSCRIPTION</h3>
                </div>
                <div id="entrySubsHead" class="divTable">
                    <div class="divTableBody">
                        <div class="divTableRow">
                            <div id="nasabahID" class="divTableCell">
                                <div class="IDnasabah">
                                    <div class="IDnama">Mochammad Junaidi</div>
                                    <div class="IDcs">
                                        <div class="colCIF">
                                            <span class="label">CIF:</span>
                                            <span class="value">xxx-xxx-xxxxx</span>
                                        </div>
                                        <div class="colSID">
                                            <span class="label">SID:</span>
                                            <span class="value">IDDxxxx</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                    <div id="entrySubscribe" class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">
                                <div class="divTableCell">
                                    <span class="control-label">
                                        <label class="form_produkReksadana" for="form_produkReksadana">Reksa Dana: </label>
                                    </span>
                                    <span class="controls">
                                        <select name="form_produkReksadana">
                                            <option value="Produk 1">Produk 1</option>
                                            <option value="Produk 2">Produk 2</option>
                                            <option value="Produk 3">Produk 3</option>
                                            <option value="Produk 4">Produk 4</option>
                                            <option value="Produk 5">Produk 5</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                    <span class="control-label">
                                        <label class="form_rekReksadana" for="form_rekReksadana">Rekening Reksa Dana: </label>
                                    </span>
                                    <span class="controls">
                                        <select name="form_rekReksadana">
                                            <option value="123-456-7890">123-456-7890</option>
                                            <option value="234-567-8901">234-567-8901</option>
                                            <option value="345-678-9012">345-678-9012</option>
                                            <option value="456-789-0123">456-789-0123</option>
                                            <option value="567-890-1234">567-890-1234</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                    <div id="entryDataNasabah" class="divTable">
                                        <div class="divTableBody">
                                            <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Nama Bank: </span>
                                                    <span class="value">xxx</span>
                                                </div>
                                            </div>
                                            <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Cabang Bank: </span>
                                                    <span class="value">xxx</span>
                                                </div>
                                            </div>
                                            <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Nomer Rekening: </span>
                                                    <span class="value">xxx</span>
                                                </div>
                                            </div>
                                            <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Mata Uang: </span>
                                                    <span class="value">xxx</span>
                                                </div>
                                            </div>
                                            <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Nama Pemilik Rekening: </span>
                                                    <span class="value">xxx</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                    <div class="top">
                                        <span class="control-label">
                                            <label class="form_nilaiSubs" for="form_nilaiSubs">Nilai Subscription: </label>
                                        </span>
                                        <span class="controls">
                                            <input type="text" name="form_nilaiSubs" id="form_nilaiSubs">
                                        </span>
                                    </div>
                                    <div class="bottom">
                                        <div class="controls">
                                            <input type="checkbox" name="terms" value="check" id="terms" /><label for="terms">Anda menghindari risiko tinggi, ingin kestabilan, ingin pendapatan tetap dalam jangka waktu satu hingga dua tahun. Anda cocok untuk Reksa Dana Pasar uang atau Reksa Dana Pendapatan Tetap.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="entrySubsBtn" class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">
                                <div class="divTableCell">
                                    <div class="wrapBtn">
                                        <span class="cellBtn"><input class="button save" type="submit" value="Simpan" disabled="disabled"></span>
                                        <span class="cellBtn"><input class="button cancel" type="reset" value="Batal"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="clean"></div>
            </div>
        </div>
    </section>

    <div class="clean"></div>

    <script>
        jQuery(document).ready(function() {

            jQuery("#menu-icon, .mask, #outmenu-icon").on("click", function() {
                jQuery("#menu-icon, .mask, #main-nav, #outmenu-icon").toggleClass("activemenu");
                jQuery("body").toggleClass("noscroll");
            });

            jQuery(".item-107 a, #hidden-panel-1").on("click", function(e) {
                e.preventDefault();
                jQuery("#hidden-panel-1").toggleClass("display").removeClass("showall");
                return;
            });
            jQuery("#hidden-panel-1 .flat-form > div").click(function(e) {
                e.stopPropagation();
            });
            jQuery("#hidden-panel-1 .flat-form a").click(function(e) {
                jQuery(this).closest("#hidden-panel-1").removeClass("display").addClass("showall");
            });

            jQuery("#wrapFilter .cellBtn, #hidden-panel-2").on("click", function(e) {
                e.preventDefault();
                jQuery("#hidden-panel-2").toggleClass("showPanel");
                jQuery("body").toggleClass("noscroll");
                return;
            });
            jQuery("#hidden-panel-2 .item-page").click(function(e) {
                e.stopPropagation();
            });

            jQuery("img")
                .not(".avs_img_container img, .joomimg_inside img, .jg_catelem_txt img, #slideshow .slideshowck img")
                .wrap("<div class='wrapimg' />");

            jQuery("select, input[list]").not("select[multiple=multiple]").wrap("<div class='wrapselect' />");

            jQuery("#content img").filter(function() {
                return jQuery(this).css("float") == "left";
            }).parent().addClass("alignleft");

            jQuery("#content img").filter(function() {
                return jQuery(this).css("float") == "right";
            }).parent().addClass("alignright");

            jQuery(window).scroll(function() {
                if (jQuery(window).scrollTop() > 180) {
                    jQuery("header, #slideshow").addClass("sticky");
                } else {
                    jQuery("header, #slideshow").removeClass("sticky");
                }
            });

            //jQuery("a").not(".logo a").attr("href", "#");

            jQuery(function() {
                // constants
                var SHOW_CLASS = 'show',
                    HIDE_CLASS = 'hide',
                    ACTIVE_CLASS = 'active';

                jQuery('.tabs').on('click', 'li a', function(e) {
                    e.preventDefault();
                    var $tab = jQuery(this),
                        href = $tab.attr('href');

                    jQuery('.active').removeClass(ACTIVE_CLASS);
                    $tab.addClass(ACTIVE_CLASS);

                    jQuery('.show')
                        .removeClass(SHOW_CLASS)
                        .addClass(HIDE_CLASS)
                        .hide();

                    jQuery(href)
                        .removeClass(HIDE_CLASS)
                        .addClass(SHOW_CLASS)
                        .hide()
                        .fadeIn(550);
                });
            });

            jQuery(function() {
                var dateFormat = "mm/dd/yy",
                    from = jQuery("#form_periodewaktudari")
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 1
                    })
                    .on("change", function() {
                        to.datepicker("option", "minDate", getDate(this));
                    }),
                    to = jQuery("#form_periodewaktuke").datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 1
                    })
                    .on("change", function() {
                        from.datepicker("option", "maxDate", getDate(this));
                    });

                function getDate(element) {
                    var date;
                    try {
                        date = jQuery.datepicker.parseDate(dateFormat, element.value);
                    } catch (error) {
                        date = null;
                    }
                    return date;
                }
            });

            jQuery(".wrapuUploadBtn input[type=file]").hover(function() {
                jQuery(this).siblings("button").addClass("hover");
            }, function() {
                jQuery(this).siblings("button").removeClass("hover");
            });

            jQuery('#terms').click(function() {
                if (jQuery('#terms:checked').length) {
                    jQuery("#entrySubsBtn input[type=submit]").removeAttr('disabled');
                } else {
                    jQuery("#entrySubsBtn input[type=submit]").attr('disabled', 'disabled');
                }
            });

            jQuery(".divTableCell:contains('\u00a0')").addClass("spaceblank");

            jQuery(function() {
                jQuery('#wrapHeadID .wrapNoSI input[type="radio"]').on('click', function() {
                    if (jQuery(this).val() == 'form_IFUA') {
                        jQuery('.wrapSelectSales select').prop("disabled", false);
                    } else {
                        jQuery('.wrapSelectSales select').prop("disabled", true).val('');
                    }
                });
            });

        });
    </script>


</body>

</html>