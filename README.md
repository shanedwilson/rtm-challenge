# RTM Take Home Challenge
Requirements:
1. Create a webpage that will be used to search Github repositories using the Github API.
a. The user should be able to enter a search term and view the results.
b. The results should show the repository name, username, description, and
number of stars.
c. The repository result should link to the project page on Github.
2. Create a summary of all the search results and display it on the page.
a. The summary table should display the number of repositories per programming
language.
b. The summary table should be ordered with the most popular programming
language at the top and least popular programming language at the bottom.

* Repo results are displaying in order of most stars.

* User results are displaying by score.

## Tech Used
* PHP
* Xampp
* milo/github-api
* Boostrap
* Github API

## Screenshots
![App Screenshot](https://github.com/shanedwilson/rtm-challenge/blob/readMeFix/screen-shots/Screen%20Shot.png?raw=true)


## How to run this project:

* Install XAMPP 

* Clone or download the repo

* Place the repo in XAMPP/htdocs

* At root of project ```composer require milo/github-api```

* Start XAMPP, click "Manage Servers," start "Apache Server"

* In your browser go to ```http://localhost/rtm-challenge/challenge.php```