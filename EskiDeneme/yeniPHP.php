<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlk web sayfam</title>
</head>
<body>

Welcome.  <br>
Adın     = <?php echo $_POST['AD']; error_reporting(0);
if( $_POST['AD']==""){
    echo "Ad ismi boş bırakılmıştır.";
} ?><br>
Soy adın = 
<?php echo $_POST['SOYAD']; 
if( $_POST['SOYAD']==""){
    echo "SOYAD ismi boş bırakılmıştır.";
}?> <br>
Cinsiyetin = <?php echo $_POST['cinsiyet']; ?> <br>
Şehrin =    <?php echo $_POST['sehir']; ?> <br>
Bildiğin diller =  
<?php  
foreach ($_POST["dil"] as $key => $value)
{
    echo $value." "; 
}?> <br>

</body>
</html>