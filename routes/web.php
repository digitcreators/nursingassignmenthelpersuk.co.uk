<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\OrdersController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\OrdersController as AdminOrdersController;
use App\Http\Controllers\Admin\InvoicesController as AdminInvoicesController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ServicesController as AdminServicesController;
use App\Http\Controllers\Admin\BlogsController as AdminBlogsController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\Admin\CustomersController as AdminCustomersController;
use App\Http\Controllers\Customer\HomeController as CustomerHomeController;
use App\Http\Controllers\Customer\OrdersController as CustomerOrdersController;
use App\Http\Controllers\Customer\InvoicesController as CustomerInvoicesController;
use App\Http\Controllers\Customer\ProfileController as CustomerProfileController;
use App\Http\Controllers\Auth\ChangePasswordController;

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

Route::get('/clear', function (){
    Artisan::call('route:clear');
    Artisan::call('config:clear');
	Artisan::call('cache:clear');
    return 'cache cleared';
});

Auth::routes([
    'Login', true
]);


// Admin routes
Route::prefix('admin')->as('admin.')->middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');

    // Orders
    Route::get('get-orders', [AdminOrdersController::class, 'getOrders'])->name('orders.get');
    Route::resource('orders', AdminOrdersController::class);

    // Invoices
    Route::resource('invoices', AdminInvoicesController::class);

    // Contacts
    Route::get('get-contacts', [AdminContactController::class, 'getContacts'])->name('contacts.get');
    Route::resource('contacts', AdminContactController::class);

    // Services
    Route::get('get-services', [AdminServicesController::class, 'getServices'])->name('services.get');
    Route::resource('services', AdminServicesController::class)->except(['show']);

    // Blogs
    Route::get('get-blogs', [AdminBlogsController::class, 'getBlogs'])->name('blogs.get');
    Route::resource('blogs', AdminBlogsController::class);

    // Settings
    Route::resource('setting', WebSettingController::class);

    // Customers
    Route::resource('customers', AdminCustomersController::class);
});
// End admin routes

Route::prefix('customer')->as('customer.')->middleware(['auth', 'verified', 'customer'])->group(function () {
    Route::get('/', [CustomerHomeController::class, 'index'])->name('home');

    // Orders
    Route::resource('orders', CustomerOrdersController::class);

    // Invoices
    Route::resource('invoices', CustomerInvoicesController::class);

    // Profile
    Route::resource('profile', CustomerProfileController::class)->only(['index', 'update']);
    
    // Change
    Route::get('change-password', [CustomerProfileController::class, 'changePassword'])->name('profile.change-password');
    Route::post('change-password', [CustomerProfileController::class, 'changePasswordUpdate'])->name('profile.change-password.change');
});


Route::middleware(['auth'])->prefix('profile')->as('profile.')->group(function () {
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [ChangePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [ChangePasswordController::class, 'update'])->name('password.update');
        Route::post('profile', [ChangePasswordController::class, 'updateProfile'])->name('password.updateProfile');
        Route::post('profile/destroy', [ChangePasswordController::class, 'destroy'])->name('password.destroyProfile');
    }
});

// Web routes

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::view('/disclaimer', 'pages.legal.disclaimer')->name('disclaimer');
// Route::view('/sitemap', 'pages.legal.sitemap')->name('sitemap');
Route::view('/revision-policy', 'pages.legal.revision')->name('revision-policy');
Route::view('/refund-policy', 'pages.legal.refund')->name('refund-policy');
Route::view('/reviews', 'pages.reviews')->name('reviews');
Route::view('/privacy-policy', 'pages.legal.privacy')->name('privacy');
Route::view('/terms-and-condition', 'pages.legal.terms')->name('terms');

Route::get('/pricing', [PagesController::class, 'price'])->name('price');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/sitemap', [PagesController::class, 'sitemap'])->name('sitemap');
Route::post('/get-fare', [PagesController::class, 'getFare'])->name('get.fare');

Route::get('/invoice', [OrderController::class, 'invoice'])->name('invoice');

// ContactController
Route::get('/contact-us', [ContactController::class, 'create'])->name('contact');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');

// Order
Route::get('/order', [OrderController::class, 'create'])->name('order');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order-now', [OrderController::class, 'order'])->name('orders');

// Blogs
Route::get('/blogs', [BlogController::class, 'create'])->name('blog');
Route::get('blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('blogs/category/{slug}', [BlogController::class, 'category'])->name('blogs.category');
Route::get('blogs/s', [BlogController::class, 'search'])->name('blogs.search');

// Services
Route::get('/dissertation-writing', [ServiceController::class, 'nursingDissertation'])->name('nursing.dissertation');
Route::get('/essay-writing', [ServiceController::class, 'nursingEssay'])->name('nursing.essay');
Route::get('/write-my-assignment', [ServiceController::class, 'writeMyNursingAssignment'])->name('nursing.assignment');
Route::get('/research-proposal', [ServiceController::class, 'nursingProposal'])->name('nursing.proposal');
Route::get('/coursework-writing', [ServiceController::class, 'nursingCoursework'])->name('nursing.coursework');
Route::get('/concept-mapping', [ServiceController::class, 'nursingConceptMapping'])->name('nursing.conceptMapping');
Route::get('/discussion-posts', [ServiceController::class, 'nursingDiscussion'])->name('nursing.discussion');
Route::get('/literature-review', [ServiceController::class, 'nursingLiterature'])->name('nursing.literature');

Route::get('/{slug}', [ServiceController::class, 'show'])->name('service.show');
