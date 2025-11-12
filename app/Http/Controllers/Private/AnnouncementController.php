<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Models\Announcement;
use App\Services\AnnouncementService;

class AnnouncementController extends Controller
{
    public function __construct(private AnnouncementService $service) {}

    public function index()
    {
        $announcements = $this->service->listAll();
        return view('private.announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('private.announcements.create');
    }

    public function store(StoreAnnouncementRequest $request)
    {
        $this->service->create($request->validated());
        return redirect()
            ->route('private.announcements.index')
            ->with('success', 'Announcement created successfully.');
    }

    public function destroy(Announcement $announcement)
    {
        $this->service->delete($announcement);
        return redirect()
            ->route('private.announcements.index')
            ->with('success', 'Announcement deleted successfully.');
    }
}