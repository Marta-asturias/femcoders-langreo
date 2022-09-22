<?php

namespace App\Repositories;

use App\Models\Workshop;
use App\Repositories\Interfaces\WorkshopRepositoryInterface;

class WorkshopRepository implements WorkshopRepositoryInterface
{
    public function all()
    {
        return Workshop::all();
    }

    public function getByWorkshop(Workshop $workshop)
    {
        return Workshop::where('workshop_id'. $workshop->id)->get();
    }
}