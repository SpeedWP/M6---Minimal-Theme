<?php get_header(); ?>
<article itemprop="blogPosts" itemtype="http://schema.org/BlogPosting">
	<h1 itemprop="headline" style="margin:0 0 15px"><?php the_title(); ?></h1>
        <time datetime="<?php the_date('c'); ?>" itemprop="datePublished" pubdate><?php the_time('j. F Y') ?></time> | <?php the_category(', '); ?>
	<div style="margin:0 0 5px"></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
</article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>