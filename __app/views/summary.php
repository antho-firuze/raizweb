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

    <title>Ringkasan Investasi | The Company</title>
</head>

<body class="summary">

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
                            <a href="<?= base_url('frontend/profile') ?>"><span class="text">profile</span></a>
                        </li>
                        <li class="item-104 current">
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
                                                    <li class="item-103">
                                                        <a href="<?= base_url('frontend/profile') ?>"><span class="text">profile</span></a>
                                                    </li>
                                                    <li class="item-104 current">
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
                                        <img src="<?= base_url() ?>images/header-summary.jpg" />
                                    </div>
                                    <div class="page-header">
                                        <h2>Ringkasan Investasi</h2>
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
                                        <form id="formSummary">
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
                                                                <div class="mataUang">
                                                                    <div class="colUang">
                                                                        <span class="label">
                                                                            <label class="ccy_id" for="ccy_id">Mata Uang: </label>
                                                                        </span>
                                                                        <span class="value">
                                                                            <select name="ccy_id">
                                                                                <option value="1">Rupiah</option>
                                                                                <option value="2">US Dollar</option>
                                                                                <option value="3">SGD Dollar</option>
                                                                                <option value="14">AUS Dollar</option>
                                                                                <option value="4">Yen</option>
                                                                            </select>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="divTableCell">
                                                            <div class="wrapBtn">
                                                                <div class="cellBtn"><button>Subscribe Baru</button></div>
                                                                <div class="cellBtn"><button>Redeem</button></div>
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
                                                                            <div class="divTable">
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="nilaiInvest">
                                                                                            <div class="colInvest">
                                                                                                <span class="label">NILAI INVESTASI:</span>
                                                                                                <span class="value"><?= $sum_unit_value ?></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="biayaPembelian">
                                                                                            <div class="colPembelian">
                                                                                                <span class="label">BIAYA PEMBELIAN:</span>
                                                                                                <span class="value"><?= $sum_cost_total ?></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="divTableRow">
                                                                                    <div class="divTableCell">
                                                                                        <div class="nilaiInvest">
                                                                                            <div class="colPembelian">
                                                                                                <span class="label">UNTUNG/RUGI BELUM DIREALISASI:</span>
                                                                                                <span class="value"><?= $sum_unrealized ?></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="divTableCell">
                                                                                        <div class="persentasi">
                                                                                            <div class="colPersentasi">
                                                                                                <span class="value"><?= $percentage ?>%</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="divTableRow">
                                                                        <div class="divTableCell">
                                                                            <div class="alokasiReksadana">
                                                                                <div class="colGrafikPie">
                                                                                    <div class="label">
                                                                                        <h3>ALOKASI REKSADANA</h3>
                                                                                    </div>
                                                                                    <div id="donutchart"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="divTableCell right dataInvestasi">
                                                            <div id="investasiData" class="divTable">
                                                                <div class="divTableBody">
                                                                    <div class="divTableRow GrafikChart">
                                                                        <div class="divTableCell">
                                                                            <div class="divTable">
                                                                                <div class="divTableBody">
                                                                                    <div class="divTableRow">
                                                                                        <div class="divTableCell">
                                                                                            <div class="label">
                                                                                                <h3>PERTUMBUHAN NILAI INVESTASI</h3>
                                                                                            </div>
                                                                                            <div id="chart_div" style="width: 100%; height: 500px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- DivTable.com -->
                                                                        </div>
                                                                    </div>
                                                                    <h3>Daftar Reksa Dana Yang Dimiliki</h3>
                                                                    <div id="rincianReksadana" class="divTableRow">
                                                                        <div class="divTableCell rincianReksadana">
                                                                            <table>
                                                                                <thead>
                                                                                    <tr>
                                                                                        <td class="product">Produk</td>
                                                                                        <td>Saldo Unit</td>
                                                                                        <td>NAV/Unit</td>
                                                                                        <td>Nilai Investasi</td>
                                                                                        <td>Biaya Pembelian</td>
                                                                                        <td>L/R Belum Direalisasikan</td>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php foreach ($rows ?? [] as $k => $v) { ?>
                                                                                        <tr>
                                                                                            <td data-label="Produk" class="product"><?= $v['portfolio_nameshort'] ?></td>
                                                                                            <td data-label="Saldo Unit"><?= $v['unit_balance'] ?></td>
                                                                                            <td data-label="NAV/Uni"><?= $v['unit_price'] ?></td>
                                                                                            <td data-label="Nilai Investasi"><?= $v['unit_value'] ?></td>
                                                                                            <td data-label="Biaya Pembelian"><?= $v['cost_total'] ?></td>
                                                                                            <td data-label="L/R Belum Direalisasikan"><?= $v['unrealized'] ?></td>
                                                                                        </tr>
                                                                                    <?php }; ?>
                                                                                    <!-- <tr>
                                                                                        <td data-label="Produk" class="product">xxx</td>
                                                                                        <td data-label="Saldo Unit">xxx</td>
                                                                                        <td data-label="NAV/Uni">xxx</td>
                                                                                        <td data-label="Nilai Investasi">xxx</td>
                                                                                        <td data-label="Biaya Pembelian">xxx</td>
                                                                                        <td data-label="L/R Belum Direalisasikan">xxx</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td data-label="Produk" class="product">xxx</td>
                                                                                        <td data-label="Saldo Unit">xxx</td>
                                                                                        <td data-label="NAV/Uni">xxx</td>
                                                                                        <td data-label="Nilai Investasi">xxx</td>
                                                                                        <td data-label="Biaya Pembelian">xxx</td>
                                                                                        <td data-label="L/R Belum Direalisasikan">xxx</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td data-label="Produk" class="product">xxx</td>
                                                                                        <td data-label="Saldo Unit">xxx</td>
                                                                                        <td data-label="NAV/Uni">xxx</td>
                                                                                        <td data-label="Nilai Investasi">xxx</td>
                                                                                        <td data-label="Biaya Pembelian">xxx</td>
                                                                                        <td data-label="L/R Belum Direalisasikan">xxx</td>
                                                                                    </tr> -->
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="<?= base_url() ?>js/example.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/page/summary.js" type="text/javascript"></script>

    <script>
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Produk', 'Alokasi'],
                <?php foreach ($allocate ?? [] as $k => $v) { ?>['<?= $v['desc'] ?>', <?= $v['sum_asset_value'] ?>],
                <?php }; ?>
            ]);

            var options = {
                legend: 'none',
                fontSize: 12,
                pieHole: 0.4,
                pieSliceTextStyle: {
                    color: 'black'
                },
                titleTextStyle: {
                    fontSize: 14
                },

                chartArea: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Date', 'Investment'],
                <?php foreach ($history ?? [] as $k => $v) { ?>['<?= $k ?>', <?= $v['sum_value'] ?>],
                <?php }; ?>
            ]);

            var options = {
                legend: 'none',
                'width': '100%',
                vAxis: {
                    minValue: 0,
                    maxValue: <?= $historyMaxValue ?>,
                    format: '#,###.##\'',
                    textStyle: {
                        fontSize: 10
                    }
                },
                hAxis: {
                    textStyle: {
                        fontSize: 10
                    }
                },
                chartArea: {
                    left: 40,
                    right: 25,
                    top: 50,
                    bottom: 50
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);

            function resizeHandler() {
                chart.draw(data, options);
            }
            if (window.addEventListener) {
                window.addEventListener('resize', resizeHandler, false);
            } else if (window.attachEvent) {
                window.attachEvent('onresize', resizeHandler);
            }

        }
    </script>

</body>

</html>