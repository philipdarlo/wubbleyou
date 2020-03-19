<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;

class ImportantTasks extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('important-tasks', [
            'tasks' => Task::where('priority', 'high')
            ->join('users', 'users.id', '=', 'tasks.user_id')
            ->select('tasks.id', 'tasks.name',  'tasks.created_at', 'users.name as userName', 'users.email')
            ->orderBy('tasks.created_at', 'asc')
            ->get()
        ]);
    }
}
