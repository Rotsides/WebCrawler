<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrawlerController;


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
    return view('welcome');
});

Route::get('crawler', [CrawlerController::class, 'crawler'])->name('crawler');

// Route::get('/', function () {
//     $crawler = Goutte::request('GET', 'https://duckduckgo.com/html/?q=Laravel');
//     $crawler->filter('.result__title .result__a')->each(function ($node) {
//         dump($node->text());
//     });
//     return view('crawler');
// });