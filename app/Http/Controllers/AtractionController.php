<?php

namespace App\Http\Controllers;

use App\Models\Atraction;
use App\Models\AtractionCategory;
use App\Models\AtractionGallery;


class AtractionController extends Controller
{
    //
    public function index()
    {
        $atractions = Atraction::with(['atraction_category', 'atraction_galleries'])->get();
        $categories = AtractionCategory::with(['atraction'])->get();

        $data = [
            'title' => 'Atractions',
            'atractions' => $atractions,
            'categories' => $categories
        ];

        return view('atractions', $data);
    }
    public function getByCategories()
    {


        return ['halo'];
    }
}
