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
                            <a href="#">Về WGH</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- BreadCrumb -->

        <!-- Slider -->
        <section data-aos="fade-up" data-aos-duration="1500">
            <div class="text-center">
                <p class="title-dark">Về Women Leaders Global Holdings</p>
            </div>

            <div class="container-fluid p-0 py-5">
                <div id="sliderCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
                    <ol class="carousel-indicators">
                        <li data-target="#sliderCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#sliderCarousel" data-slide-to="1"></li>
                        <li data-target="#sliderCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.pexels.com/photos/462024/pexels-photo-462024.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                class="img-slider d-block w-100" alt="..." />
                        </div>

                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/258109/pexels-photo-258109.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                class="img-slider d-block w-100" alt="..." />
                        </div>

                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/432013/pexels-photo-432013.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                class="img-slider d-block w-100" alt="..." />
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#sliderCarousel" role="button" data-slide="prev">
                        <div class="banner-icons">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </a>

                    <a class="carousel-control-next" href="#sliderCarousel" role="button" data-slide="next">
                        <div class="banner-icons">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Slider -->

        <!-- Gioi thieu -->
        <section data-aos="fade-up" data-aos-duration="1500" class="my-bg text-light px-3 py-5">
            <div class="text-center">
                <p class="title-light">Giới thiệu</p>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8 col-lg-8 col-xl-8 mt-4">
                    <ol class="list-style-number">
                        <li>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Veritatis architecto similique odit nulla quis perferendis minus
                            ea placeat, ipsam quas harum iure, pariatur odio enim. Labore
                            sed sint repudiandae id.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
                            veniam, eum optio accusantium porro et minima voluptas nostrum
                            quibus nemo nobis rerum impedit accusamus at fugit ad cupiditate
                            rem? Dolor.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ullam corrupti sed
                            quisquam porro nemo consequuntur placeat, provident numquam, officia obcaecati molestias?
                            Rerum nobis, nesciunt similique laboriosam exercitationem voluptate mollitia!
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum at, mollitia sint illo
                            molestias dolore ducimus iure possimus aut, numquam sit suscipit! Recusandae voluptates
                            voluptatum dolorum. Id ducimus sunt rerum.
                        </li>
                        <li>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit nisi magni porro, illo
                            enim placeat quasi rem deleniti dicta laborum voluptates! Ratione dolore similique
                            perspiciatis blanditiis cumque totam, placeat itaque.
                        </li>
                        <li>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Excepturi cumque aspernatur iure sed eligendi harum esse sint
                            quod, digniss provident perspiciatis explicabo atque eos iusto
                            impedit voluptatibus quisquam quis similique.
                        </li>
                    </ol>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 px-5">
                    <img src="./assets//Images/Asset.png" class="w-100" alt="..." />
                </div>
            </div>
        </section>
        <!-- Gioi thieu -->

        <!-- Youtube -->

        <section data-aos="fade-up" data-aos-duration="1500" class="container-fluid px-5 text-center">
            <div class="py-5">
                <p class="title-dark">Youtube</p>
            </div>

            <div class="video">
                <iframe width="100%" height="800px" src="https://www.youtube.com/embed/cGI19IZh_5w"
                    title="Cả Một Trời Thương Nhớ - Quang Trung, Ali Hoàng Dương | Live at Chuyện Tình Show"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </section>
        <!-- Youtube -->

        <!-- Lich su -->
        <section data-aos="fade-up" data-aos-duration="1500" class="container-fluid px-5">
            <div class="text-center py-5">
                <p class="title-dark">Lịch sử hình thành và phát triển</p>
            </div>

            <div class="d-flex flex-column">
                <div class="d-flex flex-sm-row flex-column justify-content-around">
                    <div class="history-item col-12 col-sm-6">
                        <img src="https://www.wlin.com.vn/images/thumbnail136cutcut.jpg" class="history-img rounded"
                            alt="" />
                        <h3>2019</h3>
                        <span class="history-span">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Tempore consequatur voluptate ex officia placeat alias dolorum a
                            sequi itaque est odit quas ratione, ipsa, vel veritatis,
                            corrupti rem cum reiciendis?</span>
                    </div>

                    <div class="history-item col-12 col-sm-6 py-5">
                        <img src="https://www.wlin.com.vn/images/thumbnail136cutcut.jpg" class="history-img rounded"
                            alt="" />
                        <h3>2020</h3>
                        <span class="history-span">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint,
                            voluptatibus nobis tempora quod minus officiis ipsa fugiat ipsam
                            corrupti veritatis assumenda odit sequi at quisquam provident
                            error quis adipisci est?</span>
                    </div>
                </div>

                <div class="d-flex flex-sm-row flex-column justify-content-around">
                    <div class="history-item col-12 col-sm-6">
                        <img src="https://www.wlin.com.vn/images/thumbnail136cutcut.jpg" class="history-img rounded"
                            alt="" />
                        <h3>2021</h3>
                        <span class="history-span">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Tempore consequatur voluptate ex officia placeat alias dolorum a
                            sequi itaque est odit quas ratione, ipsa, vel veritatis,
                            corrupti rem cum reiciendis?</span>
                    </div>

                    <div class="history-item col-12 col-sm-6 py-5">
                        <img src="https://www.wlin.com.vn/images/thumbnail136cutcut.jpg" class="history-img rounded"
                            alt="" />
                        <h3>2022</h3>
                        <span class="history-span">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint,
                            voluptatibus nobis tempora quod minus officiis ipsa fugiat ipsam
                            corrupti veritatis assumenda odit sequi at quisquam provident
                            error quis adipisci est?</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lich su -->

        <!-- Ban Lanh Dao -->
        <section data-aos="fade-up" data-aos-duration="1500" class="leader container-fluid px-5">
            <div class="text-center py-5">
                <p class="title-dark">Ban lãnh đạo</p>
            </div>

            <div class="row d-flex flex-sm-row flex-column align-items-center  text-sm-left text-center pb-5">
                <div class="leader-img col-3">
                    <img src="https://womenleadersforum.vn/wp-content/uploads/2019/11/1574246780.jpeg" alt="">
                </div>
                <div class="col-9">
                    <p class="leader-name">Á hậu Quý bà Thế giới - TS Nguyễn Thu Hương</p>
                    <p class="leader-role">Nhà sáng lập và điều hành mạng lưới Nữ lãnh đạo Quốc tế - WLIN Global</p>
                </div>
            </div>

            <div class="row d-flex flex-sm-row-reverse flex-column align-items-center text-sm-right text-center pb-5">
                <div class="leader-img col-3 ">
                    <img src="https://lh6.googleusercontent.com/RS-pWg5hte4HWV6ovrKw0Ma-4dActD3NhlHd1kBkaivR--yb1YOJcrEREuq984xIn2UqOFRp9Xt8XehgH-3qxWqzKrFuXF7FpeUGDWvGOlQlrhC7CPZQWPoixEuuZK4w7vA52ME"
                        alt="">
                </div>
                <div class="col-9 ">
                    <p class="leader-name">CEO</p>
                    <p class="leader-role">Nhà sáng lập và điều hành mạng lưới Nữ lãnh đạo Quốc tế - WLIN Global</p>
                </div>
            </div>

            <div class="row">
            </div>
        </section>
        <!-- Ban Lanh Dao -->

        <!-- Van hoa -->
        <section data-aos="fade-up" data-aos-duration="1500" class="leader container-fluid yl-bg px-5 py-5 mt-5">
            <div class="text-center pb-5">
                <p class="title-light">Văn hoá doanh nghiệp</p>
            </div>

            <div class="row d-flex flex-sm-row flex-column align-items-center  text-sm-left text-center">
                <div class="leader-img col-3">
                    <img src="https://womenleadersforum.vn/wp-content/uploads/2021/05/z2513927166604_ba122067a410b559c2a30e6c76d70e0d.jpg"
                        alt="">
                </div>
                <div class="col-9">
                    <p class="leader-name">Á hậu Quý bà Thế giới - TS Nguyễn Thu Hương</p>
                    <p class="leader-role">Nhà sáng lập và điều hành mạng lưới Nữ lãnh đạo Quốc tế - WLIN Global</p>
                </div>
            </div>

            <div class="row d-flex flex-sm-row-reverse flex-column align-items-center text-sm-right text-center">
                <div class="leader-img col-3 ">
                    <img src="https://lh6.googleusercontent.com/RS-pWg5hte4HWV6ovrKw0Ma-4dActD3NhlHd1kBkaivR--yb1YOJcrEREuq984xIn2UqOFRp9Xt8XehgH-3qxWqzKrFuXF7FpeUGDWvGOlQlrhC7CPZQWPoixEuuZK4w7vA52ME"
                        alt="">
                </div>
                <div class="col-9 ">
                    <p class="leader-name">CEO</p>
                    <p class="leader-role">Nhà sáng lập và điều hành mạng lưới Nữ lãnh đạo Quốc tế - WLIN Global</p>
                </div>
            </div>

            <div class="row">
            </div>
        </section>
        <!-- Van hoa -->


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
</body>


<script>
    AOS.init();
</script>
</div>
