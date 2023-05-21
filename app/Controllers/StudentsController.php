<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;

class StudentsController extends BaseController
{
    public function index()
    {
        return view('students/list');     
    }
    public function createStudent()
    {
        return view('students/add');
    }
    public function storeStudent()
    {
        $insertStudent = new StudentsModel();

        if($img = $this->request->getFile(studentProfile)){
            if($img->isValid() && !$img->hasMoved()){
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
            }
        }

        $data = array(

        'Student_name' => $this->request->getPost('studentName'),
        'Student_id' => $this->request->getPost('studentNum'),
        'Student_section' => $this->request->getPost('studentSection'),
        'Student_course' => $this->request->getPost('studentCourse'),
        'Student_batch' => $this->request->getPost('studentBatch'),
        'Student_year_level' => $this->request->getPost('studentYear'),
        'Student_profile' => $imageName,
        
        );

        $insertStudent ->insert($data);

        return readirect()->to('/students')->with('success', 'Student added successfully!!');
    
    }
    public function editStudent($id)
    {
        return view('students/edit');
    }
    public function updateStudent($id)
    {
       
    }
    public function deleteStudent($id)
    {
        
    }
}
