<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\auth_controller;
use App\Http\Controllers\User_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login register Routes start
Route::any("/register",[auth_controller::class,"register"])->name('register');
Route::any("/",[auth_controller::class,"login"])->name('login');
Route::any("/logout",[auth_controller::class,"logout"])->name('logout');
// Login register Routes End

// Admin Routes start

Route::any("/home_a",[admin_controller::class,"index"])->name('home');
Route::any("/Category",[admin_controller::class,"Category"])->name('Category');
Route::any("/Rent",[admin_controller::class,"Rent"])->name('Rent');
Route::any("/Tools",[admin_controller::class,"Tools"])->name('Tools');
Route::any("/Contact",[admin_controller::class,"Contact"])->name('Contact');
Route::any("/Blog",[admin_controller::class,"Blog"])->name('Blog');
Route::any("/update_cat/{id}",[admin_controller::class,"update_cat"])->name('update_tools');
Route::any("/update/{id}",[admin_controller::class,"update"])->name('update');
Route::any("/delete/{id}",[admin_controller::class,"delete"])->name('delete');
Route::any("/delete_tools/{id}",[admin_controller::class,"delete_tools"])->name('delete_tools');
Route::any("/delete_rent/{id}",[admin_controller::class,"delete_rent"])->name('delete_rent');


// Admin Routes End
// User Routes start
Route::any("/home",[User_controller::class,"index"])->name("index");
Route::any("/tools_u",[User_controller::class,"tools"])->name("tools");
Route::any("/Tooldetails/{id}",[User_controller::class,"Tooldetails"])->name("Tooldetails");
Route::any("/about",[User_controller::class,"about"])->name("about");
Route::any("/contact",[User_controller::class,"contact"])->name("contact");
Route::any("/Cat/{id}",[User_controller::class,"Category"])->name("Category_prodect");
Route::any("/Chakoute",[User_controller::class,"Chakoute"])->name("Chakoute");
Route::any("/cart",[User_controller::class,"Cart"])->name("Cart");
Route::any("/blog",[User_controller::class,"blog"])->name("blog");

// User Routes End