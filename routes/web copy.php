<?php

use Illuminate\Support\Facades\Route;
use app\Models\Contact;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
   // return view('welcome');

       return view('welcome',array(
           'series' => $series
       ));

});
 

Route::get('/', [HomeController::class, 'index']);


Route::get('/contact', [ContactController::class, 'index']);
Route::get('/ContactForm', [contactController::class, 'index']);
Route::get('/ContactForm/create', [ContactController::class, 'create']);
Route::post('/ContactForm', [ContactController::class, 'store']);

//Pour pouvoir récupérer la série demandée, il faut créer une nouvelle route dans le fichier routes/web.php:
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/{url}',[SeriesController::class, 'show']);
Route::get('/series/{url}/comments', [CommentsController::class, 'store']);
Route::delete('/comments/{comment}', [CommentsController::class, 'destroy']);
