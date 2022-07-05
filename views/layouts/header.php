<?php 
    use yii\bootstrap4\Html;
?>

<header>
        <nav data-aos="fade-up" data-aos-duration="1500" style="box-shadow: 0 2px 5px #ccc; width: 100vw; min-height: 90px;" class="navbar navbar-expand-lg navbar-dark my-bg px-5 font-weight-bold fixed-top">
            <a class="navbar-brand d-flex align-items-center" href=<?='home'?> style="width:20%; height: 100%; min-width: 100px; max-height: 60px;">
                <img src="assets/Images/Asset.png" alt="logo" style="width:100%;max-width: 150px; max-height: 60px;" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <?=Html::a('Về WGH' , \yii\helpers\Url::toRoute(['site/about']),['title' => 'Về WGH', 'class' => 'nav-link']) ?>
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
                        <?=Html::a('Tiêu Điểm', \yii\helpers\Url::toRoute(['html/news']), ['title' => 'Tiêu Điểm', 'class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?=Html::a('Sự Kiện' , \yii\helpers\Url::toRoute(['html/']),['title' => 'Sự Kiện', 'class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>

                <i class="far fa-search" style="color: #fff; font-size: 23px; margin: 0 30px;"></i>
            </div>
        </nav>
    </header>