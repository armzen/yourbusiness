<?php

use yii\helpers\Url;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Your Business';
?>

<div class="site-index">
    <section class="carousel-ka">
        <div id="da-slider" class="da-slider">
            <div class="da-slide">
                <h2> <?= Html::encode($slider[0]['slhead']); ?></h2> <!--Easy management -->
                <p> <?= Html::encode($slider[0]['sltext']); ?> </p>
                <a href="#" class="da-link"><?= Html::encode($read_more); ?></a>
                <div class="da-img"><img src="/images/<?= Html::encode($slider[0]['slimg']); ?>" alt="image01" /></div>
            </div>

            <div class="da-slide">
                <h2><?= Html::encode($slider[1]['slhead']); ?></h2>
                <p> <?= Html::encode($slider[1]['sltext']); ?></p>
                <a href="#" class="da-link"><?= Html::encode($read_more); ?></a>
                <div class="da-img"><img src="/images/<?= Html::encode($slider[1]['slimg']); ?>" alt="image01" /></div>
            </div>

            <div class="da-slide">
                <h2><?= Html::encode($slider[2]['slhead']); ?></h2>
                <p><?= Html::encode($slider[2]['sltext']); ?></p>
                <a href="#" class="da-link"><?= Html::encode($read_more) ?></a>
                <div class="da-img"><img src="/images/<?= Html::encode($slider[2]['slimg']); ?>" alt="image01" /></div>
            </div>

            <div class="da-slide">
                <h2><?= Html::encode($slider[3]['slhead']); ?></h2>
                <p><?= Html::encode($slider[3]['sltext']); ?> </p>
                <a href="#" class="da-link"><?= Html::encode($read_more); ?></a>
                <div class="da-img"><img src="/images/<?= Html::encode($slider[3]['slimg']); ?>" alt="image01" /></div>
            </div>
            <!--div class="da-slide">
                    <h2>Quality Control</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <a href="#" class="da-link">Read more</a>
                    <div class="da-img"><img src="/images/4.png" alt="image01" /></div>
            </div-->
            <nav class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </nav>
        </div>
    </section>
    <!-- End of Carousel-ka -->


    <section id="services">

        <div class = "container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h2>Training</h2>
                    <div class="thumbnail">
                        <a href="<?= Url::to(['training/index','lng' => $lng]) ?>">
                            <img src="/images/<?= $trmenu[0]["trimage"]; ?>" class="img-responsive" alt="web"/>
                        </a>
                        <div class="caption">
                            <h3><?= Html::encode($trmenu[0]["trhead"]); ?></h3>
                            <p><?= Html::encode($trmenu[0]["intro_text"]); ?></p>
                            <p>
                                <a href="#" class="btn btn-default">
                                    <?= Html::encode($read_more); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <h2>Marketing</h2>
                    <div class="thumbnail">
                        <a href="<?= Url::to(['marketing/index', 'lng' => $lng]) ?>">
                            <img src="images/<?= $mkmenu[0]['mkimage'] ?>" alt="Sample Image">
                        </a>
                        <div class="caption">
                            <h3><?= Html::encode($mkmenu[0]["mkhead"]); ?></h3>
                            <p>
                                <?= Html::encode($mkmenu[0]['intro_text']); ?>
                            </p>
                            <p>
                                <a href="#" class="btn btn-default">
                                    <?= Html::encode($read_more); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->

    </section>
    <!-- End of Services -->

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel ">
                        <div class="panel-heading"><h3>About  Us</h3></div>
                        <div class="panel-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Facilis, aspernatur, ut amet eveniet quas sequi molestias
                                dolorem reprehenderit doloribus quis earum minus illum voluptas
                                nulla sapiente laboriosam magni eos quidem.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Facilis, aspernatur, ut amet eveniet quas sequi molestias
                                dolorem reprehenderit doloribus quis earum minus illum voluptas
                                nulla sapiente laboriosam magni eos quidem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Facilis, aspernatur, ut amet eveniet quas sequi molestias
                                dolorem reprehenderit doloribus quis earum minus illum voluptas
                                nulla sapiente laboriosam magni eos quidem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About -->

</div><!-- site-index -->

<p>
    the file <code><?= __FILE__; ?></code>.
</p>

<script src="<?php?>"></script>
<script type="text/javascript">
    $(function() {

        $('#da-slider').cslider({
            autoplay : true,
            bgincrement : 450
        });
    });
</script>
