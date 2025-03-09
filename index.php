<?php

declare(strict_types=1);

require_once 'consts.php';
require_once 'functions.php'; //otra forma de "importar" archivos es include o include_once. Este puede ser util cuando se trate de archivos opcionales
require_once 'classes/NextMovie.php';

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

?>

<?php render_template('head', ["title" => $next_movie_data["title"]]) ?> 
<?php render_template('main', array_merge(
  $next_movie_data,
  ["until_message" => $next_movie->get_until_message()]
)) ?> 
<?php render_template('styles') ?> 