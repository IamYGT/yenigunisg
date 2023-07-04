<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Hata! - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Hata!</h2>
                    <div class="thm-breadcrumb__box">
                        <div class="thm-breadcrumb__shape-1">
                            <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/thm-breadcrumb-shape-1.png" alt="">
                        </div>
                        <div class="thm-breadcrumb__shape-2">
                            <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/thm-breadcrumb-shape-2.png" alt="">
                        </div>
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                            <li><span>-</span></li>
                            <li>Hata!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="error-page" style="margin-bottom: 150px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <div class="error-page__title-box">
                                <h2 class="error-page__title">Hata!</h2>
                                <div class="error-page__shape-1 float-bob-x">
                                    <img src="assets/images/shapes/error-page-shape-1.png" alt="">
                                </div>
                            </div>
                            <h3 style="margin-bottom: 50px" class="error-page__tagline">Aradığınız Sayfa bulunamadı.
                            </h3>

                            <a href="<?php echo $ayarlar["strURL"]; ?>/index" class="thm-btn error-page__btn">Anasayfa</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<?php include 'alt.php'; ?>
</body>
</html>
