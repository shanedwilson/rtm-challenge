<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="challenge.css" type="text/css">
      <title>RTM Challenge</title>
    </head>
    <body>

      <h1>RTM Github Search</h1>

      <form method="get">
        Search Github <input type ="text" name="q" id="q">
        <input type="submit">
      </form>

    </body>
  </html>

  <?php
  require __DIR__ . '/vendor/autoload.php';
  $api = new Milo\Github\Api;

  if (!empty($_GET['q'])) {
    $response = $api->get(
        '/search/repositories/' , [
          'q' => filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING)
        ]
    );
    $repositories = $api->decode($response);
    $results = $repositories->items;
    $languages = array();

    foreach ($results as $result) {
      $languages[] = $result->language;
      echo 
        '<div class="result">' .
          '<h3><a href='. $result->html_url . '>' .  $result->name . '</a></h3>' .
          '<div class="result-line">' . 'User Name: '. $result->owner->login . '</div>' .
          '<div class="result-line">' . 'Description: ' . $result->description . '</div>' .
          '<div class="result-line">' . 'Star Count:  ' . $result->stargazers_count . '</div>' .
        '</div>';
    }
    print_r($languages);
  }
  ?>