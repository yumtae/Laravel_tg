<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('index');
});


Route::get('/engineer', function () { return view('old_file.engineer.index'); });








//산업기사실기
Route::get('/industrial_skill', function () { return view('old_file.industrial_skill.index'); });
Route::get('/process/{no}', [App\Http\Controllers\OldFileController::class,'industrialSkillProcess']);
Route::get('/System_management/{no}', [App\Http\Controllers\OldFileController::class,'industrialSkillSystemManagement']);
Route::get('/new_technology/{no}', [App\Http\Controllers\OldFileController::class,'industrialSkillNewTechnology']);
Route::get('/definition/{no}', [App\Http\Controllers\OldFileController::class,'industrialSkillDefinition']);







Route::get('/algorithm', function () { return view('old_file.algorithm.index'); });





    // 이 그룹 내의 모든 라우트는 로그인한 사용자에게만 접근 가능합니다.
    Route::get('/image/create', [App\Http\Controllers\ImageController::class, 'create'])->name('image.create');
    Route::post('/image/store', [App\Http\Controllers\ImageController::class, 'store'] )->name('image.store');



//이미지업로드 예제


Route::get('/image' , [App\Http\Controllers\ImageController::class, 'index'] )->name('image.index');



//게시판예제

Route::get('/boardEx' , [App\Http\Controllers\BoardExController::class,'index'])->name('BoardEx.index');

Route::get('/boardEx/create' , [App\Http\Controllers\BoardExController::class,'create'])->name('BoardEx.create');
Route::post('/boardEx/store' , [App\Http\Controllers\BoardExController::class,'store'])->name('BoardEx.store');

Route::get('/boardEx/show/{id}' , [App\Http\Controllers\BoardExController::class,'show'])->name('BoardEx.show');


Route::get('/boardEx/{boardEx}/edit' , [App\Http\Controllers\BoardExController::class,'edit'])->name('BoardEx.edit');
Route::patch('/boardEx/{boardEx}' , [App\Http\Controllers\BoardExController::class,'update'])->name('BoardEx.update');
Route::delete('/boardEx/{boardEx}' , [App\Http\Controllers\BoardExController::class,'destroy'])->name('BoardEx.destroy');








Route::get('/engineer_skill', function () { return view('old_file.engineer_skill.index'); });
Route::get('/engineer_skill/SQL/{no}', [App\Http\Controllers\OldFileController::class,'SQLPage']);
Route::get('/engineer_skill/requirements/{no}', [App\Http\Controllers\OldFileController::class,'requirementsPage']); 
Route::get('/engineer_skill/data_IO_build/{no}', [App\Http\Controllers\OldFileController::class,'data_IO_buildPage']);
Route::get('/engineer_skill/Integrated_implemented/{no}', [App\Http\Controllers\OldFileController::class,'Integrated_implementedPage']);
Route::get('/engineer_skill/operating_system/{no}', [App\Http\Controllers\OldFileController::class,'operating_systemPage']);
Route::get('/engineer_skill/Special_Lecture/{no}', [App\Http\Controllers\OldFileController::class,'Special_LecturePage']);
Route::get('/engineer_skill/skill_test/{no}', [App\Http\Controllers\OldFileController::class,'skill_testPage']);
Route::get('/engineer_skill/program_language/{no}', [App\Http\Controllers\OldFileController::class,'program_languagePage']);

Route::get('/engineer_skill/interface_design/{no}', [App\Http\Controllers\OldFileController::class,'interface_designPage']);






Route::get('/engineer/software_design/{no}', [App\Http\Controllers\OldFileController::class,'software_designPage']);
Route::get('/engineer/database/{no}', [App\Http\Controllers\OldFileController::class,'databasePage']);
Route::get('/engineer/system_management/{no}', [App\Http\Controllers\OldFileController::class,'system_managementPage']);
Route::get('/engineer/information_system/{no}', [App\Http\Controllers\OldFileController::class,'information_systemPage']);
Route::get('/engineer/analysis_test/{no}', [App\Http\Controllers\OldFileController::class,'analysis_testPage']);
Route::get('/engineer/software_development/{no}', [App\Http\Controllers\OldFileController::class,'software_developmentPage']);




Route::get('/network', function () { return view('old_file.network.index'); });

Route::get('/web', function () { return view('web.index'); });
Route::get('/spring', function () { return view('old_file.spring.index'); });
Route::get('/java', function () { return view('old_file.java.index'); });

//Route::prefix('old_file')->group(function(){

    //Route::get('/enginner',[OldFileController::class,'engineer.index']);

//});


Route::get('/test', function () {
    return view('test.test');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
