<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?= base_url() ?>images/favicon.ico" rel="shortcut icon" type="image/ico" />
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

    <title>List Subscribe | The Company</title>
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
                        <li class="item-105 current">
                            <a href="<?= base_url('frontend/subscribe') ?>"><span class="text">Subscribe</span></a>
                        </li>
                        <li class="item-106">
                            <a href="<?= base_url('frontend/redeem') ?>"><span class="text">Redeem</span></a>
                        </li>
                        <li class="item-107">
                            <a href="<?= base_url('frontend/redeem') ?>"><span class="text">Login</span></a>
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
                                                    <li class="item-101">
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
                                                    <li class="item-105 current">
                                                        <a href="<?= base_url('frontend/subscribe') ?>"><span class="text">Subscribe</span></a>
                                                    </li>
                                                    <li class="item-106">
                                                        <a href="<?= base_url('frontend/redeem') ?>"><span class="text">Redeem</span></a>
                                                    </li>
                                                    <li class="item-107">
                                                        <a href="<?= base_url('frontend/redeem') ?>"><span class="text">Login</span></a>
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
                        <div class="moduletable header">
                            <div class="modinside">
                                <div id="HeaderBanner">
                                    <div class="bannerImage">
                                        <img src="<?= base_url() ?>images/header-subscribe.jpg" />
                                    </div>
                                    <div class="page-header">
                                        <h2>TRANSAKSI SUBSCRIPTION</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <div id="wrapHeadID" class="divTable">
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <div id="nasabahID" class="divTableCell">
                                                        <div class="IDnasabah">
                                                            <div class="IDnama"><?= $individu['client_name'] ?></div>
                                                            <div class="IDcs">
                                                                <div class="colCIF">
                                                                    <span class="label">CIF:</span>
                                                                    <span class="value"><?= $individu['client_code'] ?></span>
                                                                </div>
                                                                <div class="colSID">
                                                                    <span class="label">SID:</span>
                                                                    <span class="value"><?= $session['sid'] ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divTableCell">
                                                        <div class="wrapBtn">
                                                            <div class="cellBtn"><a class="button">Subscribe Baru</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
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
                                                                <label class="from_date" for="from_date">Periode Tanggal Transaksi: </label>
                                                            </span>
                                                            <span class="controls">
                                                                <input type="text" id="from_date" name="from_date">
                                                            </span>
                                                            <span class="control-label">
                                                                <label class="to_date" for="to_date"> s/d </label>
                                                            </span>
                                                            <span class="controls">
                                                                <input type="text" id="to_date" name="to_date">
                                                            </span>
                                                        </div>
                                                        <div class="divTableCell">
                                                            <button>Cari</button>
                                                        </div>
                                                    </div>
                                                    <div class="divTableRow title">
                                                        <div class="divTableCell">
                                                            <h3>Rincian Transaksi</h3>
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
                                                        <td class="reffno">Reff No</td>
                                                        <td class="product">Produk</td>
                                                        <td>Nilai Transaksi</td>
                                                        <td>Status</td>
                                                        <td>Unit</td>
                                                        <td>NAB/Unit</td>
                                                        <td>Tanggal NAB</td>
                                                        <td>Bukti Transfer</td>
                                                        <td>Aksi Batal</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($rows ?? [] as $k => $v) { ?>
                                                        <tr>
                                                            <td data-label="Tanggal"><?= $v['order_date'] ?></td>
                                                            <td data-label="Reff No"><?= $v['reff_sales'] ?></td>
                                                            <td data-label="Produk" class="product"><?= $v['portfolio_nameshort'] ?></td>
                                                            <td data-label="Nilai Transaksi"><?= $v['trx_amount'] ?></td>
                                                            <td data-label="Status"><?= $v['status_code'] ?></td>
                                                            <td data-label="Unit"><?= $v['trx_unit'] ?></td>
                                                            <td data-label="NAB/Unit"><?= $v['trx_price'] ?></td>
                                                            <td data-label="Tanggal NAB"><?= $v['batch_date'] ?></td>
                                                            <td data-label="Bukti Transfer" data-id="<?= $v['order_id'] ?>" class="wrapuUploadBtn">
                                                                <?php if ($v['bukti_transfer'] == 'need_proof') { ?>
                                                                    <button class="btnUpluod">Unggah File</button>
                                                                    <input type="file" name="user_file" title="Unggah File" />
                                                                <?php } else {
                                                                    echo $v['bukti_transfer'];
                                                                } ?>
                                                            </td>
                                                            <td data-label="Aksi Batal" data-id="<?= $v['order_id'] ?>">
                                                                <button class="btnCancel <?= $v['aksi_batal'] ? '' : 'hide' ?>" title="Batalkan Transaksi">Batalkan Transaksi</button>
                                                            </td>
                                                        </tr>
                                                    <?php }; ?>
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
            <div class="item-page">
                <div class="page-header">
                    <h3>FORM SUBSCRIPTION</h3>
                </div>
                <div id="entrySubsHead" class="divTable">
                    <div class="divTableBody">
                        <div class="divTableRow">
                            <div id="nasabahID" class="divTableCell">
                                <div class="IDnasabah">
                                    <div class="IDnama"><?= $individu['client_name'] ?></div>
                                    <div class="IDcs">
                                        <div class="colCIF">
                                            <span class="label">CIF:</span>
                                            <span class="value"><?= $individu['client_code'] ?></span>
                                        </div>
                                        <div class="colSID">
                                            <span class="label">SID:</span>
                                            <span class="value"><?= $session['sid'] ?></span>
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
                                        <label class="portfolio_id" for="portfolio_id">Reksa Dana: </label>
                                    </span>
                                    <span class="controls">
                                        <select name="portfolio_id">
                                            <!-- <option value="Produk 1">Produk 1</option>
                                            <option value="Produk 2">Produk 2</option>
                                            <option value="Produk 3">Produk 3</option>
                                            <option value="Produk 4">Produk 4</option>
                                            <option value="Produk 5">Produk 5</option> -->
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                    <span class="control-label">
                                        <label class="account_id" for="account_id">Rekening Reksa Dana: </label>
                                    </span>
                                    <span class="controls">
                                        <select name="account_id">
                                            <!-- <option value="123-456-7890">123-456-7890</option>
                                            <option value="234-567-8901">234-567-8901</option>
                                            <option value="345-678-9012">345-678-9012</option>
                                            <option value="456-789-0123">456-789-0123</option>
                                            <option value="567-890-1234">567-890-1234</option> -->
                                        </select>
                                        <!-- <input class="hide" type="text" name="account_id" id="account_id"> -->
                                        <input class="hide" type="text" name="bank_id" id="bank_id">
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
                                                    <span id="bank_name" class="value">xxx</span>
                                                </div>
                                            </div>
                                            <!-- <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Cabang Bank: </span>
                                                    <span id="branch_name" class="value">xxx</span>
                                                </div>
                                            </div> -->
                                            <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Nomer Rekening: </span>
                                                    <span id="account_no" class=" value">xxx</span>
                                                </div>
                                            </div>
                                            <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Mata Uang: </span>
                                                    <span id="currency" class=" value">xxx</span>
                                                </div>
                                            </div>
                                            <div class="divTableRow">
                                                <div class="divTableCell">
                                                    <span class="label">Nama Pemilik Rekening: </span>
                                                    <span id="account_name" class=" value">xxx</span>
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
                                            <label class="order_amount" for="order_amount">Nilai Subscription: </label>
                                        </span>
                                        <span class="controls">
                                            <input type="text" name="order_amount" id="order_amount">
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

    <script src="<?= base_url() ?>js/example.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/page/subscribe.js" type="text/javascript"></script>


</body>

</html>