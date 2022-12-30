<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Controllers\PostController;


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


Route::get('/', [PostController::class, 'main']);
Route::get('/admin', [PostController::class, 'admin']);
Route::post('/admin', [PostController::class, 'addOrDelete']);
Route::get('/{post}', [PostController::class, 'post']);
Route::post('/{post}', [PostController::class, 'addComm']);
Route::get('/comments/{id}', [PostController::class, 'allComments']);
Route::post('/comments/{id}', [PostController::class, 'deleteCom']);

// Route::get('/post/{id}', function ($id) {

//     $post = Post::find($id);
//     foreach ($post->comments as $comment) {
//         echo $comment->body . '<br>';
//     }

    
// });