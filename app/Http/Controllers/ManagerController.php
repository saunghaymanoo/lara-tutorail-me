<?php

namespace App\Http\Controllers;

use App\Http\Requests\Manager\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Repositories\Student\StudentRepositoryInterface;
use PDF;

class ManagerController extends Controller
{
    protected $studentRepository;
    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    public function index()
    {
        $students = $this->studentRepository->getAllStudents();
        // dd($students);
        return view('manager.home', compact('students'));
    }
    public function delete($id)
    {
        $result = $this->studentRepository->deleteStudent($id);

        if ($result['status'] == 200) {
            return redirect('manager/home');
        }
    }
    public function edit($id)
    {
        $student = $this->studentRepository->getStudent($id);

        return view('manager.edit', compact('student'));
    }
    public function update(UpdateStudentRequest $request)
    {
        // dd($request);
        $result = $this->studentRepository->updateStudent($request);
        if ($result['status'] == 200) {
            return redirect('manager/home');
        }
    }
    public function download()
    {
        $students = Student::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $view = \View::make('manager/studentPDF', ['students' => $students]);
        $html_content = $view->render();
        PDF::SetTitle("List of students");
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');
        PDF::Output('studentlist.pdf', 'D');
    }
}
