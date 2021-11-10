<?php

use yii\helpers\Url;

?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="<?= $article->getImage(); ?>" alt="<?= $article->title; ?>"></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6>
                                <a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]) ?>"><?= $article->category->title; ?></a>
                            </h6>
                            <h1 class="entry-title"><a href="blog.html"><?= $article->title; ?></a></h1>
                        </header>
                        <div class="entry-content">
                            <?= $article->content; ?>

                        </div>
<!--                        <div class="decoration">-->
<!--                            Категория: <a href="--><?//= Url::toRoute(['site/category', 'id' => $article->category->id]) ?><!--"-->
<!--                                          class="btn btn-default">--><?//= $article->category->title; ?><!--</a>-->
<!---->
<!--                        </div>-->

                        <div class="social-share">
                            <span class="social-share-title pull-left text-capitalize">Автор: Дата: <?= $article->getDate(); ?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>


                <div class="leave-comment">
                    <!--leave comment-->
                    <h4>Оставьте комментарий</h4>


                    <form class="form-horizontal contact-form" role="form" method="post" action="#">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="6" name="message"
                                          placeholder="Напишите комментарий"></textarea>
                            </div>
                        </div>
                        <a href="#" class="btn send-btn">Отправить комментарий</a>
                    </form>
                </div>
                <!--end leave comment-->
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular' => $popular,
                'recent' => $recent,
                'categories' => $categories,
            ]); ?>
        </div>
    </div>
</div>