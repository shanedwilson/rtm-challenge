<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    
    foreach ($results as $result) {

      echo '<h5><a href='. $result->html_url . '>' .  $result->name . '</a></h5>';
      echo '<div>' . $result->owner->login . '</div>';
      echo '<div>' . $result->description . '</div>';
      echo '<div>' . $result->stargazers_count . '</div>';
    }
  }
  ?>