<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Homepage with buttons
Route::get('/', function () {
    return view('home');
});

// Named Routes (Checkpoint 1)
Route::get('/item', function () {
    return view('item');
})->name('item');

Route::get('/customer', function () {
    return view('customer');
})->name('customer');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/order-details', function () {
    return view('orderDetails');
})->name('orderDetails');

// Parameterized Routes (Checkpoint 2)
Route::get('/customer/{id}/{name}/{address}', function ($id, $name, $address) {
    return view('customer', compact('id', 'name', 'address'));
});

Route::get('/item/{itemNo}/{itemName}/{price}', function ($itemNo, $itemName, $price) {
    return view('item', compact('itemNo', 'itemName', 'price'));
});

Route::get('/order/{custId}/{custName}/{orderNo}/{date}', function ($custId, $custName, $orderNo, $date) {
    return view('order', compact('custId', 'custName', 'orderNo', 'date'));
});

Route::get('/orderDetails/{transNo}/{orderNo}/{itemId}/{itemName}/{price}/{qty}', function ($transNo, $orderNo, $itemId, $itemName, $price, $qty) {
    return view('orderDetails', compact('transNo', 'orderNo', 'itemId', 'itemName', 'price', 'qty'));
});
