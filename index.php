<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<?php                             
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "users";
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$basliksorgu = "SELECT baslik FROM site";
$baslik = mysqli_query($con, $basliksorgu);
while ($row = $baslik->fetch_assoc()) {
    echo "<title>".$row['baslik']."</title>";
}
?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" href="Mersin_üniversitesi_amblemi.gif" type="image/x-icon" />
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="script.js"></script>

</head>
<script src="main.js"></script>
<body >

<section class="navigation">
  <div class="nav-container">
  
    <div class="brand">
     
           <img src="mersin-universitesi-logo.svg" height="70px"></a> 
    </div>
   
 
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
     
      <ul class="nav-list" >
        <li>
          <a href="#!">Anasayfa</a>
          
        </li>
        <li>
          <a href="#!">Üniversitemiz</a>
          <ul class="nav-dropdown" >
            <li>
            <a href="#!">içerik</a>
            <a href="#!">içerik</a>
            <a href="#!">içerik</a>
              <li>
              <a href="#!"><h3>içerik</h3></a>
              
             <li>                
               <a href="#!"></a>
            </li>
            </ul>                
            </li>
        <li>
          <a href="#!">Akademik</a>
           <ul class="nav-dropdown">
            <li>
              <a href="#!"></a>
            
         </li>
            <li>
              <a href="#!"></a>
          </li>
            
          <li>
              <a href="#!"></a>
          </li>  
          </ul>
          
        </li>
        </li>
        
        <li>
          <a href="#!">İdari</a>
          <ul class="nav-dropdown">
            <li>
            <a href="#!"> </a>
              <a href="#!"></a>
        </li>
            <li>
            <a href="#!"> </a>
              <a href="#!"> </a>
            </li>
         <li>
            <a href="#!"> </a>
         </li>
          </ul>
        </li>
        <li>
          <a href="#!">Öğrenci</a>
          <ul class="nav-dropdown">
        </li>
        <li>
             <a href="#!"></a>
      </li>
            <li>
              <a href="#!"></a>
            </li>
            <li>
              <a href="#!"></a>
          </li>
          </ul>
        
        <li>
          <a href="#!">Akademik Takvim</a>
          <ul class="nav-dropdown">
        <li>
              <a href="#!"></a>
              <a href="#!"></a>
        </li>
           
          </ul>
        </li>
         <li>
          <a href="#!">Kütüphane</a>
          <ul class="nav-dropdown">
        <li>
            <a href="#!"><h3> </h3></a>
     </ul>
        </li>
        
      </ul>
    </nav>
    
  </div>
</section>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="1489750667.jpg"  style="width:100%" height="25%" >

</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="1499872883.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="1499872808.jpg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides,1900 ) 
}
</script>


<div class="main">
<div class="row">
<?php                             
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "users";
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$haberler_sorgu = "SELECT baslik, aciklama, gorsel FROM haberler";
$haberler_cevap = $con->query($haberler_sorgu);

if($haberler_cevap->num_rows > 0) {
  while($row = $haberler_cevap->fetch_assoc()) {
        echo "<div class='column'>\n";
        echo "<div class='content'>\n";
        echo "<h3>".$row["baslik"]."</h3>\n";
        echo "<img src='".$row["gorsel"]."' style='width:100%'>\n"; 
        echo "<p>".$row["aciklama"]."</p>\n";
        echo "</div>\n";
        echo "</div>\n";
                              
    }
} 
?>
</div>
</div>


<table class="sl_duyuru">
<tr>
<?php                             
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "users";
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$duyurular_sorgu = "SELECT baslik, aciklama, link FROM duyurular";
$duyurular_cevap = $con->query($duyurular_sorgu);

if($duyurular_cevap->num_rows > 0) {
  while($row = $duyurular_cevap->fetch_assoc()) {
       echo "<td class='sl_duyuru_ikon'><i class='fa fa-paper-plane-o' aria-hidden='true'></i></td>";
        echo "<td class='sl_duyuru_baslik'>";
        echo "<b>".$row["baslik"]."</b>";
        echo "</td>"; 
        echo "<td>".$row["aciklama"]."<a href='".$row["link"]."'> tıklayınız...</a>\n";
        echo "</td>";
        echo "\n";                               
    }
} 
?>
</tr>
</table>

<script src="https://use.fontawesome.com/02e491ef33.js"></script>
<div class="container"></div>
<footer>
 
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">Hakkımızda</h2>
      <ul>
      Mersin Üniversitesi, TBMM'nin 3 Temmuz 1992 tarihinde kabul ettiği 3837 Sayılı Kanun ile kurulmuş,
       <br> 10 Kasım 1992 tarihinde faaliyete geçmiştir. <br> 2018-2019 eğitim-öğretim yılında yirmi altıncı yaşını dolduran Üniversitemiz, 
       <br> ilk mezunlarını 1997 yılı Haziran ayında vermiştir.  
       <br>
       <br>
      <h2 class="ft-title"><a href="/admin/login.php">Admin Girişi </a></h2>
    </ul>
    </div>


    <div class="ft-main-item">
      <h2 class="ft-title">Kaynaklar</h2>
      <ul>
        
        <li><a href="">Geziler</a></li>
        <li><a href="#">Seminerler</a></li>
        <li><a href="#">Fotoğraflar</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">İletişim</h2>
      <ul>
     <li><a href="mailto:meugs_info@mersin.edu.tr">E-posta <br> </a>meugs_info@mersin.edu.tr</li>
        <li><a href="tel:+90 324 361 0001">Telefon <br></a> +90 324 361 0001</li>
        <li><a href="mailto:oneri@mersin.edu.tr">Dilek, öneri ve şikayet için <br></a>oneri@mersin.edu.tr</li>
      </ul>
    </div>
    </div>
  </section>

 
  <section class="ft-social">
    <ul class="ft-social-list">
      <li><a href="https://www.facebook.com/meukurumsal"><i class="fab fa-facebook"></i></a></li>
      <li><a href="https://twitter.com/meukurumsal"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://www.instagram.com/meukurumsal/"><i class="fab fa-instagram"></i></a></li>
      
      <li><a href="https://www.youtube.com/channel/UCJ8ZDZ7bgrYBRgIV2SZDv6g"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </section>


  <section class="ft-legal">
    <ul class="ft-legal-list">
      
      <li><a href="http://mersin.edu.tr/dosyalar/Ayd%C4%B1nlatmaMetni_04032021.pdf">KİŞİSEL VERİLERİN KORUNMASI KANUNU</a></li>
      <li>&copy; 2021 © BAUM / Mersin Üniversitesi Bilgi İşlem Araştırma ve Uygulama Merkezi.</li>
    </ul>
  </section>
</footer>

<style>
* {
  box-sizing: border-box;
  font-family: "Lato", sans-serif;
  margin: 0;
  padding: 0;
  color: white;
  
}


.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}


.row,
.row > .column {
  padding: 8px;
}


.column {
  float: left;
  width: 25%;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.content {
  background-color: #1b1d44;
  padding: 10px;
}


@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}



ul {
  list-style: none;
  padding-left: 0;
}
footer {
  background-color: #1b1d44;
  color: white
  ;
  line-height: 1.5;
}
footer a {
  text-decoration: none;
  color: white;
}
a:hover {
  text-decoration: underline;
}
.ft-title {
  color: white;
  font-family: "Merriweather", serif;
  font-size: 1.375rem;
  padding-bottom: 0.625rem;
}


.container {
  flex: 1;
}

.ft-main {
  padding: 1.25rem 1.875rem;
  display: flex;
  flex-wrap: wrap;
}
@media only screen and (min-width: 29.8125rem /* 477px */) {
  .ft-main {
    justify-content: space-evenly;
  }
}
@media only screen and (min-width: 77.5rem /* 1240px */) {
  .ft-main {
    justify-content: space-evenly;
  }
}
.ft-main-item {
  padding: 1.25rem;
  min-width: 12.5rem;
}


form {
  display: flex;
  flex-wrap: wrap;
}
input[type="email"] {
  border: 0;
  padding: 0.625rem;
  margin-top: 0.3125rem;
}
input[type="submit"] {
  background-color: #00d188;
  color: #fff;
  cursor: pointer;
  border: 0;
  padding: 0.625rem 0.9375rem;
  margin-top: 0.3125rem;
}

.ft-social {
  padding: 0 1.875rem 1.25rem;
}
.ft-social-list {
  display: flex;
  justify-content: center;
  border-top: 1px #777 solid;
  padding-top: 1.25rem;
}
.ft-social-list li {
  margin: 0.5rem;
  font-size: 1.25rem;
}

.ft-legal {
  padding: 0.9375rem 1.875rem;
  background-color: #1b1d44;
}
.ft-legal-list {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
.ft-legal-list li {
  margin: 0.125rem 0.625rem;
  white-space: nowrap;
}

.ft-legal-list li:nth-last-child(2) {
    flex: 1;
}
body{
  background:#1b1d44;
}
</style>
</body>
</html>
