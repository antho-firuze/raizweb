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

    <title>Profile | The Company</title>
</head>

<body class="profile">

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
                        <li class="item-103 current">
                            <a href="<?= base_url('frontend/profile') ?>"><span class="text">profile</span></a>
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
                                                    <li class="item-103 current">
                                                        <a href="<?= base_url('frontend/profile') ?>"><span class="text">profile</span></a>
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
                                        <img src="<?= base_url() ?>images/header-profile.jpg" />
                                    </div>
                                    <div class="page-header">
                                        <h2>Profile Nasabah</h2>
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
                                                            <div class="IDnama"><?= $session['client_name'] ?></div>
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
                                                            <div class="cellBtn"><button>Ubah Alamat</button></div>
                                                            <div class="cellBtn"><button>Ubah Rekening Bank</button></div>
                                                            <div class="cellBtn"><button>Print</button></div>
                                                            <div class="cellBtn"><button>Email</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divTable">
                                            <div class="divTableBody">
                                                <div class="divTableRow">
                                                    <div class="divTableCell left nasabahID">
                                                        <div id="IDnasabah" class="divTable">
                                                            <div class="divTableBody">
                                                                <div class="divTableRow">
                                                                    <div class="divTableCell">
                                                                        <div class="STnasabah">
                                                                            <div class="colStatus">
                                                                                <span class="label">STATUS:</span>
                                                                                <span class="value"><?= $individu['status_id'] == "1" ? "ACTIVE" : $individu['status_id'] == "2" ? "PENDING" : "DELETE" ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divTableRow">
                                                                    <div class="divTableCell">
                                                                        <div class="emailAdd">
                                                                            <div class="colEmail">
                                                                                <span class="label">EMAIL ADDRESS:</span>
                                                                                <span class="value"><?= $individu_email['email_address'] ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divTableRow">
                                                                    <div class="divTableCell">
                                                                        <div class="noHP">
                                                                            <div class="colHP">
                                                                                <span class="label">NOMER HANDPHONE:</span>
                                                                                <span class="value"><?= $individu_phone['phone_no'] ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="divTableRow">
                                                                    <div class="divTableCell">
                                                                        <div class="riskData">
                                                                            <div class="colData">
                                                                                <div class="wrapper2">
                                                                                    <div class="box">
                                                                                        <div id="g2" class="gauge"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="riskDesc">
                                                                            <div class="colStDesc">
                                                                                Anda menghindari risiko tinggi, ingin kestabilan, ingin pendapatan tetap. Anda cocok untuk jenis Reksa Dana Pasar Uang atau Reksa Dana Pendapatan Tetap.
                                                                            </div>
                                                                        </div>
                                                                        <div class="riskUpdate">
                                                                            <div class="colUpdate">
                                                                                <button>
                                                                                    <div>Perbaharui Profil Risiko</div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="divTableCell right dataProfile">
                                                        <div id="profileData" class="divTable">
                                                            <div class="divTableBody">
                                                                <div class="divTableRow">
                                                                    <div class="divTableCell">
                                                                        <div class="divTable">
                                                                            <div class="divTableBody">
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Nama Lengkap</div>
                                                                                        <div class="field"><?= $session['client_name'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Jenis Kelamin</div>
                                                                                        <div class="field"><?= $individu['gender'] == 'M' ? 'Pria' : 'Wanita' ?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Kewarganegaraan</div>
                                                                                        <div class="field"><?= $country['nationality'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Tempat Lahir</div>
                                                                                        <div class="field"><?= $individu['birth_place'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Tanggal Lahir</div>
                                                                                        <div class="field"><?= $individu['birth_date'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Pendidikan Terkhir</div>
                                                                                        <div class="field"><?= $education['level_code'] ?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">FATCA</div>
                                                                                        <div class="field"><?= $fatca ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">TIN Country</div>
                                                                                        <div class="field"><?= $tin_country ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">TIN</div>
                                                                                        <div class="field"><?= $tin ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Nama Ibu Kandung</div>
                                                                                        <div class="field"><?= $individu['mmn'] ?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Identitas</div>
                                                                                        <div class="field"><?= $idcardtype['type_code'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Nomer</div>
                                                                                        <div class="field"><?= $identity['identity_no'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Masa Berlaku</div>
                                                                                        <div class="field"><?= $identity['identity_date'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">NPWP</div>
                                                                                        <div class="field"><?= $identity['identity_issuer'] ?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Pekerjaan</div>
                                                                                        <div class="field"><?= $occupation['occupation_code'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Agama</div>
                                                                                        <div class="field"><?= $religion['religion_code'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Status Pernikahan</div>
                                                                                        <div class="field"></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Nama Pasangan</div>
                                                                                        <div class="field"><?= $individu['spouse_name'] ?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Nama Perusahaan</div>
                                                                                        <div class="field"><?= $individu['office_name'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Bidang Usaha</div>
                                                                                        <div class="field"><?= $business['activity_code'] ?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Alamat Perusahaan</div>
                                                                                        <div class="field"><?= $office_address['street_name'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Nomor Telepon</div>
                                                                                        <div class="field"><?= $office_phone['phone_no'] ?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Tujuan Investasi</div>
                                                                                        <div class="field"><?= $tujuan_investasi ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Sumber Dana</div>
                                                                                        <div class="field"><?= $sumber_dana ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Tingkat Penghasilan</div>
                                                                                        <div class="field"><?= $tingkat_penghasilan ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Kepemilikan Investasi</div>
                                                                                        <div class="field"><?= $kepemilikan_investasi ?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Alamat KTP</div>
                                                                                        <div class="field"><?= $ktp_address['street_name'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Alamat Korespondensi</div>
                                                                                        <div class="field"><?= $correspondence_address['street_name'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="label">Alamat Domisili</div>
                                                                                        <div class="field"><?= $domisili_address['street_name'] ?></div>
                                                                                    </div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="top">
                                                                                            <div class="label">Rekening Bank</div>
                                                                                            <div class="field">xxx</div>
                                                                                        </div>
                                                                                        <div class="bottom">
                                                                                            <div class="prow1">
                                                                                                <span class="label">Cabang: </span><span class="field">xxx</span>
                                                                                            </div>
                                                                                            <div class="prow2">
                                                                                                <span class="label">Nomer: </span><span class="field">xxx</span>
                                                                                            </div>
                                                                                            <div class="prow3">
                                                                                                <span class="label">Atas Nama: </span><span class="field">xxx</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                    <div class="divTableCell">&nbsp;</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- DivTable.com -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

    <script src="<?= base_url() ?>js/justgage.js"></script>
    <script src="<?= base_url() ?>js/raphael-2.1.4.min.js"></script>

    <script src="<?= base_url() ?>js/example.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/page/profile.js" type="text/javascript"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var g2 = new JustGage({
                id: 'g2',
                value: <?= $individu['risk_id'] > 4 ? 90 : 60 ?>,
                min: 0,
                max: 100,
                symbol: '%',
                pointer: true,
                pointerOptions: {
                    toplength: -15,
                    bottomlength: 10,
                    bottomwidth: 12,
                    color: '#8e8e93',
                    stroke: '#ffffff',
                    stroke_width: 3,
                    stroke_linecap: 'round'
                },
                gaugeWidthScale: 0.6,
                textRenderer: customValue
            });

            function customValue(val) {
                if (val < 33) {
                    return 'Low';
                } else if (val > 66) {
                    return 'High';
                } else if (val >= 33 && val <= 66) {
                    return 'Moderate';
                }
            }

        });
    </script>


</body>

</html>