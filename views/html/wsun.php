<?php
use app\helper\Html;
/** @var yii\web\View $this */

$this->title = 'WSUN';
?>


<!-- BreadCrumb -->
<section data-aos="fade-up" data-aos-duration="1500">
    <div class="d-flex justify-content-center align-items-center bg-transparent" style="padding-top: 100px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent arr-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="#">Hệ sinh thái WGH</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="#"><?=$this->title?></a>
                </li>
            </ol>
        </nav>
    </div>
</section>
<!-- BreadCrumb -->

<!-- Banner MEDIA -->
<section data-aos="fade-up" data-aos-duration="1500" class="text-center p-0">
    <div class="banner">
        <img class="banner-img w-100" src="https://www.wlin.com.vn/images/banner_risemount.jpg" alt="">
        <div class="banner-title">
            <p><?=$this->title?></p>
        </div>
    </div>
</section>
<!-- Banner MEDIA -->

<!-- Gioi thieu -->
<section data-aos="fade-up" data-aos-duration="1500" class="px-5">
    <div class="text-center pb-5">
        <p class="title-dark">Giới thiệu <?=$this->title?></p>
    </div>

    <div class="row d-flex flex-row justify-content-between mt-4 py-3 px-5">
        <div class="intro-content col-md-7 col-lg-7 col-xl-7 mt-4">
            <h4><?=$this->title?></h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                Internet tend to repeat predefined chunks as necessary, making this the first true generator on
                the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
                sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum
                is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
        </div>

        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <img src="./Images/Asset.png" alt="" class="w-100"
                style="max-width: 442px; max-height: 633px;">
        </div>
    </div>
</section>
<!-- Gioi thieu -->

<!-- Xem them -->
<section class="text-center p-5">
    <button type="button" class="btn btn-view-more btn-linear">
        Xem thêm <?=$this->title?>
    </button>
</section>
<!-- Xem them -->

