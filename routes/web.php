<?php

use App\Models\Referral;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/referrals', function () {
    // dd(Referral::find(1)->user()->update(['name' => 'Updated name']));

    return view('referrals.index', [
        'referrals' => Referral::with('referralCode', 'user')->latest()->get(),
    ]);
});
