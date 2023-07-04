<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Referanslar - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Referanslar</h2>
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
                            <li>Referanslar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio-page-v-1" style="margin-bottom: 80px;">
            <div class="container">
                <div class="row">
                  <?php

                        $list = $db->query("SELECT * FROM files WHERE ustid = 3 AND itable = 1");
                          foreach($list as $row){
                   ?>
                     <div class="col-xl-4 col-lg-4 col-md-4 col-6" >
                        <div class="project-three__single">
                            <div class="project-three__img-box">
                                <div class="project-three__img">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" >
                                </div>
                            </div>
                            <div class="project-three__content">

                                <div class="project-three__tab-content-btn-box">
                                    <div class="project-three__tab-content-btn-shape-1"></div>
                                    <div class="project-three__tab-content-btn-shape-2"></div>
                                    <div class="project-three__tab-content-btn-shape-3"></div>
                                    <div class="project-three__tab-content-btn-shape-4"></div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <?php
                   }
                   ?>
               </div>
            </div>
        </section>

<?php include 'alt.php'; ?>
</body>
</html>
