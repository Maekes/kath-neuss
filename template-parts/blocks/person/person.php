<?php

/**
 * Person Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'person-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'person';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}


?>
<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?> ">



    <?php
    global $post;
    // Load values and assign defaults.
    $post = get_field('person');
    // setup_postdata($post);
    get_template_part("template-parts/section", "person-in-sidebar");
    // wp_reset_postdata();

    ?>

</div>