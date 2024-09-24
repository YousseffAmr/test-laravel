<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPdf\Facades\Pdf;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/team-page/{id}', [TeamController::class ,'getTeam']);

Route::get('/create-team', [TeamController::class ,'createTeam']);

Route::post('/store-team', [TeamController::class ,'storeTeam']);

// --------------------------------------------------------------------------
Route::get('/players/create', [PlayerController::class ,'create']);

Route::post('/players', [PlayerController::class ,'store']);


Route::get('/contact-us', [PageController::class ,'contactUs']);

Route::get('/about-us', [PageController::class ,'aboutUs']);

Route::get('/log-in', [PageController::class ,'logIn']);

Route::get('/register', [PageController::class ,'register']);

Route::get('/home', [PageController::class ,'home']);

Route::get('/players-list', [PlayerController::class ,'list']);

// -------------------------------------------------------------------------------
Route::get('generate-pdf', [App\Http\Controllers\PdfController::class ,'generatePdf']);
