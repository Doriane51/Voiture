<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [frontendController::class, 'index'])->name('index');
Route::get('/detail', [frontendController::class, 'detail'])->name('detail');
Route::get('/location', [frontendController::class, 'location'])->name('location');
Route::get('/about', [frontendController::class, 'about'])->name('about');
Route::get('/offers', [frontendController::class, 'offers'])->name('offers');
Route::get('/team', [frontendController::class, 'team'])->name('team');
Route::get('/contact', [frontendController::class, 'contact'])->name('contact');
Route::get('/testimonial', [frontendController::class, 'testimonial'])->name('testimonial');
Route::get('/login', [frontendController::class, 'login'])->name('login');
Route::get('/register', [frontendController::class, 'register'])->name('register');
Route::get('/detail.{id}', [frontendController::class, 'detail'])->name('detail');
Route::post('/detailPost.{id}', [frontendController::class, 'detailPost'])->name('detailPost');
Route::get('/listLocation', [frontendController::class, 'listLocation'])->name('listLocation');
Route::get('/rendre.{id}', [frontendController::class, 'rendre'])->name('rendre');




Route::post('/registerPost', [userController::class, 'registerPost'])->name('registerPost');
Route::post('/loginPost', [userController::class, 'loginPost'])->name('loginPost');
Route::get('/deconnexion', [userController::class, 'deconnexion'])->name('deconnexion');


//admin
Route::get('/indexAdmin', [adminController::class, 'indexAdmin'])
->middleware('admin')
->name('indexAdmin');
Route::get('/ajout', [adminController::class, 'ajout'])
->middleware('admin')
->name('ajout');
Route::post('/ajoutPost', [adminController::class, 'ajoutPost'])
->middleware('admin')
->name('ajoutPost');
Route::get('/read', [adminController::class, 'read'])
->middleware('admin')
->name('read');
Route::get('/update.{id}', [adminController::class, 'update'])
->middleware('admin')
->name('update');
Route::post('/updatePost.{id}', [adminController::class, 'updatePost'])
->middleware('admin')
->name('updatePost');
Route::get('/delete.{id}', [adminController::class, 'delete'])
->middleware('admin')
->name('delete');
Route::get('/voituresDispo', [adminController::class, 'voituresDispo'])
->middleware('admin')
->name('voituresDispo');
Route::get('/enLocation', [adminController::class, 'enLocation'])
->middleware('admin')
->name('enLocation');
Route::get('/ajoutAdmin', [adminController::class, 'ajoutAdmin'])
->middleware('admin')
->name('ajoutAdmin');
Route::post('/ajoutAdminPost', [adminController::class, 'ajoutAdminPost'])
->middleware('admin')
->name('ajoutAdminPost');

Route::get('/loginAdmin', [adminController::class, 'login_admin_view'])
->name('login_admin_view');
Route::post('/loginAdmin_post', [adminController::class, 'login_admin_post'])
->name('login_admin_post');