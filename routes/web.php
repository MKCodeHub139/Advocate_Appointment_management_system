<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/appointment/submit', [AppointmentController::class, 'store']);
Route::post('/contact/submit', [ContactController::class, 'store']);

Route::prefix('/admin')->group(
    function () {
        Route::get('/login', function () {
            return view('admin.auth.login');
        });
        Route::post('/login', [AdminController::class, 'login']);
        Route::middleware('admin.auth')->group(function () {
            Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
            Route::get('/unread-appointments', [AdminController::class, 'unreadAppointments'])->name('admin.unreadAppointments');
            Route::get('/booked-appointments', [AdminController::class, 'bookedAppointments'])->name('admin.bookedAppointments');
            Route::get('/cancelled-appointments', [AdminController::class, 'cancelledAppointments'])->name('admin.cancelledAppointments');
            Route::get('/all-appointments', [AdminController::class, 'allAppointments'])->name('admin.allAppointments');
            Route::get('/new-contacts', [AdminController::class, 'newContacts'])->name('admin.newContacts');
            Route::get('/all-contacts', [AdminController::class, 'allContacts'])->name('admin.allContacts');
            Route::get('/all-services', [AdminController::class, 'allServices'])->name('admin.allServices');

            Route::get('/services/create-service-form', [AdminServicesController::class, 'createServiceForm'])->name('admin.createServiceForm');
            Route::post('/services/submit', [AdminServicesController::class, 'store'])->name('admin.store');
            // edit service
            Route::get('/services/edit-sevice/{id}', [AdminServicesController::class, 'edit'])->name('admin.edit');
            Route::post('/services/update/{id}', [AdminServicesController::class, 'update'])->name('admin.update');
            // delete service
            Route::get('/services/delete-service/{id}', [AdminServicesController::class, 'destroy'])->name('admin.destroy');


            Route::post('/book-appointment/submit', [AdminController::class, 'bookAppointmentSubmit'])->name('admin.bookAppointmentSubmit');
            Route::post('/cancel-appointment/submit', [AdminController::class, 'cancelAppointmentSubmit'])->name('admin.cancelAppointmentSubmit');
            Route::post('/read-contacts/submit', [AdminController::class, 'readContactsSubmit'])->name('admin.readContactsSubmit');

            Route::get('/logout', [AdminController::class, 'logout']);
        });
    }
);
