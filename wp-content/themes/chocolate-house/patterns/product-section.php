<?php
/**
 * Product Section
 * 
 * slug: chocolate-house/product-section
 * title: Product Section
 * categories: chocolate-house
 */
$chocolate_house_store_plugins_list = get_option( 'active_plugins' );
$chocolate_house_store_plugin = 'woocommerce/woocommerce.php';
$chocolate_house_store_results = in_array( $chocolate_house_store_plugin , $chocolate_house_store_plugins_list);
if ( $chocolate_house_store_results )  {

    return array(
        'title'      =>__( 'Product Section', 'chocolate-house' ),
        'categories' => array( 'chocolate-house' ),
        'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
            <main class="wp-block-group" style="padding-top:0px;padding-bottom:0px"><!-- wp:group {"className":"product-section","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0px","right":"0px"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"75%"}} -->
            <div class="wp-block-group product-section has-secaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0px;padding-bottom:var(--wp--preset--spacing--30);padding-left:0px"><!-- wp:group {"className":"head-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group head-box"><!-- wp:paragraph {"align":"center","className":"product-sec-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"spacing":{"padding":{"bottom":"10px"}}},"textColor":"thirdaccent"} -->
            <p class="has-text-align-center product-sec-sub-title has-thirdaccent-color has-text-color has-link-color" style="padding-bottom:10px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize">'. esc_html__('a rare indulgence','chocolate-house') .'</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":3,"className":"product-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"25px"},"spacing":{"margin":{"top":"15px"}}},"textColor":"accent"} -->
            <h3 class="wp-block-heading has-text-align-center product-sec-title has-accent-color has-text-color has-link-color" style="margin-top:15px;font-size:25px">'. esc_html__('Crafted in small batches, available for a limited time only.','chocolate-house') .'</h3>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"50px"} -->
            <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:columns {"verticalAlignment":"center","className":"product-boxes"} -->
            <div class="wp-block-columns are-vertically-aligned-center product-boxes"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"product-left-box"} -->
            <div class="wp-block-column is-vertically-aligned-center product-left-box" style="flex-basis:40%"><!-- wp:woocommerce/product-collection {"queryId":13,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
            <div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"product-main-content"} -->
            <!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"width":"100%","height":"400px","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
            <!-- wp:group {"className":"product-btm-img-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group product-btm-img-box"><!-- wp:image {"id":231,"width":"auto","height":"22px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px","width":"0px","style":"none"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/bottom.png" alt="" class="wp-image-231" style="border-style:none;border-width:0px;border-radius:0px;width:auto;height:22px"/></figure>
            <!-- /wp:image -->

            <!-- wp:group {"className":"product-outer-box","style":{"spacing":{"padding":{"top":"2px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"thirdaccent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group product-outer-box has-thirdaccent-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:2px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"product-inner-box","style":{"spacing":{"padding":{"top":"38px","bottom":"15px","left":"12px","right":"12px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group product-inner-box has-fourthaccent-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:38px;padding-right:12px;padding-bottom:15px;padding-left:12px"><!-- wp:post-title {"isLink":true,"className":"product-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"accent","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

            <!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":15,"className":"product-text","textColor":"accent","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

            <!-- wp:group {"className":"product-btn-box","style":{"spacing":{"margin":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group product-btn-box" style="margin-top:10px"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"isDescendentOfSingleProductBlock":true,"className":"product-price","textColor":"accent","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700"}}} /-->

            <!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"product-btn","backgroundColor":"accent","textColor":"secaccent","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"8px","bottom":"8px","left":"25px","right":"50px"}},"typography":{"fontSize":"15px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"border":{"radius":"30px"}}} /--></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            <!-- /wp:woocommerce/product-image -->
            <!-- /wp:woocommerce/product-template --></div>
            <!-- /wp:woocommerce/product-collection --></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"20%","className":"product-mid-box"} -->
            <div class="wp-block-column is-vertically-aligned-center product-mid-box" style="flex-basis:20%"><!-- wp:essential-blocks/countdown {"blockId":"eb-countdown-nwad1","blockMeta":{"desktop":".eb-countdown-nwad1.eb-cd-wrapper{max-width:600px;transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s}div.eb-countdown-nwad1.eb-cd-wrapper{margin-left:auto;margin-right:auto}.eb-countdown-nwad1.eb-cd-wrapper:before{transition:background 0.5s,opacity 0.5s,filter 0.5s}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner{flex-direction:column}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box{background-color:#b383424d;transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s;padding-top:12px;padding-bottom:12px;border-radius:10px;flex-direction:column;align-items:center}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box:hover{border-radius:10px}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-digit{font-size:25px;line-height:1.1em;font-weight:700;padding-bottom:12px;color:#2C150A}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-label{font-size:14px;font-weight:700;text-transform:capitalize;color:#2C150A}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box + .box{margin:0;margin-top:30px}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box.cd-box-day{border-color:rgba(0,194,232,1)}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box.cd-box-hour{border-color:rgba(255,107,211,1)}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box.cd-box-minute{border-color:rgba(153,102,13,1)}.eb-countdown-nwad1.eb-cd-wrapper .eb-cd-inner .box.cd-box-second{border-color:rgba(0,91,255,1)}","tab":"","mobile":""},"preset":"preset2","flexDirection":"column","endTimeStamp":1770810714000,"minutesLabel":"Mins","secondsLabel":"Sec","digitsColor":"#2C150A","labelsColor":"#2C150A","dayBdrColor":"rgba(0,194,232,1)","hourBdrColor":"rgba(255,107,211,1)","minuteBdrColor":"rgba(153,102,13,1)","secondBdrColor":"rgba(0,91,255,1)","recurringCountdownEnd":1710924335631,"dg_FontSource":"custom","dg_FontSize":25,"dg_FontWeight":"700","dg_LineHeight":1.1,"lb_FontSource":"custom","lb_FontSize":14,"lb_FontWeight":"700","lb_TextTransform":"capitalize","sepRight_Range":20,"boxsBg_backgroundColor":"#b383424d","wrpBdSd_Rds_Top":"","wrpBdSd_Rds_Right":"","wrpBdSd_Rds_Bottom":"","wrpBdSd_Rds_Left":"","boxsBds_borderStyle":"solid","boxsBds_Bdr_Top":"2","boxsBds_Bdr_Right":"2","boxsBds_Bdr_Bottom":"2","boxsBds_Bdr_Left":"2","boxsP_Top":"12","boxsP_Bottom":"12","wrpMrg_Top":"","wrpMrg_Right":"","wrpMrg_Bottom":"","wrpMrg_Left":"","wrpPad_Top":"","wrpPad_Right":"","wrpPad_Bottom":"","wrpPad_Left":"","dgPad_isLinked":false,"dgPad_Top":"","dgPad_Right":"","dgPad_Bottom":"12","dgPad_Left":"","lblPad_Top":"","lblPad_Right":"","lblPad_Bottom":"","lblPad_Left":"","commonStyles":{"desktop":".eb-parent-eb-countdown-nwad1{display:block}.root-eb-countdown-nwad1{position:relative}.root-eb-countdown-nwad1.eb_liquid_glass-effect1{background-color:#FFFFFF1F;backdrop-filter:blur(24px)}.root-eb-countdown-nwad1.eb_liquid_glass-effect2{background-color:#FFFFFF1F;backdrop-filter:blur(24px) brightness(1)}.root-eb-countdown-nwad1.eb_liquid_glass_shadow-effect1{border-width:1px;border-color:#FFFFFF1F;border-style:solid;border-radius:24px}.root-eb-countdown-nwad1.eb_liquid_glass-effect1 \u003e .eb-parent-wrapper \u003e div{background:transparent}","tab":".eb-parent-eb-countdown-nwad1{display:block}","mobile":".eb-parent-eb-countdown-nwad1{display:block}"}} -->
            <div class="wp-block-essential-blocks-countdown  root-eb-countdown-nwad1"><div class="eb-parent-wrapper eb-parent-eb-countdown-nwad1 "><div class="eb-countdown-nwad1 eb-cd-wrapper preset2"><div class="eb-cd-inner" blockid="eb-countdown-nwad1" data-deadline-time="1770810714000" data-is-evergreen-time="false" data-evergreen-time-hours="11" data-evergreen-time-minutes="59" data-evergreen-recurring="false" data-evergreen-restart-time="0" data-evergreen-deadline-time="1710924335631"><div class="box cd-box-day"><span class="eb-cd-digit">00</span><span class="eb-cd-label">Days</span></div><div class="box cd-box-hour"><span class="eb-cd-digit">00</span><span class="eb-cd-label">Hours</span></div><div class="box cd-box-minute"><span class="eb-cd-digit">00</span><span class="eb-cd-label">Mins</span></div><div class="box cd-box-second"><span class="eb-cd-digit">00</span><span class="eb-cd-label">Sec</span></div></div></div></div></div>
            <!-- /wp:essential-blocks/countdown --></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"40%","className":"product-left-box"} -->
            <div class="wp-block-column is-vertically-aligned-center product-left-box" style="flex-basis:40%"><!-- wp:woocommerce/product-collection {"queryId":14,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
            <div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"product-main-content"} -->
            <!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"width":"100%","height":"400px","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
            <!-- wp:group {"className":"product-btm-img-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group product-btm-img-box"><!-- wp:image {"id":231,"width":"auto","height":"22px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px","width":"0px","style":"none"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/bottom.png" alt="" class="wp-image-231" style="border-style:none;border-width:0px;border-radius:0px;width:auto;height:22px"/></figure>
            <!-- /wp:image -->

            <!-- wp:group {"className":"product-outer-box","style":{"spacing":{"padding":{"top":"2px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"thirdaccent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group product-outer-box has-thirdaccent-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:2px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"product-inner-box","style":{"spacing":{"padding":{"top":"38px","bottom":"15px","left":"12px","right":"12px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"fourthaccent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group product-inner-box has-fourthaccent-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:38px;padding-right:12px;padding-bottom:15px;padding-left:12px"><!-- wp:post-title {"isLink":true,"className":"product-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"accent","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

            <!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":15,"className":"product-text","textColor":"accent","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

            <!-- wp:group {"className":"product-btn-box","style":{"spacing":{"margin":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group product-btn-box" style="margin-top:10px"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"isDescendentOfSingleProductBlock":true,"className":"product-price","textColor":"accent","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700"}}} /-->

            <!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"product-btn","backgroundColor":"accent","textColor":"secaccent","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"8px","bottom":"8px","left":"25px","right":"50px"}},"typography":{"fontSize":"15px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"border":{"radius":"30px"}}} /--></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            <!-- /wp:woocommerce/product-image -->
            <!-- /wp:woocommerce/product-template --></div>
            <!-- /wp:woocommerce/product-collection --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->

            <!-- wp:spacer {"height":"40px"} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group --></main>
            <!-- /wp:group -->',
    );

} else {    

    return array(
        'title'      =>__( 'Product Section', 'chocolate-house' ),
        'categories' => array( 'chocolate-house' ),
        'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
            <main class="wp-block-group" style="padding-top:0px;padding-bottom:0px"><!-- wp:group {"className":"product-section","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0px","right":"0px"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"75%"}} -->
            <div class="wp-block-group product-section has-secaccent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0px;padding-bottom:var(--wp--preset--spacing--30);padding-left:0px"><!-- wp:group {"className":"head-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group head-box"><!-- wp:paragraph {"align":"center","className":"product-sec-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"spacing":{"padding":{"bottom":"10px"}}},"textColor":"thirdaccent"} -->
            <p class="has-text-align-center product-sec-sub-title has-thirdaccent-color has-text-color has-link-color" style="padding-bottom:10px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize">'. esc_html__('a rare indulgence','chocolate-house') .'</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":3,"className":"product-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"25px"},"spacing":{"margin":{"top":"15px"}}},"textColor":"accent"} -->
            <h3 class="wp-block-heading has-text-align-center product-sec-title has-accent-color has-text-color has-link-color" style="margin-top:15px;font-size:25px">'. esc_html__('Crafted in small batches, available for a limited time only.','chocolate-house') .'</h3>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"50px"} -->
            <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:columns {"verticalAlignment":"center","className":"product-boxes"} -->
            <div class="wp-block-columns are-vertically-aligned-center product-boxes"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"product-left-box"} -->
            <div class="wp-block-column is-vertically-aligned-center product-left-box" style="flex-basis:40%"><!-- wp:image {"id":6,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none","className":"heart-1","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
            <figure class="wp-block-image size-full is-resized heart-1" style="margin-top:0px;margin-bottom:0px"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/heart.png" alt="" class="wp-image-6" style="width:auto;height:20px"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":7,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none","className":"heart-2","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
            <figure class="wp-block-image size-full is-resized heart-2" style="margin-top:0px;margin-bottom:0px"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/heart1.png" alt="" class="wp-image-7" style="width:auto;height:20px"/></figure>
            <!-- /wp:image -->

            <!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/product-img1.png","id":250,"dimRatio":0,"isUserOverlayColor":true,"sizeSlug":"full","className":"product-main-content","style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"borderColor":"thirdaccent","layout":{"type":"default"}} -->
            <div class="wp-block-cover product-main-content has-border-color has-thirdaccent-border-color" style="border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-block-cover__image-background wp-image-250 size-full" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/product-img1.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"product-btm-img-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group product-btm-img-box"><!-- wp:image {"id":231,"width":"auto","height":"22px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px","width":"0px","style":"none"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/bottom.png" alt="" class="wp-image-231" style="border-style:none;border-width:0px;border-radius:0px;width:auto;height:22px"/></figure>
            <!-- /wp:image -->

            <!-- wp:group {"className":"product-outer-box","style":{"spacing":{"padding":{"top":"2px","bottom":"0px","right":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"thirdaccent","layout":{"type":"default"}} -->
            <div class="wp-block-group product-outer-box has-thirdaccent-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:2px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"product-inner-box","style":{"spacing":{"padding":{"top":"55px","right":"12px","left":"12px","bottom":"15px"}}},"backgroundColor":"fourthaccent","layout":{"type":"default"}} -->
            <div class="wp-block-group product-inner-box has-fourthaccent-background-color has-background" style="padding-top:55px;padding-right:12px;padding-bottom:15px;padding-left:12px"><!-- wp:heading {"level":5,"className":"product-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"18px","textTransform":"capitalize"}},"textColor":"accent"} -->
            <h5 class="wp-block-heading product-title has-accent-color has-text-color has-link-color" style="font-size:18px;text-transform:capitalize">'. esc_html__('golden hazelnut truffles (limited edition)','chocolate-house') .'</h5>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"8px","bottom":"0px"}}},"textColor":"accent"} -->
            <p class="product-text has-accent-color has-text-color has-link-color" style="margin-top:8px;margin-bottom:0px;font-size:13px">'. esc_html__('Handcrafted truffles infused with roasted Italian hazelnuts, and dusted with 24k edible gold flakes.','chocolate-house') .'</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"className":"product-btn-box","style":{"spacing":{"margin":{"top":"0px"},"blockGap":"97px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group product-btn-box" style="margin-top:0px"><!-- wp:paragraph {"className":"product-price","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
            <p class="product-price has-accent-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:700">'. esc_html__('$34.99','chocolate-house') .'</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"product-btn"} -->
            <div class="wp-block-buttons product-btn"><!-- wp:button {"style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"border":{"radius":"30px","width":"1px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}}},"borderColor":"secaccent"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-border-color has-secaccent-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:30px;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px;font-size:16px;text-transform:capitalize">'. esc_html__('add to cart','chocolate-house') .'</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"20%","className":"product-mid-box"} -->
            <div class="wp-block-column is-vertically-aligned-center product-mid-box" style="flex-basis:20%"><!-- wp:essential-blocks/countdown {"blockId":"eb-countdown-eyt70","blockMeta":{"desktop":".eb-countdown-eyt70.eb-cd-wrapper{max-width:600px;transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s}div.eb-countdown-eyt70.eb-cd-wrapper{margin-left:auto;margin-right:auto}.eb-countdown-eyt70.eb-cd-wrapper:before{transition:background 0.5s,opacity 0.5s,filter 0.5s}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner{flex-direction:column}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box{background-color:#b383424d;transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s;padding-top:12px;padding-bottom:12px;border-radius:10px;flex-direction:column;align-items:center}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box:hover{border-radius:10px}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-digit{font-size:25px;line-height:1.1em;font-weight:700;padding-bottom:12px;color:#2C150A}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-label{font-size:14px;font-weight:700;text-transform:capitalize;color:#2C150A}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box + .box{margin:0;margin-top:30px}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box.cd-box-day{border-color:rgba(0,194,232,1)}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box.cd-box-hour{border-color:rgba(255,107,211,1)}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box.cd-box-minute{border-color:rgba(153,102,13,1)}.eb-countdown-eyt70.eb-cd-wrapper .eb-cd-inner .box.cd-box-second{border-color:rgba(0,91,255,1)}","tab":"","mobile":""},"preset":"preset2","flexDirection":"column","endTimeStamp":1770810714000,"minutesLabel":"Mins","secondsLabel":"Sec","digitsColor":"#2C150A","labelsColor":"#2C150A","dayBdrColor":"rgba(0,194,232,1)","hourBdrColor":"rgba(255,107,211,1)","minuteBdrColor":"rgba(153,102,13,1)","secondBdrColor":"rgba(0,91,255,1)","recurringCountdownEnd":1710924335631,"dg_FontSource":"custom","dg_FontSize":25,"dg_FontWeight":"700","dg_LineHeight":1.1,"lb_FontSource":"custom","lb_FontSize":14,"lb_FontWeight":"700","lb_TextTransform":"capitalize","sepRight_Range":20,"boxsBg_backgroundColor":"#b383424d","wrpBdSd_Rds_Top":"","wrpBdSd_Rds_Right":"","wrpBdSd_Rds_Bottom":"","wrpBdSd_Rds_Left":"","boxsBds_borderStyle":"solid","boxsBds_Bdr_Top":"2","boxsBds_Bdr_Right":"2","boxsBds_Bdr_Bottom":"2","boxsBds_Bdr_Left":"2","boxsP_Top":"12","boxsP_Bottom":"12","wrpMrg_Top":"","wrpMrg_Right":"","wrpMrg_Bottom":"","wrpMrg_Left":"","wrpPad_Top":"","wrpPad_Right":"","wrpPad_Bottom":"","wrpPad_Left":"","dgPad_isLinked":false,"dgPad_Top":"","dgPad_Right":"","dgPad_Bottom":"12","dgPad_Left":"","lblPad_Top":"","lblPad_Right":"","lblPad_Bottom":"","lblPad_Left":"","commonStyles":{"desktop":".eb-parent-eb-countdown-eyt70{display:block}.root-eb-countdown-eyt70{position:relative}.root-eb-countdown-eyt70.eb_liquid_glass-effect1{background-color:#FFFFFF1F;backdrop-filter:blur(24px)}.root-eb-countdown-eyt70.eb_liquid_glass-effect2{background-color:#FFFFFF1F;backdrop-filter:blur(24px) brightness(1)}.root-eb-countdown-eyt70.eb_liquid_glass_shadow-effect1{border-width:1px;border-color:#FFFFFF1F;border-style:solid;border-radius:24px}.root-eb-countdown-eyt70.eb_liquid_glass-effect1 \u003e .eb-parent-wrapper \u003e div{background:transparent}","tab":".eb-parent-eb-countdown-eyt70{display:block}","mobile":".eb-parent-eb-countdown-eyt70{display:block}"}} -->
            <div class="wp-block-essential-blocks-countdown  root-eb-countdown-eyt70"><div class="eb-parent-wrapper eb-parent-eb-countdown-eyt70 "><div class="eb-countdown-eyt70 eb-cd-wrapper preset2"><div class="eb-cd-inner" blockid="eb-countdown-eyt70" data-deadline-time="1770810714000" data-is-evergreen-time="false" data-evergreen-time-hours="11" data-evergreen-time-minutes="59" data-evergreen-recurring="false" data-evergreen-restart-time="0" data-evergreen-deadline-time="1710924335631"><div class="box cd-box-day"><span class="eb-cd-digit">00</span><span class="eb-cd-label">Days</span></div><div class="box cd-box-hour"><span class="eb-cd-digit">00</span><span class="eb-cd-label">Hours</span></div><div class="box cd-box-minute"><span class="eb-cd-digit">00</span><span class="eb-cd-label">Mins</span></div><div class="box cd-box-second"><span class="eb-cd-digit">00</span><span class="eb-cd-label">Sec</span></div></div></div></div></div>
            <!-- /wp:essential-blocks/countdown --></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"40%","className":"product-left-box"} -->
            <div class="wp-block-column is-vertically-aligned-center product-left-box" style="flex-basis:40%"><!-- wp:image {"id":6,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none","className":"heart-1","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
            <figure class="wp-block-image size-full is-resized heart-1" style="margin-top:0px;margin-bottom:0px"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/heart.png" alt="" class="wp-image-6" style="width:auto;height:20px"/></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":7,"width":"auto","height":"20px","sizeSlug":"full","linkDestination":"none","className":"heart-2","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
            <figure class="wp-block-image size-full is-resized heart-2" style="margin-top:0px;margin-bottom:0px"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/heart1.png" alt="" class="wp-image-7" style="width:auto;height:20px"/></figure>
            <!-- /wp:image -->

            <!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/product-img2.png","id":250,"dimRatio":0,"isUserOverlayColor":true,"sizeSlug":"full","className":"product-main-content","style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"borderColor":"thirdaccent","layout":{"type":"default"}} -->
            <div class="wp-block-cover product-main-content has-border-color has-thirdaccent-border-color" style="border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-block-cover__image-background wp-image-250 size-full" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/product-img2.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"product-btm-img-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group product-btm-img-box"><!-- wp:image {"id":231,"width":"auto","height":"22px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px","width":"0px","style":"none"}}} -->
            <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/bottom.png" alt="" class="wp-image-231" style="border-style:none;border-width:0px;border-radius:0px;width:auto;height:22px"/></figure>
            <!-- /wp:image -->

            <!-- wp:group {"className":"product-outer-box","style":{"spacing":{"padding":{"top":"2px","bottom":"0px","right":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"thirdaccent","layout":{"type":"default"}} -->
            <div class="wp-block-group product-outer-box has-thirdaccent-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:2px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"product-inner-box","style":{"spacing":{"padding":{"top":"55px","right":"12px","left":"12px","bottom":"15px"}}},"backgroundColor":"fourthaccent","layout":{"type":"default"}} -->
            <div class="wp-block-group product-inner-box has-fourthaccent-background-color has-background" style="padding-top:55px;padding-right:12px;padding-bottom:15px;padding-left:12px"><!-- wp:heading {"level":5,"className":"product-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"18px","textTransform":"capitalize"}},"textColor":"accent"} -->
            <h5 class="wp-block-heading product-title has-accent-color has-text-color has-link-color" style="font-size:18px;text-transform:capitalize">'. esc_html__('golden hazelnut truffles (limited edition)','chocolate-house') .'</h5>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"8px","bottom":"0px"}}},"textColor":"accent"} -->
            <p class="product-text has-accent-color has-text-color has-link-color" style="margin-top:8px;margin-bottom:0px;font-size:13px">'. esc_html__('Handcrafted truffles infused with roasted Italian hazelnuts, and dusted with 24k edible gold flakes.','chocolate-house') .'</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"className":"product-btn-box","style":{"spacing":{"margin":{"top":"0px"},"blockGap":"97px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group product-btn-box" style="margin-top:0px"><!-- wp:paragraph {"className":"product-price","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
            <p class="product-price has-accent-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:700">$34.99</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"product-btn"} -->
            <div class="wp-block-buttons product-btn"><!-- wp:button {"style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"border":{"radius":"30px","width":"1px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}}},"borderColor":"secaccent"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-border-color has-secaccent-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-radius:30px;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px;font-size:16px;text-transform:capitalize">'. esc_html__('add to cart','chocolate-house') .'</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->

            <!-- wp:spacer {"height":"40px"} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group --></main>
            <!-- /wp:group -->',
    );

} 