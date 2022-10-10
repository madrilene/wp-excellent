<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-excellent
 */

get_header(); ?>


<article class="wrapper flow prose">

		<h1 class="gradient-text">Tests</h1>
	<div class="flow">

<!-- query posts 1: get_posts -->

<h2>get_posts</h2>
<?php
	$posts = get_posts(
		array(
			'post_type'      => 'test-cpt',
			'posts_per_page' => 5,
			'category'       => 0,
			'orderby'        => 'date',
			'order'          => 'DESC',
		)
	);

		// echo '<pre>';
		// print_r( $posts );
		// echo '</pre><hr />';

	foreach ( $posts as $post ) {
		setup_postdata( $post );
		echo '<h3>' . get_the_title() . '</h3>';
		echo '<p>' . get_the_excerpt() . '</p>';
		echo '<a href=' . get_the_permalink() . '>' . esc_html__( 'Read more', 'wp-excellent' ) . '</a>';
	}
		wp_reset_postdata();
	?>


<!-- query posts 2: new WP_query -->

<h2>new WP_query</h2>

<?php
$query = new WP_query(
	array(
		'post_type'      => 'test-cpt',
		'posts_per_page' => 5,
	)
);

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();

		echo '<h3>' . get_the_title() . '</h3>';
		echo '<p>' . get_the_excerpt() . '</p>';
		echo '<a href=' . get_the_permalink() . '>' . esc_html__( 'Read more', 'wp-excellent' ) . '</a>';
		echo '<hr />';
	}
}

?>
<!--
<h2>wpdb</h2>


global $wpdb;
$results = $wpdb->get_results(
	"
	SELECT post_title, ID
	FROM $wpdb -> $posts
	LEFT JOIN $wpdb -> term_relationships as t
	ON ID = t.object_id
	WHERE post_type = 'test-cpt'
	AND post_status = 'published
	LIMIT 5
	"
);


		echo '<pre>';
		print_r( $results );
		echo '</pre><hr />';

// foreach ( $results as $release ) {
// echo '<h3>' . $release->post_title . '</h3>';
// echo '<a href="' . get_the_permalink( $release->ID ) . '>' . esc_html__( 'Read more', 'wp-excellent' ) . '</a>';
// }-->



		</div>

</article>


<?php
get_footer();
