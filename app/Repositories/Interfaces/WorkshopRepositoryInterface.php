<?php

namespace App\Repositories\Interfaces;

use App\Models\Workshop as ModelsWorkshop;
use App\Models\Workshop;

interface WorkshopRepositoryInterface
{
    public function all();

    public function getByWorkshop(Workshop $workshop);
}