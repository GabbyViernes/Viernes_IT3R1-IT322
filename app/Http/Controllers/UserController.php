<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    // READ ALL: Triggered by GET /api/users [cite: 118]
    public function index() {
        return User::all();
    }

    // CREATE: Triggered by POST /api/users [cite: 118, 131]
    public function store(Request $request) {
        return User::create($request->all());
    }

    // READ ONE: Triggered by GET /api/users/{id} [cite: 118]
    public function show(string $id) {
        return User::findOrFail($id);
    }

    // UPDATE: Triggered by PUT /api/users/{id} [cite: 118]
    public function update(Request $request, string $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return $user;
    }

    // DELETE: Triggered by DELETE /api/users/{id} [cite: 118]
    public function destroy(string $id) {
        User::destroy($id);
        return response()->json(['message' => 'User deleted']);
    }
}