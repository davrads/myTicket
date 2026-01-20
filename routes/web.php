<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get("/",[PageController::class,"home"])->name("home");
Route::post("/event-request",[PageController::class,"event_request"])->name("event_request");
