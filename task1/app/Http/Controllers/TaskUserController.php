<?php

namespace App\Http\Controllers;

use App\Models\TaskUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TaskUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('users.index', [
            'taskusers' => TaskUser::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.TaskUser::class],
        ]);

        TaskUser::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return Redirect::route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskUser $taskUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        return view("users.edit", [
            'taskuser' => TaskUser::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.TaskUser::class],
        ]);

        $taskuser = TaskUser::find($id);
        $taskuser->name = $request->name;
        $taskuser->email = $request->email;
        $taskuser->save();

        return Redirect::route('user.index');
    }

    /**
     * remove the specified resource from storage.
     */
      public function destroy($id): RedirectResponse
    {
        TaskUser::destroy($id);
        return redirect("user");
    }
}
