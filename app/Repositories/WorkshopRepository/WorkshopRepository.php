<?php

namespace App\Repositories\WorkshopRepository;

use App\Models\Workshop;



class WorkshopRepository{
    private $model;
    public function __construct() {
        $this->model = new Workshop();
    }
    public function getAll(){
        $workshops = $this->model->all();
        return $workshops;
    }
}