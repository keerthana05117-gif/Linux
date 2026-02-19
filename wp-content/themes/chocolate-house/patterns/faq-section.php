<?php
/**
 * FAQ Section
 * 
 * slug: chocolate-house/faq-section
 * title: FAQ Section
 * categories: chocolate-house
 */

    return array(
        'title'      =>__( 'FAQ Section', 'chocolate-house' ),
        'categories' => array( 'chocolate-house' ),
        'content'    => '<!-- wp:group {"className":"faq-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"95%"}} -->
         <div class="wp-block-group faq-section has-secaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/slider-bg.png","id":55,"dimRatio":90,"overlayColor":"accent","isUserOverlayColor":true,"sizeSlug":"large","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
         <div class="wp-block-cover" style="border-radius:20px;padding-top:40px;padding-bottom:40px"><img class="wp-block-cover__image-background wp-image-55 size-large" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider-bg.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
         <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"className":"faq-left wow zoomInLeft","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
         <div class="wp-block-column faq-left wow zoomInLeft"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"16px"}},"textColor":"fourthaccent"} -->
         <p class="has-fourthaccent-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:700">'. esc_html__('Frequently Asked Questions','chocolate-house') .'</p>
         <!-- /wp:paragraph -->

         <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"32px"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent"} -->
         <h2 class="wp-block-heading has-secaccent-color has-text-color has-link-color" style="font-size:32px;font-style:normal;font-weight:700">'. esc_html__('Have Any Questions For Us?','chocolate-house') .'</h2>
         <!-- /wp:heading -->

         <!-- wp:paragraph {"className":"short-para-text","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.8"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"textColor":"secaccent","fontSize":"tiny","fontFamily":"rubik"} -->
         <p class="short-para-text has-secaccent-color has-text-color has-link-color has-rubik-font-family has-tiny-font-size" style="padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:400;line-height:1.8">'. esc_html__('BLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','chocolate-house') .'</p>
         <!-- /wp:paragraph -->

         <!-- wp:image {"id":8,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}}} -->
         <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/FAQ.png" alt="" class="wp-image-8" style="border-style:none;border-width:0px"/></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column -->

         <!-- wp:column {"className":"faq-right wow zoomInRight","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
         <div class="wp-block-column faq-right wow zoomInRight"><!-- wp:details {"showContent":true,"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
         <details class="wp-block-details faq-list" style="font-style:normal;font-weight:500" open><summary>'. esc_html__('What types of toys do you sell?','chocolate-house') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"tiny"} -->
         <p class="has-secaccent-color has-text-color has-link-color has-tiny-font-size">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','chocolate-house') .'</p>
         <!-- /wp:paragraph --></details>
         <!-- /wp:details -->

         <!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
         <details class="wp-block-details faq-list" style="font-style:normal;font-weight:400"><summary>'. esc_html__('How can I cancel or change my order?','chocolate-house') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secaccent","fontSize":"tiny"} -->
         <p class="has-secaccent-color has-text-color has-link-color has-tiny-font-size" style="font-style:normal;font-weight:400">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','chocolate-house') .'</p>
         <!-- /wp:paragraph --></details>
         <!-- /wp:details -->

         <!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
         <details class="wp-block-details faq-list" style="font-style:normal;font-weight:500"><summary>'. esc_html__('Will I receive an order confirmation email?','chocolate-house') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"tiny"} -->
         <p class="has-secaccent-color has-text-color has-link-color has-tiny-font-size">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','chocolate-house') .'</p>
         <!-- /wp:paragraph --></details>
         <!-- /wp:details -->

         <!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
         <details class="wp-block-details faq-list" style="font-style:normal;font-weight:500"><summary>'. esc_html__('Is it safe to pay online on your website?','chocolate-house') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent"} -->
         <p class="has-secaccent-color has-text-color has-link-color">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','chocolate-house') .'</p>
         <!-- /wp:paragraph --></details>
         <!-- /wp:details -->

         <!-- wp:details {"className":"faq-list","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
         <details class="wp-block-details faq-list" style="font-style:normal;font-weight:500"><summary>'. esc_html__('How long does it take to process refunds?','chocolate-house') .'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secaccent"} -->
         <p class="has-secaccent-color has-text-color has-link-color" style="font-style:normal;font-weight:400">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown prpoppins took a galley of type and scrambled it to make a type specimen book.','chocolate-house') .'</p>
         <!-- /wp:paragraph --></details>
         <!-- /wp:details --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns --></div></div>
         <!-- /wp:cover --></div>
         <!-- /wp:group -->',
    );