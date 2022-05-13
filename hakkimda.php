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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
    <div class="container " >
        <div class="Ortala"> 
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
            <div class="KucukBasliklar">BEN     KİMİM ?</div>
            <div class="row">
                <div class="col-8" ><iframe width="100%" height="100%" src="https://www.youtube.com/embed/jwx7JDqVOTU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="col-4"> <div class="icerikTipi" style=" color: green;">Ben Sezer Berber. 27 Şubat 1998 yılında İstanbul'da dünyaya gelmişim. Çocukluğumun büyük bir kısmı İstanbul'da geçtikten sonra Tekirdağ'a ve sonrasında da Bartın'a taşınıp liseyi bitirdim. Şuanda ise 2016'dan 2021'e kadar süren bir Antalya ve Akdeniz Üniversitesi macerasından sonra Sakarya Üniversitesi öğrencisiyim. Kendimi bildim bileli teknolojiye olan tutkum son bulmadı, bulamadı. Her gün yeni şeyler öğrenmeyen bir insanın ölmüş bir insandan farkı olduğunu düşünmüyorum.</div>
                <a href="egitim.html"> <div class="btn btn-block btn-dark mt-2 bg- btn-lg "> Eğitim Bilgileri</div></a>
              </div>
              </div>
             
         </div>
         <div class="Ortala">      
            <div class="KucukBasliklar">İLGİ ALANLARIMDAN BİR KAÇI</div>
                 <div class="carausel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4"> <div class="text-white ml-3"><h4 class="mt-3  text-white text-lowercase">2014 yılındaki Sezer'den sizlere, bir kitabın ilk sayfaları... </h4> 
                                        Ben Sezer. 16 yaşındayım. Pek büyük sayılmam galiba (: . Çok şey yaşamama rağmen hala hayat tecrübesinin yaşla orantılı olarak arttığına inanan biriyim ama tabi ki bu değil ki ; kendinden 10yaş küçük birinden hiçbir şey öğrenemezsin! Böyle bir şey yok.
                                        Buraya yüzlerce kelime yazdım ve bir şey fark ettim; Buraya sınırlı sayıda yazılıyormuş ve ben o sınırı 3e katlamışım... Dolayısıyla belki o yazıları içeride bulabilirsin...</div>
                                        <a href="https://www.wattpad.com/story/52563244-g%C3%BCncelliycem-anam"> <div class="btn btn-block btn-light mt-2 ml-3 btn-lg ">Okumaya devam et</div></a>
                                    </div>
                                    <div class="col-8">  <img class="d-block w-100 h-100" src="images/124319984-kitapkapak.webp" alt="First slide"></div>
                                </div>    
                                </div>
                            <div class="carousel-item"> 
                                <div class="row">
                                    <div class="col-8"> <img class="d-block w-100 h-100" src="images/tft.jpg" alt="First slide"> </div>
                                    <div class="col-4">  <div class="text-white mr-3"><h4 class="mt-3  text-white">PROFESYONEL TFT KOÇU </h4> 
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt voluptas error reprehenderit at, enim, eligendi doloribus alias itaque officia labore voluptate, hic et veniam! Ullam neque reprehenderit perferendis nostrum earum.
                                        Quam, fuga animi sit at voluptatum, tenetur quidem dignissimos voluptatibus illum, fugit ea non numquam mollitia repellat eum. Voluptate necessitatibus maxime dolorum eaque repellendus, possimus quasi ipsa temporibus corrupti magni. <br><a href="ilgiAlanlarim.html" > <div class="btn btn-block btn-light mt-2 mr-5 btn-lg ">Okumaya devam et</div></a></div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                     </div>
                 
                </div>
             </div>
        </div>
        <div class="container" >
            <div class="Ortala"> 
                <div class="kucukGuzelBaslik">İ L E T İ Ş İ M</div>
                <div class="telNo mt-1">0 543 630 76 85</div>
                <div class="kucukGuzelBaslik mt-2">ANTALYA MERKEZ</div>
                <div class="harita mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.8598098780503!2d30.728618415620335!3d36.89370187012987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c385489fc9d059%3A0xdbc65d4735d5c6bf!2sK%C4%B1z%C4%B1ltoprak%2C%20933.%20Sk.%2027-19%2C%2007300%20Muratpa%C5%9Fa%2FAntalya!5e0!3m2!1str!2str!4v1651690577408!5m2!1str!2str" width="70%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="logolar mt-3">
                  
                    <a href="https://www.instagram.com/sezerberber"> <img src="images/pngwing.com (1).png" class="ml-3" alt="">
                
                    
                        <a href="https://www.facebook.com/sezerberber"><img src="images/pngwing.com.png" height="50px" class="ml-5" alt="">
                        </a>
                    
                        <a href="https://wa.me/905436307685"> <img src="images/pngwing.com (2).png" class="ml-5" alt="">
                        </a>
                </div>
            </div>
         </div>       
    </div>
    <div class="footer">
        Sezer Berber - tüm hakları saklıfır falan.
    </div>
        
</body>
</html>