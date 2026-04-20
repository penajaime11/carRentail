<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){ return Driver::with('user')->get(); }
    public function store(Request $r){ return Driver::create($r->all()); }
    public function show($id){ return Driver::with('user')->findOrFail($id); }
    public function update(Request $r,$id){ $d=Driver::findOrFail($id); $d->update($r->all()); return $d; }
    public function destroy($id){ Driver::destroy($id); return response()->noContent(); }
}