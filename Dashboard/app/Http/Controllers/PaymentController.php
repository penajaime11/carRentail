<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){ return Payment::with('rental')->get(); }
    public function store(Request $r){ return Payment::create($r->all()); }
    public function show($id){ return Payment::with('rental')->findOrFail($id); }
    public function update(Request $r,$id){ $p=Payment::findOrFail($id); $p->update($r->all()); return $p; }
    public function destroy($id){ Payment::destroy($id); return response()->noContent(); }
}