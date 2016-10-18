<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group([
    'middleware' => ['web']
], function (Router $router) {    
    $router->get('/', 'IndexController@index')->name('index');
    $router->get('/images/{filename}', 'ImageController@show')->name('images');

    $router->get('/questions', 'QuestionsController@show')->name('questions.show');
    $router->get('/poseta', 'TitleController@poseta')->name('poseta');
    $router->get('/prashaj', 'TitleController@prashaj')->name('prashaj');

    $router->post('/storeee', 'ContactController@store')->name('contact');
});

$router->group([
    'prefix' => 'admin',
    'middleware' => 'web',
], function (Router $router) {
    $router->get('/', 'AdminController@index')->name('admin.index');

    $router->get('/createQuestion', 'QuestionsController@create')->name('questions.create');
    $router->post('/storeQuestion', 'QuestionsController@store')->name('questions.store');
    
    $router->get('/createComment', 'CommentsController@create')->name('comments.create');
    $router->post('/storeComment', 'CommentsController@store')->name('comments.store');
    
    $router->get('/createCategory', 'CategoryController@create')->name('category.create');
    $router->post('/storeCategory', 'CategoryController@store')->name('category.store');
    $router->get('/allCategories', 'CategoryController@all')->name('category.all');
    $router->post('/deleteCategory/{id}', 'CategoryController@delete')->name('category.delete');

    $router->get('/createSubcat/{id}/{num}', 'SubcategoryController@create')->name('subcat.create');
    $router->post('/storeSubcat}', 'SubcategoryController@store')->name('subcat.store');
    $router->post('/deleteSubCat/{id}', 'SubcategoryController@delete')->name('subcat.delete');
    
});

$router->group([
    'prefix' => 'narushuvanjeNaVidot',
    'middleware' => 'web',
], function (Router $router) {
    $router->get('/', 'TitleController@title1')->name('t1.index');
    $router->get('/{title}', 'TitleController@show1')->name('t1.show');
    $router->get('/{id}/{title}', 'TitleController@showSubCat1')->name('sub1.show');
});

$router->group([
    'prefix' => 'zhivotBezNaochari',
    'middleware' => 'web',
], function (Router $router) {
    $router->get('/', 'TitleController@title2')->name('t2.index');
    $router->get('/{title}', 'TitleController@show2')->name('t2.show');
    $router->get('/{id}/{title}', 'TitleController@showSubCat2')->name('sub2.show');
});

$router->group([
    'prefix' => 'operacijaNaKatarakta',
    'middleware' => 'web',
], function (Router $router) {
    $router->get('/', 'TitleController@title3')->name('t3.index');
    $router->get('/{title}', 'TitleController@show3')->name('t3.show');
    $router->get('/{id}/{title}', 'TitleController@showSubCat3')->name('sub3.show');
});

$router->group([
    'prefix' => 'ostanatiProceduri',
    'middleware' => 'web',
], function (Router $router) {
    $router->get('/', 'TitleController@title4')->name('t4.index');
    $router->get('/{title}', 'TitleController@show4')->name('t4.show');
    $router->get('/{id}/{title}', 'TitleController@showSubCat4')->name('sub4.show');
});

$router->group([
    'prefix' => 'zaNas',
    'middleware' => 'web',
], function (Router $router) {
    $router->get('/', 'TitleController@title5')->name('t5.index');
    $router->get('/{title}', 'TitleController@show5')->name('t5.show');
    $router->get('/{id}/{title}', 'TitleController@showSubCat5')->name('sub5.show');
});