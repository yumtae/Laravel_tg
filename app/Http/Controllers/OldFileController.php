<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldFileController extends Controller
{
    
    
      


    public function rouletteSpin(REQUEST $request ){


        function weighted_random($weights) {
            $r = rand(1, array_sum($weights));
            for($i=0; $i<count($weights); $i++) {
              $r -= $weights[$i];
              if($r < 1) return $i;
            }
            return false;
          }


            $today = date('Y-m-d');
            $chk = true;

            if($chk == false)
            {
                $data['chk'] = false;
            }
            else
            {
                $coupon_kind = array('voucher','point','point','point','voucher','point','point','point','worldpick','point');
                $coupon_point = array(5000,5,20,1,3000,10,15,3,0,1);	
                $prd= array(' 5000원','포인트 5P','포인트 20P','포인트 1P',' 3000원','포인트 10P','포인트 15P','포인트 3P','상품1','포인트 1P');
                
                $weights = array(3,5,1,33,5,3,2,6,9,33); // 확률


                $index = weighted_random($weights);
                
                $degree = (mt_rand(2,7) * 360) + ($index *36 + mt_rand(1,35));
                
                
                if($coupon_kind[$index] == 'point')
                {
                    $yn= 'Y';
                    //insert_point($mb_id,$coupon_point[$index],$today." 출석체크");
                }
                else 
                {
                    $yn = 'N';
                }
                    //setNewCoupon($mb_id,$coupon_kind[$index],$coupon_point[$index],$yn);
                
                
                $data['degree'] = $degree;


                $data['prd'] = $prd[$index];
                $data['chk'] = true;

                
            
            return response()->json($data);
        }

    }
    
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
