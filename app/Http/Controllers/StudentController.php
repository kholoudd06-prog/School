<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $students = Student::all();

    return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validateData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'phone' => 'required',
        'section' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg',
    ]);

    $image = $request->file('image');

    $destinationPath = 'image/';

    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

    $image->move($destinationPath, $profileImage);

    $validateData['image'] = $profileImage;

    $students = Student::create($validateData);

    return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
{
    return view('show', compact('student'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
{
    return view('edit', compact('student'));
}

    /**
     * Update the specified resource in storage.
     */
   
public function update(Request $request, Student $student)
{
    $validateData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'phone' => 'required',
        'section' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');

        $destinationPath = 'image/';

        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

        $image->move($destinationPath, $profileImage);

        $validateData['image'] = $profileImage;
    }

    $student->update($validateData);

    return redirect('/students');
}

  public function destroy(Student $student)
{
    $student->delete();

    return redirect('/students');
}
}
