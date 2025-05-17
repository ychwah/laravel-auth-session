<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
  public function process(Request $request, $action)
  {
    switch ($action) {
      case 'add':
        return $this->add($request);
      case 'edit':
        return $this->update($request);
      case 'delete':
        return $this->delete($request);
      default:
        dd('Error');
        break;
    }
  }
  public function add(Request $request)
  {
    $request->validate([
      'first_name' => 'required|string|max:255',
      'middle_name' => 'nullable|string|max:255',
      'last_name' => 'required|string|max:255',
      'suffix' => 'nullable|string|max:255',
      'gender' => 'required|in:M,F',
      'birthdate' => 'required'
    ]);

    $query = Students::insert([
      'first_name' => $request->first_name,
      'middle_name' => $request->middle_name,
      'last_name' => $request->last_name,
      'suffix' => $request->suffix,
      'gender' => $request->gender,
      'birthdate' => $request->birthdate
    ]);

    return $query ? redirect()->route('view.home')->with('success', 'Added new student.') : redirect()->route('view.home')->withErrors('Unable to perform action.');
  }

  public function update(Request $request)
  {
    $student_id = $request->id;

    $updateData = $request->validate([
      'first_name' => 'required|string|max:255',
      'middle_name' => 'nullable|string|max:255',
      'last_name' => 'required|string|max:255',
      'suffix' => 'nullable|string|max:255',
      'gender' => 'required|in:M,F',
      'birthdate' => 'required'
    ]);

    $students = Students::findOrFail($student_id)->update($updateData);

    return $students ? redirect()->route('view.home')->with('success', 'Student #' . $student_id . ' updated.') : redirect()->route('view.home')->withErrors('Unable to perform action.');
  }

  public function delete(Request $request)
  {
    $student_id = $request->id;
    $students = Students::findOrFail( $student_id)->delete();

    return $students ? redirect()->route('view.home')->with('success', 'Student #' . $student_id . ' deleted.') : redirect()->route('view.home')->withErrors('Unable to perform action.');
  }
}
