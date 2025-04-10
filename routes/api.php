<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectsController;
use Illuminate\Http\Middleware\HandleCors;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get("projects",[ProjectsController::class, "index"])->middleware([HandleCors::class]);
Route::get("projects/{project}",[ProjectsController::class, "show"]);