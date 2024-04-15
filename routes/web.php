<?php



use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\store\HomeController;
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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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


Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
->name('admin.login');

Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);



Route::get('/admin/register', [RegisteredUserController::class , 'create'])->name('admin.register');
Route::post('/admin/register', [RegisteredUserController::class , 'store']);


// Products//

Route::controller(ProductController::class)->prefix('admin/dashboard/')->name('admin.')
->group(function() {
    Route::get('/all-products', 'all_products')->name('all-products');
    Route::get('/products/add', 'create')->name('create-product');
    Route::post('/products/add', 'store');
});


//categories//

Route::controller(CategoryController::class)->prefix('admin/dashboard')->name('admin.')
->group(function() {
    Route::get("/categories",'index')->name('categories');
    Route::get("/categories/add", 'create')->name('add-category');
    Route::post("/categories/add", 'store');
    Route::get("/categories/edit/{id}", 'edit')->name('update-category');
    Route::post("/categories/edit", 'update');
});
