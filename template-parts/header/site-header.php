<?php
/**
 * Header with logo, menu and hero image.
 * If is front page, data from ACF fields is pulled in.
 *
 * @package wp-excellent
 */

?>

<div class="site-head">
<div class="inner splitter wrapper headarea">
<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
<?php get_template_part( 'template-parts/header/site', 'nav' ); ?>
</div>
</div>
