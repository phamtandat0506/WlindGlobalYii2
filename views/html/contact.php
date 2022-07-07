<?php
use app\helper\Html;
/** @var yii\web\View $this */

$this->title = 'Liên Hệ';
?>



        <!-- BreadCrumb -->
        <section data-aos="fade-up" data-aos-duration="1500">
            <div class="d-flex justify-content-center align-items-center bg-transparent" style="padding-top: 100px">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent arr-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="#"><?=$this->title?></a>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- BreadCrumb -->


        <!-- Map -->
        <section data-aos="fade-up" data-aos-duration="1500">
            <div class="text-center pb-5">
                <p class="title-dark">Liên hệ</p>
            </div>

            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.846177013314!2d106.71358171474866!3d10.746336092341892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f65de0b1a5d%3A0x7a97446168efc48b!2zQ8O0bmcgdHkgQ-G7lSBQaOG6p24gVHJ1eeG7gW4gVGjDtG5nIHbDoCDEkOG6p3UgVMawIE5hbSBIxrDGoW5n!5e0!3m2!1svi!2s!4v1657011336165!5m2!1svi!2s"
                    width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- Map -->

        <!-- Form -->
        <section data-aos="fade-up" data-aos-duration="1500">
            <div class="row d-flex flex-row justify-content-between align-items-start mt-5 py-3" style="padding: 8%;">
                <div class="col-md-5 col-lg-6 col-xl-7 mt-5">
                    <div class="row contact-address">
                        <div class="d-flex flex-row align-items-start">
                            <i class="fas fa-map-marker-alt pr-3 pt-1"></i>
                            <span class="contact-span">
                                <b>Trụ sở Hồ Chí Minh:</b> Nam Hương Building - 98 Lâm Văn Bền,
                                phường Tân Kiểng, Quận 7
                            </span>
                        </div>
                        <div class="d-flex flex-row align-items-start mt-2">
                            <i class="fas fa-map-marker-alt pr-3 pt-1"></i>
                            <span class="contact-span">
                                <b>Trụ sở tại Hà Nội:</b> 97 Trung Kính, Phố Trung Kính, Quận Cầu Giấy
                            </span>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-between mt-4" style="gap: 25px;">
                        <div class="contact-email col-md d-flex flex-row justify-content-center">
                            <i class="fas fa-envelope pr-2 pt-1"></i>
                            <span class="contact-span"> <b>Email:</b> info@wlin.com.vn </span>
                        </div>

                        <div class="contact-phone col-md d-flex flex-row justify-content-center">
                            <i class="fas fa-phone-alt pr-2 pt-1"></i>
                            <span class="contact-span"> <b>Hotline:</b> 0916 350 072 - 0912 871 087 </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 col-xl-4 mt-5">
                    <form class="form-contact">
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">Tiêu đề</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">Mô tả</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-linear btn-send">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Form -->

