<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get("/", [PageController::class, "index"])->name("index");
Route::get("/add-to-chart", [PageController::class, "add_to_chart"])->name("add-to-chart");
Route::get("/order", [PageController::class, "order"])->name("order");
Route::get("/payment", [PageController::class, "payment"])->name("payment");
Route::post("/payment-confirm", [PageController::class, "payment_confirm"])->name("payment-confirm");
Route::get("/thank-you", [PageController::class, "thank_you"])->name("thank_you");

Route::get("/login", [UserController::class, "showLogin"])->name("showLogin");
Route::post("/login", [UserController::class, "login"])->name("login");
Route::post("/register", [UserController::class, "register"])->name("register");
Route::get("/logout", [UserController::class, "logout"])->name("logout");
