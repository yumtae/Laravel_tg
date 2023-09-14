<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldFileController extends Controller
{
    


    //기사실기
    public function requirementsPage($no){

        return view('old_file.engineer_skill.requirements' , ['no' => $no]);

    }


    
    public function interface_designPage($no){

        return view('old_file.engineer_skill.interface_design' , ['no' => $no]);

    }

    public function program_languagePage($no){

        return view('old_file.engineer_skill.program_language' , ['no' => $no]);

    }
    
    
    

    public function data_IO_buildPage($no){

        return view('old_file.engineer_skill.data_IO_build' , ['no' => $no]);

    }
    public function Integrated_implementedPage($no){

        return view('old_file.engineer_skill.Integrated_implemented' , ['no' => $no]);

    }
    public function Special_LecturePage($no){

        return view('old_file.engineer_skill.Special_Lecture' , ['no' => $no]);

    }
    public function operating_systemPage($no){

        return view('old_file.engineer_skill.operating_system' , ['no' => $no]);

    }
    public function skill_testPage($no){

        return view('old_file.engineer_skill.skill_test' , ['no' => $no]);

    }







    //기사필기
    public function sqlPage($no){

        return view('old_file.engineer_skill.SQL' , ['no' => $no]);

    }

    public function software_designPage($no){

        return view('old_file.engineer.software_design' , ['no' => $no]);

    }

    public function databasePage($no){

        return view('old_file.engineer.database' , ['no' => $no]);

    }

    public function system_managementPage($no){

        return view('old_file.engineer.System_management' , ['no' => $no]);

    }

    public function information_systemPage($no){

        return view('old_file.engineer.information_system' , ['no' => $no]);

    }

    public function software_developmentPage($no){

        return view('old_file.engineer.software_development' , ['no' => $no]);

    }
    public function analysis_testPage($no){

        return view('old_file.engineer.analysis_test' , ['no' => $no]);

    }

    





    //산업기사 실기

    public function industrialSkillDefinition($no){

        return view('old_file.industrial_skill.definition' , ['no' => $no]);

    }
    public function industrialSkillProcess($no){

        return view('old_file.industrial_skill.process' , ['no' => $no]);

    }

    public function industrialSkillSystemManagement($no){

        return view('old_file.industrial_skill.System_management' , ['no' => $no]);

    }

    public function industrialSkillNewTechnology($no){

        return view('old_file.industrial_skill.new_Technology_Trends' , ['no' => $no]);

    }


    
    


}
