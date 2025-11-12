<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Enums\UserRole;
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


// Public route (no auth required)
Route::get('/public/announcements', fn() => view('public.announcements'));

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



require __DIR__ . '/auth.php';
