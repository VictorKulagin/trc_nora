<?php

/** @var \frontend\models\StageRental $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

\frontend\assets\AppAssetRent::register($this);


$this->registerJs('            
             window.addEventListener(\'load\', function () {
                 vanillaCalendar.init({
                 disablePastDays: true
                 });
             })'
);

?>
<section id="content-block">

        <div class="container">
            <h1 class="content-top" style="color: #000000;">Аренда сцены</h1>
          <div class="common_container">
            <?= Html::img(Yii::getAlias('@web').'/images/other/stage_rental.jpg', ['alt' => 'image', 'class' => 'responsive-img_main']);?>
            <div class="d"></div>
         <div class="content_two">
           <div id="v-cal">
                <div class="vcal-header">

                   <button class="vcal-btn" data-calendar-toggle="previous">
                        <svg width="60" height="60" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d)">
                                <rect x="16" y="16" width="48" height="48" rx="4" fill="white"/>
                                <path d="M31.0699 39.9992L45.5216 25.5474C45.877 25.192 45.877 24.622 45.5216 24.2666C45.1662 23.9111 44.5962 23.9111 44.2407 24.2666L29.1452 39.3621C28.7898 39.7175 28.7898 40.2875 29.1452 40.643L44.2407 55.7318C44.4151 55.9061 44.6498 56 44.8778 56C45.1058 56 45.3405 55.9128 45.5149 55.7318C45.8703 55.3763 45.8703 54.8063 45.5149 54.4509L31.0699 39.9992Z" fill="#4D4866"/>
                            </g>
                            <defs>
                                <filter id="filter0_d" x="0" y="0" width="80" height="80" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                    <feOffset/>
                                    <feGaussianBlur stdDeviation="8"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.16 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </button>

                    <div class="vcal-header__label" data-calendar-label="month">
                        Месяц год
                    </div>


                  <button class="vcal-btn" data-calendar-toggle="next">
                        <svg width="60" height="60" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d)">
                                <rect x="16" y="16" width="48" height="48" rx="4" fill="white"/>
                                <path d="M50.8578 39.3621L35.7623 24.2666C35.4069 23.9111 34.8368 23.9111 34.4814 24.2666C34.126 24.622 34.126 25.192 34.4814 25.5474L48.9331 39.9992L34.4814 54.4509C34.126 54.8063 34.126 55.3763 34.4814 55.7318C34.6558 55.9061 34.8905 56 35.1185 56C35.3465 56 35.5812 55.9128 35.7556 55.7318L50.8511 40.6362C51.2065 40.2875 51.2065 39.7108 50.8578 39.3621Z" fill="#4D4866"/>
                            </g>
                            <defs>
                                <filter id="filter0_d" x="0" y="0" width="80" height="80" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                    <feOffset/>
                                    <feGaussianBlur stdDeviation="8"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.16 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </button>

                </div>

                <div class="vcal-week">
                    <span>Пн</span>
                    <span>Вт</span>
                    <span>Ср</span>
                    <span>Чт</span>
                    <span>Пт</span>
                    <span>Сб</span>
                    <span>Вс</span>
                </div>
                <div class="vcal-body" data-calendar-area="month"></div>
            </div>
            <div class="rabs"> <!--style="display: none"-->
                <input type="radio" id="tab-1" name="radioname" value="10:00">
                <label for="tab-1">10:00</label>
                <input type="radio" id="tab-2" name="radioname" value="11:00">
                <label for="tab-2">11:00</label>
                <input type="radio" id="tab-3" name="radioname" value="12:00">
                <label for="tab-3">12:00</label>
                <input type="radio" id="tab-4" name="radioname" value="13:00">
                <label for="tab-4">13:00</label>
                <input type="radio" id="tab-5" name="radioname" value="14:00">
                <label for="tab-5">14:00</label>
                <input type="radio" id="tab-6" name="radioname" value="15:00">
                <label for="tab-6">15:00</label>
                <input type="radio" id="tab-7" name="radioname" value="16:00">
                <label for="tab-7">16:00</label>

                <input type="radio" id="tab-8" name="radioname" value="17:00">
                <label for="tab-8">17:00</label>
                <input type="radio" id="tab-9" name="radioname" value="18:00">
                <label for="tab-9">18:00</label>
                <input type="radio" id="tab-10" name="radioname" value="19:00">
                <label for="tab-10">19:00</label>
                <input type="radio" id="tab-11" name="radioname" value="20:00"> <!--checkbox-->
                <label for="tab-11">20:00</label>
            </div style="clear: none;">
             <div class="md-modal md-effect-1" id="modal-1">
                <div class="md-content">
                    <h3><span class="scene-title">АРЕНДА СЦЕНЫ</span></h3>
                    <div>
                        <!--<p>
                            <input type="text" placeholder="Имя" style="outline: none; border-bottom: 1px solid #fb8c00;border-right: none; border-left: none; border-top: none;">
                        </p>
                        <p>
                            <input type="text" placeholder="Телефон" style="outline: none; border-bottom: 1px solid #fb8c00;border-right: none; border-left: none; border-top: none;">
                        </p>
                        <p>
                            <input type="text" placeholder="Электронная почта" style="outline: none; border-bottom: 1px solid #fb8c00;border-right: none; border-left: none; border-top: none;">
                        </p>
                        <p>
                            <input type="text" placeholder="Количество участников" style="outline: none; border-bottom: 1px solid #fb8c00;border-right: none; border-left: none; border-top: none;">
                        </p>
                        <p>
                            <input type="text" placeholder="Описание мероприятия" style="outline: none; border-bottom: 1px solid #fb8c00;border-right: none; border-left: none; border-top: none;">
                        </p>
                        <p>
                            <input type="text" name="date" hidden placeholder="Дата" style="outline: none; border-bottom: 1px solid #fb8c00;border-right: none; border-left: none; border-top: none;">
                        </p>
                        <p>
                            <input type="text" name="time" hidden placeholder="Время" style="outline: none; border-bottom: 1px solid #fb8c00;border-right: none; border-left: none; border-top: none;">
                        </p>-->

                        <?php $formSR = ActiveForm::begin(); ?>

                        <?= $formSR->field($model, 'name') ?>
                        <?= $formSR->field($model, 'phone') ?>
                        <?= $formSR->field($model, 'email') ?>
                        <?= $formSR->field($model, 'number_participants') ?>
                        <?= $formSR->field($model, 'description')->textarea()->label('Описание мероприятия') ?>
<!--                        --><?//= $formSR->field($model, 'date')->hiddenInput()->label(false, ['style'=>'display:none']) ?>
                        <?= $formSR->field($model, 'time_start')->hiddenInput()->label(false, ['style'=>'display:none'])/*->label(false, ['style'=>'display:none'])*/ ?>
                        <?= $formSR->field($model, 'form_date')->hiddenInput()->label(false, ['style'=>'display:none'])/*->label(false, ['style'=>'display:none'])*/ ?>
                        <?= $formSR->field($model, 'form_time')->hiddenInput()->label(false, ['style'=>'display:none'])/*->label(false, ['style'=>'display:none'])*/ ?>


                        <div class="time_r"></div>

                        <?//= $formSR->field($model, 'dateSR')->hiddenInput()->label(false, ['style'=>'display:none'])?>

                        <div class="form-group">
                            <?= Html::submitButton('Отправить заявку', ['class' => 'submit-request-button']) ?>
                        </div>
                            <?//=$email;?>
                        <?php ActiveForm::end(); ?>

                    </div>


                    <!--<div></div>
                    <button class="submit-request-button">Отправить заявку</button>
                    <div></div>-->
                    <!--<button class="md-close">Close me!</button>-->
                </div>
            </div>

            <div class="column1" style="width: 100%; text-align: center; margin-top: 75px; padding-bottom: 10px;">
                <!--<hr size=1px width=293px align="left">-->
                <div id="v-cal"></div>
                <button class="md-trigger button-tr" data-modal="modal-1">Отправить запрос на аренду</button>
            </div>

            <div class="md-overlay"></div><!-- the overlay element -->


            <script>
                // this is important for IEs
                var polyfilter_scriptpath = '/js/';
            </script>

             <p class="demo-picked">
                 Date picked:
                 <span data-calendar-label="picked"></span>
             </p>
         </div>

    </div>

            <p style="padding: 10px; 10px; 10px; 10px;">«Хотите провести яркое, интересное мероприятие, но не знаете, какое место для этого выбрать? Предлагаем провести его в торгово-развлекательном центре «Нора». Здесь много пространства для реализации праздника, многофункциональная сцена с профессиональным световым и звуковым оборудованием и многое другое!
                Вы можете провести мероприятие на нашей площадке абсолютно бесплатно, главное, чтобы оно было увлекательным, ярким и зрелищным! Бронируйте любое удобное для вас время, и мы обязательно с вами свяжемся!»
            </p>
  </div>


<!--<script>
    window.addEventListener('load', function () {
        vanillaCalendar.init({
            disablePastDays: true
        });
    })
</script>-->


</section>





