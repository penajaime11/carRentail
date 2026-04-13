<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    public function index(){ return User::with('loyaltyLevel')->get(); }
    public function store(Request $r){ return User::create($r->all()); }
    public function show($id){ return User::with('loyaltyLevel')->findOrFail($id); }
    public function update(Request $r,$id){ $u=User::findOrFail($id); $u->update($r->all()); return $u; }
    public function destroy($id){ User::destroy($id); return response()->noContent(); }
}
 
