<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => Auth::loginUsingId(1));

Route::get('/page-counter', Counter::class);
