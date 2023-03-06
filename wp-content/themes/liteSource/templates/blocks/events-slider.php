<?php

/**
 *  Hero Header
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'events-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'events-slider-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$events = get_posts(array('post_type' => 'event', 'posts_per_page' => '-1', 'fields'=>'ids'));

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" >
    <div class="container">
        <h3>Upcoming Events</h3>
        <p class="btn"><a href="/events">View All</a></p>
        <div class="slider-container">
            <div class="slider-wrapper">
                <div class="testslider">
                    <?php 
                    if($events){
                        foreach($events as $eve){ 
                            get_template_part('/templates/cards/event', 'card', ['ID' => $eve]);
                        }
                    } ?>
                </div>
            </div>
            <button class="slider-button slider-button-prev">&#10094;</button>
            <button class="slider-button slider-button-next">&#10095;</button>
        </div>
    </div>
</div>
