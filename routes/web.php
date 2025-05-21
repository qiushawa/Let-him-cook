<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;

Route::get('/', function (Request $request) {
    return inertia('Home', [
        'keyword' => $request->query('keyword'),
        'hotSearch' => [
            "rtx-5060",
            "rtx-5070",
            "rtx-4060",
            "rzen-9-9800x3d",
            "曲面螢幕",
            "機械鍵盤",
            "無線耳機",
            "無線滑鼠",
        ],
        'adList' =>[
            ['url' => 'https://www.example.com/ad1.jpg', 'color' => '#FF5733'],
            ['url' => 'https://www.example.com/ad2.jpg', 'color' => '#33FF57'],
            ['url' => 'https://www.example.com/ad3.jpg', 'color' => '#3357FF'],
            ['url' => 'https://www.example.com/ad4.jpg', 'color' => '#FF33A1'],
            ['url' => 'https://www.example.com/ad5.jpg', 'color' => '#FF8C33'],
            ['url' => 'https://www.example.com/ad6.jpg', 'color' => '#33FFA1'],
            ['url' => 'https://www.example.com/ad7.jpg', 'color' => '#A133FF'],
            ['url' => 'https://www.example.com/ad8.jpg', 'color' => '#FF33D4'],
            ['url' => 'https://www.example.com/ad9.jpg', 'color' => '#33FF8C'],
            ['url' => 'https://www.example.com/ad10.jpg', 'color' => '#FF5733'],
        ]
    ]);
})->name('home');


Route::get('/about', function () {
    return inertia(component: 'About');
})->name('about');
