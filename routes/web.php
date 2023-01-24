<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowProjectDetails;
use App\Http\Livewire\Project\Details;
use App\Http\Livewire\Project\Index;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', Index::class)->name("home");
    Route::get('/project/{project}', Details::class)->name("project.show");

    // Route::prefix('/project/{project:definer}')->group(function () {
    //     Route::get('/', [ShowProjectDetails::class,'show'])->name("project.show");
    //     Route::get('/tasks', [ShowProjectDetails::class,'tasks'])->name("project.tasks");
    //     Route::get('/notes', [ShowProjectDetails::class,'notes'])->name("project.notes");
    //     Route::get('/files', [ShowProjectDetails::class,'files'])->name("project.files");
    //     Route::get('/activities', [ShowProjectDetails::class,'activities'])->name("project.activities");
    //     Route::get('/members', [ShowProjectDetails::class,'members'])->name("project.members");
    // });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
