<?php 
    use yii\bootstrap4\Html;
?>

<header>
    <nav data-aos="fade-up" data-aos-duration="1500" id="navbar"  style="box-shadow: 0 2px 5px #ccc; width: 100vw; min-height: 100px; transition: 0.2s" class="navbar navbar-expand-lg navbar-dark my-bg px-5 font-weight-bold fixed-top">
        <a class="navbar-brand d-flex align-items-center" href=<?='home'?> style="width:20%; height: 100%; min-width: 100px; max-height: 60px;">
            <img src="./Images/Asset.png" alt="logo" style="width:100%;max-width: 150px; max-height: 60px;" />
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
                <?=Html::a('Hệ sinh thái WGH', \yii\helpers\Url::toRoute(['site/ecosystem']), ['title' => 'Hệ sinh thái WGH', 'class' => 'nav-link dropdown-toggle']) ?>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?=Html::a('WLIN GLOBAL CLUB', \yii\helpers\Url::toRoute(['html/club']), ['title' => 'WLIN GLOBAL CLUB', 'class' => 'dropdown-item']) ?>
                        <?=Html::a('WLIN LEADER ACADEMY', \yii\helpers\Url::toRoute(['site/academy']), ['title' => 'WLIN LEADER ACADEMY', 'class' => 'dropdown-item']) ?>
                        <?=Html::a('WLIN MEDIA ACADEMY', \yii\helpers\Url::toRoute(['html/media']), ['title' => 'WLIN MEDIA ACADEMY', 'class' => 'dropdown-item']) ?>
                        <?=Html::a('WLIN SERVICE', \yii\helpers\Url::toRoute(['html/service']), ['title' => 'WLIN SERVICE', 'class' => 'dropdown-item']) ?>
                        <?=Html::a('WSUN', \yii\helpers\Url::toRoute(['html/wsun']), ['title' => 'WSUN', 'class' => 'dropdown-item']) ?>
                        <?=Html::a('WIC', \yii\helpers\Url::toRoute(['html/wic']), ['title' => 'WIC', 'class' => 'dropdown-item']) ?>
                    </div>
                </li>
                <li class="nav-item">
                    <?=Html::a('Tiêu Điểm', \yii\helpers\Url::toRoute(['html/news']), ['title' => 'Tiêu Điểm', 'class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?=Html::a('Sự Kiện' , \yii\helpers\Url::toRoute(['html/']),['title' => 'Sự Kiện', 'class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?=Html::a('Liên hệ' , \yii\helpers\Url::toRoute(['html/contact']),['title' => 'Liên hệ', 'class' => 'nav-link']) ?>
                </li>
            </ul>

            <i class="far fa-search" style="color: #fff; font-size: 23px; margin: 0 30px;"></i>
        </div>
    </nav>
</header>