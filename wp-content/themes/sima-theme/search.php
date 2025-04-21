<?php
/**
 * Search Results by Title and SKU Product
 */

$pageid = get_the_ID();
$search = get_search_query();
include(locate_template('components/shared/header.php'));

// Query to search products by SKU
$sku_results_search_query = new WP_Query(
    array(
        'post_type' => 'product',
        'meta_query' => array(
            array(
                'key'     => '_sku',
                'value'   => $search,
                'compare' => '='
            )
        )
    )
);
wp_reset_postdata();

// Query to search products by title
add_filter('posts_where', function ($where, $wp_query) use ($search) {
    global $wpdb;
    if ($search && $wp_query->query['post_type'] === 'product') {
        // Match against title, content, or excerpt
        $where .= $wpdb->prepare(
            " AND (
                {$wpdb->posts}.post_title LIKE %s
            )",
            '%' . $wpdb->esc_like($search) . '%'
        );
    }
    return $where;
}, 10, 2);

$title_results_query = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => -1
]);
remove_filter('posts_where', 'custom_posts_where'); // Ensure custom filters are removed after use
wp_reset_postdata();

// Combine results from both queries
$all_results = [];
if (!empty($sku_results_search_query->posts)) {
    $all_results = array_merge($all_results, $sku_results_search_query->posts);
}
if (!empty($title_results_query->posts)) {
    $all_results = array_merge($all_results, $title_results_query->posts);
}

// Remove duplicates (if any) based on post ID
$all_results = array_unique($all_results, SORT_REGULAR);

$title_result = !empty($all_results) ? __('Results', 'sima-theme') : __('No results found', 'sima-theme');
?>
<div class="results_wrapper">
    <div class="container">
        <h1 class="main_title"><?php echo $title_result; ?></h1>
        <?php if (!empty($all_results)) { ?>
            <div class="all__found__products standard-grid">
                <?php foreach ($all_results as $all_result) { ?>
                    <div class="product_result_wrapper">
                        <?php
                            $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($all_result->ID), 'single-post-thumbnail'); 
                        ?>
                        <?php if (isset($post_image) && !empty($post_image)) { ?>
                            <div class="post_image">
                                <a href="<?php echo get_permalink($all_result->ID); ?>">
                                    <img src="<?php echo $post_image[0]; ?>" alt="<?php echo esc_attr($all_result->post_title); ?>">
                                </a>
                            </div>
                        <?php } ?>
                        <?php if (isset($all_result->post_title) && !empty($all_result->post_title)) { ?>
                            <div class="post_title">
                                <h5><?php echo esc_html($all_result->post_title); ?></h5>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>

<?php include(locate_template('components/shared/footer.php')); ?>