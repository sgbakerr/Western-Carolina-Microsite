<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage BakerDesign
 * @since 2.0
 **************************************************************** 
 ****************************************************************/
global $module, $module_id;
get_header();
// Get the page data
if (function_exists('get_fields')) {
    $module["page"] = get_post();
    $module["page_fields"] = get_fields($module["page"]->ID);
    $fields = $module['page_fields']['modules']; 

    while (have_posts()) : the_post();
      if (!empty($fields)) {
          $moduleCount = 1;
          foreach ($fields as $field) :
          $module_id = 'module-' . $moduleCount; 
          $module_slug = str_replace('_', '-', $field['acf_fc_layout']);
          ?>
          <div class="acf_module" id="<?= $module_id ?>">
            <?= get_template_part('modules/' . $module_slug); ?>
          </div>

          <?
          $moduleCount++;
          endforeach;
      }
    endwhile;
} else {
  echo '<p>Please activate the plugin Advanced Custom Fields Pro</p>';
}
get_footer();