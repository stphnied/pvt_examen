<?php
    /**
     * The template for displaying archive pages
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package underscore
     */
    get_header();
?>

<?php      
    // echo "<h2>" . category_description(get_category_by_slug('atelier')) . "</h2>"; 
?>
		
<section class="grid-container">
    <?php
        while ( have_posts() ) :
            the_post();
        endwhile;
    ?>
</section>
<?php