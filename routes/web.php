<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/ringkasan', [UserController::class, 'ringkasan'])->name('ringkasan');
Route::get('/pengenalan', [UserController::class, 'pengenalan'])->name('pengenalan');
Route::get('/latarbelakang', [UserController::class, 'latarbelakang'])->name('latarbelakang');
Route::get('/aktiviti', [UserController::class, 'aktiviti'])->name('aktiviti');
Route::get('/laporan', [UserController::class, 'laporan'])->name('laporan');
Route::get('Kesimpulan', [UserController::class, 'Kesimpulan'])->name('Kesimpulan');
Route::get('/rujukan', [UserController::class, 'rujukan'])->name('rujukan');
Route::get('/hire', [UserController::class, 'hire'])->name('hire');

// ringkasan aktiviti mingguan (route minggu 1 - 20)
Route::get('/minggu1', [UserController::class, 'minggu1'])->name('minggu1');
Route::get('/minggu2', [UserController::class, 'minggu2'])->name('minggu2');
Route::get('/minggu3', [UserController::class, 'minggu3'])->name('minggu3');
Route::get('/minggu4', [UserController::class, 'minggu4'])->name('minggu4');
Route::get('/minggu5', [UserController::class, 'minggu5'])->name('minggu5');
Route::get('/minggu6', [UserController::class, 'minggu6'])->name('minggu6');
Route::get('/minggu7', [UserController::class, 'minggu7'])->name('minggu7');
Route::get('/minggu8', [UserController::class, 'minggu8'])->name('minggu8');
Route::get('/minggu9', [UserController::class, 'minggu9'])->name('minggu9');
Route::get('/minggu10', [UserController::class, 'minggu10'])->name('minggu10');
Route::get('/minggu11', [UserController::class, 'minggu11'])->name('minggu11');
Route::get('/minggu12', [UserController::class, 'minggu12'])->name('minggu12');
Route::get('/minggu13', [UserController::class, 'minggu13'])->name('minggu13');
Route::get('/minggu14', [UserController::class, 'minggu14'])->name('minggu14');
Route::get('/minggu15', [UserController::class, 'minggu15'])->name('minggu15');
Route::get('/minggu16', [UserController::class, 'minggu16'])->name('minggu16');
Route::get('/minggu17', [UserController::class, 'minggu17'])->name('minggu17');
Route::get('/minggu18', [UserController::class, 'minggu18'])->name('minggu18');
Route::get('/minggu19', [UserController::class, 'minggu19'])->name('minggu19');
Route::get('/minggu20', [UserController::class, 'minggu20'])->name('minggu20');
