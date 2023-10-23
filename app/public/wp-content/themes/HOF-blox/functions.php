<?php

/**
 * hof-blox functions
 *
 * @link testdev[~/Local Sites/testdev] - .../apps/public/wp-content/themes/hof-blox
 *
 * @package hof-blox
 * @since hof-blox 0.1
 *
 */
/*add_action( 'init', 'hof_blox_register_patterns' );

function hof_blox_register_patterns() {
    register_block_pattern( 'hof_blox/tourney-hero' , array(
        'title' =>  __( 'Tourney Hero', 'hof-blox'),
        'categories' => array('featured'),
        'content'   => '<!-- wp:cover {"url":"http://testdev.local/wp-content/uploads/2023/01/Courtney-22-15-scaled-1.webp","id":4847,"dimRatio":30,"align":"full","layout":{"type":"constrained"}} -->
        <div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4847" alt="" src="http://testdev.local/wp-content/uploads/2023/01/Courtney-22-15-scaled-1.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"60vw","justifyContent":"right","wideSize":"72vw"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textColor":"white"} -->
            <h2 class="wp-block-heading has-white-color has-text-color">It’s that time of year.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Come cheer on all your favorite pros and help the Triple A Youth Foundation send promising competitors on tour.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-cyan-blue"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-vivid-cyan-blue-background-color has-background wp-element-button">Get tickets now!</a></div>
                <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
        <!-- /wp:group --></div></div>
<!-- /wp:cover -->'
    ) );
}*/

add_action( 'init', 'hof_blox_register_pattern_categories' );

function hof_blox_register_pattern_categories(): void
{
    register_block_pattern_category( 'hof-blox', array(
        'label' => __( 'hof Blox', 'hof-blox' )
    ) );
}

//enqueue type

add_action('wp_enqueue_scripts' , 'hof_blox_enqueue_scripts');

function hof_blox_enqueue_scripts(): void
{

    wp_register_style('hof_blox_apotek', "https://use.typekit.net/qyi0ffp.css", array(), '2');
    wp_enqueue_style('hof_blox_apotek');
}

/*add_action('wp_enqueue_scripts' , 'hof_blox_monotype_ish');
function hof_blox_monotype_ish(): void
{
    wp_register_style('hof_blox_monotype_ish', "https://fast.fonts.net/jsapi/9cd1f3ac-801c-449e-9955-a8264df8f6ac.js",
        array(), 2);
    wp_enqueue_style('hof_blox_monotype_ish');
}*/