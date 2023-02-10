<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$this->context->layout = false;
\backend\assets\AppAsset::register($this);
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="statics/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic%7CLato:300,300italic,400,400italic,700,900%7CMerriweather:700italic">
    <link rel="stylesheet" href="statics/css/fonts.css">
    <link rel="stylesheet" href="statics/css/bootstrap.css">
    <link rel="stylesheet" href="statics/css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="statics/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="statics/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"> </div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">
    <header class="page-head">
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-aside-wrap">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                        </div>
                    </div>
                    <div class="rd-navbar-group">
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-nav-inner">
                                <div class="rd-navbar-btn-wrap"><a class="button button-smaller button-primary-outline" href="\advanced\backend\web">进入后台</a></div>
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="about-us.html">About Us</a>
                                    </li>
                                    <li><a href="contact-us.html">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section>
        <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="true" data-autoplay="5500" data-simulate-touch="true">
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide" data-slide-bg="statics/images/TASS.jpg">
                    <div class="swiper-slide-caption text-center">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        <h3 class="medium text-primary">俄乌冲突</h3>
                                    </div>
                                    <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">一场旷日持久的混合战争</h2>
                                    <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">A Protracted Hybrid War</p>
                                    <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="https://zh.wikipedia.org/zh-hans/%E4%BF%84%E4%B9%8C%E6%88%98%E4%BA%89">To Wiki</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="statics/images/eu12.jpg">
                    <div class="swiper-slide-caption text-center">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        <h3 class="medium text-primary">了解局势</h3>
                                    </div>
                                    <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">从多个角度观察俄乌战争</h2>
                                    <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Observing the Russo-Ukraine War from Multiple Angles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="statics/images/R.jfif">
                    <div class="swiper-slide-caption text-center">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        <h3 class="medium text-primary">留言</h3>
                                    </div>
                                    <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150">在此处留下你的见解感受</h2>
                                    <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">Leave your opinion here</p>
                                    <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="#">Write Down</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar d-lg-none"></div>
            <div class="swiper-nav-wrap">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="section-35 section-md-50">
        <div class="container">
            <h3>简介</h3>
            <div class="row row-30 flex-row-md-reverse justify-content-lg-between">
                <div class="col-md-6">
                    <figure><img src="statics/images/typography-2-570x386.jpg" alt="" width="570" height="386">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="inset-lg-right-40 inset-xl-right-85 text-secondary">
                        <p>Our approach is practical and client-oriented, and we are committed to providing efficient, effective, and top-quality legal services. Other firms measure success by their growth in size. Our priority is to measure our success based on the growth in the quality of our work and the complexity of our legal services.</p>
                        <p>We endeavour to establish long-lasting relationships with our clients. Every assignment is preceded by a careful assessment of the work, costs and realistic results. We carry out our assignments in close consultation with the client. This goes some way to explaining why we are justifiably proud of our many long-standing and close client relationships. In the course of long-term engagements, each client has a specific contact attorney within the firm who is familiar with the client's business operations and maintains close communication with the client.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-50 section-md-75 section-xl-100">
        <div class="container">
            <h3 class="text-center"><a href="/advanced/frontend/web/index.php?r=np-frontsituation-article">前线局势</a></h3>
            <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">
                <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <article class="post-boxed">
                        <div class="post-boxed-image"><img src="statics/images/home-5-268x182.jpg" alt="" width="268" height="182"/>
                        </div>
                        <div class="post-boxed-body">
                            <div class="post-boxed-title"><a href="#">The Lawyers Collective Women's Rights Initiative</a></div>
                            <div class="post-boxed-footer">
                                <ul class="post-boxed-meta">
                                    <li>
                                        <time datetime="2019-06-14">JUNE 14, 2019</time>
                                    </li>
                                    <li><span>by</span><a href="#">Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <article class="post-boxed">
                        <div class="post-boxed-image"><img src="statics/images/home-6-268x182.jpg" alt="" width="268" height="182"/>
                        </div>
                        <div class="post-boxed-body">
                            <div class="post-boxed-title"><a href="#">Legal Documents Every Landlord Needs</a></div>
                            <div class="post-boxed-footer">
                                <ul class="post-boxed-meta">
                                    <li>
                                        <time datetime="2019-06-20">JUNE 20, 2019</time>
                                    </li>
                                    <li><span>by</span><a href="#">Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <article class="post-boxed">
                        <div class="post-boxed-image"><img src="statics/images/home-7-268x182.jpg" alt="" width="268" height="182"/>
                        </div>
                        <div class="post-boxed-body">
                            <div class="post-boxed-title"><a href="#">Help Us Make the Law Accessible for Everyone</a></div>
                            <div class="post-boxed-footer">
                                <ul class="post-boxed-meta">
                                    <li>
                                        <time datetime="2019-06-23">JUNE 23, 2019</time>
                                    </li>
                                    <li><span>by</span><a href="#">Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <article class="post-boxed">
                        <div class="post-boxed-image"><img src="statics/images/home-8-268x182.jpg" alt="" width="268" height="182"/>
                        </div>
                        <div class="post-boxed-body">
                            <div class="post-boxed-title"><a href="#">5 Legal Documents for Military Service People</a></div>
                            <div class="post-boxed-footer">
                                <ul class="post-boxed-meta">
                                    <li>
                                        <time datetime="2019-06-12">JUNE 12, 2019</time>
                                    </li>
                                    <li><span>by</span><a href="#">Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="section parallax-container bg-black" data-parallax-img="statics/images/back.jpg">
        <div class="parallax-content">
            <div class="section-50 section-md-90">
                <div class="container">
                    <div class="row row-40">
                        <div class="col-sm-6 col-md-3">
                            <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg icon-primary mercury-icon-group"></span>
                                <div class="text-large counter">7068</div>
                                <p class="text-bigger">平民死亡数</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-group"></span>
                                <div class="text-large counter">61207</div>
                                <p class="text-bigger">乌军死亡数</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-group"></span>
                                <div class="text-large counter">21000</div>
                                <p class="text-bigger">俄军死亡数</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-gear"></span>
                                <div class="text-large counter">100000+</div>
                                <p class="text-bigger">双方伤员</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-50 section-md-75 section-lg-100">
        <div class="container">
            <h3 class="text-center"><a href="/advanced/frontend/web/index.php?r=np-globalsituation-article">国际观察</a></h3>
            <div class="owl-carousel owl-spacing-1 owl-nav-classic owl-style-minimal" data-autoplay="true" data-items="1" data-md-items="3" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true" data-nav="true" data-dots="true" data-dots-each="1">
                <div class="item">
                    <div class="block">
                        <article class="icon-box">
                            <div class="box-top">
                                <div class="box-header">
                                    <h5>Business Law</h5>
                                </div>
                            </div>
                            <div class="divider bg-accent"></div>
                            <div class="box-body">
                                <p>Business law deals with the creation of new businesses and the issues that arise as existing.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="item">
                    <div class="block">
                        <article class="icon-box">
                            <div class="box-top">
                                <div class="box-header">
                                    <h5>Family Law</h5>
                                </div>
                            </div>
                            <div class="divider bg-accent"></div>
                            <div class="box-body">
                                <p>Family law attorneys help their clients file for separation or divorce, alimony or child custody.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="item">
                    <div class="block">
                        <article class="icon-box">
                            <div class="box-top">
                                <div class="box-header">
                                    <h5>Civil Litigation</h5>
                                </div>
                            </div>
                            <div class="divider bg-accent"></div>
                            <div class="box-body">
                                <p>Civil litigation is the process in which civil matters are resolved in a court of law.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-displaced-wrap">
        <div class="bg-displaced-body">
            <div class="container">
                <div class="inset-xl-left-70 inset-xl-right-70">
                    <article class="box-cart bg-ebony-clay">
                        <div class="box-cart-image"><img src="statics/images/home-2-342x338.jpg" alt="" width="342" height="338"/>
                        </div>
                        <div class="box-cart-body">
                            <blockquote class="blockquote-complex blockquote-complex-inverse">
                                <h3>专家视角</h3>
                                <p>
                                    <q>When you place your case in the hands of our lawyers and paralegals, you are placing your case in the hands of professionals who are committed to achieving the best possible outcome.</q>
                                </p>
                                <div class="quote-footer">
                                    <cite>Ryan Emberson</cite><small>CEO at LawExpert</small>
                                </div>
                            </blockquote>
                            <div class="button-wrap inset-md-left-70"><a class="button button-responsive button-medium button-primary-outline-v2" href="#">Request a Free Consultation</a></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="bg-displaced bg-image" style="background-image: url(statics/images/OIP.jpg);"></div>
    </section>

    <section class="section-60 section-lg-100">
        <div class="container">
            <div class="row row-40 align-items-sm-end">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="statics/images/team-9-246x300.jpg" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                                <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Amanda Smith</a></p>
                                <div class="divider divider-md bg-teak"></div>
                                <p class="text-caption">Paralegal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="statics/images/team-10-246x300.jpg" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                                <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">John Doe</a></p>
                                <div class="divider divider-md bg-teak"></div>
                                <p class="text-caption">Attorney</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail-variant-2-wrap">
                        <div class="thumbnail thumbnail-variant-2">
                            <figure class="thumbnail-image"><img src="statics/images/team-11-246x300.jpg" alt="" width="246" height="300"/>
                            </figure>
                            <div class="thumbnail-inner">
                                <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#">+1 (409) 987–5874</a></div>
                                <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                            </div>
                            <div class="thumbnail-caption">
                                <p class="text-header"><a href="#">Vanessa Ives</a></p>
                                <div class="divider divider-md bg-teak"></div>
                                <p class="text-caption">Legal Assistant</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-3 text-center">
                    <div class="block-wrap-1">
                        <div class="block-number">06</div>
                        <h3 class="text-normal">Experts</h3>
                        <p class="h5 h5-smaller text-style-4">in Their Fields</p>
                        <p>If you or your business is facing a legal challenge, contact us today to arrange a free initial consultation with an attorney.</p><a class="link link-group link-group-animated link-bold link-secondary" href="#"><span>Read more</span><span class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <br class="section-66 section-md-90 section-xl-bottom-100">
        <div class="container">
            <h3 class="text-center" href="#">留言板</h3>
            <div class="owl-carousel owl-spacing-1 owl-nav-classic owl-style-minimal" data-autoplay="true" data-items="1" data-md-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true" data-nav="true" data-dots="true" data-dots-each="1">
                <div class="item">
                    <blockquote class="quote-bordered">
                        <div class="quote-body">
                            <div class="quote-open">
                                <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                </svg>
                            </div>
                            <div class="quote-body-inner">
                                <h6>俄乌战争是美俄博弈的激化</h6>
                                <p>
                                    <q>俄乌冲突是俄美矛盾激化、俄方对美反击的具体表现。无论是北约东扩，还是俄乌冲突，美国军火商都从中受益。美国军工复合体应对俄乌冲突爆发负责，因为军工复合体的利益追逐及其游说活动导致冷战后北约一再违反不再东扩的承诺。美国军工复合体的利益决定美国需要敌人，因此它总有动力在全球寻找新的敌人。</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                                <div class="unit-left"><img class="img-circle" src="statics/images/clients-testimonials-1-68x68.jpg" alt="" width="68" height="68"/>
                                </div>
                                <div class="unit-body">
                                    <cite>张书睿</cite>
                                    <p class="text-primary">2010521</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="quote-bordered">
                        <div class="quote-body">
                            <div class="quote-open">
                                <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                </svg>
                            </div>
                            <div class="quote-body-inner">
                                <h6>LawExpert is One of The Best...</h6>
                                <p>
                                    <q>John Doe is one of those attorneys who has it all-talent and skill, compassion for his clients, and the ability to communicate well with anyone he meets. This is one of the best combinations for a trial attorney and he is one of the best.</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                                <div class="unit-left"><img class="img-circle" src="statics/images/clients-testimonials-2-68x68.jpg" alt="" width="68" height="68"/>
                                </div>
                                <div class="unit-body">
                                    <cite>Amanda Eberson</cite>
                                    <p class="text-primary">CEO, Eberson Co.</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    <br>
    </section>
    <div class="centered">
        <a class="link link-group link-group-animated link-bold link-secondary" href="/advanced/frontend/web/index.php?r=leave-message"><span>写下你自己的留言</span><span class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
    </div>
    <br>
    <footer class="page-foot bg-ebony-clay">
        <div class="section-40 section-md-75">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-9 col-md-11 col-xl-12">
                        <div class="row row-50">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <p class="h7">Quick links</p>
                                <div class="row" style="max-width: 270px;">
                                    <div class="col-6">
                                        <ul class="list-marked-variant-2">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Blog</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-marked-variant-2">
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="contact-us.html">Contacts</a></li>
                                            <li><a href="#">Appointment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <p class="h7">Contact us</p>
                                <address class="contact-info text-left">
                                    <div class="unit unit-horizontal unit-spacing-md align-items-center">
                                        <div class="unit-left"><span class="novi-icon icon icon-xs icon-storm-gray material-icons-phone"></span></div>
                                        <div class="unit-body"><a class="link-white" href="tel:#">+123 234 984 47 45</a></div>
                                    </div>
                                    <div class="unit unit-horizontal unit-spacing-md align-items-center">
                                        <div class="unit-left"><span class="novi-icon icon icon-xs icon-storm-gray fa fa-envelope-o"></span></div>
                                        <div class="unit-body"><a class="link-white" href="mailto:#">info@demolink.org</a></div>
                                    </div>
                                    <div class="unit unit-horizontal unit-spacing-md">
                                        <div class="unit-left"><span class="novi-icon icon icon-xs icon-storm-gray material-icons-place"></span></div>
                                        <div class="unit-body"><a class="link-white d-inline" href="#">6036 Richmond hwy,<br>Alexandria, VA USA 22303</a></div>
                                    </div>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>
        <div class="section-35">
            <div class="container text-center">
                <div class="row row-15 flex-md-row-reverse justify-content-md-between align-items-md-center">
                    <div class="col-md-6 text-md-right">
                        <div class="group-sm group-middle">
                            <p class="font-italic text-white">Follow Us:</p>
                            <ul class="list-inline list-inline-reset">
                                <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-facebook" href="#"></a></li>
                                <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-twitter" href="#"></a></li>
                                <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-google-plus" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-left">
                        <p class="rights text-white"><span class="copyright-year"></span><span>&nbsp;&#169;&nbsp;</span><span>LawExpert.&nbsp; All Rights Reserved.</span>Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<div class="snackbars" id="form-output-global"></div>
<script src="statics/js/core.min.js"></script>
<script src="statics/js/script.js"></script>
</body>
</html>