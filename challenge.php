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

      <div class="img-container">
        <img src="https://media.licdn.com/dms/image/C4D0BAQHXjm0SLKQKRw/company-logo_200_200/0?e=2159024400&v=beta&t=wbXOgwBnQEfKYnWoWPZJs8leKvby-nuoalXxWOgK2mE"
                  alt="RTM Studios Logo">
      </div>
      <!-- <h1>Github Search</h1> -->

      <form method="get">
        <span class="form-label">Search Github Repositories</span> <input class="input-field" type ="text" name="q" id="q">
        <input type="submit">
      </form>

    </body>
  </html>

  <?php
  require __DIR__ . '/vendor/autoload.php';

  $api = new Milo\Github\Api;

//Grabbing input field for q header
  if (!empty($_GET['q'])) {
    $response = $api->get(
        '/search/repositories/' , [
          'q' => filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING)
        ]
    );
  }

//Formatting api response
  $repositories = $api->decode($response);
  $results = $repositories->items;

//Ordering results array by number of stars
  function sort_results_by_stars($a, $b) {
    if($a->stargazers_count == $b->stargazers_count){ return 0 ; }
    return ($a->stargazers_count > $b->stargazers_count) ? -1 : 1;
  }

  usort($results, 'sort_results_by_stars');

//Making array of languages used
  $languages = array();

  foreach ($results as $result) {
    $languages[] = $result->language;
  }

//Counting and sorting languages
  $languages = array_replace($languages,array_fill_keys(array_keys($languages, null),''));
  $newLanguages = array_count_values($languages);
  asort($newLanguages);
  $descNewLanguages = array_reverse($newLanguages);

//HTML for languages table
  echo '<div class="summary">' .
       '<div class="summary-table">'.
        '<h1>' . 'Summary Of Languages Used' . '</h1>' .
        '<table class="summary-container">' .
          '<tr>' .
            '<th>Language</th>' .
            '<th>Count</th>' . 
          '</tr>';

  foreach($descNewLanguages as $key => $value) {
    if($key !== '') {
      echo
        '<tr>' .
          '<td>' . $key . '</td>' .
          '<td>' . $value . '</td>' .
        '</tr>';
    } else {
    echo
      '<tr>' .
        '<td>' . 'Unknow' . '</td>' .
        '<td>' . $value . '</td>' .
      '</tr>';
    }
  }

  echo '</table>' .
        '</div>' .
        '</div>';

//HTML for query results
  foreach ($results as $result) {
    echo 
      '<div class="result">' .
        '<h3><a href='. $result->html_url . '>' .  $result->name . '</a></h3>' .
        '<div class="result-line">' . 'User Name: '. $result->owner->login . '</div>' .
        '<div class="result-line">' . 'Description: ' . $result->description . '</div>' .
        '<div class="result-line">' . 'Star Count:  ' . $result->stargazers_count . '</div>' .
      '</div>';
  }
  ?>