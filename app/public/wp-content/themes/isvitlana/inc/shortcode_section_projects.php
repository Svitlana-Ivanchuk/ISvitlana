<?php
// Шоткоды
add_shortcode('section_shortcode_projects', 'section_shortcode_projects_function');

function section_shortcode_projects_function($atts)
{
    ob_start();
    $atts = shortcode_atts([
        'rubric' => 'Noname',
        'count' => 3,
    ], $atts);
    $category = get_term_by('name', 'Portfolio', 'category');
    if ($category) {
        $category_id = $category->term_id;
    }

    // Параметры запроса
    $args = array(
        'cat' => $category_id,
        'posts_per_page' => 3,
        'order' => 'DESC',
        'orderby' => 'date',
    );
    ?>


    <div class="row">

        <?php $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post(); ?>
            <div class="col-md-6 col-lg-4">
                <div class="p-3 box-with-humber">
                    <h2><span><?php the_title(); ?></span></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p><a href="<?php the_permalink(); ?>">Read More</a></p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>


    <?php
    /* Восстанавливаем оригинальные данные поста */
    wp_reset_postdata();

    return ob_get_clean();
}