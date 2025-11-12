<?php

namespace App\Services;

use App\Repositories\AnnouncementRepository;
use App\Models\Announcement;

class AnnouncementService
{
    public function __construct(
        private AnnouncementRepository $repository
    ) {}

    public function listAll()
    {
        return $this->repository->all();
    }

    public function listActive()
    {
        return $this->repository->active();
    }

    public function create(array $data): Announcement
    {
        return $this->repository->create($data);
    }

    public function delete(Announcement $announcement): bool
    {
        return $this->repository->delete($announcement);
    }
}