<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){ return Brand::all(); }
    public function store(Request $r){ return Brand::create($r->all()); }
    public function show($id){ return Brand::findOrFail($id); }
    public function update(Request $r,$id){ $b=Brand::findOrFail($id); $b->update($r->all()); return $b; }
    public function destroy($id){ Brand::destroy($id); return response()->noContent(); }
}
