<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>İletişim - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>İletişim</h2>
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
                            <li>İletişim</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section style="padding: 30px 0px 0px;" class="address">
           <div class="container">
               <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                       <div class="address__single">
                           <div class="address__icon">
                               <span class="icon-location"></span>
                           </div>
                           <div class="address__content">
                               <h4 class="address__title">Adres</h4>
                               <div class="address__phone-email">
                                   <p><?php echo $ayarlar["strAddress"]; ?></p>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                       <div class="address__single">
                           <div class="address__icon">
                               <span class="icon-support"></span>
                           </div>
                           <div class="address__content">
                               <h4 class="address__title">Telefon</h4>
                               <div class="address__phone-email">
                                   <p>
                                        <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a>
                                   </p>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                       <div class="address__single">
                           <div class="address__icon">
                               <span class="icon-envelope"></span>
                           </div>
                           <div class="address__content">
                               <h4 class="address__title">Eposta</h4>
                               <div class="address__phone-email">
                                   <p>
                                       <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a>
                                    </p>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
           </div>
       </section>
         <section style="padding: 0px 0 120px;" class="contact-form-box">
            <div class="container">
                <div class="contact-form-box__title-box">
                    <span>İletişime Geçin</span>
                    <h3>İletişim Formu</h3>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-form-box__left">
                          <?php
                   if(isset($submit)){
                     if(!empty($isim) ||  !empty($eposta) || !empty($telefon) || !empty($konu) ||  !empty($mesaj)){

                                          /*          require 'include/PHPMailer/src/Exception.php';
                                                   require 'include/PHPMailer/src/PHPMailer.php';
                                                   require 'include/PHPMailer/src/SMTP.php'; */
                                                   require_once("include/phpmailer/class.phpmailer.php");
                                                   $mail = new PHPMailer(true);
                                                   $mail->IsSMTP();
                                                   $mail->SMTPDebug = 0;
                                                   $mail->SMTPAuth = true;
                                                   $mail->SMTPSecure = "tls";
                                                   $mail->Host = "smtp.yandex.com";
                                                   $mail->Port = 587;
                                                     $mail->IsHTML(true);
                                                   $mail->SetLanguage("tr", "phpmailer/language");
                                                   $mail->CharSet ="utf-8";
                                                   $mail->Username = "info@yenigunisg.com.tr"; //yandex mail adresi
                                                   $mail->Password = "psbzogmdkbrsmsch";
                                                   $mail->SetFrom("info@yenigunisg.com.tr", "Yenigün İSG İletişim Formundan Gelen Mesaj"); // Mail attığımızda yazacak isim
                                                   $mail->AddAddress("info@yenigunisg.com.tr"); // Maili gondereceğimiz kişi/alıcı
                                                   $mail->Subject = "Yenigün İSG İletişim  Formundan Gelen Mesaj"; // Konu başlığı
                                                   $mail->Body = '
                                                   <html>
                                                       <body>
                                                           <table class="made-in_text" border="0" cellSpacing="10" cellPadding="4" height="254" width="700">
                               <tr>
                                                                   <td height="30" width="145" align="left">
                                                                   <font face="Tahoma" size="2"><strong>Adı :</strong></font></td>
                                                                   <td align="left" width="509" bgcolor="#F6FDEC">
                                                                   <font size="2" face="Tahoma">'. $isim . '</font></td>
                                                               </tr>
                                <tr>
                                                                   <td height="30" width="145" align="left">
                                                                   <font face="Tahoma" size="2"><strong>Eposta :</strong></font></td>
                                                                   <td align="left" width="509" bgcolor="#F6FDEC">
                                                                   <font size="2" face="Tahoma">'. $eposta . '</font></td>
                                                               </tr>
                         
                                  <tr>
                                                                   <td height="30" width="145" align="left">
                                                                   <font face="Tahoma" size="2"><strong>Telefon :</strong></font></td>
                                                                   <td align="left" width="509" bgcolor="#F6FDEC">
                                                                   <font size="2" face="Tahoma">'. $telefon . '</font></td>
                                                               </tr>
                                <tr>
                                                                   <td height="30" width="145" align="left">
                                                                   <font face="Tahoma" size="2"><strong>Mesaj :</strong></font></td>
                                                                   <td align="left" width="509" bgcolor="#F6FDEC">
                                                                   <font size="2" face="Tahoma">'. $mesaj . '</font></td>
                                                               </tr>

                                                           </table>
                                                       </body>
                                                   </html>
                                                   '; // Mailin içeriği

                       if($mail->send()){
                         $error = array(
                           'type'	=>	'success',
                           'title'	=>	'Başarılı!',
                           'text'	=>	'Mesajınız başarılı şekilde gönderildi, anasayfaya dönmek için <a class="alert-link" href="/">buraya tıklayın</a>..'
                         );
                       } else {
                         $error = array(
                           'type'	=>	'danger',
                         'title'	=>	'Hata!',
                         'text'	=>	'Boş alan bıraktınız, geri dönmek için <a class="alert-link" onclick="javascript:history.go(-1); return false;" href="#">buraya tıklayın</a>..'
                         );
                       }
                     } else {
                       $error = array(
                         'type'	=>	'danger',
                         'title'	=>	'Hata!',
                         'text'	=>	'Boş alan bıraktınız, geri dönmek için <a class="alert-link" onclick="javascript:history.go(-1); return false;" href="#">buraya tıklayın</a>..'
                       );
                     }
                   }
?>


                 <?php
     if(isset($error)) {
?>
         <div class="row">
           <div class="col-lg-12" style="margin-bottom:30px;">
             <div class="alert alert-<?php echo $error["type"]; ?> solid alert-dismissible fade show">
               <strong><?php echo $error["title"]; ?></strong>
               <p><?php echo $error["text"]; ?></p>
             </div>
           </div>
         </div>
<?php
     }
?>
                            <form  action="#" method="POST" class="contact-form-box__form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-form-box__input-box">
                                            <p>İsminiz</p>
                                            <input type="text" placeholder="İsminiz" name="isim">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-form-box__input-box">
                                            <p>Eposta Adresiniz</p>
                                            <input type="email" placeholder="Eposta Adresiniz" name="eposta">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-form-box__input-box">
                                            <p>Telefon</p>
                                            <input type="text" placeholder="+90 **** *** ****" name="telefon">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-form-box__input-box text-message-box">
                                            <textarea  name="mesaj" placeholder="Mesajınız"></textarea>
                                        </div>
                                        <div class="contact-form-box__btn-box">
                                            <button  name="submit"   class="thm-btn contact-form-box__btn">Gönder</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="contact-form-box__right">
                            <div class="contact-form-box__img">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/contact-form-box-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d795.8983771153961!2d37.37129603538523!3d37.06716889472421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e14f5bf96b17%3A0x5efb0a0596332229!2zxLBuY2lsaSBQxLFuYXIsIMWeaHQuIE1laG1ldCDDlnRlciBDZCwgMjcwOTAgxZ5laGl0a2FtaWwvR2F6aWFudGVw!5e0!3m2!1str!2str!4v1677500804189!5m2!1str!2str" class="google-map__one" allowfullscreen=""></iframe>
        </section>
      <?php include 'alt.php'; ?>
</body>

</html>
