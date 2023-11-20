<?php

// app/Http/Controllers/CatalogController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();
        return view('catalog.index', compact('catalogs'));
    }
}
