<?php

  $routes->get('/', function() {
    RecipeController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });
  
  $routes->get('/recipe', function() {
      RecipeController::index();
  });
  
  $routes->get('/recipe/:id', function($id) {
  RecipeController::show($id);
  });
  
  $routes->get('/recipe/1/edit', function() {
  HelloWorldController::recipe_edit();
  });
  
  $routes->get('/login', function() {
  HelloWorldController::login();
  });
  
