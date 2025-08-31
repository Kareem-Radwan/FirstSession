<?php

use App\Http\Controllers\RoutesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("index");

Route::prefix("admin")->group(function () {
    Route::get("/dashboard", function () {
        return "Welcome to Admin Dashboard";
    })->name("admin.dashboard");

    Route::get("/users", function () {
        return "Welcome to All Users Page";
    })->name("admin.users");

    Route::get("/user/{id}", function ($id) {
        return "User id is $id";
    })->name("admin.user");
});

Route::get("/fruits", function () {
    return view("fruits");
})->name("fruits.index");

Route::prefix("products")->group(function () {
    Route::get("/", function () {
        return "Hello World";
    })->name("products.index");

    Route::get("/{id?}", [RoutesController::class, "products"])->name("product.show");
});

Route::prefix("users")->controller(RoutesController::class)->group(function (){ 
    Route::get("/", 'index')->name("users.index");
    Route::get("/{id}", 'show')->name("users.show");
});

Route::get("/search", [RoutesController::class, "search"])->name("search");
Route::get("/search-result", [RoutesController::class, "result"])->name("search.result");

Route::get("/user/save", [RoutesController::class, "ShowSave"])->name("user.save");
Route::post("/user/save", [RoutesController::class, "save"])->name("user.save");