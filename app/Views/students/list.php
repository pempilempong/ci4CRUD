<?php

    $this->extend('layout/main');
    $this->section('body');

?>

<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php endif; ?>
  
<h1>Student List</h1>
<a href="/students/create" class="btn btn-primary">Add Students</a>
<table class = "table">
    <thead>
        <tr>
            <th scope ="col">#</th>
            <th scope ="col">Student Name</th>
            <th scope ="col">Student Number</th>
            <th scope ="col">Student Section</th>
            <th scope ="col">Student Course</th>
            <th scope ="col">Student Batch</th>
            <th scope ="col">Student Year Level</th>
            <th scope ="col">Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>


<?php $this->endSection(); ?>