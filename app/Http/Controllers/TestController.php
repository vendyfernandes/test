<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Models\Category;


class TestController extends Controller
{
    public function index(){
        return view('task.index'); 
    }

    public function register(){
        return view('task.register');
    }

    public function store(Request $request){
        //dd($request);
        $data = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required',
            'password' => 'required',
        ]);

        $newUser = User::create($data);

        return redirect(route('task.dashboard'));
    }

    public function login(){
        return view('task.login');
    }

    public function authenticate(){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect(route('task.dashboard'));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function dashboard(){
        $tasks = Task::all();
        return view('task.dashboard', ['tasks' => $tasks]);
        //return view('task.dashboard');
    }

    public function create(){
        return view('task.create');
    }

    public function store2(Request $request){
        //dd($request);
        $data = $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'description' => 'required|alpha',
            'status' => 'required',
            'due_date' => 'required'
        ]);

        $newTask = Task::create($data);

        return redirect(route('task.dashboard'));
    }

    public function edit(Task $task){
        //dd($product);
        return view('task.edit', ['task' => $task]);
    }

    public function update(Task $task, Request $request){
        $data = $request->validate([
            'user_id' => 'required',
            'title' => 'required|alpha',
            'description' => 'required',
            'status' => 'required',
            'due_date' => 'required'
        ]);

        $task->update($data);

        return redirect(route('task.dashboard'))->with('success', 'Task Updated Successfully');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect(route('task.dashboard'))->with('success', 'Task Deleted Successfully');
    }

    public function createcategory(){
        return view('task.createcategory');
    }

    public function store3(Request $request){
        //dd($request);
        $data = $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);

        $newCategory = Category::create($data);

        return redirect(route('task.dashboard'));
    }

    public function editcategory(Category $category){
        //dd($product);
        return view('task.editcategory', ['category' => $category]);
    }

    public function updatecategory(Category $category, Request $request){
        $data = $request->validate([
            'id' => 'required',
            'name' => 'required|alpha',
        ]);

        $category->update($data);

        return redirect(route('task.dashboard'))->with('success', 'Category Updated Successfully');
    }

    public function destroycategory(Category $category){
        $category->delete();
        return redirect(route('task.dashboard'))->with('success', 'Category Deleted Successfully');
    }
}
