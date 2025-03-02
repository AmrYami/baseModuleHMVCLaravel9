<?php

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
use Users\Http\Controllers\UsersController;
use Users\Http\Controllers\RoleController;


Route::namespace(buildControllerNamespace('Users'))->group(function () {//config take 2 values first our value second default value config(our value , default value)
    Route::middleware([
        'web', 'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
        ])->group(function () {
        Route::PUT('users/freeze/{id}', [UsersController::class, 'freeze'])->name('users.freeze');
        Route::PUT('users/un_freeze/{id}', [UsersController::class, 'un_freeze'])->name('users.un_freeze');
        Route::put('users/update_password/{id}', [UsersController::class, 'update_password'])->name('users.update_password');

        Route::get('/users', [UsersController::class, 'index'])->middleware('role_or_permission:list-users')->name('users.index');
        Route::get('/users/create', [UsersController::class, 'create'])->middleware('role_or_permission:create-users')->name('users.create');
        Route::get('/users/{user}', [UsersController::class, 'show'])->middleware('role_or_permission:show-users')->name('users.show');
        Route::post('/users', [UsersController::class, 'store'])->middleware('role_or_permission:create-users')->name('users.store');
        Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->middleware('role_or_permission:edit-users')->name('users.edit');
        Route::get('/doctor/{user}/edit', [UsersController::class, 'editDoctor'])->middleware('role_or_permission:edit-doctor')->name('doctor.edit');
        Route::put('/users/{user}', [UsersController::class, 'update'])->middleware('role_or_permission:edit-users')->name('users.update');
        Route::delete('/users/{user}', [UsersController::class, 'destroy'])->middleware('role_or_permission:block-users')->name('users.destroy');
        Route::get('/my_profile', [UsersController::class, 'myProfile'])->middleware('role_or_permission:edit-my-profile')->name('my_profile');

        Route::post('/my-profile/update/{id}', [UsersController::class, 'updateMyProfile'])->name('my_profile.update');
        Route::get('/users/export', [UsersController::class, 'export'])->name('users.export');



        // Users Role Routes
        Route::get('/roles', [RoleController::class, 'index'])->middleware('role_or_permission:list-users-role')->name('roles.index');
        Route::get('/roles/create', [RoleController::class, 'create'])->middleware('role_or_permission:create-users-role')->name('roles.create');
        Route::post('/roles', [RoleController::class, 'store'])->middleware('role_or_permission:create-users-role')->name('roles.store');
        Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->middleware('role_or_permission:edit-users-role')->name('roles.edit');
        Route::put('/roles/{role}', [RoleController::class, 'update'])->middleware('role_or_permission:edit-users-role')->name('roles.update');
        Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->middleware('role_or_permission:delete-users-role')->name('roles.destroy');


    });
});
