<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">   
    <link rel="stylesheet" href="css/main.css">
  
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary navbar-fixed-top">
        <div class="container">
        
                <a class="navbar-brand" href="index.html">Sezer Berber Login</a>

            
        </div>
    </nav>
    <div class="row">


    <div class="container">
         <?php 
        
         
        echo $_POST['sifre'];
        if( $_POST['sifre']=="g211210304"){
            echo "Şifre geçerli";
            
            if( $_POST['kullaniciAdi']=="g211210304@ogr.sakarya.edu.tr"){
                echo "Mail adresi geçerli.";   
                echo "Kullanıcı adı ve şifre geçerli yönlendiriliyorsunuz.";
                sleep(5);
                echo'<script> window.location="../../hakkimda.html"; </script> ';
            }
            else
            {
                echo "Mail Adresi Geçersiz, yönlendiriliyorsunuz.";
                sleep(5);
            }
        }
        else{
            echo "Şifre geçersiz, Yönlendiriliyorsunuz.";
        }
        
       ?><br>
    
</div>
</body>
</html>