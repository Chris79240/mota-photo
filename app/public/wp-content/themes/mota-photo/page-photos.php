<?php
/* Template Name: Photos Page */
get_header();

// Récupération des termes de taxonomies pour les filtres
$categories = get_terms(array('taxonomy' => 'categories', 'hide_empty' => true));
$formats = get_terms(array('taxonomy' => 'formats', 'hide_empty' => true));
?>

<div id="photo-filters">
    <div class="photo-filter-group">
        <select id="photo-category" class="photo-filter">
            <option value="">Catégories</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo esc_attr($category->term_id); ?>"><?php echo esc_html($category->name); ?></option>
            <?php endforeach; ?>
        </select>

        <select id="photo-format" class="photo-filter">
            <option value="">Formats</option>
            <?php foreach ($formats as $format) : ?>
                <option value="<?php echo esc_attr($format->term_id); ?>"><?php echo esc_html($format->name); ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <select id="photo-sort" class="photo-filter">
        <option value="date">Date</option>
        <option value="title">Titre</option>
    </select>
</div>

<div id="photo-gallery" class="grid">
    <?php
    $photo_args = array(
        'post_type' => 'photo',
        'posts_per_page' => 8
    );
    $photo_query = new WP_Query($photo_args);

    if ($photo_query->have_posts()) :
        while ($photo_query->have_posts()) : $photo_query->the_post();
            get_template_part('template-parts/photo_block', null, array('id' => get_the_ID()));
        endwhile;
    else :
        echo "<p>Aucune photo à afficher.</p>";
    endif;
    wp_reset_postdata();
    ?>
</div>

<button id="load-more-photos" data-page="1">Charger plus</button>

<?php get_footer(); ?>