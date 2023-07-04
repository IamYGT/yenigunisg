<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM kategoriler WHERE kategori_durum = 1 AND kategori_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo 	$tekil_veri_cek["kategori_baslik"]; ?> - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2><?php echo 	$tekil_veri_cek["kategori_baslik"]; ?></h2>
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
                            <li><?php echo 	$tekil_veri_cek["kategori_baslik"]; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

                <section class="blog-two">
                    <div class="container">
                        <div class="row">
                          <?php
                                  $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' AND kategori_id = {$tekil_veri_cek["kategori_ust_id"]} ORDER BY proje_ust_id DESC LIMIT 99");
                                  if ($veri_cek->rowCount()){
                                  foreach($veri_cek as $veri_listele){
                             $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}' AND dil_id='tr'")->fetch(PDO::FETCH_ASSOC);
                              ?>


                           <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="blog-two__single">
                                    <div class="blog-two__img-box">
                                     
                                    </div>
                                    <div class="blog-two__bottom"> 
                                        <div class="blog-two__content-box">
                                            <h3 style="margin-bottom: 5px;" class="blog-two__title"><a href="<?php echo $ayarlar["strURL"]; ?>/dokuman/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></h3>
                                             <div class="blog-two__btn-box">
                                                <a href="<?php echo $ayarlar["strURL"]; ?>/dokuman/<?php echo $veri_listele["proje_seo"]; ?>"><span class="icon-right-arrow"></span>Devamını Oku</a>
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
