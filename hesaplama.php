<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>İş Sağlığı ve Güvenliği Hesaplama - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>İş Sağlığı ve Güvenliği Hesaplama</h2>
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
                            <li>İş Sağlığı ve Güvenliği Hesaplama</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section style="padding: 30px 0px 250px 0px;" class="address">
          <div class="container">
                      <div style="margin-top:40px; margin-bottom: 40px;" class="row">
                          <div class="col-9"><input type="text" class="form-control" id="calisan_sayisi" placeholder="Çalışan Sayısını Bu Alana Rakam olarak giriniz Örn: 50" required="">
                          </div>
                          <div class="col-3"><button type="button" class="btn btn-success" onclick="sureHesaplauzman('uzman') + sureHesaplahekim('hekim') + sureHesaplasaglik('saglikpersoneli') + sureHesaplailkyardim('ilkyardimci') + sureHesaplayangin('yanginci')";> Hesapla </button></div>
                      </div>
                      <div class="panel panel-default">
  <div class="center-block fix-width scroll-inner">

                  <table class="table" style="width: 100%">
                          <thead>
                                  <tr>
                                      <th>Tehlike Sınıfı</th>
                                      <th>Hizmet Verebilecek Uzmanlık Sınıfı</th>
                                      <th>Uzman Süre</th>
                                      <th>Hekim Süre</th>
                                      <th>Saglik P. Süre</th>
                                  </tr>
                          </thead>
                      <tbody>
                          <tr>
                              <td>Az Tehlikeli</td>
                              <td>A, B, C</td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureUC"></label></td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureHC"></label></td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureSC"></label></td>
                          </tr>
                          <tr>
                              <td>Tehlikeli</td>
                              <td>A, B</td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureUB"></label></td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureHB"></label></td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureSB"></label></td>
                          </tr>
                          <tr>
                              <td>Çok Tehlikeli</td>
                              <td>A</td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureUA"></label></td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureHA"></label></td>
                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureSA"></label></td>
                          </tr>
                      </tbody>
                  </table>
                </div>
                </div>


              <br>
              <div class="row">
                          <div class="col-6">
                              <div class="alert alert-info" role="alert">
                                  <b>İş Güvenliği Uzmanlığı</b> Görev Yetki Sorumlulukları hk yönetmelik kapsamında Tehlike sınıflarına göre Çalışan Başına<br>
                                  Az Tehlikeli&nbsp;&nbsp;: 10 dakika<br>
                                  Tehlikeli&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 20 dakika<br>
                                  Çok Tehlikeli: 40 dakika<br>
                                  <b>İş Güvenliği Uzmanı</b> görevlendirmesi yapılmalıdır.<br>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="alert alert-success" role="alert">
                                  <b>İşyeri Hekimleri</b> ve DSP Yetki Sorumlulukları hk yönetmelik kapsamında Tehlike sınıflarına göre Çalışan Başına<br>
                                  Az Tehlikeli&nbsp;&nbsp;: 5 dakika<br>
                                  Tehlikeli&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 10 dakika<br>
                                  Çok Tehlikeli: 15 dakika<br>
                                  <b>İşyeri Hekimi</b> görevlendirmesi yapılmalıdır.<br>
                              </div>
                          </div>

              </div>
                          <div class="row">
                              <div class="col-12">
                                  <div class="alert alert-danger" role="alert">
                                      İşyeri Hekimleri ve <b>DSP</b> Yetki Sorumlulukları hk yönetmelik kapsamında Sadece Çok Tehilkeli sınıfta Çalışan Sayılarına Göre<br>
                                      Çok Tehlikeli Sınıfta olup Çalışan sayısı 10 ila 49 olan işletmelerde Çalışan Başına&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10 Dakika<br>
                                      Çok Tehlikeli Sınıfta olup Çalışan sayısı 50 ila 249 olan işletmelerde Çalışan Başına&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15 Dakika<br>
                                      Çok Tehlikeli Sınıfta olup Çalışan sayısı 250 den fazla olan işletmelerde Çalışan Başına 20 Dakika<br>
                                      <b>Diğer Sağlık Personeli</b> görevlendirmesi yapılmalıdır.
                                  </div>
                              </div>
                          </div>
              <br>
              <h3>İlkyardımcı Görevlendirme Zorunluluğu</h3>
              <p>Tehlike sınıfına göre işletmenizde görevlendirilmesi gereken İlkyardımcı kişi sayısı aşağıdaki gibidir.</p>

                          <div class="row">
                              <div class="col-12">
                                <div class="panel panel-default">
  <div class="center-block fix-width scroll-inner">

                                  <table class="table">
                                      <thead>
                                          <tr>
                                              <th>Tehlike Sınıfı</th>
                                              <th>Kişi Sayısı</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Az Tehlikeli</td>
                                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureIC"></label></td>
                                          </tr>
                                          <tr>
                                              <td>Tehlikeli</td>
                                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureIB"></label></td>
                                          </tr>
                                          <tr>
                                              <td>Çok Tehlikeli</td>
                                              <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureIA"></label></td>
                                          </tr>

                                      </tbody>
                                  </table>
                              </div>
                              </div>
                              </div>
                          </div>

                  <br>
                          <div class="row">
                              <div class="col-12">
                                  <div class="alert alert-secondary" role="alert">
                                      <b>İlkyardımcı Bulundurulması -İlkyardım Yönetmeliği</b><br>
                                      <b>MADDE 19</b>(1) İş Sağlığı ve Güvenliği Kapsamında;</br>
                                      a) Az tehlikeli işyerlerinde, &nbsp;&nbsp;her 20 çalışan için &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 ilkyardımcı,<br>
                                      b) Tehlikeli işyerlerinde, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;her 15 çalışana kadar 1 ilkyardımcı,<br>
                                      c) Çok tehlikeli işyerlerinde, her 10 çalışana kadar 1 ilkyardımcı,<br>
                                      bulundurulması zorunludur.
                                  </div>
                              </div>
                          </div>

                  <br>
                  <h3>Yangın Personeli Görevlendirme Zorunluluğu</h3>
              <p>Tehlike sınıfına göre işletmenizde görevlendirilmesi gereken Yangın Personeli sayısı aşağıdaki gibidir.</p>
                      <div class="row">
                          <div class="col-12">
                            <div class="panel panel-default">
  <div class="center-block fix-width scroll-inner">

                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th>Tehlike Sınıfı</th>
                                          <th>Kişi Sayısı</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Az Tehlikeli</td>
                                          <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureYC"></label></td>
                                      </tr>
                                      <tr>
                                          <td>Tehlikeli</td>
                                          <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureYB"></label></td>
                                      </tr>
                                      <tr>
                                          <td>Çok Tehlikeli</td>
                                          <td style="font-size: 14px; color: #cc0000; font-weight: bold;"><label id="sureYA"></label></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                          </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-12">
                              <div class="alert alert-primary" role="alert">
                                  <p><b>Görevlendirilecek Çalışanların Belirlenmesi -İşyerlerinde Acil Durumlar Hk. Yönetmelik</b></p>
                                  <p><b>MADDE 11</b>(1) İşveren; işyerlerinde tehlike sınıflarını tespit eden Tebliğde belirlenmiş olan çok tehlikeli sınıfta yer alan işyerlerinde 30 çalışana, tehlikeli sınıfta yer alan işyerlerinde 40 çalışana ve az tehlikeli sınıfta yer alan işyerlerinde 50 çalışana kadar;</p>
                                  <p>a) Arama, kurtarma ve tahliye,</p>
                                  <p>b) Yangınla mücadele,</p>
                                  <p>konularının her biri için uygun donanıma sahip ve özel eğitimli en az birer çalışanı destek elemanı olarak görevlendirir. İşyerinde bunları aşan sayılarda çalışanın bulunması halinde, tehlike sınıfına göre her 30, 40 ve 50’ye kadar çalışan için birer destek elemanı daha görevlendirir.</p>
                              </div>
                          </div>
                      </div>
          </div>
       </section>
      <?php include 'alt.php'; ?>
      <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/hesapla.js"></script>
      <style media="screen">
      .fix-width {
 overflow-y: hidden;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}

.table {
width: 700px;
margin-bottom: 0;
max-width: none;
}

.panel {
padding: 15px;
}

// Scrollbar Override
.scroll-inner {
&::-webkit-scrollbar {
  width: 10px;
}
&::-webkit-scrollbar:horizontal {
  height: 10px;
}
&::-webkit-scrollbar-track {
  background-color: transparentize(#ccc, 0.7);
}
&::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background: transparentize(#ccc, 0.5);
  box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}


}

      </style>
</body>
</html>
