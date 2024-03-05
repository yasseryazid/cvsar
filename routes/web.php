<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\ExploreController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\WhatsNewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageAboutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MenuController;
use App\Models\About;
use App\Models\Carousel;
use App\Models\Explore;
use App\Models\ImageAbout;
use App\Models\Room;
use App\Models\Service;
use App\Models\Staff;
use App\Models\WhatsNew;
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
    return view('welcome', [
        'data' => [
            'carousel' => Carousel::all(),
            'about_us' => About::first(),
            'rooms' => Room::with('cover')->limit(3)->get(),
            'services' => Service::all(),
            'staffs' => Staff::all(),
            'whats_new' => WhatsNew::orderBy('created_at', 'desc')->limit(3)->get(),
            'explores' => Explore::with('detail.images')->orderBy('created_at', 'desc')->limit(3)->get(),
            'image_about' => ImageAbout::all()
        ]
    ]);
})->name('home');

Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about');
Route::get('explore', function () {
    return view('users.contact.index', [
        'data' => ['explores' => Explore::with('detail.images')->orderBy('created_at', 'desc')->limit(3)->get()]
    ]);
})->name('contact');
Route::get('room', [HomeController::class, 'room'])->name('room');
Route::get('room/{slug}', [HomeController::class, 'roomDetail'])->name('room.detail');

Route::get('whatsnew', [HomeController::class, 'whatsNew'])->name('whatsnew');
Route::get('whatsnew/{id}', [HomeController::class, 'whatsNewDetail'])->name('whatsnew.detail');

Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery-user');

Route::get('medical-checkup', [MemberController::class, 'medicalCheckup'])->name('medical-checkup.index');

Route::get('profile', [HomeController::class, 'profile'])->name('profile');

Route::get('menu/{slug}', [HomeController::class, 'menu']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('rooms/add-image/{id}', [RoomController::class, 'addImage'])->name('rooms.add-image');
    Route::post('rooms/add-image/{id}', [RoomController::class, 'storeImage'])->name('rooms.store-image');
    Route::delete('rooms/add-image/{id}', [RoomController::class, 'destroyImage'])->name('rooms.destroy-image');

    Route::get('explores/detail/{id}/create', [ExploreController::class, 'createDetailExplore'])->name('explore.create-detail-explore');
    Route::post('explores/detail/{id}/create', [ExploreController::class, 'storeDetailExplore'])->name('explore.store-detail-explore');
    Route::delete('explores/detail/{id}/destroy', [ExploreController::class, 'destroyDetailExplore'])->name('explore.destroy-detail-explore');

    Route::resource('carousels', CarouselController::class)->except(['show']);
    Route::resource('abouts', AboutController::class)->only(['index', 'edit', 'update']);
    Route::resource('services', ServiceController::class)->except(['show']);
    Route::resource('staffs', StaffController::class)->except(['show']);
    Route::resource('rooms', RoomController::class);
    Route::resource('whats-new', WhatsNewController::class)->except(['show']);
    Route::resource('galleries', GalleryController::class)->except(['show']);
    Route::resource('explores', ExploreController::class);
    Route::resource('image-about', ImageAboutController::class)->only(['index', 'edit', 'update']);

    Route::get('members', [MemberController::class, 'index'])->name('members.index');
    Route::get('members/create', [MemberController::class, 'create'])->name('members.create');
    Route::post('members/store', [MemberController::class, 'store'])->name('members.store');
    Route::get('members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
    Route::get('members/{id}/show', [MemberController::class, 'show'])->name('members.show');
    Route::put('members/{id}/update', [MemberController::class, 'update'])->name('members.update');
    Route::delete('members/{id}/destroy', [MemberController::class, 'destroy'])->name('members.destroy');
    Route::get('/members/search', [MemberController::class, 'search'])->name('members.search');

    Route::get('members/{medical_record_number}/detail', [MemberController::class, 'detail']);

    Route::get('document/{id}/edit-file', [MemberController::class, 'addFile'])->name('document.add-file');
    Route::put('document/{id}/update', [MemberController::class, 'updateFile'])->name('document.update');
    Route::delete('document/{id}/destroy-file', [MemberController::class, 'destroyFile'])->name('document.destroy-file');

    Route::get('/members/{id}/upload-file', [MemberController::class, 'uploadFile'])->name('members.upload-file');
    Route::put('members/{id}/insert/file', [MemberController::class, 'insertFile'])->name('members.insert-file');

    Route::get('menus', [MenuController::class, 'index'])->name('menus.index');
    Route::get('menus/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('menus/store', [MenuController::class, 'store'])->name('menus.store');
    Route::get('menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
    Route::put('menus/{id}/update', [MenuController::class, 'update'])->name('menus.update');
    Route::delete('menus/{id}/destroy', [MenuController::class, 'destroy'])->name('menus.destroy');
    Route::get('/menus/search', [MenuController::class, 'search'])->name('menus.search');
});
