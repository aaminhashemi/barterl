<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemDetailsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminAdvertisementController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminUserController;

//root : index page
Route::get('/', function () {
    return view('index');})->name('index');
Route::get('/', [ItemDetailsController::class, 'displayLatestAds'])
    ->name('displayLatestAds');

//authentication  routes
Auth::routes();

//user dashboard
Route::get('/dashboard', [HomeController::class, 'userPanel'])
    ->name('dashboard');
    Route::get('/home', [HomeController::class, 'userPanel']);


//show my ads details
Route::get('/dashboard/details/{id}/{name}', [HomeController::class , 'displayMyAdvDetails'])
    ->name('myAdvDetails');

//create and store a new adv
Route::get('/advform', [ItemDetailsController::class, 'createAdv'])
    ->name('newAdvForm')->middleware('auth');
Route::post('/add_adv', [ItemDetailsController::class, 'storeAdv'])
    ->name('storeAdv');

//edit and update an adv
Route::get('/ads/edit/{id}', [HomeController::class, 'edit'])
    ->name('editAdv');
Route::put('/ads/update/{id}', [HomeController::class, 'update'])
    ->name('updateAdv');

//delete an adv
Route::get('/ads/delete/{id}', [HomeController::class, 'delete'])
    ->name('deleteAdv');

//display all ads
Route::get('/ads', [ItemDetailsController::class, 'displayAllAds'])
    ->name('displayAllAds');

//diplay specific category
Route::get('/category/books', [CategoryController::class,'bookCategory'])
    ->name('bookCategory');
Route::get('/category/papers', [CategoryController::class,'paperCategory'])
    ->name('paperCategory');
Route::get('/category/services', [CategoryController::class,'servicesCategory'])
    ->name('servicesCategory');

//show details page
Route::get('/ads/details/{id}/{name}', [ItemDetailsController::class , 'displayAdvDetails'])
    ->name('advDetails');

//about us
Route::get('/about', [AboutController::class, 'about'])
    ->name('aboutUs');

//contact us
Route::get('/contactus', [ContactUsController::class, 'showForm'])
    ->name('contactForm');
Route::post('/contactus', [ContactUsController::class, 'storeMessage'])
    ->name('storeMessage');

//search an adv by name
Route::get('/results', [SearchController::class, 'searchAdv'])
    ->name('searchAdv');

//city drop down
Route::get('/ads/locations/{id}/{name}', [SearchController::class, 'chooseLocation'])
    ->name('chooseLocation');

//uni drop down
Route::get('/ads/universities/{id}/{name}', [SearchController::class, 'chooseUni'])
    ->name('chooseUni');

//footer pages
Route::get('/policy', function () {
    return view('policy');})->name('policy');

Route::get('/questions', function () {
    return view('questions');})->name('questions');

Route::get('/rules', function () {
    return view('rules');})->name('rules');

    Route::get('/admins',[AdminController::class,'index'])->name('admin_panel');
    Route::get('/admins/categories',[AdminCategoryController::class,'categories'])->name('categories');
    Route::get('/admins/categories/{category}/edit',[AdminCategoryController::class,'edit'])->name('category_edit');
    Route::post('/admins/categories/{category}/update',[AdminCategoryController::class,'update'])->name('category_update');
    Route::post('/admins/category/save',[AdminCategory::class,'save'])->name('category_create');

    Route::get('/admins/ads',[AdminAdvertisementController::class,'index'])->name('advertisements');
    Route::get('/admins/ads/{itemDetail}/delete',[AdminAdvertisementController::class,'delete'])->name('adv_delete');
    Route::get('/admins/ads/{itemDetail}/show',[AdminAdvertisementController::class,'show'])->name('adv_show');
    Route::post('/admins/ads/search',[AdminAdvertisementController::class,'search'])->name('adv_search');

    
    Route::get('/admins/messages',[AdminMessageController::class,'index'])->name('messages');
    Route::get('/admins/messages/{message}/show',[AdminMessageController::class,'show'])->name('message_view');
    Route::get('/admins/messages/{message}/delete',[AdminMessageController::class,'delete'])->name('message_delete');

    
    Route::get('/admins/users',[AdminUserController::class,'index'])->name('users');
    Route::get('/admins/users/{user}/delete',[AdminUserController::class,'delete'])->name('user_delete');
    Route::get('/admins/users/{user}/edit',[AdminUserController::class,'edit'])->name('user_edit');
    Route::get('/admins/users/{user}/admin',[AdminUserController::class,'setAdmin'])->name('user_set_admin');

    