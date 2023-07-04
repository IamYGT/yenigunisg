<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Hizmetlerimiz - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Hizmetlerimiz</h2>
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
                            <li>Hizmetlerimiz</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="services-page-v-1">
            <div class="container">
                <div class="row">
                  <?php
                      $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 99");
                      if ($veri_cek->rowCount()){
                      foreach($veri_cek as $veri_listele){
                ?>
                     <div class="col-xl-6 col-lg-6">
                        <div class="services-two__single">
                            <div class="services-two__img">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                            </div>
                            <div class="services-two__inner">

                                <div class="services-two__content-box">
                                    <div class="services-two__content">
                                        <h3 class="services-two__title"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h3>
                                        <p class="services-two__text"><?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
                                    </div>
                                    <div class="services-two__arrow">
                                         <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                          }else{
                            "Listelenecek veri bulunamadı.";
                          }
                    ?>
               </div>
            </div>
        </section>

<?php include 'alt.php'; ?>
</body>
</html>
