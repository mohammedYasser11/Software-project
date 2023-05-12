<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowUpController;
use App\Models\User;
use App\Models\FollowUp;
use App\Models\RegistrationData;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    $users = User::all();
    $data = [
        'users' => $users
    ];
    return view('admin/index', $data);
});
Route::get('/dashboard/user/{id}', function($id) {
    $data = [
        'user' => User::find($id),
        'followUps' => FollowUp::where('user_id', $id)->get(),
        'qua' => RegistrationData::where('user_id', $id)->first()
    ];
    return view('admin.account', $data);
})->name('view-user');

Route::get('/test', function(){
    return "hello world";
});

Route::get('/transformations', function () {
    return view('transformation');
});

Route::get('/follow-up-step-one', function () {
    return view('follow-up');
});

Route::post('/follow-up-step-one', [FollowUpController::class, 'store'])->name('follow-up-step-one');

Route::get('/follow-up-step-two', function () {
    return view('follow-up-2');
});

Route::post('/follow-up-step-two', [FollowUpController::class, 'stepTwo'])->name('follow-up-step-two');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/registeration-questions', function () {
    return view('registeration-questions');
});

Route::post('/registeration-questions', [RegisteredUserController::class, 'save_user_data'])->name('save_user_data');

Route::get('/profile-page', function () {
    $user = Auth::user();
    $data = [
        'user' => $user
    ];
    // return $data;
    return view('profile-page', $data);
});






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
