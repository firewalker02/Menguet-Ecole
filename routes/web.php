<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect(url('/login'));
});


Route::get('/register1', function (){
    return redirect (url('/register'));
})->name('register1');
//Route::get('/', function () {
//    return view('auth.login');
//});

Route::get('/Home', function () {
        return redirect(route('page'));
    });

Route::get('/index', function () {
    return view('index');
})->name('pagee');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/bookings', function () {
    return view('bookings');
})->name('bookings');
Route::get('/schedule-timings', function () {
    return view('schedule-timings');
})->name('schedule-timings');
Route::get('/mentee-list', function () {
    return view('mentee-list');
})->name('mentee-list');
Route::get('/profile-mentee', function () {
    return view('profile-mentee');
})->name('profile-mentee');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/add-blog', function () {
    return view('add-blog');
})->name('add-blog');
Route::get('/edit-blog', function () {
    return view('edit-blog');
})->name('edit-blog');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');
Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');
Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');
Route::get('/mentor-register', function () {
    return view('mentor-register');
})->name('mentor-register');
Route::get('/map-grid', function () {
    return view('map-grid');
})->name('map-grid');
Route::get('/map-list', function () {
    return view('map-list');
})->name('map-list');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/bookings-mentee', function () {
    return view('bookings-mentee');
})->name('bookings-mentee');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/booking-success', function () {
    return view('booking-success');
})->name('booking-success');
Route::get('/dashboard-mentee', function () {
    return view('dashboard-mentee');
})->name('dashboard-mentee');
Route::get('/favourites', function () {
    return view('favourites');
})->name('favourites');
Route::get('/chat-mentee', function () {
    return view('chat-mentee');
})->name('chat-mentee');
Route::get('/profile-settings-mentee', function () {
    return view('profile-settings-mentee');
})->name('profile-settings-mentee');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/components', function () {
    return view('components');
})->name('components');
Route::get('/invoice-view', function () {
    return view('invoice-view');
})->name('invoice-view');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');

//Route::get('/register', function () {
//    return view('register');
//})->name('register');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/mentee-register', function () {
    return view('mentee-register');
})->name('mentee-register');



/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () {
Route::get('/index_admin', function () {
return view('admin.index_admin');
})->name('page');
Route::get('/mentor', function () {
return view('admin.mentor');
})->name('mentor');
Route::get('/mentee', function () {
return view('admin.mentee');
})->name('mentee');
Route::get('/booking-list', function () {
return view('admin.booking-list');
})->name('booking-list');
Route::get('/categories', function () {
return view('admin.categories');
})->name('categories');
Route::get('/transactions-list', function () {
return view('admin.transactions-list');
})->name('transactions-list');
Route::get('/settings', function () {
return view('admin.settings');
})->name('settings');
Route::get('/invoice-report', function () {
return view('admin.invoice-report');
})->name('invoice-report');

Route::get('/profile/{eleve_id}', [App\Http\Controllers\ElevesController::class, 'ViewProfile'])->name('profile');

Route::get('/blog', function () {
return view('admin.blog');
})->name('blog');
Route::get('/blog-details', function () {
return view('admin.blog-details');
})->name('blog-details');
Route::get('/add-blog', function () {
return view('admin.add-blog');
})->name('add-blog');

Route::get('/add-eleve', function () {
return view('admin.add-classe');
})->name('add-eleve');

Route::get('/edit-blog', function () {
return view('admin.edit-blog');
})->name('edit-blog');

Route::post('/postregister2', [\App\Http\Controllers\CustomAuthController::class, 'customRegistration']
//return redirect(url('/register'));

)->name('register2');
Route::get('/getregister2', function(){
    return view('admin.register');
})->name('getRegister2');

Route::get('/forgot-password', function () {
return view('admin.forgot-password');
})->name('forgot-password');
Route::get('/lock-screen', function () {
return view('admin.lock-screen');
})->name('lock-screen');
Route::get('/error-404', function () {
return view('admin.error-404');
})->name('error-404');
Route::get('/error-500', function () {
return view('admin.error-500');
})->name('error-500');
Route::get('/blank-page', function () {
return view('admin.blank-page');
})->name('blank-page');
Route::get('/components', function () {
return view('admin.components');
})->name('components');
Route::get('/form-basic-inputs', function () {
return view('admin.form-basic-inputs');
})->name('form-basic-inputs');
Route::get('/form-input-groups', function () {
return view('admin.form-input-groups');
})->name('form-input-groups');
Route::get('/form-horizontal', function () {
return view('admin.form-horizontal');
})->name('form-horizontal');
Route::get('/form-vertical', function () {
return view('admin.form-vertical');
})->name('form-vertical');
Route::get('/form-mask', function () {
return view('admin.form-mask');
})->name('form-mask');
Route::get('/form-validation', function () {
return view('admin.form-validation');
})->name('form-validation');
Route::get('/tables-basic', function () {
return view('admin.tables-basic');
})->name('tables-basic');
Route::get('/data-tables', function () {
return view('admin.data-tables');
})->name('data-tables');
Route::get('/invoice', function () {
return view('admin.invoice');
})->name('invoice');
});
/********************ADMIN ROUTES END******************************/

/********************debut gestion des classes******************************/
Route::post('/admin/create_classe', [App\Http\Controllers\ClasseControllers::class, 'create'])->name('create_classe');
Route::get('/admin/{classe_id}/delete', [App\Http\Controllers\ClasseControllers::class, 'delete'])->name('delete_classe');

/********************fin gestion des classes******************************/

/********************debut gestion des eleves******************************/
Route::post('/admin/create_eleve', [App\Http\Controllers\ElevesController::class, 'create'])->name('create_eleve');
Route::get('/admin/eleve/{eleve_id}/delete', [App\Http\Controllers\ElevesController::class, 'delete'])->name('delete_eleve');
Route::post('/admin/{eleve_id}/update', [App\Http\Controllers\ElevesController::class, 'update'])->name('update_eleve');
Route::post('/admin/sortBy', [App\Http\Controllers\ElevesController::class, 'SortBy'])->name('Sort_BY');

/********************fin gestion des eleves******************************/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
