<?php
/**
 * Here are all the reusable helper functions
 */

function get_query_params($cpt, $posts_per_page = 6, $paged = null, $terms = null, $is_product = null) {
    $post_args = array(
        'post_type'         => $cpt,
        'posts_per_page'    => $posts_per_page,
        'meta_query'        => array(
            array(
                'key'     => '_sale_price',
                'compare' => 'NOT EXISTS',  // Exclude products with a sale price set
            ),
        ),
    );

    if (!empty($paged)) {
        $post_args['paged'] = $paged;
    }

    if (!empty($terms)) {
        $post_args['tax_query'] = array(
            array(
                'taxonomy'  => 'product_cat',
                'field'     => 'slug',
                'terms'     => $terms,
            ),
        );
    }

    if ($cpt == 'product' && $is_product == 'yes') {
        $post_args['meta_query'] = array(
            array(
                'key'     => '_sale_price',
                'value'   => 0,
                'compare' => '>',
            ),
        );
    }

    return $post_args;
}

/**
 * Function for pagination
 */
function pagination($query) {
    $pag_links = paginate_links( array(
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'total'        => $query->max_num_pages,
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'format'       => '?paged=%#%',
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        'show_all'     => false,
        'prev_text'    => '<i class="fas fa-chevron-left"></i>',
        'next_text'    => '<i class="fas fa-chevron-right"></i>',
        'add_fragment' => '',
    ) );
    return '<div class="pagination">' . $pag_links . '</div>';
}