<?php
if (!defined('ABSPATH'))
  exit;

// Define constants
if (!defined('_VERSION')) {
  define('_VERSION', '1.0.0');
}

// Include styles and scripts
require get_template_directory() . './inc/_scripts.php';

// Post types
require get_template_directory() . './inc/_post-types.php';

//Register menus
require get_template_directory() . './inc/_menus.php';

add_theme_support('post-thumbnails');
add_theme_support('title-tag');



/* Start Добавление пункта настройки сайта */
require_once get_stylesheet_directory() . '/inc/site_properties.php';


// Добавляем секцию с шорткодом
require_once get_stylesheet_directory() . '/inc/shortcode_section.php';
require_once get_stylesheet_directory() . '/inc/shortcode_section_projects.php';

// Шоткоды
add_shortcode('custom_shortcode', 'custom_shortcode_function');

function custom_shortcode_function()
{
  ob_start();
  $args = array(
    'post_type' => 'post',
    'cat' => 3, // ID вашей рубрики
    'posts_per_page' => -1 // -1 для получения всех постов, иначе указать нужное количество
  );

  $the_query = new WP_Query($args);

  if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
      $the_query->the_post();
      // Здесь можно выводить информацию о каждом посте
      ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php
    }
  } else {
    // Если постов нет
    echo 'Постов не найдено.';
  }

  /* Восстанавливаем оригинальные данные поста */
  wp_reset_postdata();

  return ob_get_clean();
}

// Обработчик
add_action('admin_post_nopriv_save_custom_data', 'save_custom_data');
add_action('admin_post_save_custom_data', 'save_custom_data');

function save_custom_data()
{
  // Проверяем nonce
  $nonce = isset($_POST['save_custom_data_nonce']) ? $_POST['save_custom_data_nonce'] : '';
  if (!wp_verify_nonce($nonce, 'save_custom_data_nonce')) {
    wp_die('Security check');
  }

  // Получаем данные из формы и экранируем их
  $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
  $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

  // Валидация данных
  if (!is_email($email) || empty($message)) {
    wp_die('Invalid data');
  }

  wp_mail('aig.sveta3@gmail.com', 'заголовок', 'Контент', array('Content-Type: text/html; charset=UTF-8'));

  // Защита от SQL-инъекций
  global $wpdb;
  $table_name = $wpdb->prefix . 'custom_data';

  $data = array(
    'email' => $email,
    'message' => $message,
    'created_at' => current_time('mysql')
  );

  // Подготавливка запроса %s строка %d для целых чисел %f для чисел с плавающей запятой.
  $format = array('%s', '%s', '%s');
  $wpdb->insert($table_name, $data, $format); // wpdb->insert( string $table, array $data, array|string $format = null )

  // Редирект после сохранения данных
  wp_redirect($_POST['_wp_http_referer']);
  exit;
}