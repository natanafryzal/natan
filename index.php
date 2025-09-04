<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keyword" content="TOKOWAHYUCAKE, cake kita aja, angkringan, cake, murah">
    <meta name="description" content="website wahyu cake enak">

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/styles.css">
    <title>NATHAN BAKERY</title>
</head>

<body>
    <!-- Navbar dengan class fixed-top agar tetap berada di atas meski halaman di scroll -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light p-100">
        <a class="navbar-brand" href="#">
            <img src="bakery.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            Kopi Kita Aja
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="ml-auto navbar-nav">
                <li class="nav-item active">
                    <!-- Isi href dengan # dan id element agar ketika diklik halaman menuju ke element itu -->
                    <!-- Tanda pagar untuk identifikasi bahwa itu adalah ID -->
                    <a class="nav-link" href="#banner">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
            </ul>
        </div>
        
    </nav>

    <!-- Pastikan setiap set halaman punya id untuk digunakan di navigasi -->
    <!-- ID element tidak perlu tanda pagar -->
    <div id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/bakery.jpg" class="d-block w-100" alt="nathan bakery banner">
                <div class="carousel-caption d-none d-md-block">
                    <h3>NATHAN BAKERY</h3>
                    <p>Toko roti dengan kualitas bintang lima</p>
                </div>
            </div>
            
        </div>

        <div id="q-menu" class="p-100" style="margin-top: 72px;">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Link juga dapat berbentuk card -->
                    <a href="#menu" class="card" style="width: 100%;">
                        <img src="assets/chocobun.jpg" class="card-img-top" alt="Menu">
                        <a href="#menu" class="placeholder">Choco bun</a>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="#profile" class="card" style="width: 100%;">
                        <img src="assets/croisan.jpg" class="card-img-top" alt="Menu">
                        <a href="#profile" class="placeholder">Croisant</a>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="#contact" class="card" style="width: 100%;">
                        <img src="assets/bolen.jpg" class="card-img-top" alt="Menu">
                        <a href="#contact" class="placeholder">Bolen</a>
                    </a>
                </div>
                
            </div>

            <!-- Bungkus dalam row untuk membagi bagian utama dan sidebar di kanan -->
            <div class="row">

                <!-- Kolom pertama untuk bagian Menu dan Profile -->
                <div class="col-lg-8">
                    <h2 id="Menu" class="font-weight-normal p-50 text-center" style="padding-top: 100px">
                        Menu <b>Kami</b>
                    </h2>
                    <div class="row p-5" id="menu-section">
                        <div class="col-lg-6 p-3">
                            <h3 class="font-weight-normal mb-3 mt-3">Minuman</h3>
                            <div id="drink" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#drink" data-slide-to="0" class="active"></li>
                                    <li data-target="#drink" data-slide-to="1"></li>
                                    <li data-target="#drink" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="kopi.jpg" class="d-block w-100" alt="Drink1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="teh.jpg" class="d-block w-100" alt="Drink2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="jus.jpg" class="d-block w-100" alt="Drink3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#drink"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#drink"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-6 p-3">
                            <h3 class="font-weight-normal mb-3 mt-3">Makanan</h3>
                            <div id="food" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#food" data-slide-to="0" class="active"></li>
                                    <li data-target="#food" data-slide-to="1"></li>
                                    <li data-target="#food" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/coffee.jpg" class="d-block w-100" alt="Food1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/bartender.jpg" class="d-block w-100" alt="Food2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/cafe.jpg" class="d-block w-100" alt="Food3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#food"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#food"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kenapa menggunakan padding atas bukan margin atas berkaitan dengan kerapian ketika dikunjungi menggunakan navigasi -->
                <!-- Bukan cara terbaik tapi cara tercepat -->
                <h2 id="profile" class="font-weight-normal text-center p-5" style="padding-top: 100px">
                    Profil <b>Kami</b>
                </h2>
                <div class="p-50" style="padding-right: 100px">
                    <p class="text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis ipsa dolorum dolores! Culpa, nihil! Rerum, aliquam
                        necessitatibus voluptatem hic esse consectetur aut architecto
                        inventore autem tempora error laboriosam, assumenda commodi,
                        expedita ut!
                    </p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gt7zOP_wPfM?si=jp2KSkz_nKN1qJs7" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <!-- Kolom kedua untuk sidebar yang berisi ulasan pelanggan -->
                <div class="col-lg-4 p-3 bg-light" style="margin-top: 100px">
                    <div class="card mb-3" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Moh. Sali</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Pelanggan Kopi Kita Aja</h6>
                            <p class="card-text">
                                Benar-benar coffeeshop yang menakjubkan, dengan rasa otentik dan pelayanan yang
                                konsisten baik.
                            </p>
                            <a href="#" class="card-link">Pelayanan Baik</a>
                            <a href="#" class="card-link">Rasa Otentik</a>
                        </div>
                    </div>

                    <div class="card mb-3" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Moh. Sali</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Pelanggan Kopi Kita Aja</h6>
                            <p class="card-text">
                                Benar-benar coffeeshop yang menakjubkan, dengan rasa otentik dan pelayanan yang
                                konsisten baik.
                            </p>
                            <a href="#" class="card-link">Pelayanan Baik</a>
                            <a href="#" class="card-link">Rasa Otentik</a>
                        </div>
                    </div>

                    <div class="card mb-3" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Moh. Sali</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Pelanggan Kopi Kita Aja</h6>
                            <p class="card-text">
                                Benar-benar coffeeshop yang menakjubkan, dengan rasa otentik dan pelayanan yang
                                konsisten baik.
                            </p>
                            <a href="#" class="card-link">Pelayanan Baik</a>
                            <a href="#" class="card-link">Rasa Otentik</a>
                        </div>
                    </div>

                    <div class="card" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Moh. Sali</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Pelanggan Kopi Kita Aja</h6>
                            <p class="card-text">
                                Benar-benar coffeeshop yang menakjubkan, dengan rasa otentik dan pelayanan yang
                                konsisten baik.
                            </p>
                            <a href="#" class="card-link">Pelayanan Baik</a>
                            <a href="#" class="card-link">Rasa Otentik</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>