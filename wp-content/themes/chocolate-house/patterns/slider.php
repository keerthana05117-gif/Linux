<?php
/**
 * Slider Section
 * 
 * slug: chocolate-house/slider
 * title: Slider
 * categories: chocolate-house
 */

    return array(
        'title'      =>__( 'Slider', 'chocolate-house' ),
        'categories' => array( 'chocolate-house' ),
        'content'    => '<!-- wp:group {"className":"slider-sections","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0px","bottom":"0px"}},"dimensions":{"minHeight":"600px"}},"backgroundColor":"fifthaccent","layout":{"type":"default"}} -->
        <div class="wp-block-group slider-sections has-fifthaccent-background-color has-background" style="min-height:600px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/slider-bg.png","id":7,"dimRatio":90,"overlayColor":"accent","isUserOverlayColor":true,"minHeight":600,"sizeSlug":"large","className":"slider-bg","style":{"spacing":{"padding":{"top":"0px","bottom":"100px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-cover slider-bg" style="padding-top:0px;padding-right:0px;padding-bottom:100px;padding-left:0px;min-height:600px"><img class="wp-block-cover__image-background wp-image-7 size-large" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider-bg.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"bottom":"0","top":"0","right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
         <div class="wp-block-group header-box-upper" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"header-top-box","style":{"spacing":{"padding":{"right":"0","left":"0","top":"8px","bottom":"8px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"thirdaccent","layout":{"type":"constrained","contentSize":"75%"}} -->
         <div class="wp-block-group header-top-box has-thirdaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8px;padding-right:0;padding-bottom:8px;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"header-top-boxes"} -->
         <div class="wp-block-columns are-vertically-aligned-center header-top-boxes"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-logo-box"} -->
         <div class="wp-block-column is-vertically-aligned-center header-logo-box" style="flex-basis:25%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"25px"}},"textColor":"primary","fontFamily":"caveat-brush"} /--></div>
         <!-- /wp:column -->

         <!-- wp:column {"verticalAlignment":"center","width":"45%","className":"header-btn-box"} -->
         <div class="wp-block-column is-vertically-aligned-center header-btn-box" style="flex-basis:45%"><!-- wp:group {"className":"header-top-inner","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
         <div class="wp-block-group header-top-inner"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Find Your Perfect Indulgence…","width":300,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"className":"header-search","style":{"border":{"radius":"30px","width":"1px"},"spacing":{"margin":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"tiny","fontFamily":"quicksand","borderColor":"secaccent"} /-->

         <!-- wp:buttons {"className":"header-btn","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
         <div class="wp-block-buttons header-btn" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"color":{"background":"#00000000"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
         <div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-285" style="width: 75px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/wishlist.png" alt=""></a></div>
         <!-- /wp:button --></div>
         <!-- /wp:buttons -->

         <!-- wp:woocommerce/cart-link {"className":"header-cart","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"16px"}}} /-->

         <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","className":"header-account","textColor":"secaccent","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"20px"}}} /-->

         <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
         <div class="wp-block-buttons" id="theme-toggle" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"color":{"background":"#00000000"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
         <div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-336 light-icon" style="width: 150px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/light-mode.png" alt=""><img class="wp-image-332 dark-icon" style="width: 150px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/dark-mode.png" alt=""></a></div>
         <!-- /wp:button --></div>
         <!-- /wp:buttons --></div>
         <!-- /wp:group --></div>
         <!-- /wp:column -->

         <!-- wp:column {"verticalAlignment":"center","width":"10%","className":"header-blank-box"} -->
         <div class="wp-block-column is-vertically-aligned-center header-blank-box" style="flex-basis:10%"></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns --></div>
         <!-- /wp:group -->

         <!-- wp:group {"className":"header-btm-box","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0","right":"0"},"margin":{"top":"0","bottom":"15px"}}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"75%","justifyContent":"center"}} -->
         <div class="wp-block-group header-btm-box has-accent-background-color has-background" style="margin-top:0;margin-bottom:15px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:navigation {"textColor":"fourthaccent","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"spacing":{"blockGap":"30px"}},"fontSize":"medium","fontFamily":"poppins","layout":{"type":"flex","justifyContent":"left"}} -->
         <!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

         <!-- wp:navigation-link {"label":"About","type":"","url":"#aboutus","kind":"custom","isTopLevelLink":true} /-->

         <!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

         <!-- wp:navigation-link {"label":"Page","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

         <!-- wp:navigation-link {"label":"Blogs","type":"","url":"#blog","kind":"custom","isTopLevelLink":true} /-->

         <!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/chocolate-shop-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro","opensInNewTab":true} /-->

         <!-- /wp:navigation --></div>
         <!-- /wp:group --></div>
         <!-- /wp:group -->

        <!-- wp:social-links {"iconColor":"text-color","iconColorValue":"#1A1A1A","openInNewTab":true,"className":"is-style-logos-only slider-icon","style":{"spacing":{"blockGap":{"top":"25px","left":"15px"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only slider-icon" style="border-radius:4px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

        <!-- wp:social-link {"url":"www.x.com","service":"x"} /-->

        <!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /-->

        <!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /--></ul>
        <!-- /wp:social-links -->

        <!-- wp:group {"className":"owl-carousel","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group owl-carousel" style="margin-top:0px;margin-bottom:0px"><!-- wp:columns {"className":"slider-content"} -->
        <div class="wp-block-columns slider-content"><!-- wp:column {"verticalAlignment":"center","width":"60%","className":"slider-left","layout":{"type":"constrained","contentSize":"58%"}} -->
        <div class="wp-block-column is-vertically-aligned-center slider-left" style="flex-basis:60%"><!-- wp:group {"className":"slider-left-content","layout":{"type":"default"}} -->
        <div class="wp-block-group slider-left-content"><!-- wp:paragraph {"className":"slider-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"italic","fontWeight":"500","textDecoration":"underline"}},"textColor":"fourthaccent","fontFamily":"playfair-display"} -->
        <p class="slider-sub-title has-fourthaccent-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:16px;font-style:italic;font-weight:500;text-decoration:underline;text-transform:capitalize">'. esc_html__('luxury you can taste','chocolate-house') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"className":"slider-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"38px","textTransform":"capitalize","fontStyle":"italic","fontWeight":"700"}},"textColor":"secaccent","fontFamily":"playfair-display"} -->
        <h2 class="wp-block-heading slider-heading has-secaccent-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:38px;font-style:italic;font-weight:700;text-transform:capitalize">'. esc_html__('indulge in the art of fine chocolate','chocolate-house') .'</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"slider-para","style":{"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}}},"textColor":"fourthaccent"} -->
        <p class="slider-para has-fourthaccent-color has-text-color has-link-color" style="font-size:22px">'. esc_html__('Handcrafted creations made with passion, purity, and perfection.','chocolate-house') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"slider-btns","style":{"spacing":{"margin":{"top":"40px","bottom":"0px"},"blockGap":{"top":"16px","left":"55px"}}}} -->
        <div class="wp-block-buttons slider-btns" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"thirdaccent","textColor":"secaccent","className":"slider-button1","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","fontSize":"16px"},"border":{"width":"1px","color":"#F5EFDF","radius":"30px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}}} -->
        <div class="wp-block-button slider-button1"><a class="wp-block-button__link has-secaccent-color has-thirdaccent-background-color has-text-color has-background has-link-color has-border-color has-custom-font-size wp-element-button" href="#" style="border-color:#F5EFDF;border-width:1px;border-radius:30px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('shop now','chocolate-house') .'<i class="fa-solid fa-angles-right"></i></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"backgroundColor":"secaccent","textColor":"accent","className":"slider-button2","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","fontSize":"16px"},"border":{"radius":"30px","width":"1px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"borderColor":"accent"} -->
        <div class="wp-block-button slider-button2"><a class="wp-block-button__link has-accent-color has-secaccent-background-color has-text-color has-background has-link-color has-border-color has-accent-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:30px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('explore collections','chocolate-house') .'<i class="fa-solid fa-angles-right"></i></a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%","className":"slider-right"} -->
        <div class="wp-block-column slider-right" style="flex-basis:40%"><!-- wp:group {"className":"slider-img-box","layout":{"type":"default"}} -->
        <div class="wp-block-group slider-img-box"><!-- wp:image {"id":27,"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","className":"slider-img","style":{"spacing":{"margin":{"right":"0px","left":"0px"}}}} -->
        <figure class="wp-block-image size-full is-resized slider-img" style="margin-right:0px;margin-left:0px"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider1.png" alt="" class="wp-image-27" style="width:auto;height:600px"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->

        <!-- wp:columns {"className":"slider-content"} -->
        <div class="wp-block-columns slider-content"><!-- wp:column {"verticalAlignment":"center","width":"60%","className":"slider-left","layout":{"type":"constrained","contentSize":"58%"}} -->
        <div class="wp-block-column is-vertically-aligned-center slider-left" style="flex-basis:60%"><!-- wp:group {"className":"slider-left-content","layout":{"type":"default"}} -->
        <div class="wp-block-group slider-left-content"><!-- wp:paragraph {"className":"slider-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"italic","fontWeight":"500","textDecoration":"underline"}},"textColor":"fourthaccent","fontFamily":"playfair-display"} -->
        <p class="slider-sub-title has-fourthaccent-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:16px;font-style:italic;font-weight:500;text-decoration:underline;text-transform:capitalize">'. esc_html__('luxury you can taste','chocolate-house') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"className":"slider-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"38px","textTransform":"capitalize","fontStyle":"italic","fontWeight":"700"}},"textColor":"secaccent","fontFamily":"playfair-display"} -->
        <h2 class="wp-block-heading slider-heading has-secaccent-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:38px;font-style:italic;font-weight:700;text-transform:capitalize">'. esc_html__('taste the passion in every bite','chocolate-house') .'</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"slider-para","style":{"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}}},"textColor":"fourthaccent"} -->
        <p class="slider-para has-fourthaccent-color has-text-color has-link-color" style="font-size:22px">'. esc_html__('Each piece is lovingly handcrafted to capture the essence of true chocolate artistry.','chocolate-house') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"slider-btns","style":{"spacing":{"margin":{"top":"40px","bottom":"0px"},"blockGap":{"top":"16px","left":"55px"}}}} -->
        <div class="wp-block-buttons slider-btns" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"thirdaccent","textColor":"secaccent","className":"slider-button1","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","fontSize":"16px"},"border":{"width":"1px","color":"#F5EFDF","radius":"30px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}}} -->
        <div class="wp-block-button slider-button1"><a class="wp-block-button__link has-secaccent-color has-thirdaccent-background-color has-text-color has-background has-link-color has-border-color has-custom-font-size wp-element-button" href="#" style="border-color:#F5EFDF;border-width:1px;border-radius:30px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('shop now','chocolate-house') .'<i class="fa-solid fa-angles-right"></i></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"backgroundColor":"secaccent","textColor":"accent","className":"slider-button2","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","fontSize":"16px"},"border":{"radius":"30px","width":"1px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"borderColor":"accent"} -->
        <div class="wp-block-button slider-button2"><a class="wp-block-button__link has-accent-color has-secaccent-background-color has-text-color has-background has-link-color has-border-color has-accent-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:30px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('explore collections','chocolate-house') .'<i class="fa-solid fa-angles-right"></i></a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%","className":"slider-right"} -->
        <div class="wp-block-column slider-right" style="flex-basis:40%"><!-- wp:group {"className":"slider-img-box","layout":{"type":"default"}} -->
        <div class="wp-block-group slider-img-box"><!-- wp:image {"id":27,"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","className":"slider-img","style":{"spacing":{"margin":{"right":"0px","left":"0px"}}}} -->
        <figure class="wp-block-image size-full is-resized slider-img" style="margin-right:0px;margin-left:0px"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider2.png" alt="" class="wp-image-27" style="width:auto;height:600px"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->

        <!-- wp:columns {"className":"slider-content"} -->
        <div class="wp-block-columns slider-content"><!-- wp:column {"verticalAlignment":"center","width":"60%","className":"slider-left","layout":{"type":"constrained","contentSize":"58%"}} -->
        <div class="wp-block-column is-vertically-aligned-center slider-left" style="flex-basis:60%"><!-- wp:group {"className":"slider-left-content","layout":{"type":"default"}} -->
        <div class="wp-block-group slider-left-content"><!-- wp:paragraph {"className":"slider-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"italic","fontWeight":"500","textDecoration":"underline"}},"textColor":"fourthaccent","fontFamily":"playfair-display"} -->
        <p class="slider-sub-title has-fourthaccent-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:16px;font-style:italic;font-weight:500;text-decoration:underline;text-transform:capitalize">'. esc_html__('luxury you can taste','chocolate-house') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"className":"slider-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"38px","textTransform":"capitalize","fontStyle":"italic","fontWeight":"700"}},"textColor":"secaccent","fontFamily":"playfair-display"} -->
        <h2 class="wp-block-heading slider-heading has-secaccent-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:38px;font-style:italic;font-weight:700;text-transform:capitalize">'. esc_html__('crafted from bean to delight','chocolate-house') .'</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"slider-para","style":{"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}}},"textColor":"fourthaccent"} -->
        <p class="slider-para has-fourthaccent-color has-text-color has-link-color" style="font-size:22px">'. esc_html__('From the world’s finest cocoa to your palate, experience chocolate in its purest form.','chocolate-house') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"slider-btns","style":{"spacing":{"margin":{"top":"40px","bottom":"0px"},"blockGap":{"top":"16px","left":"55px"}}}} -->
        <div class="wp-block-buttons slider-btns" style="margin-top:40px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"thirdaccent","textColor":"secaccent","className":"slider-button1","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","fontSize":"16px"},"border":{"width":"1px","color":"#F5EFDF","radius":"30px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}}} -->
        <div class="wp-block-button slider-button1"><a class="wp-block-button__link has-secaccent-color has-thirdaccent-background-color has-text-color has-background has-link-color has-border-color has-custom-font-size wp-element-button" href="#" style="border-color:#F5EFDF;border-width:1px;border-radius:30px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('shop now','chocolate-house') .'<i class="fa-solid fa-angles-right"></i></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"backgroundColor":"secaccent","textColor":"accent","className":"slider-button2","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","fontSize":"16px"},"border":{"radius":"30px","width":"1px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"borderColor":"accent"} -->
        <div class="wp-block-button slider-button2"><a class="wp-block-button__link has-accent-color has-secaccent-background-color has-text-color has-background has-link-color has-border-color has-accent-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:30px;padding-top:10px;padding-right:35px;padding-bottom:10px;padding-left:35px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('explore collections','chocolate-house') .'<i class="fa-solid fa-angles-right"></i></a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%","className":"slider-right"} -->
        <div class="wp-block-column slider-right" style="flex-basis:40%"><!-- wp:group {"className":"slider-img-box","layout":{"type":"default"}} -->
        <div class="wp-block-group slider-img-box"><!-- wp:image {"id":27,"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","className":"slider-img","style":{"spacing":{"margin":{"right":"0px","left":"0px"}}}} -->
        <figure class="wp-block-image size-full is-resized slider-img" style="margin-right:0px;margin-left:0px"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider3.png" alt="" class="wp-image-27" style="width:auto;height:600px"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"custom-controls","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group custom-controls" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px"><!-- wp:group {"align":"wide","className":"dots-box","layout":{"type":"constrained","contentSize":"75%"}} -->
        <div class="wp-block-group alignwide dots-box"><!-- wp:image {"id":25,"width":"auto","height":"100px","sizeSlug":"full","linkDestination":"none","className":"custom-dots"} -->
        <figure class="wp-block-image size-full is-resized custom-dots"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider1.png" alt="" class="wp-image-25" style="width:auto;height:100px"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:group -->',
    );