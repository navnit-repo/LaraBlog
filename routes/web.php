<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/', 'HomeController@index')->name('home');

//Subscribe
Route::post('subscribe', 'UserController@subscribe')->name('subscribe');
Route::get('confirm-subscription/{userId}', 'UserController@confirmSubscribe')->name('confirm-subscribe');
Route::get('un-subscribe/{userId}', 'UserController@unSubscribe')->name('un-subscribe');

//feedback
Route::post('feedback', 'FeedbackController@store')->name('add-feedback');

//Article
Route::get('article', 'ArticleController@index')->name('articles');
Route::get('article/{articleId}/{articleHeading?}', 'ArticleController@show')->name('get-article');
Route::get('{categoryAlias}/{articleHeading}', 'ArticleController@showWithHeading')->name('get-article-with-heading');
Route::get('{categoryAlias}', 'CategoryController@getArticles')->name('articles-by-category');
Route::get('keyword/article/{keywordName}', 'KeywordController@getArticles')->name('articles-by-keyword');
Route::get('search-article', 'ArticleController@search')->name('search-article');

//Comment
Route::post('comment/{articleId}', 'CommentController@store')->name('add-comment');
Route::get('comment/{commentId}/confirm', 'CommentController@confirmComment')->name('confirm-comment');

//Category
Route::get('categoryById/{categoryId}', 'CategoryController@show')->name('get-category');

//Admin auth
Route::get('backend/admin/login', 'AuthController@showLoginForm')->name('login-form');
Route::post('backend/admin/login', 'AuthController@login')->name('login');
Route::get('backend/admin/logout', 'AuthController@logout')->name('logout');

/*
|---------------------------------------------------------------------------------
| Route collection for OWNER, ADMIN and AUTHOR
|---------------------------------------------------------------------------------
| These route are specially for the author type of user so that
| they can manage their own article
|
*/
Route::group(['middleware' => ['auth', 'role:owner|admin|author']], function () {
    //profile
    Route::get('backend/admin/profile', 'UserController@profile')->name('user-profile');
    //dashboard
    Route::get('backend/admin/dashboard', 'DashboardController@index')->name('admin-dashboard');
    //admin articles
    Route::get('backend/admin/article', 'ArticleController@adminArticles')->name('admin-articles');
    Route::get('backend/admin/article/toggle-publish/{articleID}', 'ArticleController@togglePublish')
        ->name('toggle-article-publish');
    Route::get('backend/admin/article/{articleId}/delete', 'ArticleController@destroy')->name('delete-article');
    Route::get('backend/admin/article/create', 'ArticleController@create')->name('create-article');
    Route::post('backend/admin/article', 'ArticleController@store')->name('store-article');
    Route::get('backend/admin/article/{articleId}/edit', 'ArticleController@edit')->name('edit-article');
    Route::put('backend/admin/article/{articleId}', 'ArticleController@update')->name('update-article');
    Route::get('backend/admin/gallery', 'ImageGalleryController@index')->name('gallery');
    Route::resource('backend/admin/gallery', 'ImageGalleryController');

    //Admin comments
    Route::get('backend/admin/comment', 'CommentController@index')->name('comments');
    Route::get('backend/admin/comment/{commentId}/delete', 'CommentController@destroy')->name('delete-comment');
    Route::get('backend/admin/comment/toggle-publish/{commentId}', 'CommentController@togglePublish')
        ->name('toggle-comment-publish');
    Route::put('backend/admin/comment/{commentId}', 'CommentController@update')->name('update-comment');

    //Admin feedback
    Route::get('backend/admin/feedback', 'FeedbackController@index')->name('feedbacks');
    Route::get('backend/admin/feedback/toggle-resolved/{feedbackId}', 'FeedbackController@toggleResolved')
        ->name('toggle-feedback-resolved');
    Route::get('backend/admin/feedback/close/{feedbackId}', 'FeedbackController@close')->name('close-feedback');
});

/*
|---------------------------------------------------------------------------------
| Route collection for OWNER, ADMIN
|---------------------------------------------------------------------------------
| This area is only for Owner and Admin
| Owner and admin can manage other users
| and can add categories of article
| they have permission of other administrative task
|
*/
Route::group(['middleware' => ['auth', 'role:owner|admin']], function () {
    //admin category
    Route::get('backend/admin/category', 'CategoryController@index')->name('categories');
    Route::get('backend/admin/category/toggle-active/{categoryId}', 'CategoryController@toggleActive')
        ->name('toggle-category-active');
    Route::put('backend/admin/category/{categoryId}', 'CategoryController@update')->name('update-category');
    Route::post('backend/admin/category', 'CategoryController@store')->name('add-category');
    Route::get('backend/admin/category/{categoryId}/delete', 'CategoryController@destroy')->name('delete-category');

    //Admin users
    Route::get('backend/admin/user', 'UserController@index')->name('users');
    Route::get('backend/admin/user/{userId}/show', 'UserController@show')->name('get-user');
    Route::get('backend/admin/user/{userId}/delete', 'UserController@destroy')->name('delete-user');
    Route::put('backend/admin/user/change-password', 'UserController@changePassword')->name('change-password');
    Route::get('backend/admin/user/create', 'UserController@create')->name('create-user');
    Route::post('backend/admin/user/create', 'UserController@store')->name('store-user');
    Route::get('backend/admin/user/{userId}/edit', 'UserController@edit')->name('edit-user');
    Route::put('backend/admin/user/{userId}/update', 'UserController@update')->name('update-user');
    Route::get('backend/admin/user/toggle-active/{userId}', 'UserController@toggleActive')->name('toggle-user-active');

    //Admin keywords
    Route::post('backend/admin/keyword', 'KeywordController@store')->name('add-keyword');
    Route::get('backend/admin/keyword', 'KeywordController@index')->name('keywords');
    Route::get('backend/admin/keyword/toggle-active/{keywordId}', 'KeywordController@toggleActive')
        ->name('toggle-keyword-active');
    Route::put('backend/admin/keyword/{keywordId}', 'KeywordController@update')->name('update-keyword');
    Route::get('backend/admin/keyword/{keywordId}/delete', 'KeywordController@destroy')->name('delete-keyword');
    Route::get('backend/admin/gallery', 'ImageGalleryController@index')->name('gallery');
    Route::resource('backend/admin/gallery', 'ImageGalleryController');
});

Route::group(['middleware' => ['auth', 'role:owner']], function () {
    //admin config
    Route::get('backend/admin/config', 'ConfigController@index')->name('configs');
    Route::put('backend/admin/config/{configId}', 'ConfigController@update')->name('update-config');
});

