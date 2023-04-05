<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--<title><?php //wp_title( '' ); ?><?php //if ( wp_title( '', false ) ) { echo ' : '; } ?><?php //bloginfo( 'name' ); ?></title>-->
    <!--<meta name="description" content="<?php //bloginfo( 'description' ); ?>">-->
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/img/icon.png">
    <!--    BOOTSRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>
	    <!--    LightGallery CSS-->
    <link rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css">

    <?php wp_head(); ?>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XR8HRBZ47M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XR8HRBZ47M');
  gtag('config', 'AW-386465648');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '232612111988196');
  fbq('track', 'PageView');
</script>
    <script type="text/javascript">
    (function (d,s,u,e,p) {
        p=d.getElementsByTagName(s)[0],e=d.createElement(s),e.async=1,e.src=u,p.parentNode.insertBefore(e, p);
    })(document, 'script', 'https://script.ringostat.com/v4/b8/b884f63b34dd07abd5bd5d23a8041d9fc8c47220.js');
var pw = function() {if (typeof(ringostatAnalytics) === "undefined") {setTimeout(pw,100);} else {ringostatAnalytics.sendHit('pageview');}}
 pw();
</script>
</head>
<body <?php body_class(); ?>>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=232612111988196&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<header class="header">
    <div class="line">
        <div class="outer">
            <div class="inner">
                <a href="tel:+380503805503">+38 (050) 380-55-03</a>
                <a href="tel:+380678285774">+38 (067) 828-57-74</a>
                <a href="#!" class="login">Увійти в особистий кабінет</a>
                <a href="#!" class="consult" data-bs-toggle="modal" data-bs-target="#contactPopup">записатися на консультацію</a>
                <ul class="lang">
                    <?php pll_the_languages(array(
                        'dropdown' => 0,
                        'display_names_as' => 'slug',
                    ));?>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="logo_nav">
    <a href="/" class="logo">
        <picture>
            <source media="(max-width:900px)" srcset="<?php echo get_theme_file_uri(); ?>/img/logo-mobile.svg">
            <img src="<?php echo get_theme_file_uri(); ?>/img/logo.svg" alt="logo">
        </picture>
    </a>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation',
            'container' => 'ul',
            'menu_class' => 'mynav',
        ));
        ?>
        <div class="action-group">
            <a href="#!" id="mobMenuTrigger"><img src="<?php echo get_theme_file_uri(); ?>/img/dropdownTrigger.svg" alt="arrow down"></a>
            <img src="<?php echo get_theme_file_uri(); ?>/img/pre-phone.svg" alt="element">
            <a href="tel:+380678285774"><img src="<?php echo get_theme_file_uri(); ?>/img/phone.svg" alt="phone"></a>
        </div>
    </nav>
</div>

