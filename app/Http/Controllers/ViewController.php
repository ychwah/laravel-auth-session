<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class ViewController extends Controller
{
  public function login()
  {
    return view('view.login');
  }

  public function register()
  {
    return view('view.register');
  }

  public function home(Request $request)
  {
    $user = $request->session()->get('user');
    $students = Students::all();

    return view('view.home', compact('user', 'students'));
  }

  public function student(Request $request, $action)
  {




    switch ($action) {
      case 'add':
        return view('student.add');
      case 'edit':
        if (isset($request->id)) {
          $student = Students::findOrFail($request->id);
        } else {
          abort(404);
        };
        return view('student.edit', compact('student'));
      case 'delete':
        if (isset($request->id)) {
          $student = Students::findOrFail($request->id);
        } else {
          abort(404);
        };
        return view('student.delete', compact('student'));
      default:
        abort(404);
    }
  }
}
