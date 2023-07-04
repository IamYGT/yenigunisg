<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Makaleler - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Makaleler</h2>
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
                            <li>Makaleler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

                <section class="blog-two">
                    <div class="container">
                        <div class="row">
                          <?php
                              $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 99");
                              if ($veri_cek->rowCount()){
                              foreach($veri_cek as $veri_listele){
                       ?>    <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="blog-two__single">
                                    <div class="blog-two__img-box">
                                        <div class="blog-two__img">
                                            <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                                            <a href="<?php echo $ayarlar["strURL"]; ?>/makale/<?php echo $veri_listele["haber_seo"]; ?>">
                                                <span class="blog-two__plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-two__bottom">
                                        <div class="blog-two__meta-box">
                                            <div class="blog-two__date">
                                                <span><?php echo turkcetarih_formati('d',$veri_listele["haber_tarih"]);   ?></span>
                                                <p><?php echo turkcetarih_formati('m',$veri_listele["haber_tarih"]);   ?> / <?php echo turkcetarih_formati('Y',$veri_listele["haber_tarih"]);   ?></p>
                                            </div>
                                            <ul class="blog-two__meta list-unstyled">
                                                <li>
                                                    <a href="<?php echo $ayarlar["strURL"]; ?>/makale/<?php echo $veri_listele["haber_seo"]; ?>"><i class="fa fa-user"></i>Yenigün İSG</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-two__content-box">
                                            <h3 style="margin-bottom: 5px;" class="blog-two__title"><a href="<?php echo $ayarlar["strURL"]; ?>/makale/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h3>
                                            <p  style="margin-bottom: 13px;"> <?php echo 	$veri_listele["haber_kisaaciklama"]; ?> </p>
                                            <div class="blog-two__btn-box">
                                                <a href="<?php echo $ayarlar["strURL"]; ?>/makale/<?php echo $veri_listele["haber_seo"]; ?>"><span class="icon-right-arrow"></span>Devamını Oku</a>
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
