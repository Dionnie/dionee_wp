<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

get_header(); // Loads header.php
?>

<main id="site-content" role="main">

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>

</main>

<?php get_footer(); // Loads footer.php ?>
