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

    <?=$this->render('header')?>


    <main role="main" class="flex-shrink-0">
        <div class="container-fuild">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>



    <?php $this->endBody() ?>
</body>

<?=$this->render('footer')?>

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
            speed: 800,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        $(".hst-slick-slider").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: false,
            arrows: true,
            draggable: true,
            prevArrow: `<button type='button' class='hst-slick-prev hst-slick-arrow'><i class="fas fa-chevron-left"></i></button>`,
            nextArrow: `<button type='button' class='hst-slick-next hst-slick-arrow'><i class="fas fa-chevron-right"></i></button>`,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    },
                },
            ],
            speed: 800,
            swipeToSlide: true,
            // touchMove: false,

        });

        $(".hst-menu-slick-slider").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            arrows: true,
            draggable: false,
            prevArrow: `<button type='button' class='hst-menu-slick-prev hst-menu-slick-arrow'><i class="fas fa-chevron-left"></i></button>`,
            nextArrow: `<button type='button' class='hst-menu-slick-next hst-menu-slick-arrow'><i class="fas fa-chevron-right"></i></button>`,
            // dots: true,
            responsive: [
                {
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
            speed: 800,
            // autoplay: true,
            // autoplaySpeed: 2000,
        });

    });


    $(document).ready(function () {
        $(".lecturer-slick-slider").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            draggable: false,
            prevArrow: `<button type='button' class='lecturer-slick-prev lecturer-slick-arrow'><i class="fas fa-chevron-left"></i></button>`,
            nextArrow: `<button type='button' class='lecturer-slick-next lecturer-slick-arrow'><i class="fas fa-chevron-right"></i></button>`,
            dots: true,
            responsive: [
                {
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
            speed: 800,
            // autoplay: true,
            // autoplaySpeed: 2000,
        });
    });

    $(document).ready(function () {
        $(".project-slick-slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            draggable: false,
            prevArrow: `<button type='button' class='project-slick-prev project-slick-arrow'><i class="fas fa-chevron-left"></i></button>`,
            nextArrow: `<button type='button' class='project-slick-next project-slick-arrow'><i class="fas fa-chevron-right"></i></button>`,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
            speed: 800,
            // autoplay: true,
            // autoplaySpeed: 2000,
        });
    });


</script>
</html>
<?php $this->endPage() ?>