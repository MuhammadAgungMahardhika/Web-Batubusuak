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
        $atractions = Atraction::with(['atraction_category', 'atraction_gallery'])->get();
        $categories = AtractionCategory::with(['atraction'])->get();

        $data = [
            'title' => 'Atractions',
            'datas' => $atractions,
            'categories' => $categories
        ];

        return view('atractions', $data);
    }
    public function getByCategories()
    {
        return ['halo'];
    }
}
