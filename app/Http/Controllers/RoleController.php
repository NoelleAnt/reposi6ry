<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Exception;

class RoleController extends Controller
{
    // Display a listing of the roles.
    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    // Show the form for creating a new role.
    public function create()
    {
        return view('roles.create');

    }

    // Store a newly created role in storage.
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $role = Role::create($request->all());
        return redirect()
            ->route('roles.index')
            ->with('success', 'Role created successfully.');
    }

    // Display the specified role.
    public function show($id)
    {
        $role = Role::find($id);
        
        // Check if the role exists
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }

        return view('roles.show', ['role' => $role]);
    }

    // Show the form for editing the specified role.
    public function edit(string $id)
    {
        $role = Role::find($id);
        // Check if the role exists
        return view('roles.edit', ['role' => $role]);
    }

    // Update the specified role in storage.
    public function update(Request $request, string $id)
    {
        $role = Role::find($id);
        $validatedData = $request->validate([
            'role_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);
        $role->update($validatedData);
        return redirect()
            ->route('roles.index')
            ->with('success', 'Role updated successfully.');
    }

    // Remove the specified role from storage.
    public function destroy(string $id)
    {
        try {
            $role = Role::find($id);
            $role->delete();
            return redirect()
                ->route('roles.index')
                ->with('success', 'Role deleted successfully.');
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}