<?php
$servername = "localhost";
$username = "yenigun_db";
$password = "4Rg7$1vj5";
$dbname = "yenigun_db";

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset($conn, "utf8");


// Bağlantı hatası kontrolü
if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen arama metnini alma
$arama_metni = $_POST['arama_metni'];

// SQL sorgusunu oluşturma
$sql = "SELECT * FROM projeler WHERE proje_baslik LIKE '%$arama_metni%'";
$sql2 = "SELECT * FROM egitimler WHERE haber_baslik LIKE '%$arama_metni%'";
$sql3 = "SELECT * FROM hizmetler WHERE haber_baslik LIKE '%$arama_metni%'";
$sql4 = "SELECT * FROM haberler WHERE haber_baslik LIKE '%$arama_metni%'";

// Sorguyu veritabanında çalıştırma
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);



// Veritabanı bağlantısını kapat
$conn->close();
?> 
 
 <?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Arama Kelimeniz: <?php  echo $arama_metni ?> - Gaziantep Yenigün İş Sağlığı ve Güvenliği </title>
<?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Arama Kelimeniz: <?php  echo $arama_metni ?></h2>
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
                            <li>Arama Kelimeniz: <?php  echo $arama_metni ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> 
		 <section style="    padding: 60px 30px 220px;" class="about-one">
		 <div class="container">
		 		 <div class="row">

		<h1 style="margin-bottom: 22px;    text-align: center;    font-weight: 600;"> Talimatlar </h1>
<?php // Sonuçları gösterme
if ($result->num_rows > 0) {
  // Her satır için verileri döngü ile alma
  while($row = $result->fetch_assoc()) {
    
       ?> <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="blog-two__single">
                                    <div class="blog-two__img-box">
                                     
                                    </div>
                                    <div class="blog-two__bottom">  
                                        <div class="blog-two__content-box">
                                            <h3 style="margin-bottom: 5px;" class="blog-two__title"><a href="<?php echo $ayarlar["strURL"]; ?>/dokuman/<?= $row["proje_seo"]; ?>"> <?= $row["proje_baslik"]; ?> </a></h3>
                                             <div class="blog-two__btn-box">
                                                <a href="<?php echo $ayarlar["strURL"]; ?>/dokuman/<?= $row["proje_seo"]; ?>"><span class="icon-right-arrow"></span>Devamını Oku</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php
  }
} else {
  echo "Kayıt bulunamadı.";
}
?>
	</div>
	
	 		 <div class="row">

		<h1 style="margin-bottom: 22px;    text-align: center;    font-weight: 600;"> Eğitimler </h1>
<?php // Sonuçları gösterme
if ($result2->num_rows > 0) {
  // Her satır için verileri döngü ile alma
  while($row = $result2->fetch_assoc()) {
    
       ?> <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="blog-two__single">
                                    <div class="blog-two__img-box">
                                     
                                    </div>
                                    <div class="blog-two__bottom">  
                                        <div class="blog-two__content-box">
                                            <h3 style="margin-bottom: 5px;" class="blog-two__title"><a href="<?php echo $ayarlar["strURL"]; ?>/egitim/<?= $row["haber_seo"]; ?>"> <?= $row["haber_baslik"]; ?> </a></h3>
                                             <div class="blog-two__btn-box">
                                                <a href="<?php echo $ayarlar["strURL"]; ?>/egitim/<?= $row["haber_seo"]; ?>"><span class="icon-right-arrow"></span>Devamını Oku</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php
  }
} else {
  echo "Kayıt bulunamadı.";
}
?>
	</div>
	
	
	 		 <div class="row">

		<h1 style="margin-bottom: 22px;    text-align: center;    font-weight: 600;"> Hizmetlerimiz </h1>
<?php // Sonuçları gösterme
if ($result3->num_rows > 0) {
  // Her satır için verileri döngü ile alma
  while($row = $result3->fetch_assoc()) {
    
       ?> <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="blog-two__single">
                                    <div class="blog-two__img-box">
                                     
                                    </div>
                                    <div class="blog-two__bottom">  
                                        <div class="blog-two__content-box">
                                            <h3 style="margin-bottom: 5px;" class="blog-two__title"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?= $row["haber_seo"]; ?>"> <?= $row["haber_baslik"]; ?> </a></h3>
                                             <div class="blog-two__btn-box">
                                                <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?= $row["haber_seo"]; ?>"><span class="icon-right-arrow"></span>Devamını Oku</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php
  }
} else {
  echo "Kayıt bulunamadı.";
}
?>
	</div>
	
	<div class="row">

		<h1 style="margin-bottom: 22px;    text-align: center;    font-weight: 600;"> Makaleler </h1>
<?php // Sonuçları gösterme
if ($result4->num_rows > 0) {
  // Her satır için verileri döngü ile alma
  while($row = $result4->fetch_assoc()) {
    
       ?> <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="blog-two__single">
                                    <div class="blog-two__img-box">
                                     
                                    </div>
                                    <div class="blog-two__bottom">  
                                        <div class="blog-two__content-box">
                                            <h3 style="margin-bottom: 5px;" class="blog-two__title"><a href="<?php echo $ayarlar["strURL"]; ?>/makale/<?= $row["haber_seo"]; ?>"> <?= $row["haber_baslik"]; ?> </a></h3>
                                             <div class="blog-two__btn-box">
                                                <a href="<?php echo $ayarlar["strURL"]; ?>/makale/<?= $row["haber_seo"]; ?>"><span class="icon-right-arrow"></span>Devamını Oku</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php
  }
} else {
  echo "Kayıt bulunamadı.";
}
?>
	</div>
		</div>

        </section> 

      <?php include 'alt.php'; ?>
      </body>
      </html>
