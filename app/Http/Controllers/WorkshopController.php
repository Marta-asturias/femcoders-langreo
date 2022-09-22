<?php

namespace App\Http\Controllers;


use App\Repositories\Interfaces\WorkshopRepositoryInterface;
use App\Models\Workshop;

class WorkshopController extends Controller
{
    private $WorkshopRepository;

    public function __construct(WorkshopRepositoryInterface $WorkshopRepository)
    {
        $this->WorkshopRepository = $WorkshopRepository;
    }

    public function index()
    {
        $workshops = $this->WorkshopRepository->all();

        return view('workshops');
    }

    public function getByWorkshop($id)
    {
        $workshop = Workshop::find($id);
        $workshop = $this->WorkshopRepository->getByWorkshop($workshop);

        return view('admin.edit');
    }
}