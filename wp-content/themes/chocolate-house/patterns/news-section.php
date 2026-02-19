<?php
/**
 * News Section
 * 
 * slug: chocolate-house/news-section
 * title: News Section
 * categories: chocolate-house
 */

    return array(
        'title'      =>__( 'News Section', 'chocolate-house' ),
        'categories' => array( 'chocolate-house' ),
        'content'    => '<!-- wp:group {"className":"news-section wow bounceIn","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0px","left":"0px"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"75%"}} -->
        <div id="blog" class="wp-block-group news-section wow bounceIn has-secaccent-background-color has-background" style="padding-right:0px;padding-left:0px"><!-- wp:spacer {"height":"60px"} -->
        <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"16px","textTransform":"capitalize"}},"textColor":"thirdaccent"} -->
        <p class="has-text-align-center has-thirdaccent-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize">'. esc_html__('news & blog','chocolate-house') .'</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","className":"news-sec-title","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"35px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"caveat-brush"} -->
        <h2 class="wp-block-heading has-text-align-center news-sec-title has-accent-color has-text-color has-link-color has-caveat-brush-font-family" style="font-size:35px;font-style:normal;font-weight:700">'. esc_html__('Our Latest News & blogs','chocolate-house') .'</h2>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"20px"} -->
        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:query {"queryId":15,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"layout":{"type":"default"}} -->
        <div class="wp-block-query"><!-- wp:post-template {"className":"news-post-template","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
        <!-- wp:group {"className":"news-image","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group news-image"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","height":"300px","align":"wide"} /--></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"news-info","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group news-info" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"30px","margin":{"bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group" style="margin-bottom:20px"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent"} /-->

        <!-- wp:post-date {"format":"j/n/Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent"} /-->

        <!-- wp:comments {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-comments" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:comments-title {"showPostTitle":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} /--></div>
        <!-- /wp:comments --></div>
        <!-- /wp:group -->

        <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.7"}},"textColor":"accent","fontSize":"upper-heading"} /--></div>
        <!-- /wp:group -->
        <!-- /wp:post-template --></div>
        <!-- /wp:query --></div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"102px"} -->
        <div style="height:102px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer --></div>
        <!-- /wp:group -->',
    );