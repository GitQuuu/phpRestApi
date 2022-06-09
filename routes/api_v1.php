<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("index", [App\Http\Controllers\v1\MeetingController::class, "index"]);
