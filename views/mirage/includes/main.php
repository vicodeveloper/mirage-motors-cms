<?php
/**
 * Created by PhpStorm.
 * User: ViCODeveloper
 * Date: 027 27.12.16
 * Time: 0:10
 */
defined('ViCODev') or die("Access interzis!"); ?>

<div class="slider" style="margin-top: -1px;">
        <ul class="slides">
            <li>
                <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row center-align">
            <h2>De ce anume Mirage Motors?</h2>
            <p>
Vă garantăm calitate superioară pentru că colaborăm doar cu brand-urile verificate de ani și oameni.
            </p>
        </div>
    </div>
    <div class="container center">
        <div class="carousel">
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/ajusa.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/ngk.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/beru.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/erling.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/freccia.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/gates.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/goetze.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/mahle.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/npr.jpg"></a>
            <a class="carousel-item" href="#"><img src="<?=TEMPLATE;?>img/brands/vicreinz.jpg"></a>
        </div>
    </div>

    <div class="container">
        <div class="row center-align">
            <h2>Ce vă putem propune?</h2>
            <p>
Avem un asortiment bogat și de asta am divizat produsele în urmatoarele categorii:
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col s12 m4">
                <div class="card small white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/piese-auto.png">
                    </div>
                    <div class="card-content menu_bg white-text">
                        <span class="card-title activator">Piese auto<i class="material-icons right" style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Piese auto<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card small menu_bg white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/piese-motor.jpg">
                    </div>
                    <div class="card-content grey darken menu_bg white-text">
                        <span class="card-title activator">Piese motor<i class="material-icons right"style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Piese motor<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card small menu_bg white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/uleiuri.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">Uleiuri<i class="material-icons right"style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Uleiuri<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card small menu_bg white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/pompe-ulei.jpeg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">Pompe ulei<i class="material-icons right"style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Pompe ulei<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card small menu_bg white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/acumulatori.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">Acumulatare<i class="material-icons right"style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Acumulatare<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card small menu_bg white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/turbosuflante.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">Turbosuflante<i class="material-icons right"style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Turbosuflante<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card small menu_bg white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/accesorii-auto.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">Accesorii suplimentari<i class="material-icons right"style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Accesorii suplimentari<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card small menu_bg white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/car_accessories.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator ">Accesorii automobil<i class="material-icons right"style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Accesorii automobil<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card small menu_bg white-text">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?=TEMPLATE;?>img/categ/autocosmetica.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">Cosmetica auto<i class="material-icons right"style="padding-top: 10px;" >more_vert</i></span>
                        <p style="padding-top: 10px;"><a href="#">Detalii...</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Cosmetica auto<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row center-align">
            <h2>Есть вопросы?</h2>
            <p>
Задайте свой вопрос, заполнив нижнию форму:
            </p>
        </div>
    </div>

    <div class="container">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Ваше Имя</label>
                </div>
                <div class="input-field col s6">
                    <input id="e-mail" type="email" class="validate">
                    <label for="e-mail">E-mail для связи с Вами</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Напишите Ваш вопрос</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Оправить
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
    <div class="container">
        <div class="row center-align">
            <h2>Мы тут!</h2>
        </div>
    </div>
    <div class="valign-wrapper">
        <iframe class="valign" style=";border:0; margin-bottom: 0;" src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20767.456571171286!2d28.855633616768934!3d47.09554801584565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1f8f620e2fe3092!2z0KHRgtCw0LLRh9C10L3Riw!5e1!3m2!1sru!2s!4v1480195541228" width="100%" height="455px" frameborder="0" allowfullscreen></iframe>
    </div>