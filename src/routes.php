<?php
/**
 * @Author AD
 * @Date   Jun 02, 2023
 */

use Illuminate\Support\Facades\Route;
use Laraveldaily\Timezones\TimezonesController;

Route::get('timezones/{timezone}', [TimezonesController::class, 'index']);
