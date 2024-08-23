<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Web Sitesi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Header Bölümü Başlangıcı -->
<header class="header">
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>RANDEVU</strong>SİSTEMİ</a>

    <nav class="navbar">
        <a href="#home">Ana Sayfa</a>
        <a href="#about">Hakkında</a>
        <a href="#services">Hizmetler</a>
        <a href="#doctors">Doktorlar</a>
        <a href="register.php" target="blank_">Randevu</a>
        <a href="#review">Yorumlar</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</header>
<!-- Header Bölümü Sonu -->

<!-- Ana Sayfa Bölümü Başlangıcı -->
<section class="home" id="home">
    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>Sağlıklı yaşamınıza özen gösteriyoruz</h3>
        <p>İyi fiziksel sağlığa sahip bir kişinin bedensel işlevleri ve süreçleri en üst düzeyde çalışır.</p>
        <style>
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5cb85c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #4cae4c;
            color: black;
        }

        .btn .fas {
            margin-left: 5px;
            color: black;
        }
    </style>
        </style>
        <a href="register.php" class="btn" target="blank_"> Randevu Al <span class="fas fa-chevron-right"></span> </a>
        <style>
            body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.appointment {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.heading {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.heading span {
    color: #007bff;
}

.row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.image {
    flex: 1;
    text-align: center;
    margin-bottom: 20px;
}

.image img {
    max-width: 100%;
    height: auto;
}

form {
    flex: 1;
    padding: 20px;
}

form h3 {
    margin-bottom: 15px;
    color: #333;
}

form .box {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

form .box.message {
    height: 100px;
    resize: none;
}

form .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

form .btn:hover {
    background-color: #0056b3;
}

.message.success {
    color: green;
}

.message.error {
    color: red;
}
        </style>
    </div>
</section>
<!-- Ana Sayfa Bölümü Sonu -->

<!-- İkonlar Bölümü Başlangıcı -->
<section class="icons-container">
    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>Çalışan Doktor</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>Memnun Hasta</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>Yatak Kapasitesi</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>Mevcut Hastane</p>
    </div>
</section>
<!-- İkonlar Bölümü Sonu -->

<!-- Hakkında Bölümü Başlangıcı -->
<section class="about" id="about">
    <h1 class="heading"> <span>Bizim</span> Hakkımızda </h1>

    <div class="row">
        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>Dünyanın en kaliteli tedavisini alın</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> Randevu Almak için.. <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>
</section>
<!-- Hakkında Bölümü Sonu -->

<!-- Hizmetler Bölümü Başlangıcı -->
<section class="services" id="services">
    <h1 class="heading"> Hizmetlerimiz </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Ücretsiz Kontroller</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Kalite</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Sağlık Önceliğimiz.</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>
        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>7/24 Ambulans</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Uzman Doktorlar</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Kalite</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Yatak Kapasitesi</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>HİJYENİK ORTAM</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>
        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>GÜVENLİ HİZMET</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>
        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>UZMANLAR</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
        </div>
    </div>
</section>
<!-- Hizmetler Bölümü Sonu -->

<!-- Doktorlar Bölümü Başlangıcı -->
<section class="doctors" id="doctors">
    <h1 class="heading"> Doktorlarımız </h1>

    <div class="box-container">
        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Ahmet Sezgin</h3>
            <span>Uzman Doktor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Abdullah Oluç</h3>
            <span>Uzman Doktor</span>
            <div class="share">
                <a href="https://www.facebook.com/abdullah.oluc.92" class="fab fa-facebook-f"></a>
                <a href="https://github.com/arteac" class="fab fa-github"></a>
                <a href="https://www.linkedin.com/in/abdullah-olu%C3%A7-046a91294/" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Mehmet Yılmaz</h3>
            <span>Uzman Doktor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
</section>
<!-- Doktorlar Bölümü Sonu -->
 
<!-- Yorumlar Bölümü Başlangıcı -->
<section class="review" id="review">
    <h1 class="heading"> Yorumlar </h1>

    <div class="box-container">
        <div class="box">
            <img src="image/comments.png" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Temiz Ve Güzel Bir Hastane</p>
        </div>

        <div class="box">
        <img src="image/comments.png" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Konforlu Bir Hastane çok beğendim.</p>
        </div>

        <div class="box">
        <img src="image/comments.png" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Standartların Üstünde bir Hastane.</p>
        </div>
    </div>
</section>
<!-- Yorumlar Bölümü Sonu -->

<!-- Footer Bölümü Başlangıcı -->
<section class="footer">
    <div class="box-container">
        <div class="box">
    <h3>Hızlı Bağlantılar</h3>
        <a href="#home">Ana Sayfa</a>
        <a href="#about">Hakkında</a>
        <a href="#services">Hizmetler</a>
        <a href="#doctors">Doktorlar</a>
        <a href="#appointment">Randevu</a>
        <a href="#review">Yorumlar</a>
     </div>
        <div class="box">
            <h3>Bize Ulaşın</h3>
            <a href="#"> <i class="fas fa-phone"></i> +90 552 281 76 92 </a>
            <a href="#"> <i class="fas fa-envelope"></i> abdullaholuc37@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> İstanbul Gaziosmanpaşa </a>
        </div>

        <div class="box">
            <h3>Bizi Takip Edin</h3>
            <a href="https://github.com/arteac"> <i class="fab fa-linkedin"></i> Linkedin </a>
            <a href="https://www.linkedin.com/in/abdullah-olu%C3%A7-046a91294/"> <i class="fab fa-github"></i> Github </a>
            </div>
            <script src="js/script.js"></script>
</body>
</html>

