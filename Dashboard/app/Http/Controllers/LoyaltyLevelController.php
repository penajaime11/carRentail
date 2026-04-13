<?php

namespace App\Http\Controllers;
use App\Models\LoyaltyLevel;
use Illuminate\Http\Request;

class LoyaltyLevelController extends Controller
{
    public function index(){ return LoyaltyLevel::all(); }
    public function store(Request $r){ return LoyaltyLevel::create($r->all()); }
    public function show($id){ return LoyaltyLevel::findOrFail($id); }
    public function update(Request $r,$id){ $l=LoyaltyLevel::findOrFail($id); $l->update($r->all()); return $l; }
    public function destroy($id){ LoyaltyLevel::destroy($id); return response()->noContent(); }
}