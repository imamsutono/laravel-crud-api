<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

use App\Models\User;
use App\Http\Requests\PostUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::select('id', 'name', 'email')->paginate(25);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \App\Http\Requests\PostUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PostUserRequest $request): JsonResponse
    {
        $data = $request->validated();

        User::create($data);

        return response()->json([
            'message' => 'User '. $data['name'] .' successfully added 🥳'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(User $user): JsonResponse
    {
        return response()->json($user->only('name', 'email'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \App\Http\Requests\UpdateUserRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $data = $request->validated();
        $user_previous_name = $user->name;
        $user->update($data);

        return response()->json([
            'message' => "User $user_previous_name successfully updated 🥳!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param \App\Models\User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        $user_name = $user->name;
        $user->delete();

        return response()->json(['message' => "User $user_name sucessfully deleted!"]);
    }
}
