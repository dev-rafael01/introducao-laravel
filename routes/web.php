<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

Route::get('/',[SiteController::class, 'home'])->name('home_page');
Route::get('/services', [SiteController::class, 'services'])->name('services_page');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato_page');





?>