<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geprek Super Ndower Rogojampi</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<!-- header section starts      -->
<header>
<img src="{{ url('images/logo.PNG') }}" class="rounded mx-auto d-block" width="150" alt="">
    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#about">about</a>
        <a href="#makanan">Makanan</a>
        <a href="#minuman">Minuman</a>
        <a href="#sambal">Sambal</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <a href="{{ url('pesanan') }}"class="fas fa-shopping-cart" method="post"></a>
                                        @csrf
        <a href="/login" class="fa fa-user fa-fw"></i></a>
    </div>
</header>

<!-- header section ends-->

<!-- search form  -->
<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->
<section class="home" id="home">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Makanan Spesial</span>
                    <h3>Geprek Super Ndower</h3>
                    <p>ini adalah menu makanan paling andalan di rumah makan ini</p>
                    <a href="/menu" class="btn">Beli Sekarang</a>
                </div>
            <div class="image">
        <img src="/img/1.jpg" alt="">
    </div>
</div>
<div class="swiper-slide slide">
    <div class="content">
        <span>Minuman Spesial</span>
            <h3>Es Kelapa Muda</h3>
                <p>ini adalah minuman unggulan kami yang dapat sangat menyegarkan</p>
                    <a href="/menu" class="btn">Beli Sekarang</a>
                        </div>
                            <div class="image">
                                <img src="/img/2.jpg" alt="">
                                    </div>
                                        </div>
<div class="swiper-slide slide">
    <div class="content">
        <span>Sambal Spesial</span>
            <h3>Sambal Merah</h3>
                <p>ini adalah sambal unggulan dari rumah makan kami yang dapat sangat menggugah selera makan</p>
                    <a href="#" class="btn">beli Sekarang</a>
                        </div>
                     <div class="image">
                <img src="/img/3.jpg" alt="">
            </div>
        </div>
    </div>
<div class="swiper-pagination"></div>
    </div>
        </section>

<!-- about section starts  -->
<section class="about" id="about">
    <h3 class="sub-heading"> Tentang </h3>
    <h1 class="heading"> Rumah Makan Ayam Geprek Ndower </h1>
    <div class="row">
    <div class="image">
    <img src="/img/depantoko.jpg" alt="">
    </div>
<div class="content">
    <h3>sebuah makanana yang populer di indonesia</h3>
    <p>berawal dari maraknya virus corona. banyak orang kehilangan pekerjaan karena pembatasan yang dilakukan oleh pemerintah. yang membuat sang owner memiliki ide untuk membuka usaha yaitu rumah makan ayam geprek yang lambat laun mulai ramai karena rasanya yang sangat khas dan membuat orang ketagihan.</p>
    p>dan disitulah awal mula rumah makan ini mulai populer didaerah rogojampi. dan memiliki banyak pelanggan dari berbagai daerah dibanyuwangi sekitar.</p>
    </div>
</section>

<!-- about section ends -->

<!-- menu section starts  -->
<section class="menu" id="makanan">
    <h3 class="sub-heading"> Untuk Kategori Makanan </h3>
    <h1 class="heading"> Semua Makanan </h1>
    <div class="box-container">
    <div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
<div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/1.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
    </div>
</section>


<section class="menu" id="minuman">
    <h3 class="sub-heading"> Untuk kategori Minuman </h3>
    <h1 class="heading"> Semua Minuman </h1>
    <div class="box-container">
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Makanan</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Minuman</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Minuman</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Minuman</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Minuman</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/2.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Minuman</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
    </div>
</section>

<section class="menu" id="sambal">
    <h3 class="sub-heading"> Untuk kategori Sambal </h3>
    <h1 class="heading"> Semua Sambal </h1>
    <div class="box-container">
    <div class="box">
    <div class="image">
    <img src="/img/3.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Sambal</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/3.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Sambal</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
<div class="box">
    <div class="image">
    <img src="/img/3.jpg" alt="">
    </div>
    <div class="content">
    <h3>Nama Sambal</h3>
    <p>Selamat berbelanja dan bersenang senang</p>
    <a href="/menu" class="btn">Beli</a>
    <span class="price">Rp.10.000,00</span>
    </div>
    </div>
    </div>
</section>

<section class="review" id="contact">
    <h3 class="sub-heading"> contact info </h3>
    <h1 class="heading"> halaman informasi rumah geprek ndower </h1>
    <div class="swiper-container review-slider">
    <div class="swiper-wrapper">
    <div class="swiper-slide slide">
    <div class="user">
    <div class="user-info">
<h3>geprek super ndower</h3>
    </div>
    </div>
    <p>jl.kh.Zainuddin No.50,Mars,</p>
    <p>Rogojampi,Kec.Rogojampi,</p>
    <p>KabupatenBanyuwangi, jawa timur</p>
    <p>68462</p>
    <h1>No tlp.082245634377</h1>
    </div>
    </div>
    </div>
</section>

<!-- menu section ends -->

<!-- loader part  -->


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
