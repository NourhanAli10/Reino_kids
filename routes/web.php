<?php



use App\Http\Controllers\dashboard\auth\AuthenticatedSessionController;
use App\Http\Controllers\dashboard\auth\RegisteredUserController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\store\HomeController;
use App\Http\Controllers\store\ProductController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get("/", [HomeController::class, 'index'])->name('home');

Route::controller(ProductController::class)->group(function() {
    Route::get("/all-products",  'all_products')->name('all-products');
    Route::get("/new_products", 'new_products')->name('new-products');
});

// ---------------------------Dashboard---------------------------------- //

Route::get('/admin/dashboard', [DashboardController::class , 'index'])->name('dashboard');
Route::get('/admin/login', [AuthenticatedSessionController::class , 'create']);
Route::post('/admin/login', [AuthenticatedSessionController::class , 'store'])->name('admin.login');
Route::get('/admin/register', [RegisteredUserController::class , 'create']);
Route::post('/admin/register', [RegisteredUserController::class , 'store'])->name('admin.register');
Route::get('/admin/register', [DashboardController::class , 'register']);
