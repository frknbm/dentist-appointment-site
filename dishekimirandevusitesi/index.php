<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'randevunuz başarılı!';
   }else{
      $message[] = 'randevunuz başarısız';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dis randevu al</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dent<span>abay</span></a>

         <nav class="nav">
            <a href="#home">anasayfa</a>
            <a href="#about">hakkımızda</a>
            <a href="#services">dental tedaviler</a>
            <a href="#reviews">hekimlerimiz</a>
            <a href="#contact">Randevu</a>
         </nav>

         <a href="#contact" class="link-btn">randevu al</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>



<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>bizimle daha iyi gülümse</h3>
            <p> Ağız ve Diş Sağlığı Merkezi olarak yüksek standartlarda kaliteli hizmeti uygun fiyatlarla sunduğumuz için yurtdışı hastalar tarafından tercih edilmekteyiz.
</p>
            <a href="#contact" class="link-btn">randevu al</a>
         </div>
      </div>

   </div>

</section>





<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/dis3.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>hakkımızda </span>
            <h3>Buraya gel ve sağlıklı bir gülüşe sahip ol</h3>
            <p> Ağız ve Diş Sağlığı Merkezi olarak yüksek standartlarda kaliteli hizmeti uygun fiyatlarla sunduğumuz için yurtdışı hastalar tarafından tercih edilmekteyiz.</p>
            <a href="#contact" class="link-btn">randevu al</a>
         </div>

      </div>

   </div>

</section>


  


<section class="services" id="services">

   <h1 class="heading">dental tedaviler</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Diş Beyazlatma</h3>
         <p> Çeşitli nedenlerle renk değiştirmiş dişleri beyazlatmak veyakişiye özel diş rengini birkaç ton   açmak için kullanılan bir oksijenasyon yöntemidir.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Endodonti</h3>
         <p>Endodonti dişlerde bulunan kök kanallarının tedavisi ile uğraşan bir branştır. </p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Kanal Tedavisi</h3>
         <p>Kanal tedavisi enfekte olmuş veya çürümüş dişleri onararak kurtarmak için kullanılan bir tedavi yöntemidir.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Pedodonti</h3>
         <p>Çocuklara uygulanan her türlü tedavi ve koruyucu diş hekimliği işlemlerini yapan, bu konuda özel eğitim almış diş hekimlerine pedodontist (çocuk diş hekimi), bu diş hekimliği dalına da pedodonti denir. 

</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>İmplant Tedavisi</h3>
         <p>Günümüzdeki dental implantlar, doğal dişlerden farklı olarak, çene kemiğine direkt olarak birleşirler.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Estetik Gülüş Tasarımı</h3>
         <p>Estetik gülüş tasarımı hizmetimizle mükemmel gülüşlere sahip olmak sizin elinizde.</p>
      </div>

   </div>

</section>





<section class="process">

   <h1 class="heading">bölümlerimiz</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Ortodonti</h3>
         <p>Ortodonti uzmanı ya da ortodontist; diş, çene ve ağız düzensizlikleri konusunda muayene, teşhis ve tedavi sağlayan sağlık personelidir. </p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Diş Eti Hastalıkları ve Cerrahisi</h3>
         <p>Diş eti cerrahisi ve diş eti operasyonları neden ve ne çeşitlerde yapılır</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Protetik Tedavi</h3>
         <p>Çeşitli nedenlere bağlı olarak eksilen veya kırılan dişlerin yeniden onarılması ve tamamlanması amacıyla yapılan estetik diş hekimliği uygulamasına protetik diş tedavisi adı verilir.
</p>
      </div>

   </div>

</section>





<section class="reviews" id="reviews">

   <h1 class="heading"> hekimlerimiz </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/user1.png" alt="">
         <p>GÜLÜŞ TASARIMI UZMANI</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>burak yılmaz</h3>
         <span>diş hekimi</span>
      </div>

      <div class="box">
         <img src="images/user2.jpg" alt="">
         <p> ÇENE CERRAHİSİ VE İMPLANTOLOJİ UZMANI</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>zeynep yılmaz</h3>
         <span>diş hekimi</span>
      </div>

      <div class="box">
         <img src="images/user3.png" alt="">
         <p>KANAL TEDAVİSİ UZMANI </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>ahmet yılmaz</h3>
         <span>diş  hekimi</span>
      </div>

   </div>

</section>





<section class="contact" id="contact">

   <h1 class="heading">randevu al</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>adınız ve soyadınız :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span> email adresiniz:</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>numaranız :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>randevu  tarihi :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="randevu al" name="submit" class="link-btn">
   </form>  

</section>





<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>numara</h3>
         <p>-0 215-45-90</p>
         <p>-0 255-22-55</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>adresimiz</h3>
         <p>kirklareli merkez</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>çalışma saatlerimiz</h3>
         <p>9.00 arası 16:00</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email adresimiz</h3>
         <p>dishekimi@gmail.com</p>
         <p>dishekiminiz@gmail.com</p>
      </div>

   </div>


</section>












<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>