<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pdf-test', function () {
    $html = '<h1>Laravel PDF Testing</h1.';
    $pdf = Pdf::loadHTML($html);
    return $pdf->download('test.pdf');
    // return $pdf->stream('test.pdf');
});
Route::get('/invoice', function () {
    // return view('invoice');
    $pdf = Pdf::loadView('invoice');
    return $pdf->stream('ivoice-test.pdf');
});

Route::get('/invoices-create/{id}', function (string $id) {
    // dd($id);
    $customerName= 'Aslam';
    $items = [
        ['name' => 'Product 1', 'quantity' => '5', 'price' => 50 ],
        ['name' => 'Product 2', 'quantity' => '3', 'price' => 30 ]
    ];

    $data = [
        'id' => $id,
        'customerName' => $customerName,
        'items' => $items,
        'total' => 80
    ];
    return view('invoice', $data);
    $pdf = Pdf::loadView('invoice', $data);
    // return $pdf->stream('ivoice-{$id}.pdf');
});


// Class 37 Hasin Hyder
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.home');

// Class 38 Akram Khan
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Class 38
Route::get('/HomePage', [SiteController::class, 'HomePage'])->name('HomePage');
Route::get('/ProfilePage', [SiteController::class, 'ProfilePage'])->name('ProfilePage');
Route::get('/LoginPage', [SiteController::class, 'LoginPage'])->name('LoginPage');