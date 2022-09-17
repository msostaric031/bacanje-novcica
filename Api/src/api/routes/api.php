<?php

use Illuminate\Support\Facades\Route;
use src\Applications\Http\Controllers\GameController;
use src\Applications\Http\Controllers\RespondentController;

Route::group(['middleware' => 'api'], static function () {
    Route::post('respondent/save', [RespondentController::class, 'save']);
    Route::post('game/phaseZero', [GameController::class, 'phaseZero']);
    Route::post('game/phaseOne', [GameController::class, 'phaseOne']);
    Route::post('game/phaseTwo', [GameController::class, 'phaseTwo']);
});