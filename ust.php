
<div class="preloader">
  <div class="preloader__image"></div>
</div>

<div class="fixed">
<a href="<?php echo $ayarlar["strURL"]; ?>/teklif-alin"   class="thm-btn main-menu-three__btn"> <i class="far fa-handshake"></i> Hemen Teklif Alın</a >
</div>
<div class="page-wrapper">
  <header class="main-header-three">
    <div class="main-header-three__top">
      <div class="main-header-three__top-wrapper">
        <div class="main-header-three__top-inner">
          <div class="main-header-three__top-left">
            <div class="main-header-three__top-social-text-box">
              <div class="main-header-three__top-text-box">
                <div class="main-header__top-social">
                    <a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-linkedin"></i></a>
					
                </div>
				

<form action="<?php echo $ayarlar["strURL"]; ?>/arama.php" method="POST">
  <input style="    background: #1f1f1f;
    color: #fff;
    border: 1px solid #3a3a3a;
    padding-left: 22px;" type="text" name="arama_metni" placeholder="Arama Metni...">
  <button style="    padding: 0 20px 0px 20px;" type="submit" class="thm-btn contact-form-box__btn" name="arama_butonu">Ara</button>
</form>

              </div>
            </div>
          </div>
          <div class="main-header-three__top-right">
            <ul class="list-unstyled main-header-three__address-list">
              <li>
                <div class="icon">
                  <span class="far fa-envelope"></span>
                </div>
                <div class="content">
                  <p><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a></p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <span class="fas fa-phone-alt"></span>
                </div>
                <div class="content">
                  <p><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-menu main-menu-three">
      <div class="main-menu-three__wrapper">
        <div class="main-menu-three__wrapper-inner">
          <div class="main-menu-three__left">
            <div class="main-menu-three__logo">
              <a href="<?php echo $ayarlar["strURL"]; ?>/index"><img style="width: 175px;" src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/logo-2.png" alt="Gaziantep Yenigün İş Sağlığı ve Güvenliği Logosu"></a>
            </div>
            <div class="main-menu-three__main-menu-box">
              <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
              <ul class="main-menu__list">
			  <form class="d-block d-sm-none" action="<?php echo $ayarlar["strURL"]; ?>/arama.php" method="POST">
  <input style="    background: #1f1f1f;
    color: #fff;
    border: 1px solid #3a3a3a;
    padding-left: 22px;" type="text" name="arama_metni" placeholder="Arama Metni...">
  <button style="      width: 91%;   padding: 0 20px 0px 20px;" type="submit" class="thm-btn contact-form-box__btn" name="arama_butonu">Ara</button>
</form>

                <li>
                  <a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Kurumsal</a>
                  <ul>

                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Hakkımızda</a></li>


                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/politikalarimiz">Politikalarımız</a></li>

                  </ul>
                </li>

                  <li class="dropdown">
                    <a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a>
                    <ul>
                      <?php
                          $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 99");
                          if ($veri_cek->rowCount()){
                          foreach($veri_cek as $veri_listele){
                  ?>
                       <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                       <?php
                                 }
                               }else{
                                 "Listelenecek veri bulunamadı.";
                               }
                       ?>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="<?php echo $ayarlar["strURL"]; ?>/egitimler">Eğitimler</a>
                    <ul>
                      <?php
                          $veri_cek = $db->query("SELECT * FROM egitimler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 99");
                          if ($veri_cek->rowCount()){
                          foreach($veri_cek as $veri_listele){
                  ?>
                       <li><a href="<?php echo $ayarlar["strURL"]; ?>/egitim/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                       <?php
                                 }
                               }else{
                                 "Listelenecek veri bulunamadı.";
                               }
                       ?>
                    </ul>
                  </li>
                  <li>
                  <a href="<?php echo $ayarlar["strURL"]; ?>/referanslar">Referanslar</a>
                </li>
                <li>
                  <a href="<?php echo $ayarlar["strURL"]; ?>/makaleler">Makaleler</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo $ayarlar["strURL"]; ?>/#">Dökümanlar</a>
                  <ul>
                    <li><a href="https://kms.kaysis.gov.tr/Home/Kurum/24304011">Mevzuatlar</a></li>
                    <?php
                        $veri_cek = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0 AND dil_id = 'tr' ORDER BY kategori_ust_id ASC LIMIT 99");
                        if ($veri_cek->rowCount()){
                        foreach($veri_cek as $veri_listele){
                ?>
                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/dokuman-kategori/<?php echo $veri_listele["kategori_seo"]; ?>"><?php echo 	$veri_listele["kategori_baslik"]; ?></a></li>
                    <?php
                              }
                            }else{
                              "Listelenecek veri bulunamadı.";
                            }
                    ?>
                  </ul>
                </li>
                <li>
                  <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="main-menu-three__right">
            <div class="main-menu-three__right-content">
              <div class="main-menu-three__support-btn">
                <div class="main-menu-three__btn-box">
                  <a href="<?php echo $ayarlar["strURL"]; ?>/hesaplama" class="thm-btn main-menu-three__btn"><i class="fas fa-calculator"></i> İSG Hesaplama</a>
                </div>
                <div class="main-menu-three__support">
                  <div class="main-menu-three__support-icon">
                    <span class="icon-support"></span>
                  </div>
                  <div class="main-menu-three__support-content">
                    <h5 class="main-menu-three__support-sub-title">İletişim</h5>
                    <p class="main-menu-three__support-number"><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div>
  </div>
