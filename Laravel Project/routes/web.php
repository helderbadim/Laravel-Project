<?php

use App\Http\Controllers\AlbunsController;
use App\Http\Controllers\BandasController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



//HomePage
Route::get('/', [DashboardController::class, 'returnHomeView'])->name('home');


///----------------BANDS--------------------///
//BANDS
Route::get("/bands", [BandasController::class, 'returnBands'] )-> name("bands");

//VIEW BAND
Route::get('/viewBand/{id}', [BandasController::class, 'viewBand']) ->name('band.view');
Route::get('/deleteBand', [BandasController::class, 'deleteBand']) ->name('band.delete');

//ADD BAND
Route::get('/addBand', [BandasController::class, 'addBand']) -> name('band.add');
//Post (ADD)
Route::post('/createBand', [BandasController::class, 'createBand']) -> name('band.create');
//Post (UPDATE)
Route::post('/updateBand', [BandasController::class, 'updateBand']) -> name('band.update');



///-----------------ALBUNS--------------------///
//
Route::get("/albuns", [AlbunsController::class, 'returnAlbuns'] )-> name("albuns");

//VIEW BAND
Route::get('/viewAlbum/{id}', [AlbunsController::class, 'viewAlbum']) ->name('album.view');
Route::get('/deleteAlbum/{id}', [BandasController::class, 'deleteAlbum']) ->name('album.delete');

//ADD BAND
Route::get('/addAlbum', [BandasController::class, 'addAlbum']) -> name('album.add');
//Post (ADD)
Route::post('/createAlbum', [BandasController::class, 'createAbum']) -> name('album.create');
//Post (UPDATE)
Route::post('/createAlbum', [BandasController::class, 'createAlbum']) -> name('album.update');


//FALLBACK ROUTE
Route::fallback(function(){
    return view("utils.fallback");
});
