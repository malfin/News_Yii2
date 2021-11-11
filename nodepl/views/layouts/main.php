<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

PublicAsset::register($this);
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

    <nav class="navbar main-menu navbar-default">
        <div class="container">
            <div class="menu-content">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= Url::toRoute(['/']) ?>"><img src="/public/images/logo.png" alt=""></a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav text-uppercase">
                        <li><a href="<?= Url::toRoute(['/']) ?>">Главная</a>
                        </li>
                        <?php if (Yii::$app->user->identity->is_Admin): ?>
                            <li><a href="<?= Url::toRoute(['/admin/']) ?>">Админка</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <div class="i_con">
                        <ul class="nav navbar-nav text-uppercase">
                            <?php if (Yii::$app->user->isGuest): ?>
                                <li><a href="<?= Url::toRoute(['/site/login']) ?>">Войти</a></li>
                                <li><a href="<?= Url::toRoute(['/site/signup/']) ?>">Регистрация</a></li>
                            <?php else: ?>
                                <?= Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Выйти (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout', 'style' => "padding-top:10px;"]
                                )
                                . Html::endForm() ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

    <?= $content ?>

    <footer class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <div class="about-img"><img src="/public/images/logo-removebg.png" alt=""></div>
                        <div class="about-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed voluptua. At vero eos et
                            accusam et justo duo dlores et ea rebum magna text ar koto din.
                        </div>
                        <div class="address">
                            <h4 class="text-uppercase">Контактная информация</h4>
                            <p> г. Курган, Радионова 54</p>
                            <p> Phone: +79068289732</p>
                        </div>
                    </aside>
                </div>

                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title text-uppercase">Рекомендации</h3>

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!--Indicator-->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                vero eos et accusam justo duo dolores et ea rebum.gubergren no sea
                                                takimata
                                                magna aliquyam eratma</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>София</h4>

                                                <h4>Генеральный директор, Готовая тема</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                vero eos et accusam justo duo dolores et ea rebum.gubergren no sea
                                                takimata
                                                magna aliquyam eratma</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>София</h4>

                                                <h4>Генеральный директор, Готовая тема</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                vero eos et accusam justo duo dolores et ea rebum.gubergren no sea
                                                takimata
                                                magna aliquyam eratma</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>София</h4>

                                                <h4>Генеральный директор, Готовая тема</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title text-uppercase">Пользовательская Публикация Категории</h3>


                        <div class="custom-post">
                            <div>
                                <a href="#"><img src="/public/images/footer-img.png" alt=""></a>
                            </div>
                            <div>
                                <a href="#" class="text-uppercase">Дом - это спокойное Место</a>
                                <span class="p-date">Ноябрь 6, 2021</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">&copy; 2021 Blog
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>