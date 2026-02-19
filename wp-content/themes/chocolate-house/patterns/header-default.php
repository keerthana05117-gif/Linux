<?php
/**
 * Header Default
 * 
 * slug: chocolate-house/header-default
 * title: Header Default
 * categories: chocolate-house
 */

return array(
    'title'      =>__( 'Header Default', 'chocolate-house' ),
    'categories' => array( 'chocolate-house' ),
    'content'    => '<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"bottom":"0","top":"0","right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group header-box-upper" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"header-top-box","style":{"spacing":{"padding":{"right":"0","left":"0","top":"8px","bottom":"8px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"thirdaccent","layout":{"type":"constrained","contentSize":"75%"}} -->
    <div class="wp-block-group header-top-box has-thirdaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8px;padding-right:0;padding-bottom:8px;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"header-top-boxes"} -->
    <div class="wp-block-columns are-vertically-aligned-center header-top-boxes"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-logo-box"} -->
    <div class="wp-block-column is-vertically-aligned-center header-logo-box" style="flex-basis:25%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"25px"}},"textColor":"primary","fontFamily":"caveat-brush"} /--></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"75%","className":"header-btn-box"} -->
    <div class="wp-block-column is-vertically-aligned-center header-btn-box" style="flex-basis:75%"><!-- wp:group {"className":"header-top-inner","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
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
    <div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-336" style="width: 150px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/light-mode.png" alt=""><img class="wp-image-332" style="width: 150px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/dark-mode.png" alt=""></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"header-btm-box","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0","right":"0"},"margin":{"top":"0","bottom":"15px"}}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"75%","justifyContent":"center"}} -->
    <div class="wp-block-group header-btm-box has-accent-background-color has-background" style="margin-top:0;margin-bottom:15px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:navigation {"textColor":"fourthaccent","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"spacing":{"blockGap":"30px"}},"fontSize":"medium","fontFamily":"poppins","layout":{"type":"flex","justifyContent":"left"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"About","type":"","url":"#aboutus","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Page","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Blogs","type":"","url":"#blog","kind":"custom","isTopLevelLink":true} /-->

    <!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/chocolate-shop-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro","opensInNewTab":true} /-->

    <!-- /wp:navigation --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
    );