<?php
use yii\helpers\Html;
$this->title = 'Linux &#8211; world';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang=zh-CN class=no-js>
<head>
    <?= Html::csrfMetaTags() ?>
    <title><?=$this->title?></title>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel=stylesheet href='/static/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='/static/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='/static/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='/static/plugins/zilla-likes/styles/zilla-likes.css' type=text/css media=all>
    <link rel=stylesheet href='/static/css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='/static/css/akea-style-custom.css' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=PT+Serif' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Open+Sans' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic%2Cgreek-ext%2Cgreek' type=text/css media=all>
    <?php $this->head() ?>
</head>

<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js akea-body akea-body-front akea-full  akea-with-sticky-navigation  akea-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url="/">
<?php $this->beginBody() ?>
<!-- 頭部 - 開始 -->
<div class=akea-mobile-header-wrap>
    <div class="akea-mobile-header akea-header-background akea-style-slide akea-sticky-mobile-navigation " id=akea-mobile-header>
        <div class="akea-mobile-header-container akea-container clearfix">
            <div class="akea-logo  akea-item-pdlr">
                <div class=akea-logo-inner>
                    <a class href="/"><img src=/upload/logo-2-1.png alt width=140 height=33></a>
                </div>
            </div>
            <div class=akea-mobile-menu-right>
                <div class=akea-main-menu-search id=akea-mobile-top-search><i class="fa fa-search"></i></div>
                <div class=akea-top-search-wrap>
                    <div class=akea-top-search-close></div>
                    <div class=akea-top-search-row>
                        <div class=akea-top-search-cell>
                            <form role=search method=get class=search-form action=#>
                                <input type=text class="search-field akea-title-font" placeholder=Search... value name=s>
                                <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                <input type=submit class=search-submit value=Search>
                                <div class=akea-top-search-close><i class=icon_close></i></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="akea-overlay-menu akea-mobile-menu" id=akea-mobile-menu><a class="akea-overlay-menu-icon akea-mobile-menu-button akea-mobile-button-hamburger" href=#><span></span></a>
                    <div class="akea-overlay-menu-content akea-navigation-font">
                        <div class=akea-overlay-menu-close></div>
                        <div class=akea-overlay-menu-row>
                            <div class=akea-overlay-menu-cell>
                                <ul id=menu-main-navigation class=menu>
                                    <li class="menu-item menu-item-home current-menu-item"><a href="/" aria-current=page>首頁</a></li>
                                    <li class="menu-item menu-item-has-children"><a href=#>Pages</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=contact.html>Contact</a></li>
                                            <li class="menu-item"><a href=author.html>Author</a></li>
                                            <li class="menu-item"><a href=gallery.html>Gallery</a></li>
                                            <li class="menu-item"><a href=price-table.html>Price Table</a></li>
                                            <li class="menu-item"><a href=maintenance.html>Maintenance</a></li>
                                            <li class="menu-item"><a href=coming-soon.html>Coming Soon</a></li>
                                            <li class="menu-item"><a href=404.html>404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=#>Category</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=photography.html>Photography</a></li>
                                            <li class="menu-item"><a href=travel.html>Travel</a></li>
                                            <li class="menu-item"><a href=fashion.html>Fashion</a></li>
                                            <li class="menu-item"><a href=food.html>Food</a></li>
                                            <li class="menu-item"><a href=technology.html>Technology</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=blog-full-right-sidebar-with-frame.html>Layout</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single Post</a></li>
                                            <li class="menu-item"><a href=9-most-awesome-blue-lake-with-snow-mountain.html>Single Post</a></li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-full-no-sidebar.html>Blog Full</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No Sidebar</a></li>
                                                    <li class="menu-item"><a href=blog-full-no-sidebar-with-post-format.html>Blog Full No Sidebar With Post Format</a></li>
                                                    <li class="menu-item"><a href=blog-full-right-sidebar-with-frame.html>Blog Full Right Sidebar With Frame</a></li>
                                                    <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid Overlay</a></li>
                                                    <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay No Space</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-columns-with-frame.html>Blog Columns</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-columns-with-frame.html>Blog Columns With Frame</a></li>
                                                    <li class="menu-item"><a href=blog-columns.html>Blog Columns</a></li>
                                                    <li class="menu-item"><a href=blog-columns-with-frame-post-format.html>Blog Columns With Post Format</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href=about-us.html>About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="akea-body-outer-wrapper ">
    <div class="akea-body-wrapper clearfix  akea-with-frame">
        <header class="akea-header-wrap akea-header-style-plain  akea-style-splitted-menu akea-sticky-navigation akea-style-slide" data-navigation-offset=75px>
            <div class=akea-header-background></div>
            <div class="akea-header-container  akea-container">
                <div class="akea-header-container-inner clearfix">
                    <div class="akea-navigation akea-item-pdlr clearfix ">
                        <div class=akea-main-menu id=akea-main-menu>
                            <ul id=menu-main-navigation-1 class=sf-menu>
                                <li class="menu-item menu-item-home current-menu-item akea-normal-menu"><a href="/" class=sf-with-ul-pre>首頁</a></li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=# class=sf-with-ul-pre>Pages</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item" data-size=60><a href=contact.html>Contact</a></li>
                                        <li class="menu-item" data-size=60><a href=author.html>Author</a></li>
                                        <li class="menu-item" data-size=60><a href=gallery.html>Gallery</a></li>
                                        <li class="menu-item" data-size=60><a href=price-table.html>Price Table</a></li>
                                        <li class="menu-item" data-size=60><a href=maintenance.html>Maintenance</a></li>
                                        <li class="menu-item" data-size=60><a href=coming-soon.html>Coming Soon</a></li>
                                        <li class="menu-item" data-size=60><a href=404.html>404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=# class=sf-with-ul-pre>Category</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item" data-size=60><a href=photography.html>Photography</a></li>
                                        <li class="menu-item" data-size=60><a href=travel.html>Travel</a></li>
                                        <li class="menu-item" data-size=60><a href=fashion.html>Fashion</a></li>
                                        <li class="menu-item" data-size=60><a href=food.html>Food</a></li>
                                        <li class="menu-item" data-size=60><a href=technology.html>Technology</a></li>
                                    </ul>
                                </li>
                                <li class=akea-center-nav-menu-item>
                                    <div class=akea-above-logo>
                                        <a href=index.php><img src=/upload/logo-1-1.png alt width=348 height=252 title=logo-1></a>
                                    </div>
                                    <div class="akea-logo  akea-item-pdlr">
                                        <div class=akea-logo-inner>
                                            <a class href=index.php><img src=/upload/logo-2-1.png alt width=140 height=33 title=logo-2></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=blog-full-right-sidebar-with-frame.html class=sf-with-ul-pre>Layout</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single Post</a></li>
                                        <li class="menu-item menu-item-has-children" data-size=60><a href=blog-full-no-sidebar.html class=sf-with-ul-pre>Blog Full</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No Sidebar</a></li>
                                                <li class="menu-item"><a href=blog-full-no-sidebar-with-post-format.html>Blog Full No Sidebar With Post Format</a></li>
                                                <li class="menu-item"><a href=blog-full-right-sidebar-with-frame.html>Blog Full Right Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size=60><a href=blog-grid-overlay-no-space.html class=sf-with-ul-pre>Blog Grid Overlay</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid Overlay</a></li>
                                                <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay No Space</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size=60><a href=blog-columns-with-frame.html class=sf-with-ul-pre>Blog Columns</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-columns-with-frame.html>Blog Columns With Frame</a></li>
                                                <li class="menu-item"><a href=blog-columns.html>Blog Columns</a></li>
                                                <li class="menu-item"><a href=blog-columns-with-frame-post-format.html>Blog Columns With Post Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item akea-normal-menu"><a href=9-most-awesome-blue-lake-with-snow-mountain.html>Single Post</a></li>
                                <li class="menu-item akea-normal-menu"><a href=about-us.html>About</a></li>
                            </ul>
                            <div class=akea-navigation-slide-bar id=akea-navigation-slide-bar></div>
                        </div>
                        <div class="akea-main-menu-right-wrap clearfix  akea-item-mglr akea-navigation-top">
                            <div class="akea-overlay-menu akea-main-menu-right" id=akea-right-menu><a class="akea-overlay-menu-icon akea-right-menu-button akea-top-menu-button akea-mobile-button-hamburger" href=#><span></span></a>
                                <div class="akea-overlay-menu-content akea-navigation-font">
                                    <div class=akea-overlay-menu-close></div>
                                    <div class=akea-overlay-menu-row>
                                        <div class=akea-overlay-menu-cell>
                                            <ul id=menu-main-navigation-2 class=menu>
                                                <li class="menu-item menu-item-home current-menu-item"><a href=index.php aria-current=page>Home</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item menu-item-home current-menu-item "><a href=index.php aria-current=page>Homepage</a></li></ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=#>Pages</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=contact.html>Contact</a></li>
                                                        <li class="menu-item"><a href=author.html>Author</a></li>
                                                        <li class="menu-item"><a href=gallery.html>Gallery</a></li>
                                                        <li class="menu-item"><a href=price-table.html>Price Table</a></li>
                                                        <li class="menu-item"><a href=maintenance.html>Maintenance</a></li>
                                                        <li class="menu-item"><a href=coming-soon.html>Coming Soon</a></li>
                                                        <li class="menu-item"><a href=404.html>404 Page</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=#>Category</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=photography.html>Photography</a></li>
                                                        <li class="menu-item"><a href=travel.html>Travel</a></li>
                                                        <li class="menu-item"><a href=fashion.html>Fashion</a></li>
                                                        <li class="menu-item"><a href=food.html>Food</a></li>
                                                        <li class="menu-item"><a href=technology.html>Technology</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=blog-full-right-sidebar-with-frame.html>Layout</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single Post</a></li>
                                                        <li class="menu-item"><a href=9-most-awesome-blue-lake-with-snow-mountain.html>Single Post</a></li>
                                                        <li class="menu-item menu-item-has-children"><a href=blog-full-no-sidebar.html>Blog Full</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No Sidebar</a></li>
                                                                <li class="menu-item"><a href=blog-full-no-sidebar-with-post-format.html>Blog Full No Sidebar With Post Format</a></li>
                                                                <li class="menu-item"><a href=blog-full-right-sidebar-with-frame.html>Blog Full Right Sidebar With Frame</a></li>
                                                                <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full Right Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid Overlay</a></li>
                                                                <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay No Space</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a href=blog-columns-with-frame.html>Blog Columns</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a href=blog-columns-with-frame.html>Blog Columns With Frame</a></li>
                                                                <li class="menu-item"><a href=blog-columns.html>Blog Columns</a></li>
                                                                <li class="menu-item"><a href=blog-columns-with-frame-post-format.html>Blog Columns With Post Format</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href=about-us.html>About</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=akea-main-menu-search id=akea-top-search><i class="fa fa-search"></i></div>
                            <div class=akea-top-search-wrap>
                                <div class=akea-top-search-close></div>
                                <div class=akea-top-search-row>
                                    <div class=akea-top-search-cell>
                                        <form role=search method=get class=search-form action=#>
                                            <input type=text class="search-field akea-title-font" placeholder=Search... value name=s>
                                            <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                            <input type=submit class=search-submit value=Search>
                                            <div class=akea-top-search-close><i class=icon_close></i></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- 頭部 - 結束 -->
        <div class=akea-page-wrapper id=akea-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                    <div class="gdlr-core-pbf-wrapper " id="div_2207_0" id=gdlr-core-wrapper-1>
                        <div class=gdlr-core-pbf-background-wrap></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-post-slider-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix " id="div_2207_1">
                                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type=slider data-effect=default data-nav=navigation data-disable-autoslide=1>
                                            <ul class=slides>
                                                <li>
                                                    <div class=gdlr-core-post-slider-slide>
                                                        <div class="gdlr-core-post-slider-image gdlr-core-media-image">
                                                            <a href=#><img src=/upload/pexels-photo-736166-1500x635.jpg alt width=1500 height=635 title=pexels-photo-736166><span class=gdlr-core-post-slider-overlay id="span_2207_0"></span></a>
                                                        </div>
                                                        <div class="gdlr-core-post-slider-caption gdlr-core-center-align">
                                                            <h3 class="gdlr-core-post-slider-title" id="h3_2207_0"><a href=# >Top Amazing Places to Go in Summer</a></h3>
                                                            <div class=gdlr-core-post-slider-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >/</span><a href=#>November 6, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >/</span><a href=# title="Posts by Paul Newman" rel=author>Paul Newman</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=gdlr-core-post-slider-slide>
                                                        <div class="gdlr-core-post-slider-image gdlr-core-media-image">
                                                            <a href=#><img src=/upload/hugues-de-buyer-mimeure-335733-unsplash-1500x635.jpg alt width=1500 height=635 title=hugues-de-buyer-mimeure-335733-unsplash><span class=gdlr-core-post-slider-overlay id="span_2207_1"></span></a>
                                                        </div>
                                                        <div class="gdlr-core-post-slider-caption gdlr-core-center-align">
                                                            <h3 class="gdlr-core-post-slider-title" id="h3_2207_1"><a href=# >10 Most Awesome Breathtaking Places</a></h3>
                                                            <div class=gdlr-core-post-slider-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >/</span><a href=#>October 18, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >/</span><a href=# title="Posts by Paul Newman" rel=author>Paul Newman</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=gdlr-core-post-slider-slide>
                                                        <div class="gdlr-core-post-slider-image gdlr-core-media-image">
                                                            <a href=#><img src=/upload/brooke-lark-289769-unsplash-1500x635.jpg alt width=1500 height=635 title=brooke-lark-289769-unsplash><span class=gdlr-core-post-slider-overlay id="span_2207_2"></span></a>
                                                        </div>
                                                        <div class="gdlr-core-post-slider-caption gdlr-core-center-align">
                                                            <h3 class="gdlr-core-post-slider-title" id="h3_2207_2"><a href=# >5 Dessert Menus To Make In The Party</a></h3>
                                                            <div class=gdlr-core-post-slider-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >/</span><a href=#>June 11, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >/</span><a href=# title="Posts by Paul Newman" rel=author>Paul Newman</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" id="div_2207_2">
                                <div class=gdlr-core-pbf-sidebar-content-inner data-skin="Blog List">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full">
                                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <a href=#><img src=/upload/pexels-photo-871053-1000x486.jpg alt width=1000 height=486 title=pexels-photo-871053></a>
                                                        </div><a href=# class=zilla-likes id=zilla-likes-6613 title="Like this"><span class=zilla-likes-count>261</span> <span class=zilla-likes-postfix></span></a></div>
                                                    <div class=gdlr-core-blog-full-content-wrap>

                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class=gdlr-core-blog-full-head-right>
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_3">
                                                                    <a href=# >9 Most Awesome Blue Lake With Snow Mountain</a>
                                                                </h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                    <img alt src='/upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50>
                                                                        <a href=# title="Posts by Jane Smith" rel=author>Jane Smith</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                        <a href=#>November 3, 2019</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                        <a href=# rel=tag>Travel</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>I neglect my talents Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia....</div>
                                                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_3">
                                                            <span class=gdlr-core-social-share-wrap>
                                                                <a class=gdlr-core-social-share-facebook href="#" target=_blank  id="a_2207_0"  >
                                                                    <i class="fa fa-facebook" ></i>
                                                                </a>
                                                                <a class=gdlr-core-social-share-google-plus href="#" target=_blank  id="a_2207_1"  >
                                                                    <i class="fa fa-google-plus" ></i>
                                                                </a>
                                                                <a class=gdlr-core-social-share-pinterest href="#" target=_blank  id="a_2207_2"  >
                                                                    <i class="fa fa-pinterest-p" ></i>
                                                                </a>
                                                                <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank  id="a_2207_3"  >
                                                                    <i class="fa fa-stumbleupon" ></i>
                                                                </a>
                                                                <a class=gdlr-core-social-share-twitter href="#" target=_blank   id="a_2207_4"  >
                                                                    <i class="fa fa-twitter" ></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">

                                                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <a href=#>
                                                                <img src=/upload/pexels-photo-25284-1000x486.jpg alt width=1000 height=486 title=pexels-photo-25284>
                                                            </a>
                                                        </div>
                                                        <a href=# class=zilla-likes id=zilla-likes-6611 title="Like this">
                                                            <span class=zilla-likes-count>138</span>
                                                            <span class=zilla-likes-postfix></span>
                                                        </a>
                                                    </div>
                                                    <div class=gdlr-core-blog-full-content-wrap>
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class=gdlr-core-blog-full-head-right>
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_4">
                                                                    <a href=# >8 Ways To Travel Like a Pro</a>
                                                                </h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                <img alt src='/upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50>
                                                                    <a href=# title="Posts by Janet Jones" rel=author>Janet Jones</a>
                                                                </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                    <a href=#>October 26, 2019</a>
                                                                </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                    <a href=# rel=tag>Travel</a>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>I neglect my talents Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia....
                                                        </div>
                                                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_4">
                                                        <span class=gdlr-core-social-share-wrap>
                                                            <a class=gdlr-core-social-share-facebook href="#" target=_blank >
                                                                <i class="fa fa-facebook" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-google-plus href="#" target=_blank >
                                                                <i class="fa fa-google-plus" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-pinterest href="#" target=_blank >
                                                                <i class="fa fa-pinterest-p" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank >
                                                                <i class="fa fa-stumbleupon" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-twitter href="#" target=_blank   id="a_2207_5"  >
                                                                <i class="fa fa-twitter" ></i>
                                                            </a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <a href=#>
                                                                <img src=/upload/pexels-photo-225227-1000x486.jpg alt width=1000 height=486 title=pexels-photo-225227>
                                                            </a>
                                                        </div>
                                                        <a href=# class=zilla-likes id=zilla-likes-6606 title="Like this">
                                                            <span class=zilla-likes-count>88</span>
                                                            <span class=zilla-likes-postfix></span>
                                                        </a>
                                                    </div>
                                                    <div class=gdlr-core-blog-full-content-wrap>
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class=gdlr-core-blog-full-head-right>
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_5">
                                                                    <a href=# >5 Beginner Photographer&#8217;s Mistakes</a>
                                                                </h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                    <img alt src='/upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50>
                                                                        <a href=# title="Posts by Kally Gordon" rel=author>Kally Gordon</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                        <a href=#>October 22, 2019</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                        <a href=# rel=tag>Fashion</a>
                                                                        <span class=gdlr-core-sep>,</span>
                                                                        <a href=# rel=tag>Photography</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic...</div>
                                                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_5">
                                                        <span class=gdlr-core-social-share-wrap>
                                                            <a class=gdlr-core-social-share-facebook href="#" target=_blank >
                                                                <i class="fa fa-facebook" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-google-plus href="#" target=_blank >
                                                                <i class="fa fa-google-plus" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-pinterest href="#" target=_blank >
                                                                <i class="fa fa-pinterest-p" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank >
                                                                <i class="fa fa-stumbleupon" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-twitter href="#" target=_blank   id="a_2207_6"  >
                                                                <i class="fa fa-twitter" ></i>
                                                            </a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <a href=#>
                                                                <img src=/upload/hugues-de-buyer-mimeure-335733-unsplash-1000x486.jpg alt width=1000 height=486 title=hugues-de-buyer-mimeure-335733-unsplash>
                                                            </a>
                                                        </div>
                                                        <a href=# class=zilla-likes id=zilla-likes-6604 title="Like this">
                                                            <span class=zilla-likes-count>65</span>
                                                            <span class=zilla-likes-postfix></span>
                                                        </a>
                                                    </div>
                                                    <div class=gdlr-core-blog-full-content-wrap>
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class=gdlr-core-blog-full-head-right>
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_6">
                                                                    <a href=# >10 Most Awesome Breathtaking Places</a>
                                                                </h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                        <img alt src='/upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50>
                                                                            <a href=# title="Posts by Paul Newman" rel=author>Paul Newman</a>
                                                                        </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href=#>October 18, 2019</a>
                                                                        </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                            <a href=# rel=tag>Headline</a>
                                                                            <span class=gdlr-core-sep>,</span>
                                                                            <a href=# rel=tag>Travel</a>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>I neglect my talents Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia....</div>
                                                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_6">
                                                        <span class=gdlr-core-social-share-wrap>
                                                            <a class=gdlr-core-social-share-facebook href="#" target=_blank >
                                                                <i class="fa fa-facebook" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-google-plus href="#" target=_blank  >
                                                                <i class="fa fa-google-plus" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-pinterest href="#" target=_blank  >
                                                                <i class="fa fa-pinterest-p" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank  >
                                                                <i class="fa fa-stumbleupon" ></i>
                                                            </a>
                                                            <a class=gdlr-core-social-share-twitter href="#" target=_blank id="a_2207_7"  >
                                                                <i class="fa fa-twitter" ></i>
                                                            </a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <a href=#>
                                                                <img src=/upload/brenda-godinez-228181-unsplash-1000x486.jpg alt width=1000 height=486 title=brenda-godinez-228181-unsplash>
                                                            </a>
                                                        </div>
                                                        <a href=# class=zilla-likes id=zilla-likes-6602 title="Like this">
                                                            <span class=zilla-likes-count>29</span>
                                                            <span class=zilla-likes-postfix></span>
                                                        </a>
                                                    </div>
                                                    <div class=gdlr-core-blog-full-content-wrap>
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class=gdlr-core-blog-full-head-right>
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_7">
                                                                    <a href=# >10 Best Way to Styling Your Food</a>
                                                                </h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                        <img alt src='/upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50>
                                                                            <a href=# title="Posts by Jane Smith" rel=author>Jane Smith</a>
                                                                        </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href=#>October 11, 2019</a>
                                                                        </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                            <a href=# rel=tag>Food</a>
                                                                            <span class=gdlr-core-sep>,</span>
                                                                            <a href=# rel=tag>Photography</a>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>I neglect my talents Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia....</div>
                                                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_7">
                                                                <span class=gdlr-core-social-share-wrap>
                                                                    <a class=gdlr-core-social-share-facebook href="#" target=_blank >
                                                                        <i class="fa fa-facebook" ></i>
                                                                    </a>
                                                                    <a class=gdlr-core-social-share-google-plus href="#" target=_blank >
                                                                        <i class="fa fa-google-plus" ></i>
                                                                    </a>
                                                                    <a class=gdlr-core-social-share-pinterest href="#" target=_blank >
                                                                        <i class="fa fa-pinterest-p" ></i>
                                                                    </a>
                                                                    <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank >
                                                                        <i class="fa fa-stumbleupon" ></i>
                                                                    </a>
                                                                    <a class=gdlr-core-social-share-twitter href="#" target=_blank   id="a_2207_8"  >
                                                                        <i class="fa fa-twitter" ></i>
                                                                    </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <a href=#>
                                                                <img src=/upload/tanja-heffner-204193-unsplash-1000x486.jpg alt width=1000 height=486 title=tanja-heffner-204193-unsplash>
                                                            </a>
                                                        </div>
                                                        <a href=# class=zilla-likes id=zilla-likes-6600 title="Like this">
                                                            <span class=zilla-likes-count>28</span>
                                                            <span class=zilla-likes-postfix></span>
                                                        </a>
                                                    </div>
                                                    <div class=gdlr-core-blog-full-content-wrap>
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class=gdlr-core-blog-full-head-right>
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_8">
                                                                    <a href=# >12 Awesome Fashion Trend in For Winter</a>
                                                                </h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                                <img alt src='/upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50>
                                                                                    <a href=# title="Posts by Janet Jones" rel=author>Janet Jones</a>
                                                                                </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <a href=#>October 5, 2019</a>
                                                                                </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                                    <a href=# rel=tag>Fashion</a>
                                                                                    <span class=gdlr-core-sep>,</span>
                                                                                    <a href=# rel=tag>Photography</a>
                                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic...</div>
                                                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_8">
                                                                        <span class=gdlr-core-social-share-wrap>
                                                                            <a class=gdlr-core-social-share-facebook href="#" target=_blank >
                                                                                <i class="fa fa-facebook" ></i>
                                                                            </a>
                                                                            <a class=gdlr-core-social-share-google-plus href="#" target=_blank >
                                                                                <i class="fa fa-google-plus" ></i>
                                                                            </a>
                                                                            <a class=gdlr-core-social-share-pinterest href="#" target=_blank >
                                                                                <i class="fa fa-pinterest-p" ></i>
                                                                            </a>
                                                                            <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank >
                                                                                <i class="fa fa-stumbleupon" ></i>
                                                                            </a>
                                                                            <a class=gdlr-core-social-share-twitter href="#" target=_blank   id="a_2207_9"  >
                                                                                <i class="fa fa-twitter" ></i>
                                                                            </a>
                                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-right-align gdlr-core-item-pdlr"><span aria-current=page class='page-numbers current'>1</span> <a class=page-numbers href=#>2</a> <a class=page-numbers href=#>3</a> <a class=page-numbers href=#>4</a>
                                                <a class="next page-numbers" href=#></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  akea-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" data-skin="Blog List" id="div_2207_9">
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div id=text-4 class="widget widget_text akea-widget">
                                        <h3 class="akea-widget-title"><span class=akea-widget-head-text>About Me</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                        <div class=textwidget>
                                            <p><img class="alignnone size-full wp-image-6650" src=/upload/about-image.png alt width=120>
                                                <br> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated.</p> <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-transparent gdlr-core-button-with-border" href=# target=_blank id="a_2207_10" rel="noopener noreferrer"><span class=gdlr-core-content >more about me</span><i class="gdlr-core-pos-right arrow_right"  ></i></a></div>
                                    </div>
                                    <div id=text-7 class="widget widget_text akea-widget">
                                        <div class=textwidget>
                                            <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align" id="div_2207_10">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top" id="div_2207_11">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_9">Follow Us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                </div>
                                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_2207_12"><a href=# target=_blank class=gdlr-core-social-network-icon title=facebook id="a_2207_11" rel="noopener noreferrer"><i class="fa fa-facebook" ></i></a><a href=# target=_blank class=gdlr-core-social-network-icon title=pinterest id="a_2207_12" rel="noopener noreferrer"><i class="fa fa-pinterest-p" ></i></a><a href=# target=_blank class=gdlr-core-social-network-icon title=skype id="a_2207_13" rel="noopener noreferrer"><i class="fa fa-skype" ></i></a><a href=# target=_blank class=gdlr-core-social-network-icon title=twitter id="a_2207_14" rel="noopener noreferrer"><i class="fa fa-twitter" ></i></a><a href=# target=_blank class=gdlr-core-social-network-icon title=instagram id="a_2207_15" rel="noopener noreferrer"><i class="fa fa-instagram" ></i></a></div>
                                                <br> <span class=gdlr-core-space-shortcode id="span_2207_3"></span>
                                                <br>
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top" id="div_2207_13">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_10">Newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                </div> Fill your email below to subscribe to my newsletter<span class=gdlr-core-space-shortcode id="span_2207_4"></span>
                                                <br>
                                                <div class="tnp tnp-subscription-minimal ">
                                                    <form action="#" method=post>
                                                        <input class=tnp-email type=email required name=ne value placeholder=Email>
                                                        <input class=tnp-submit type=submit value=Subscribe>
                                                    </form>
                                                </div> <span class=gdlr-core-space-shortcode id="span_2207_5"></span></div>
                                        </div>
                                    </div>
                                    <div id=gdlr-core-recent-post-widget-2 class="widget widget_gdlr-core-recent-post-widget akea-widget">
                                        <h3 class="akea-widget-title"><span class=akea-widget-head-text>Popular Post</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=/upload/qingbao-meng-330658-unsplash-150x150.jpg alt width=150 height=150 title=qingbao-meng-330658-unsplash></div>
                                                <div class=gdlr-core-recent-post-widget-content>
                                                    <div class=gdlr-core-recent-post-widget-title><a href=#>The Most Beautiful Green Field on Earth</a></div>
                                                    <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='../../upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Paul Newman" rel=author>Paul Newman</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>September 5, 2019</a></span></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=/upload/alexander-mils-365917-unsplash-150x150.jpg alt width=150 height=150 title=alexander-mils-365917-unsplash></div>
                                                <div class=gdlr-core-recent-post-widget-content>
                                                    <div class=gdlr-core-recent-post-widget-title><a href=#>How to Shoot Food on Your Phone Like a Pro</a></div>
                                                    <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='../../upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Kally Gordon" rel=author>Kally Gordon</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>August 5, 2019</a></span></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=/upload/gaetano-cessati-120488-unsplash-150x150.jpg alt width=150 height=150 title=gaetano-cessati-120488-unsplash></div>
                                                <div class=gdlr-core-recent-post-widget-content>
                                                    <div class=gdlr-core-recent-post-widget-title><a href=#>One Of The Most Beautiful Beach In Brazil</a></div>
                                                    <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='../../upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Paul Newman" rel=author>Paul Newman</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>July 25, 2019</a></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=text-5 class="widget widget_text akea-widget">
                                        <div class=textwidget>
                                            <p>
                                                <a href=#><img src=../../upload/banner-600.jpg alt width=300 height=600 class="alignnone size-full wp-image-6652"></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div id=gdlr-core-category-background-widget-2 class="widget widget_gdlr-core-category-background-widget akea-widget">
                                        <h3 class="akea-widget-title"><span class=akea-widget-head-text>Category</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                        <ul class=gdlr-core-category-background-widget>
                                            <li class=gdlr-core-with-bg id="li_2207_0"><a href=#><span class=gdlr-core-category-background-widget-content ><span class=gdlr-core-category-background-widget-title >Fashion</span><span class=gdlr-core-category-background-widget-count >5</span></span></a></li>
                                            <li class=gdlr-core-with-bg id="li_2207_1"><a href=#><span class=gdlr-core-category-background-widget-content ><span class=gdlr-core-category-background-widget-title >Food</span><span class=gdlr-core-category-background-widget-count >6</span></span></a></li>
                                            <li class=gdlr-core-with-bg id="li_2207_2"><a href=#><span class=gdlr-core-category-background-widget-content ><span class=gdlr-core-category-background-widget-title >Photography</span><span class=gdlr-core-category-background-widget-count >11</span></span></a></li>
                                            <li class=gdlr-core-with-bg id="li_2207_3"><a href=#><span class=gdlr-core-category-background-widget-content ><span class=gdlr-core-category-background-widget-title >Technology</span><span class=gdlr-core-category-background-widget-count >6</span></span></a></li>
                                            <li class=gdlr-core-with-bg id="li_2207_4"><a href=#><span class=gdlr-core-category-background-widget-content ><span class=gdlr-core-category-background-widget-title >Travel</span><span class=gdlr-core-category-background-widget-count >9</span></span></a></li>
                                        </ul>
                                    </div>

                                    <div id=tag_cloud-2 class="widget widget_tag_cloud akea-widget">
                                        <h3 class="akea-widget-title">
                                            <span class=akea-widget-head-text>Tags</span>
                                            <span class=akea-widget-head-divider></span>
                                        </h3>
                                        <span class=clear></span>
                                        <div class=tagcloud>
                                            <a href=# class="tag-cloud-link tag-link-117 tag-link-position-1" id="a_2207_16" aria-label="Beach (2 items)">Beach</a>
                                            <a href=# class="tag-cloud-link tag-link-130 tag-link-position-2" id="a_2207_17" aria-label="Dress (3 items)">Dress</a>
                                            <a href=# class="tag-cloud-link tag-link-10 tag-link-position-3" id="a_2207_18" aria-label="Fashion (7 items)">Fashion</a>
                                            <a href=# class="tag-cloud-link tag-link-126 tag-link-position-4" id="a_2207_19" aria-label="Food (5 items)">Food</a>
                                            <a href=# class="tag-cloud-link tag-link-140 tag-link-position-5" id="a_2207_20" aria-label="Gadget (1 item)">Gadget</a>
                                            <a href=# class="tag-cloud-link tag-link-138 tag-link-position-6" id="a_2207_21" aria-label="Holiday (1 item)">Holiday</a>
                                            <a href=# class="tag-cloud-link tag-link-14 tag-link-position-7" id="a_2207_22" aria-label="Nature (2 items)">Nature</a>
                                            <a href=# class="tag-cloud-link tag-link-142 tag-link-position-8" id="a_2207_23" aria-label="Ocean (1 item)">Ocean</a>
                                            <a href=# class="tag-cloud-link tag-link-131 tag-link-position-9" id="a_2207_24" aria-label="Photography (4 items)">Photography</a>
                                            <a href=# class="tag-cloud-link tag-link-17 tag-link-position-10" id="a_2207_25" aria-label="Post Format (7 items)">Post Format</a>
                                            <a href=# class="tag-cloud-link tag-link-139 tag-link-position-11" id="a_2207_26" aria-label="Style (1 item)">Style</a>
                                            <a href=# class="tag-cloud-link tag-link-128 tag-link-position-12" id="a_2207_27" aria-label="Tech (10 items)">Tech</a>
                                            <a href=# class="tag-cloud-link tag-link-20 tag-link-position-13" id="a_2207_28" aria-label="Tips (2 items)">Tips</a>
                                            <a href=# class="tag-cloud-link tag-link-115 tag-link-position-14" id="a_2207_29" aria-label="Travel (10 items)">Travel</a>
                                        </div>
                                    </div>
                                    <div id=text-6 class="widget widget_text akea-widget">
                                        <div class=textwidget>
                                            <p>
                                                <a href=#><img class="alignnone size-full wp-image-6651" src=/upload/banner-250.jpg alt width=300 height=250></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div id=gdlr-core-recent-post-widget-3 class="widget widget_gdlr-core-recent-post-widget akea-widget">
                                        <h3 class="akea-widget-title"><span class=akea-widget-head-text>Recent Post</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-full">
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                                    <a class="gdlr-core-lightgallery gdlr-core-js " href=/upload/post-vr.jpg><img src=/upload/post-vr-1000x486.jpg alt width=1000 height=486 title=post-vr></a><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href=# rel=tag>Trending</a></span></div>
                                                <div class=gdlr-core-recent-post-widget-content>
                                                    <div class="gdlr-core-recent-post-widget-title gdlr-core-title-font"><a href=#>Check Out The Most Awesome VR Headset in 2020</a></div>
                                                    <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='../../upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Jane Smith" rel=author>Jane Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>November 7, 2019</a></span></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                                    <a class="gdlr-core-lightgallery gdlr-core-js " href=/upload/yiran-ding-624696-unsplash.jpg><img src=/upload/yiran-ding-624696-unsplash-1000x486.jpg alt width=1000 height=486 title=yiran-ding-624696-unsplash></a><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href=# rel=tag>Trending</a></span></div>
                                                <div class=gdlr-core-recent-post-widget-content>
                                                    <div class="gdlr-core-recent-post-widget-title gdlr-core-title-font"><a href=#>Or It&#8217;s Now The End of Smartphones?</a></div>
                                                    <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='../../upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Janet Jones" rel=author>Janet Jones</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>November 7, 2019</a></span></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                                    <a class="gdlr-core-lightgallery gdlr-core-js " href=/upload/christopher-burns-271403-unsplash.jpg><img src=/upload/christopher-burns-271403-unsplash-1000x486.jpg alt width=1000 height=486 title=christopher-burns-271403-unsplash></a><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href=# rel=tag>Trending</a></span></div>
                                                <div class=gdlr-core-recent-post-widget-content>
                                                    <div class="gdlr-core-recent-post-widget-title gdlr-core-title-font"><a href=#>XE Entertainment Brings You New Experience of Fun</a></div>
                                                    <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='../../upload/avatar.jpeg.jpg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Kally Gordon" rel=author>Kally Gordon</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>November 7, 2019</a></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=gdlr-core-instagram-widget-2 class="widget widget_gdlr-core-instagram-widget akea-widget">
                                        <h3 class="akea-widget-title"><span class=akea-widget-head-text>Instagram</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                        <div class="gdlr-core-instagram-widget clearfix">
                                            <div class=" gdlr-core-column-20 gdlr-core-column-first gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="../../upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg" width=150 height=150 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="../../upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg" width=150 height=150 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="../../upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg" width=150 height=150 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-20 gdlr-core-column-first gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="../../upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg" width=150 height=150 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="../../upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg" width=150 height=150 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/44898222_267175490542576_6183516087002698981_n7d5a.jpg" data-sub-html="So blue" data-lightbox-group=gdlr-core-img-group-1><img src="../../upload/44898222_267175490542576_6183516087002698981_n7d5a.jpg" width=150 height=150 alt="So blue"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " id="div_2207_14">
                        <div class=gdlr-core-pbf-background-wrap></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_2207_15">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_11">Our Instagram<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-instagram-item gdlr-core-item-pdb  gdlr-core-item-pdlr">
                                        <div class="gdlr-core-instagram-item-content clearfix">
                                            <div class=" gdlr-core-column-12 gdlr-core-column-first gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="../../upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg" width=640 height=640 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="../../upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg" width=640 height=640 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="../../upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg" width=640 height=640 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="../../upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg" width=640 height=640 alt></a>
                                            </div>
                                            <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="/upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="../../upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg" width=640 height=640 alt></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="akea-footer-wrapper ">
                    <div class="akea-footer-container akea-container clearfix">
                        <div class="akea-footer-column akea-item-pdlr akea-column-20">
                            <div id=text-2 class="widget widget_text akea-widget">
                                <h3 class="akea-widget-title"><span class=akea-widget-head-text>Akea, blogger</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                <div class=textwidget>
                                    <p>23 King Street, 5th Avenue, New York
                                        <br> <span class=gdlr-core-space-shortcode id="span_2207_6"></span>
                                        <br> +1-2355-3345-5
                                        <br> <span class=gdlr-core-space-shortcode id="span_2207_7"></span>
                                        <br> <a id="a_2207_30" href=mailto:call@akeablog.co>call@akeablog.co</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="akea-footer-column akea-item-pdlr akea-column-20">
                            <div id=gdlr-core-custom-menu-widget-2 class="widget widget_gdlr-core-custom-menu-widget akea-widget">
                                <h3 class="akea-widget-title"><span class=akea-widget-head-text>Category</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                <div class=menu-category-container>
                                    <ul id=menu-category class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                                        <li class="menu-item"><a href=#>Technology</a></li>
                                        <li class="menu-item"><a href=#>Photography</a></li>
                                        <li class="menu-item"><a href=#>Travel</a></li>
                                        <li class="menu-item"><a href=#>Fashion</a></li>
                                        <li class="menu-item"><a href=#>Food</a></li>
                                        <li class="menu-item"><a href=#>Trending</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="akea-footer-column akea-item-pdlr akea-column-20">
                            <div id=text-3 class="widget widget_text akea-widget">
                                <h3 class="akea-widget-title"><span class=akea-widget-head-text>Follow Us</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>

                                <div class=textwidget>
                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_2207_16">
                                        <a href=# target=_blank class=gdlr-core-social-network-icon title=facebook id="a_2207_31" rel="noopener noreferrer">
                                            <i class="fa fa-facebook" ></i>
                                        </a>
                                        <a href=# target=_blank class=gdlr-core-social-network-icon title=pinterest id="a_2207_32" rel="noopener noreferrer">
                                            <i class="fa fa-pinterest-p" ></i>
                                        </a>
                                        <a href=# target=_blank class=gdlr-core-social-network-icon title=skype id="a_2207_33" rel="noopener noreferrer">
                                            <i class="fa fa-skype" ></i>
                                        </a>
                                        <a href=# target=_blank class=gdlr-core-social-network-icon title=twitter id="a_2207_34" rel="noopener noreferrer">
                                            <i class="fa fa-twitter" ></i>
                                        </a>
                                        <a href=# target=_blank class=gdlr-core-social-network-icon title=instagram id="a_2207_35" rel="noopener noreferrer">
                                            <i class="fa fa-instagram" ></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=akea-copyright-wrapper>
                    <div class="akea-copyright-container akea-container clearfix">
                        <div class="akea-copyright-left akea-item-pdlr">Copyright 2019 Akea Blog, All Right <a href="http://www.bootstrapmb.com/" title="bootstrapmb">Reserved</a></div>
                        <div class="akea-copyright-right akea-item-pdlr">
                            <a href=index.php >Home</a>
                            <a href=about-us.html >About</a>
                            <a href=# >Updates</a>
                            <a href=# >Advertising</a>
                            <a href=contact.html >Contact</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div><a href=#akea-top-anchor class="akea-footer-back-to-top-button  akea-with-recent-post-bar " id=akea-footer-back-to-top-button><i class="fa fa-angle-up" ></i></a>
    <div class="akea-footer-recent-post-button " id=akea-footer-recent-post-button><i class=icon_plus></i></div>
    <div class="akea-footer-recent-post-bar " id=akea-footer-recent-post-bar>
        <div class=akea-footer-recent-post-bar-close><i class=icon_minus-06></i></div>
        <div class="akea-footer-recent-post-bar-container akea-container clearfix">
            <h3 class="akea-footer-recent-post-bar-title">My New Stories</h3>
            <div class="akea-recent-post-bar-wrap clearfix">
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/post-vr-150x150.jpg alt width=150 height=150 title=post-vr></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/max-bender-580753-unsplash-150x150.jpg alt width=150 height=150 title=max-bender-580753-unsplash></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/juja-han-456323-unsplash-150x150.jpg alt width=150 height=150 title=juja-han-456323-unsplash></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/yiran-ding-624696-unsplash-150x150.jpg alt width=150 height=150 title=yiran-ding-624696-unsplash></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/christopher-burns-271403-unsplash-150x150.jpg alt width=150 height=150 title=christopher-burns-271403-unsplash></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/pexels-photo-736166-150x150.jpg alt width=150 height=150 title=pexels-photo-736166></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/pexels-photo-871053-150x150.jpg alt width=150 height=150 title=pexels-photo-871053></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/pexels-photo-25284-150x150.jpg alt width=150 height=150 title=pexels-photo-25284></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/pexels-photo-225227-150x150.jpg alt width=150 height=150 title=pexels-photo-225227></a>
                </div>
                <div class=akea-recent-post-bar-item>
                    <div class=akea-recent-post-bar-shadow></div>
                    <a href=#><img src=/upload/hugues-de-buyer-mimeure-335733-unsplash-150x150.jpg alt width=150 height=150 title=hugues-de-buyer-mimeure-335733-unsplash></a>
                </div>
            </div>
        </div>
    </div>

    <script src='/static/js/jquery/jquery.js'></script>
    <script src='/static/js/jquery/jquery-migrate.min.js'></script>
    <script>
        var zilla_likes = {
            "ajaxurl": ""
        };
    </script>
    <script src='/static/plugins/zilla-likes/scripts/zilla-likes.js'></script>
    <script src='/static/plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script>
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "#"
        };
    </script>
    <script src='/static/plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script src='/static/js/jquery/ui/effect.min.js'></script>
    <script src='/static/js/script-core.js'></script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>