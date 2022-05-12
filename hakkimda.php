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
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary navbar-fixed-top">
        <div class="container">                 
                <a class="nav-item nav-link text-white" href="hakkimda.html">Hakkımda</a>
                <a class="nav-item nav-link text-white" href="egitim.html">Eğitim</a>
                <a class="nav-item nav-link text-white" href="sehrim.html">Şehrim</a>
                <a class="nav-item nav-link text-white" href="miras.html">Mirasımız</a>
                <a class="nav-item nav-link text-white" href="ilgiAlanlarim.html">Hobilerim</a>
                <a class="nav-item nav-link text-white" href="iletisim.html">İletişim</a>
        
    </nav>
</div>
    <div class="container">
        <div class="Ortala">
            <div class="Baslik"> HAKKIMDA </div> 
              <?php 
        
                    $sifre="g211210304";
                    $mail="g211210304@sakarya.edu.tr";
                    
                    if( $_POST['sifre']==$sifre){
                        
                        
                        if( $_POST['kullaniciAdi']==$mail){
                        ?> <br><h3>HOŞ GELDİN = </h3> <?php echo $mail;
                            sleep(5);
                            
                        }
                        else
                        {
                            
                            
                            echo'<script> alert("Sistemde kayitli olmayan mail adresi."); window.location="../../index.html"; </script> ';
                        }
                    }
                    else{
                        echo'<script> alert("Sistemde kayitli olmayan sifre veya mail adresi."); window.location="../../index.html"; </script> ';
                        echo'<script> window.location="../../index.html"; </script> ';
                    }
                    
                ?>
            <div width="" style="background-color: black; color: white;">Kendimi tanıtan site içi linkli bilgiler, spor, etkinlik vb resimlerin anlatımı.</div>
            <div width="" style="background-color: blue; color: white;">sas</div>
         </div>
        
    </div>
        
</body>
</html>