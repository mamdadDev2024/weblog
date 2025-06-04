<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(private UserService $service){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->service->index();
        return view("User.Index", compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        return $this->service->create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user = $this->service->get($user);
        return view("User.Show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        return view("User.Update", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $User)
    {
        $data = $request->validated();
        return $this->service->update($User, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        $this->service->delete($User);
        return redirect()->route('home');
    }
}
