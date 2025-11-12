<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Enums\UserRole;
use App\Http\Controllers\Private\AnnouncementController as PrivateAnnouncementController;
use App\Http\Controllers\Public\AnnouncementController as PublicAnnouncementController;




Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Private routes mapping
$privateRoutes = [
    '/private/faculty' => [UserRole::FACULTY, 'faculty'],
    '/private/student' => [UserRole::STUDENT, 'student'],
    '/private/staff' => [UserRole::STAFF, 'staff'],
    '/private/admin' => [UserRole::ADMIN, 'admin'],
    '/private/classes' => [[UserRole::FACULTY, UserRole::STUDENT], 'classes'],
];

foreach ($privateRoutes as $uri => [$roles, $view]) {
    // Handle multiple roles
    $rolesString = is_array($roles) ? implode(',', array_map(fn($r) => $r->value, $roles)) : $roles->value;

    Route::middleware(['auth', App\Http\Middleware\RoleMiddleware::class . ':' . $rolesString])
        ->get($uri, fn() => view("private.$view"));
}

// Announcement Controllers

Route::middleware('auth')->prefix('private')->group(function () {
    Route::resource('announcements', PrivateAnnouncementController::class)
        ->only(['index', 'create', 'store', 'destroy'])
        ->names('private.announcements');
});

Route::prefix('public')->group(function () {
    Route::get('announcements', [PublicAnnouncementController::class, 'index'])
        ->name('public.announcements.index');
});



require __DIR__ . '/auth.php';
