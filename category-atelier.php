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
		
<section class="grid-atelier">
    <?php
    // Liste des ateliers
    echo "<ol>";
        while ( have_posts() ) :
            the_post();
            echo '<li>' . get_the_title() . '</li>';
        endwhile;
        echo '</<ol>';
    ?>
</section>
<?php