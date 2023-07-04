<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM egitimler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                            <li><span>-</span></li>
                            <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Eğitimlerimiz</a></li>
                            <li><span>-</span></li>
                            <li><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__left">
                            <div class="service-details__service-type-box">
                                <div class="service-details__service-title-box">
                                    <h3 class="service-details__service-title">Eğitimlerimiz</h3>
                                </div>
                                <ul class="service-details__service-list list-unstyled">
                                  <?php
                                      $veri_cek = $db->query("SELECT * FROM egitimler WHERE haber_durum = 1");
                                      if ($veri_cek->rowCount()){
                                      foreach($veri_cek as $veri_listele){
                                  ?>
                                    <li>
                                        <a href="<?php echo $ayarlar["strURL"]; ?>/egitim/<?php echo $veri_listele["haber_seo"]; ?>">

                                            <div class="service-details__service-content">
                                                <h4><?php echo 	$veri_listele["haber_baslik"]; ?></h4>
                                                <p>Yenigün İSG</p>
                                            </div>
                                        </a>
                                    </li>
                                    <?php
                                          }
                                        }else{
                                          "Listelenecek veri bulunamadı.";
                                        }
                                    ?>
                                  </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="service-details__finance-strategy">
                              <img style="width: 100%;margin-bottom: 30px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
                                <h3 class="service-details__finance-strategy-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h3>
                                <?php echo $tekil_veri_cek["haber_aciklama"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php include 'alt.php'; ?>
</body>
</html>
