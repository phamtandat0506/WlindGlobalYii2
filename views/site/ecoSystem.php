<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-link">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container-fluid p-0">
        <!-- Navbar -->
        <nav data-aos="fade-up" data-aos-duration="1500"
            style="box-shadow: 0 2px 5px #ccc; width: 100vw; min-height: 90px;"
            class="navbar navbar-expand-lg navbar-dark my-bg px-5 font-weight-bold fixed-top">
            <a class="navbar-brand d-flex align-items-center" href="/index.html"
                style="width:20%; height: 100%; min-width: 100px; max-height: 60px;">
                <img src="./assets/Images/Asset.png" alt="logo"
                    style="width:100%;max-width: 150px; max-height: 60px;" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/about.html">Về WGH <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./ecoSystem.html">
                            Hệ sinh thái WGH
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">WLIN GLOBAL CLUB</a>
                            <a class="dropdown-item" href="#">WLIN LEADER ACADEMY</a>
                            <a class="dropdown-item" href="#">WLIN MEDIA AGENCY</a>
                            <a class="dropdown-item" href="#">WLIN SERVICE</a>
                            <a class="dropdown-item" href="#">WSUN</a>
                            <a class="dropdown-item" href="#">WIC</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./news.html">Tiêu điểm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./event.html">Sự kiện</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>

                <i class="far fa-search" style="color: #fff; font-size: 23px; margin: 0 30px;"></i>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- BreadCrumb -->
        <section data-aos="fade-up" data-aos-duration="1500">
            <div class="d-flex justify-content-center align-items-center bg-transparent" style="padding-top: 100px">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent arr-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="#">Hệ sinh thái WGH</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- BreadCrumb -->

        <!-- He sinh thai -->
        <section data-aos="fade-up" data-aos-duration="1500" class="hst">
            <div class="text-center py-5">
                <p class="title-dark">Hệ sinh thái Women Leaders Global Holdings</p>
            </div>

            <div class="circles">
                <div class="main"><img src="./assets/Images/Asset 1 1.png" alt="">
                    <span class="hst-span">WLIN LEADER ACADEMY</span>
                    <button type="button" class="btn btn-view-more btn-dark">
                        Xem chi tiết ➜
                    </button>
                </div>

                <div class="item">
                    <img src="./assets/Images/Asset 1 1.png" alt="">
                    <span class="hst-span">WLIN LEADER ACADEMY</span>
                    <button type="button" class="btn btn-view-more btn-dark">
                        Xem chi tiết ➜
                    </button>
                </div>

                <div class="item">
                    <img src="./assets/Images/Asset 1 1.png" alt="">
                    <span class="hst-span">WLIN LEADER ACADEMY</span>
                    <button type="button" class="btn btn-view-more btn-dark">
                        Xem chi tiết ➜
                    </button>
                </div>

                <div class="item">
                    <img src="./assets/Images/Asset 1 1.png" alt="">
                    <span class="hst-span">WLIN LEADER ACADEMY</span>
                    <button type="button" class="btn btn-view-more btn-dark">
                        Xem chi tiết ➜
                    </button>
                </div>

                <div class="item">
                    <img src="./assets/Images/Asset 1 1.png" alt="">
                    <span class="hst-span">WLIN LEADER ACADEMY</span>
                    <button type="button" class="btn btn-view-more btn-dark">
                        Xem chi tiết ➜
                    </button>
                </div>

                <div class="item">
                    <img src="./assets/Images/Asset 1 1.png" alt="">
                    <span class="hst-span">WLIN LEADER ACADEMY</span>
                    <button type="button" class="btn btn-view-more btn-dark">
                        Xem chi tiết ➜
                    </button>
                </div>

            </div>
        </section>
        <!-- He sinh thai -->

        <!-- Footer -->
        <footer data-aos="fade-up" data-aos-duration="1500"
            class="footer text-left text-lg-start my-bg text-light mt-5 py-5">
            <!-- Section: Links  -->
            <section style="padding: 0px 10%">
                <div class="logo-footer mt-5 m-auto">
                    <img src="./assets/Images/image 1.png" alt="..." />
                </div>

                <div class="text-md-start">
                    <!-- Grid row -->
                    <div class="row d-flex d-flex justify-content-between">
                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-6 col-xl-6 mt-5">
                            <!-- Content -->
                            <div>
                                <div class="d-flex flex-row align-items-start">
                                    <i class="fas fa-map-marker-alt pr-3 pt-1"></i>
                                    <span>
                                        Trụ sở Hồ Chí Minh: Nam Hương Building - 98 Lâm Văn Bền,
                                        phường Tân Kiểng, Quận 7
                                    </span>
                                </div>

                                <div class="d-flex flex-row align-items-start mt-2">
                                    <i class="fas fa-map-marker-alt pr-3 pt-1"></i>
                                    <span>
                                        Trụ sở tại Hà Nội: 97 Trung Kính, Phố Trung Kính, Quận Cầu
                                        Giấy
                                    </span>
                                </div>

                                <div class="d-flex flex-row align-items-start mt-2">
                                    <i class="fas fa-phone-alt pr-2 pt-1"></i>
                                    <span> Hotline: 0916 350 072 - 0912 871 087 </span>
                                </div>

                                <div class="d-flex flex-row align-items-start mt-2">
                                    <i class="fas fa-envelope pr-2 pt-1"></i>
                                    <span> Email: info@wlin.com.vn </span>
                                </div>
                            </div>

                            <!-- Contact -->
                            <div class="contact mt-2">
                                <a href="" class="pr-2 text-reset">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" class="pr-2 text-reset">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="" class="pr-2 text-reset">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="" class="pr-2 text-reset">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <!-- Contact -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-2 mt-5">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">WLIN Global</h6>
                            <p>
                                <a href="#!" class="text-reset">Về WGH</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Hệ sinh thái WGH</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Tiêu điểm</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Sự kiện</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Liên hệ</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-2 mt-5">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Hệ sinh thái WGH</h6>
                            <p>
                                <a href="#!" class="text-reset">WLIN GLOBAL CLUB</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">WLIN LEADER ACADEMY</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">WLIN MEDIA AGECY</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">WLIN SERVICE </a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">WSUN</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">WIC</a>
                            </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->
        </footer>
        <!-- Footer -->
    </div>

    <code><?= __FILE__ ?></code>
</div>
