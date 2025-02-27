<?php 

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomStudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamResultController;
use App\Http\Controllers\ExamTypeController;

Route::apiResource('students', StudentController::class);
Route::apiResource('parents', ParentController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('classrooms', ClassroomController::class);
Route::apiResource('grades', GradeController::class);
Route::apiResource('courses', CourseController::class);
Route::apiResource('classroom_students', ClassroomStudentController::class);
Route::apiResource('attendance', AttendanceController::class);
Route::apiResource('exams', ExamController::class);
Route::apiResource('exam_results', ExamResultController::class);
Route::apiResource('exam_types', ExamTypeController::class);
