<?php
use App\Http\Controllers\HouseholdController;
use App\Http\Controllers\MemberController;

Route::resource('households', HouseholdController::class);
Route::post('/members', [MemberController::class, 'store'])->name('members.store');
