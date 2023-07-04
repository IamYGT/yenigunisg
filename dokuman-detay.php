<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND proje_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["proje_baslik"]; ?> - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2><?php echo $tekil_veri_cek["proje_baslik"]; ?></h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                            <li><span>-</span></li>
                            <li><?php echo $tekil_veri_cek["proje_baslik"]; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__inner">
                                <div class="blog-details__img-box">
                                    <div class="blog-details__img">
                                        <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" alt="<?php echo $tekil_veri_cek["proje_baslik"]; ?>">

                                    </div>
                                     
                                </div>
                                <div class="blog-details__content-box">
                                    <h3 class="blog-details__title-1"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h3>
                                  <?php echo $tekil_veri_cek["proje_aciklama"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                          <div class="sidebar__single sidebar__post">
                              <div class="sidebar__title-box">
                                  <h3 class="sidebar__title">Son Makaleler</h3>
                              </div>
                              <ul class="sidebar__post-list list-unstyled">
                                <?php
                                    $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 3");
                                    if ($veri_cek->rowCount()){
                                    foreach($veri_cek as $veri_listele){
                            ?>
                            <li>
                                      <div class="sidebar__post-image">
                                          <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                                      </div>
                                      <div class="sidebar__post-content">
                                          <span class="sidebar__post-content-meta"><i class="icon-calendar-date-time"></i>
                                              <?php echo turkcetarih_formati('j F Y',$veri_listele["haber_tarih"]);   ?></span>
                                          <h3>
                                              <a href="<?php echo $ayarlar["strURL"]; ?>/makale/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a>
                                          </h3>
                                      </div>
                                  </li>
                                  <?php
                                            }
                                          }else{
                                            "Listelenecek veri bulunamadı.";
                                          }
                                  ?>
                              </ul>
                          </div>
                            <div class="sidebar__single sidebar__category">
                                <div class="sidebar__title-box">
                                    <h3 class="sidebar__title">Hizmetlerimiz</h3>
                                </div>
                                <ul class="sidebar__category-list list-unstyled">
                                  <?php
                                      $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                                      if ($veri_cek->rowCount()){
                                      foreach($veri_cek as $veri_listele){
                                ?>
                                    <li>
                                        <div class="Sidebar__category-list-left">
                                            <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a>
                                        </div>
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
                </div>
            </div>
        </section>
<?php include 'alt.php'; ?>
</body>
</html>
