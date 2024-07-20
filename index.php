<?php
require_once 'action.php';
require_once 'curlOp.php';
include 'recipe.php';
$restAPIBaseURL = 'http://localhost/rest';
try {

  var_dump(getAllRecipes());
    $recipes = sendRequest($restAPIBaseURL.'/api.php/recipes', 'GET');
    $recipes = json_decode($recipes, true);

    $recipeId = 1;
    $recipe = sendRequest($restAPIBaseURL."/api.php/recipes/$recipeId", 'GET');
    $recipe = json_decode($recipe, true);


    $data = [
        'recipeName' => 'Salad',
        'recipePrepTime' => '12 minutes',
        'recipePrepDifficulty' => 'easy',
        'recipeVegOrNot' => '1',

    ];
    $result = sendRequest($restAPIBaseURL.'/api.php/recipes', 'POST', $data);
    $result = json_decode($result, true);


    $recipeId = 1;
    $data = [
      'recipeName' => 'Russian Salad',
      'recipePrepTime' => '12 minutes',
      'recipePrepDifficulty' => 'Medium',
      'recipeVegOrNot' => '1'

    ];
    $result = sendRequest($restAPIBaseURL."/api.php/recipes/$recipeId", 'PUT', $data);
    $result = json_decode($result, true);


    $recipeId = 1;
    $result = sendRequest($restAPIBaseURL."/api.php/recipes/$recipeId", 'DELETE');
    $result = json_decode($result, true);

} catch (Exception $e) {
echo "Failed";

}
?>
