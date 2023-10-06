<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/category',[CategoryController::class,'index'])->name('category-in');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{fakultas}', function ($fakultas) {

    $array = ['Risa', 'Ari'];

    return view('universitas.mahasiswas')
            ->with([
                'mhs' => $array,
                'fk' => $fakultas
            ]);

});

Route::get('/admin', function () {
    return view('dashboard');
});


//ujicoba update
