<?php

namespace App\Repositories;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Collection;

class AnnouncementRepository
{
    public function all(): Collection
    {
        return Announcement::orderByDesc('date_created')->get();
    }

    public function active(): Collection
    {
        return Announcement::where('is_active', true)
            ->whereNull('deleted_at')
            ->orderByDesc('date_created')
            ->get();
    }

    public function create(array $data): Announcement
    {
        return Announcement::create($data);
    }

    public function delete(Announcement $announcement): bool
    {
        return $announcement->softDelete();
    }

    public function update(Announcement $announcement, array $data): Announcement
    {
        $announcement->update($data); 
        return $announcement;
    }

    
    public function find(int $id): ?Announcement
    {
        return Announcement::find($id);
    }
}
