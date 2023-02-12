<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$this->context->layout = false;
\backend\assets\AppAsset::register($this);
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>URWar</title>
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
                                    <li class="active"><a href="/advanced/frontend/web/index.php?r=feedback">联系我们</a>
                                    </li>
                                </ul>
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="#">主页</a>
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
                    <figure><img src="statics/images/urwar.jpg" alt="" width="570" height="386">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="inset-lg-right-40 inset-xl-right-85 text-secondary">
                        <p>俄乌战争（乌克兰语：російсько-українська війна; 俄语：российско-украинская война）是2014年2月20日起俄罗斯与乌克兰之间爆发的一场旷日持久的混合战争，前期以低强度战争及代理人战争形式进行。2022年2月24日，俄白联盟以“非军事化、去纳粹化”为由全面入侵乌克兰，冲突当日起正式白热化为全面战争，并迅速发展为第二次世界大战以来欧洲最大规模的战争。</p>
                        <p>引发战争的深层原因包括1991年苏联解体后此地的“乌克兰化、去俄罗斯化”、境内俄裔俄罗斯民族主义所致国族认同分裂、“北约东扩”引发俄罗斯的不安全感、俄罗斯在前苏联地区重建影响力的计划，导火索为推翻了维克托·亚努科维奇亲俄政权的2014年乌克兰亲欧盟示威运动，以及随后的克里米亚危机、顿巴斯分离主义，这场战争围绕着乌克兰东南部的克里米亚和东部的顿巴斯地区的地位展开。2022年2月24日正式宣战前，俄罗斯政府的官方态度认为“战争状态”为乌克兰政府单方面宣称，其一直否认有任何参与，并称所有涉及乌境内冲突的俄方人员均为“志愿军”。</p>
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
                        <div class="post-boxed-image"><img src="statics/images/rrr.jfif" alt="" width="268" height="182"/>
                        </div>
                        <div class="post-boxed-body">
                            <div class="post-boxed-title"><a href="/advanced/frontend/web/index.php?r=np-frontsituation-article">俄乌战争第352天，清晨俄军发动大规模导弹攻击，基辅工厂发生爆炸，双方在巴赫穆特激战</a></div>
                            <div class="post-boxed-footer">
                                <ul class="post-boxed-meta">
                                    <li>
                                        <time datetime="">FEB 10, 2023</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <article class="post-boxed">
                        <div class="post-boxed-image"><img src="statics/images/wurenji.jfif" alt="" width="268" height="182"/>
                        </div>
                        <div class="post-boxed-body">
                            <div class="post-boxed-title"><a href="/advanced/frontend/web/index.php?r=np-frontsituation-article">战场态势改变！俄在整个前线加大攻击，炸毁乌境内未来的北约基地</a></div>
                            <div class="post-boxed-footer">
                                <ul class="post-boxed-meta">
                                    <li>
                                        <time datetime="2019-06-20">FEB 7, 2023</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <article class="post-boxed">
                        <div class="post-boxed-image"><img src="statics/images/1000.webp" alt="" width="268" height="182"/>
                        </div>
                        <div class="post-boxed-body">
                            <div class="post-boxed-title"><a href="/advanced/frontend/web/index.php?r=np-frontsituation-article">巴赫穆特战况转变，前线乌军几近崩溃，两个旅主动向俄军投降</a></div>
                            <div class="post-boxed-footer">
                                <ul class="post-boxed-meta">
                                    <li>
                                        <time datetime="">FEB 10, 2023</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <article class="post-boxed">
                        <div class="post-boxed-image"><img src="statics/images/u.jpg" alt="" width="268" height="182"/>
                        </div>
                        <div class="post-boxed-body">
                            <div class="post-boxed-title"><a href="/advanced/frontend/web/index.php?r=np-frontsituation-article">乌东前线俄军进展缓慢、连续，乌方放风提防俄“春季攻势”</a></div>
                            <div class="post-boxed-footer">
                                <ul class="post-boxed-meta">
                                    <li>
                                        <time datetime="">FEB 4, 2023</time>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <h3 class="text-center"><a href="/advanced/frontend/web/index.php?r=np-hurtanddeathsituation-article">伤亡情况</a></h3>
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
                                    <h5>中国</h5>
                                </div>
                            </div>
                            <div class="divider bg-accent"></div>
                            <div class="box-body">
                                <p>中华人民共和国政府表示，反对任何非法单边制裁。23日，中华人民共和国外交部发言人华春莹在例行记者会上说“我们认为制裁从来都不是解决问题的根本有效途径，中方一贯反对任何非法的单边制裁。”中国海关总署官网23日发布公告，允许俄罗斯全境小麦进口。3月2日，中国银行保险监督管理委员会主席郭树清表示，中国不赞成对俄罗斯进行金融制裁，而且也不会参与金融制裁，称单边制裁效果不佳且缺乏法律依据。</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="item">
                    <div class="block">
                        <article class="icon-box">
                            <div class="box-top">
                                <div class="box-header">
                                    <h5>欧盟</h5>
                                </div>
                            </div>
                            <div class="divider bg-accent"></div>
                            <div class="box-body">
                                <p>2月24日上午，欧盟委员会主席乌尔苏拉·冯德莱恩宣布欧盟将采取大规模制裁措施。制裁针对技术转让、俄罗斯银行和俄罗斯资产。欧盟外交和安全政策高级代表何塞·博雷利·丰特列斯表示，俄罗斯将面临“前所未有的孤立”，因为欧盟将实施“（欧盟实施的）最严厉的一系列制裁措施”。他还说，“这是自二战以来欧洲最黑暗的时刻之一”。欧洲议会议长萝伯塔·梅措拉呼吁“立即、迅速、扎实和迅速地采取行动”，并将于3月1日召开了一次特别会议。</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="item">
                    <div class="block">
                        <article class="icon-box">
                            <div class="box-top">
                                <div class="box-header">
                                    <h5>美国</h5>
                                </div>
                            </div>
                            <div class="divider bg-accent"></div>
                            <div class="box-body">
                                <p>美国总统乔·拜登宣布限制四家俄罗斯银行，包括VEB.RF（英语：VEB.RF]]）银行，以及与普京关系密切的“腐败的亿万富翁们”。他提到将增加北约部队的部署，以帮助邻近的北约国家。4月20日，美国宣布对俄罗斯实施新一波经济制裁，其中包括40多个实体和个人以及一家虚拟货币采矿公司。 4月21日，美国宣布禁止俄罗斯船只入港。7月底，美国开始对570种俄罗斯商品征收进口关税。</p>
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
                        <div class="box-cart-image"><img src="statics/images/gulei.jpg" alt="" width="342" height="338"/>
                        </div>
                        <div class="box-cart-body">
                            <blockquote class="blockquote-complex blockquote-complex-inverse">
                                <h3>专家视角</h3>
                                <p>
                                    <q>和平前景继续减少，进一步升级和流血的可能性在不断增加。俄乌冲突进一步升级可能意味着世界正走向“更广泛的战争”。</q>
                                </p>
                                <div class="quote-footer">
                                    <cite>古特雷斯</cite><small>联合国秘书长</small>
                                </div>
                            </blockquote>
                            <div class="button-wrap inset-md-left-70"><a class="button button-responsive button-medium button-primary-outline-v2" href="/advanced/frontend/web/index.php?r=expertviews">查看更多</a></div>
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
                <div class="col-sm-6 col-md-12 col-lg-3 text-center">
                    <div class="block-wrap-1">
                        <h3 class="text-normal">科夫曼</h3>
                        <p class="h5 h5-smaller text-style-4">CNA负责人</p>
                        <p>德国坦克在内的西方坦克无法影响俄乌冲突的进程。与此同时，乌克兰已有数千辆坦克被毁。他总结说：“我不相信，西方坦克的质量先进俄罗斯坦克那么多，以至于可以改变战局。”</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-3 text-center">
                    <div class="block-wrap-1">
                        <h3 class="text-normal">韦进深</h3>
                        <p class="h5 h5-smaller text-style-4">副教授</p>
                        <p>  美国一面对乌克兰提供情报支持和军事援助，一面对俄罗斯加码制裁，事实上对俄乌局势和双方的立场和态度产生了关键性影响，在俄乌局势朝向长期性和复杂化发展中扮演了幕后推手的角色。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-3 text-center">
                    <div class="block-wrap-1">
                        <h3 class="text-normal">宋忠平</h3>
                        <p class="h5 h5-smaller text-style-4">军事评论员</p>
                        <p>  目前的俄乌冲突局势有两个焦点：其一，俄罗斯借特别军事行动一周年之机发动一场新的进攻，似乎不可避免；其二，无论俄罗斯是否发动新的进攻，2月24日之后，俄乌冲突大概率会进入战略相持阶段。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-3 text-center">
                    <div class="block-wrap-1">
                        <h3 class="text-normal">吴黎明</h3>
                        <p class="h5 h5-smaller text-style-4">新华社记者</p>
                        <p>美国的军工复合体是这场冲突的直接受益者，并且长期从中牟利。冲突发生后，包括德国在内的一些欧洲国家大规模提升国防预算，增加从美国购买各种武器装备的投入，让美国军工企业乐开了花。</p>
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
                                <h6>俄乌冲突怎么走对中国都是不利的</h6>
                                <p>
                                    <q>中国在外交上其实面临着一种被架空的状态，在俄乌冲突这件事上，我们一方面强调中国始终坚持尊重他国主权和领土完整的基本原则不会变，但另一方面，考虑到中俄两国的贸易以及军事战略关系，我们又拒绝使用“入侵”“吞并”等词语来形容俄罗斯对乌克兰的此次行动。</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                                <div class="unit-body">
                                    <cite>周浩然</cite>
                                    <p class="text-primary">1911528</p>
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
                                <h6>美国是俄乌冲突的最大赢家</h6>
                                <p>
                                    <q>美国称霸世界一个屡试不爽的手段就是巧实力外交，借力打力！为了消耗俄罗斯，拉拢欧洲，解决国内经济不振，完成欧洲产业转移到美国，欧洲金钱流向美国…，看准了撬动这冲突之七寸，经过多年准备，一石多鸟策动了这场冲突。所以它不会全力支援乌克兰，也不会彻底灭了俄罗斯，一个和欧洲对立和打着的俄罗斯最有利于实现美国利益最大化。</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                                <div class="unit-body">
                                    <cite>邹明锡</cite>
                                    <p class="text-primary">2013837</p>
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
                                <h6>战争残酷，希望俄乌冲突早日结束</h6>
                                <p>
                                    <q>半年以来，我们已经看到了太多决战式的战斗，基辅郊外俄军的突击受阻，顿巴斯地区乌军缠斗俄罗斯装甲集群，以及随后的马里乌波尔钢铁厂围城战以及卢甘斯克那场规模宏大的炮战，重火力对战必然会带来严重的伤亡，无论最后的赢家是谁，两国的平民百姓都是最大的输家。希望战争能早日结束！</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                                <div class="unit-body">
                                    <cite>侯舒男</cite>
                                    <p class="text-primary">1911418</p>
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
                                <p class="h7"><a href="/advanced/frontend/web/index.php?r=friendlink"> Quick links</a></p>
                                <div class="row" style="max-width: 270px;">
                                    <div class="col-6">
                                        <ul class="list-marked-variant-2">
                                            <li><a href="https://www.zhihu.com/column/c_1561629727898427392">知乎</a></li>
                                            <li><a href="https://baike.baidu.com/item/2022%E5%B9%B4%E4%BF%84%E4%B9%8C%E5%86%B2%E7%AA%81/60143880">百度</a></li>
                                            <li><a href="https://zh.wikipedia.org/wiki/2022%E5%B9%B4%E4%BF%84%E7%BE%85%E6%96%AF%E5%85%A5%E4%BE%B5%E7%83%8F%E5%85%8B%E8%98%AD">Wiki</a></li>
                                            <li><a href="https://chinese.aljazeera.net/news/war-in-ukraine/2022/12/29/%e5%9b%9e%e9%a1%be2022%e5%b9%b4%e5%8f%af%e8%a7%86%e5%8c%96%e4%bf%84%e4%b9%8c%e6%88%98%e4%ba%89%e8%bf%9b%e7%a8%8b">2022俄乌战争总结</a></li>
                                        </ul>
                                    </div>
                                </div>
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
                    <div class="col-md-6 text-md-left">
                        <p class="rights text-white"><span class="copyright-year"></span><span>&nbsp;&#169;&nbsp;</span><span>网数小队.&nbsp; All Rights Reserved.</span>Design&nbsp;by&nbsp;<a href="https://github.com/ZhangShuui/WebDatabaseDev">Zsr</a></p>
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