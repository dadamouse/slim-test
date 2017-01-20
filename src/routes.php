<?php


// Routes
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'profile.html', [
        'name' => 'dada'
    ]);
});



$app->get('/home', '\\Controllers\\HomeController:hello');


