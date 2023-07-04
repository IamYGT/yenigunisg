<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__contact-box">
                        <div class="footer-widget__logo-box">
                            <div class="footer-widget__logo">
                                <a href="<?php echo $ayarlar["strURL"]; ?>/index"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/footer-logo.png" alt="Logo"></a>
                            </div>
                        </div>
                        <ul class="footer-widget__contact list-unstyled">
                            <li>
                                <div class="icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="text">
                                    <p>
                                         <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon icon-two">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="text">
                                    <p><?php echo $ayarlar["strAddress"]; ?></p>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-widget__social-box list-unstyled">
                            <li>
                                <a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__services">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">Hızlı Menü</h4>
                        </div>
                        <ul class="footer-widget__services-list list-unstyled">
                          <li>
                            <a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a>
                          </li>
                          <li>
                            <a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Kurumsal</a>
                          </li>
                            <li>
                            <a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a>
                          </li>
                            <li>
                            <a href="<?php echo $ayarlar["strURL"]; ?>/egitimler">Eğitimler</a>
                          </li>
                          <li>
                            <a href="<?php echo $ayarlar["strURL"]; ?>/makaleler">Makaleler</a>
                          </li>
                          <li>
                            <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__services">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">Eğitimlerimiz</h4>
                        </div>
                        <ul class="footer-widget__services-list list-unstyled">
                          <?php
                      				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 6");
                       				if ($veri_cek->rowCount()){
                      				foreach($veri_cek as $veri_listele){
                      ?>
                          <li>
                            <a href="<?php echo $ayarlar["strURL"]; ?>/egitim/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a>
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
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__latest-post">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">Son Makaleler</h4>
                        </div>
                        <ul class="footer-widget__latest-post-list list-unstyled">
                          <?php
                             $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 2");
                               if ($veri_cek->rowCount()){
                             foreach($veri_cek as $veri_listele){
                      ?>
                            <li>
                                <div class="footer-widget__latest-post-content">
                                    <p class="footer-widget__latest-post-date"><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></p>
                                    <h5 class="footer-widget__latest-post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/makale/<?php echo $veri_listele["haber_seo"]; ?>">
                                            <?php echo 	$veri_listele["haber_baslik"]; ?></a></h5>
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
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">©  <?php echo date("Y"); ?> Yenigün İş Sağlığı ve Güvenliği - Her Hakkı Saklıdır. <br> Design By: <a  style="color: white" href="https://www.memsidea.com" rel="dofollow"> Gaziantep Web Tasarım</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
    <div class="logo-box">
        <a href="<?php echo $ayarlar["strURL"]; ?>/index" aria-label="logo image"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/logo-1.png" width="150" alt="Yenigün ISG Logosu"></a>
    </div>
    <div class="mobile-nav__container"></div>
    <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a>
        </li>
        <li>
            <i class="fa fa-phone-alt"></i>
            <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a>
        </li>
    </ul>
    <div class="mobile-nav__top">
        <div class="mobile-nav__social">
            <a href="<?php echo $ayarlar["strTwitter"]; ?>" class="fab fa-twitter"></a>
            <a href="<?php echo $ayarlar["strFacebook"]; ?>" class="fab fa-facebook-square"></a>
            <a href="<?php echo $ayarlar["strYoutube"]; ?>" class="fab fa-youtube"></a>
            <a href="<?php echo $ayarlar["strInstagram"]; ?>" class="fab fa-instagram"></a>
        </div>
    </div>
</div>
</div>
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
 <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/odometer/odometer.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/swiper/swiper.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/wow/wow.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/isotope/isotope.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/countdown/countdown.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/vegas/vegas.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/timepicker/timePicker.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/circleType/jquery.circleType.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/circleType/jquery.lettering.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/corpai.js"></script>
<style media="screen">
.fixed {
  position: fixed;
  bottom: 523px;
  right: -20px;
  top: 343px;
  width: 250px;
   z-index:999999999 !important;
}
</style>
