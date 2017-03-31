<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Contact';
?>

<div class="site-contact">
    <section id="contact">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-md-12">
                    <h1><?= Html::encode($this->title) ?></h1> <hr>
                </div>

                <!-- if !empty(SESSION['contactFormSubmitted']) { edit Flash message } else { view HTML-form} -->

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitTrue')) : ?>
                <div class="col-md-12">


                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?=  yii::$app->getSession()->getFlash('contactFormSubmitTrue'); ?>
                    </div>
                </div>
                <?php endif; ?>


                <div class="col-sm-8 contact-form">
                    <?php $form = ActiveForm::begin(['id' =>'contact-form', 'method' =>'post', 'class' =>'form' ]); ?>
                        <div class="row">

                            <div class="col-xs-6 col-md-6">
                                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'form-control', 'id' =>'name', 'placeholder' => 'name'])->label(false) ?>
                            </div>

                            <div class="col-xs-6 col-md-6">
                                <?= $form->field($model, 'email')->input('email',['id' => 'email', 'placeholder' => 'E-mail', 'class' =>'form-control'])->label(false) ?>
                            </div>

                            <div class="col-xs-12 col-md-12">
                                <?= $form->field($model, 'subject')->textInput(['id' =>'subject', 'placeholder' => 'Subject', 'class' => 'form-control'])->label(false) ?>
                            </div>
                        </div>
                        <?= $form->field($model, 'body')->textarea(['rows' => 10,'placeholder' => 'Message', 'id' => 'message'])->label(false) ?>

                        <div class="row">
                            <div class="col-xs-12 col-md-12 form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary col-md-offset-4 col-md-4', 'name' => 'contact-button']) ?>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>

                <!-- Address -->
                <div class="col-sm-4">
					<div class="row">
                    <address>
                        <p>
                            <strong> Address:</strong>
                            (Haftungsbeschraenkt/Limited-Liability), Morsering 2, Munich 80937 Germany , <br>
                            <strong>Phone:</strong> +49 151 2757 2810 <br>
                            <strong>E-mail:</strong><a href="mailto:yourbusiness@gmail.com">yourbusiness@gmail.com</a><br>
                        </p>
                        <p>You may also send us questions you are interested in via
                            <strong>info:</strong><a href="mailto:info@yourbusiness.com">info@yourbusiness.com</a><br>
                        </p>
                    </address>
					</div>
					<div class="row">
						<div class="mapping">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2349.677429556874!2d44.52173754927836!3d40.20562314455826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa9eb186c7640db7!2z0JXRgNC10LLQsNC9INCh0LjRgtC4!5e0!3m2!1sru!2sru!4v1490789431202" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
                </div>

            </div>
        </div>
    </section>

</div>
