<?php
/**
 * About Us Section
 * 
 * slug: chocolate-house/about-us-section
 * title: About Us Section
 * categories: chocolate-house
 */

    return array(
        'title'      =>__( 'About Us Section', 'chocolate-house' ),
        'categories' => array( 'chocolate-house' ),
        'content'    => '<!-- wp:group {"className":"about-us-section","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"95%"}} -->
         <div id="aboutus" class="wp-block-group about-us-section has-secaccent-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/slider-bg.png","id":34,"dimRatio":90,"overlayColor":"accent","isUserOverlayColor":true,"sizeSlug":"large","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
         <div class="wp-block-cover" style="border-radius:20px"><img class="wp-block-cover__image-background wp-image-34 size-large" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider-bg.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"40px"} -->
         <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
         <!-- /wp:spacer -->

         <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
         <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"about-us-col01 wow zoomInLeft"} -->
         <div class="wp-block-column is-vertically-aligned-center about-us-col01 wow zoomInLeft"><!-- wp:columns -->
         <div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
         <div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":11,"sizeSlug":"full","linkDestination":"none","className":"about-img01","style":{"border":{"radius":"10px"}}} -->
         <figure class="wp-block-image size-full has-custom-border about-img01"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about01.png" alt="" class="wp-image-11" style="border-radius:10px"/></figure>
         <!-- /wp:image -->

         <!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none","align":"right","className":"about-img02","style":{"border":{"radius":"10px"}}} -->
         <figure class="wp-block-image alignright size-full has-custom-border about-img02"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about02.png" alt="" class="wp-image-10" style="border-radius:10px"/></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column -->

         <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
         <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none","className":"about-img03","style":{"border":{"radius":"10px"}}} -->
         <figure class="wp-block-image size-full has-custom-border about-img03"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about03.png" alt="" class="wp-image-9" style="border-radius:10px"/></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns --></div>
         <!-- /wp:column -->

         <!-- wp:column {"verticalAlignment":"center","className":"about-us-col02 wow zoomInRight","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
         <div class="wp-block-column is-vertically-aligned-center about-us-col02 wow zoomInRight"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"17px"}},"textColor":"fourthaccent","fontFamily":"poppins"} -->
         <p class="has-fourthaccent-color has-text-color has-link-color has-poppins-font-family" style="font-size:17px;font-style:normal;font-weight:700">'. esc_html__('About Us','chocolate-house') .'</p>
         <!-- /wp:paragraph -->

         <!-- wp:heading {"className":"about-us-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent"} -->
         <h2 class="wp-block-heading about-us-heading has-secaccent-color has-text-color has-link-color" style="font-size:32px;font-style:normal;font-weight:700;text-transform:capitalize">'. esc_html__('We want to give you the best services','chocolate-house') .'</h2>
         <!-- /wp:heading -->

         <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.6"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"small","fontFamily":"poppins"} -->
         <p class="has-secaccent-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.6">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','chocolate-house') .'</p>
         <!-- /wp:paragraph -->

         <!-- wp:columns {"className":"about-col02-list","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|30"}}}} -->
         <div class="wp-block-columns about-col02-list" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
         <div class="wp-block-column"><!-- wp:image {"id":8,"width":"auto","height":"50px","sizeSlug":"full","linkDestination":"none"} -->
         <figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon01.png" alt="" class="wp-image-8" style="width:auto;height:50px"/></figure>
         <!-- /wp:image -->

         <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"20px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"secaccent"} -->
         <h2 class="wp-block-heading has-secaccent-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--40);font-size:20px;font-style:normal;font-weight:700;text-transform:capitalize">'. esc_html__('Guaranteed Results','chocolate-house') .'</h2>
         <!-- /wp:heading -->

         <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.7"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"extra-small","fontFamily":"poppins"} -->
         <p class="has-secaccent-color has-text-color has-link-color has-poppins-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400;line-height:1.7">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','chocolate-house') .'</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column -->

         <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
         <div class="wp-block-column"><!-- wp:image {"id":7,"width":"auto","height":"50px","sizeSlug":"full","linkDestination":"none"} -->
         <figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon02.png" alt="" class="wp-image-7" style="width:auto;height:50px"/></figure>
         <!-- /wp:image -->

         <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"20px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"secaccent"} -->
         <h2 class="wp-block-heading has-secaccent-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--40);font-size:20px;font-style:normal;font-weight:700;text-transform:capitalize">'. esc_html__('Quality Services','chocolate-house') .'</h2>
         <!-- /wp:heading -->

         <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.7"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"extra-small","fontFamily":"rubik"} -->
         <p class="has-secaccent-color has-text-color has-link-color has-rubik-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400;line-height:1.7">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','chocolate-house') .'</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns -->

         <!-- wp:spacer {"height":"40px"} -->
         <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
         <!-- /wp:spacer --></div></div>
         <!-- /wp:cover --></div>
         <!-- /wp:group -->',
    );