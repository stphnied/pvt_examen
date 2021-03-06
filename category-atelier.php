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

<!-- Titre de la page -->
<?php      
    echo "<h2>" . category_description(get_category_by_slug('atelier')) . "</h2>"; 
?>

<!-- Affichage des ateliers -->
<section class="grid-atelier">
    <?php

//   The Query
while ( have_posts() ) :
    the_post();

    $nom = get_post_field('post_name');
    $author = get_the_author_meta( 'display_name', $post->post_author );
    $gridArea = $nom . '/' . $author . '/';
    $entete = $author;

    echo '<p  style="grid-area:'. $gridArea .'">'.$gridArea = $entete.get_the_title().$nom.$author. '</p>';
endwhile;

    
    // Q2
    // The Query
    // $args1 = array(
    //     'category_name' => 'atelier'
    // );
    // $query1 = new WP_Query($args1);
    // extraire_ateliers($query1);
    
    // // The Loop
    // echo "<ol>";
    // while ($query1->have_posts()) {
    //     $query1->the_post();
    //     echo "<li><span >" .get_the_title()."</span>___";
    //     echo "<span class='postSlug'>" .get_post_field('post_name')."</span>___";
    //     echo "<span class='postAuthor'>" .get_the_author_meta( 'display_name', $post->post_author )."</<span></li>";
    // }
    // echo '</ol>';

    // Q1
    // echo "<ol>";
    //     while ( have_posts() ) :
    //         the_post();
    //         echo '<li>' . get_the_title() . '</li>';
    //     endwhile;
    // echo '</ol>';
    ?>
</section>
<?php