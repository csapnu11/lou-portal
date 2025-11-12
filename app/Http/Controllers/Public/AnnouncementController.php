<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Services\AnnouncementService;

class AnnouncementController extends Controller
{
    public function __construct(private AnnouncementService $service) {}

    public function index()
    {
        $announcements = $this->service->listActive();
        return view('public.announcements', compact('announcements'));
    }
}