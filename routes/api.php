<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Baraveli\BmlOcr\BmlOcr;
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/detect', function (Request $request) {

    $request->validate([
        "name" => "required",
        "data" => "required"
    ]);

    $filename = md5($request->name) . time() . '.' . pathinfo($request->name, PATHINFO_EXTENSION);
    Storage::disk('public')->put($filename, base64_decode($request->data));

    $result = BmlOcr::make(storage_path("app/public/" . $filename), storage_path())
        ->detect();

    Storage::disk('public')->delete($filename);

    return response(implode("\n", $result), 200)
        ->header('Content-Type', 'text/plain');
});
