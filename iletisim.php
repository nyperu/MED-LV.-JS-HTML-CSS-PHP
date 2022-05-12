<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin  </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">   
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    <nav class="navbar navbar-dark bg-dark text-white navbar-expand-lg navbar-fixed-top">
        <div class="container py-2"><div>
            <a href="index.html" class="navbar-brand">GİRİŞ YAP</a> 
            
        </div>
            
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-" aria-controls="navbar-">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-item nav-link text-white" href="hakkimda.html">Hakkımda</a>
                    </li>
                    <li><a class="nav-item nav-link text-white" href="egitim.html">Eğitim</a>
                    </li>
                    <li><a class="nav-item nav-link text-white" href="sehrim.html">Şehrim</a>
                    </li>
                    <li><a class="nav-item nav-link text-white" href="miras.html">Mirasımız</a>
                    </li>
                    <li>   <a class="nav-item nav-link text-white" href="ilgiAlanlarim.html">Hobilerim</a>
                    </li>
                    <li>  <a class="nav-item nav-link text-white" href="iletisim.html">İletişim</a>
                    </li>
                </ul>
            </div>
                 
    </nav>
</div>
<div class="container">

Mesaj iletildi. Mesaj içeriği =   <br>
Adın soyadın    = <?php echo $_POST['AD']; error_reporting(0);
if( $_POST['AD']==""){
    echo "Ad ismi boş bırakılmıştır.";
} ?><br>
Mail = 
<?php echo $_POST['SOYAD']; 
if( $_POST['SOYAD']==""){
    echo "SOYAD ismi boş bırakılmıştır.";
}?> <br>
Cinsiyetin = <?php echo $_POST['Cinsiyet']; ?> <br>
Şehrin =    <?php echo $_POST['sehir']; ?> <br>
Mesaj =    <?php echo $_POST['Mesaj']; ?> <br>
Dönüş tipi = <?php echo $_POST['donus']; ?> <br>
Bildiğin diller =  
<?php  
foreach ($_POST["dil"] as $key => $value)
{
    echo $value." "; 
}?> <br>


</div>
      <div class="footer fixed-bottom">
        Sezer Berber - tüm hakları saklıfır falan.
    </div>    
</body>
</html>