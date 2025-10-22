<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestController;
use App\Models\Quest;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quests', [QuestController::class, 'index'])->name('quests.index');
Route::get('/quests/create', [QuestController::class, 'create'])->name('quests.create');
Route::get('/quests/{id}', [QuestController::class, 'show'])->name('quests.show');