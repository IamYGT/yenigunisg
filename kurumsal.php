<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Kurumsal - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Kurumsal</h2>
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
                            <li>Kurumsal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-one">
           <div class="about-one__shape-2 zoominout">
               <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/about-one-shape-2.png" alt="">
           </div>
           <div class="about-one__shape-3 float-bob-x">
               <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/about-one-shape-3.png" alt="">
           </div>
           <div class="about-one__shape-4 float-bob-y">
               <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/about-one-shape-4.png" alt="">
           </div>
           <div class="about-one__shape-5 float-bob-x">
               <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/about-one-shape-5.png" alt="">
           </div>
           <div class="about-one__shape-6 float-bob-x">
               <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/about-one-shape-6.png" alt="">
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xl-7">
                       <div class="about-one__left">
                           <div class="section-title text-left">
                               <span class="section-title__tagline">Yenigün İş Sağlığı ve Güvenliği</span>
                               <h2 class="section-title__title">Bizi daha yakından <br> tanıyın.</h2>
                           </div>
                            <?php echo $ayarlar["hakkimizda_tr"]; ?>
                          </div>
                   </div>
                   <div class="col-xl-5">
                       <div class="about-one__right">
                           <div class="about-one__right-img-box">
                               <div class="about-one__right-img">
                                   <img src="assets/images/resources/about-one-img-2.png" alt="">
                               </div>
                               <div class="about-one__right-global-country">
                                   <span class="global-country__plus">+</span><h3 class="odometer" data-count="10">00</h3>
                                   <p class="global-country__text">Yıllık Tecrübe</p>
                                   <div class="about-one__shape-1">
                                       <img src="assets/images/shapes/about-one-shape-1.png" alt="">
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <section class="project-three">
                 <div class="project-three__shape-1">
                     <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/project-three-shape-1.png" alt="">
                 </div>
                 <div class="project-three__shape-2">
                     <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/project-three-shape-2.png" alt="">
                 </div>
                 <div class="project-three__shape-3">
                     <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/project-three-shape-3.png" alt="">
                 </div>
                 <div class="container">
                     <div class="section-title text-center">
                         <span class="section-title__tagline">Yenigün İş Sağlığı ve Güvenliği</span>
                         <h2 class="section-title__title">Hizmetlerimiz</h2>
                     </div>
                     <div class="project-three__inner">
                         <div class="project-three__big-text">HİZMETLERİMİZ</div>
                         <div class="project-three__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                             "items": 3,
                             "margin": 30,
                             "smartSpeed": 700,
                             "loop":true,
                             "autoplay": 6000,
                             "nav":true,
                             "dots":false,
                             "navText": ["<span class=\"icon-left-arrow1\"></span>","<span class=\"icon-right-arrow\"></span>"],
                             "responsive":{
                                 "0":{
                                     "items":1
                                 },
                                 "768":{
                                     "items":2
                                 },
                                 "992":{
                                     "items": 2
                                 },
                                 "1200":{
                                     "items": 3
                                 }
                             }
                         }'>

                         <?php
                             $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 9");
                             if ($veri_cek->rowCount()){
                             foreach($veri_cek as $veri_listele){
                       ?>
                             <div class="item">
                                 <div class="project-three__single">
                                     <div class="project-three__img-box">
                                         <div class="project-three__img">
                                             <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                                         </div>
                                     </div>
                                     <div class="project-three__content">
                                         <div class="project-three__content-inner">
                                             <h3 class="project-three__title"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h3>
                                             <p class="project-three__sub-title">Yenigün İş Sağlığı ve Güvenliği</p>
                                         </div>
                                         <div class="project-three__tab-content-btn-box">
                                              <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>">Devamını Oku <span class="icon-right-arrow2"></span></a>
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
                 </div>
             </section>


             <section class="team-one">
                         <div class="team-one__bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/team-one-bg.jpg);"></div>
                         <div class="container">
                             <div class="section-title text-center">
                                 <span class="section-title__tagline">Yenigün İş Sağlığı ve Güvenliği</span>
                                 <h2 class="section-title__title">Referanslar</h2>
                             </div>
                             <div class="team-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                               "items": 5,
                               "margin": 30,
                               "smartSpeed": 700,
                               "loop":true,
                               "autoplay": 6000,
                               "nav":false,
                               "dots":true,
                               "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                               "responsive":{
                                   "0":{
                                       "items":2
                                   },
                                   "768":{
                                       "items":4
                                   },
                                   "992":{
                                       "items": 5
                                     }
                                 }
                             }'>


                             <?php

                                   $list = $db->query("SELECT * FROM files WHERE ustid = 3 AND itable = 1");
                                     foreach($list as $row){
                              ?>

                                  <div class="item">
                                     <div class="team-one__single">
                                         <div class="team-one__single-inner">
                                             <div class="team-one__img">
                                                 <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" alt="">
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

     <div class="testimonial-one" style="padding: 120px 0px 300px;">
           <div class="container">
               <div class="section-title text-center">
                   <span class="section-title__tagline">Yenigün İş Sağlığı ve Güvenliği</span>
                   <h2 class="section-title__title">Müşteri Yorumları</h2>
               </div>
               <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                   "items": 3,
                   "margin": 30,
                   "smartSpeed": 700,
                   "loop":true,
                   "autoplay": 6000,
                   "nav":false,
                   "dots":false,
                   "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                   "responsive":{
                       "0":{
                           "items":1
                       },
                       "768":{
                           "items":2
                       },
                       "992":{
                           "items": 3
                       }
                   }
               }'>

               <?php
                   $veri_cek = $db->query("SELECT * FROM nedenildi WHERE haber_durum = 1");
                   if ($veri_cek->rowCount()){
                   foreach($veri_cek as $veri_listele){
             ?>
                    <div class="item">
                       <div class="testimonial-one__single">
                           <div class="testimonial-one__shape-1">
                               <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                           </div>
                           <div class="testimonial-one__shape-2">
                               <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
                           </div>
                           <div class="testimonial-one__client-details">
                               <div class="testimonial-one__client-rate">
                                   <span class="icon-star"></span>
                                   <span class="icon-star"></span>
                                   <span class="icon-star"></span>
                                   <span class="icon-star"></span>
                                   <span class="icon-star"></span>
                                </div>
                               <h4 class="testimonial-one__client-name"><?php echo 	$veri_listele["haber_baslik"]; ?></h4>
                               <p class="testimonial-one__client-sub-title">Müşteri</p>
                           </div>
                           <div class="testimonial-one__client-img">
                               <img src="assets/images/testimonial/testimonial-1-1.png" alt="">
                               <div class="testimonial-one__client-quote">
                                   <span class="icon-quote-hand-drawn"></span>
                               </div>
                           </div>
                           <p class="testimonial-one__text"><?php echo 	$veri_listele["haber_aciklama"]; ?> </p>
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
       </div>


      <?php include 'alt.php'; ?>
      </body>
      </html>
