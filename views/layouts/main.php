<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <nav data-aos="fade-up" data-aos-duration="1500" style="box-shadow: 0 2px 5px #ccc; width: 100vw; min-height: 90px;" class="navbar navbar-expand-lg navbar-dark my-bg px-5 font-weight-bold fixed-top">
            <a class="navbar-brand d-flex align-items-center" href="/index.html" style="width:20%; height: 100%; min-width: 100px; max-height: 60px;">
                <img src="assets/Images/Asset.png" alt="logo" style="width:100%;max-width: 150px; max-height: 60px;" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container-fuild">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer1 text-left text-lg-start my-bg text-light mt-5 py-5">
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
                        <h6 class="title-bottom-line text-uppercase fw-bold mb-4">WLIN Global</h6>
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
    </footer>


    <?php $this->endBody() ?>
</body>

<script>
    AOS.init();
</script>
<script>
    $(document).ready(function() {
        $(".slick-slider").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            draggable: false,
            prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class="fas fa-chevron-left"></i></button>`,
            nextArrow: `<button type='button' class='slick-next slick-arrow'><i class="fas fa-chevron-right"></i></button>`,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
            speed: 1200,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        $(".member-slick-slider").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            draggable: false,
            prevArrow: `<button type='button' class='member-slick-prev member-slick-arrow'><i class="fas fa-chevron-left"></i></button>`,
            nextArrow: `<button type='button' class='member-slick-next member-slick-arrow'><i class="fas fa-chevron-right"></i></button>`,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
            speed: 1200,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>

</html>
<?php $this->endPage() ?>