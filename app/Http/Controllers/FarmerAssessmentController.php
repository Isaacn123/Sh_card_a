<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Agent;
use App\Models\Assessment;
use App\Models\FarmerAssessment;
use App\Models\InputType;
use App\Models\Answer;
use App\Models\AssessmentGroup;

class FarmerAssessmentController extends Controller
{
    //


    public function index(){

        $assessments = FarmerAssessment::with('questions')->get();
        // $assessment = Assessment::with('questions')->get();
        $assessment = FarmerAssessment::with('questions')->find(1);
        $qns = AssessmentGroup::with('questions')->get();
    
        return view('assessments.farmer_assessment')->with(compact('assessments'));
    }


    public function create(Request $request,$id){


       $agent = Agent::where('agent_id','=',$id)->first();
       $uuid = random_int(1010, 9999);
       $farm = Assessment::where('assessment_id','=',$request->farm_assessment_id)->first();
       $asses =  FarmerAssessment::create([
         'agent_id' => $request->agent_id,
         'beneficiary_id' => $farm->beneficiary_id,
         'company_id' => $agent->company_id,
         'farmer_assessment_id' => $uuid,
         'assessment_farm_id' => $request->farm_assessment_id,
         'assessment_name' => $request->assessment_name,
         'assessment_description' => $request->assessment_subtitle
        ]);

        if($asses ){
            $data = $request->data;
            foreach( $data as $key => $val){
              // $res = $val;
             $input =  InputType::create([
                'input_type_name' =>  $val['type']
                ]);
             $qn = Question::create([
                  'input_type_id' => $input->id,
                  'option_group_id' => 0,
                  'question_name' =>$val['assessemt_question'] ,
                  'answer_text' => $val['assessment_user_response_answer'],
                  'question_required' => $val["answer_required"] == "yes" ? true : false,
                  'answer_required' => $val["answer_required"]== "yes" ? true : false,
                  'question_farmer_assessment_id' => $asses->id
              ]);

              Answer::create([
                'agent_id' => $id,
                'user_id' =>0,
                'question_option_id' => $qn->id,
                'user_id' => $request->beneficiary_id,
                'answer_text' => $val["assessment_user_response_answer"],
              ]);

              AssessmentGroup::create([
                'question_id' => $qn->id,
                'beneficiary_id' => $request->beneficiary_id
              ]);
      
   
      
              if($qn){
               
               
                }
               
               }
             }
     
           
             return response()->json(['success' => 'Assessment completed successfully. ', 'id' => $asses->assessment_id],200);

    //  return $qn;
    }
}
