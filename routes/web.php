<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\EtudiantController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('etudiants',EtudiantController::class);
Route::resource('classes',ClasseController::class);
Route::resource('formations',FormationController::class,);
Route::get('/classes/{idc}',[ClasseController::class,'show'])->name('class.show');
Route::get('/rechercher',[FormationController::class,'rechercher']);
Route::get('/formation/search',[FormationController::class,'search']);
Route::get('/etudiants/create',[EtudiantController::class,'create']);
Route::post('etudiants/store',[EtudiantController::class,'store'])->name('etudiant.store');


use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TagController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');
Route::get('/photos/create', [PhotoController::class, 'create'])->name('photos.create');
Route::post('/photos', [PhotoController::class, 'store'])->name('photos.store');
Route::get('/photos/{photo}', [PhotoController::class, 'show'])->name('photos.show');
Route::get('/photos/{photo}/edit', [PhotoController::class, 'edit'])->name('photos.edit');
Route::put('/photos/{photo}', [PhotoController::class, 'update'])->name('photos.update');
Route::delete('/photos/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');

Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
Route::get('/tags/{tag}', [TagController::class, 'show'])->name('tags.show');
Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
Route::put('/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');



// Dans votre fichier routes/web.php

Route::get('/photo_tag_post', function () {
    // Récupérez ici les données nécessaires depuis vos contrôleurs
    $photos = App\Models\Photo::all();
    $tags = App\Models\Tag::all();
    $posts = App\Models\Post::all();
    
    // Retournez la vue avec les données
    return view('photo_tag_post', compact('photos', 'tags', 'posts'));
});



