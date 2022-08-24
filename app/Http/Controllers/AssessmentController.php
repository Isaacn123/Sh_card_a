<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\AssessmentGroup;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Agent;
use App\Models\InputType;
use App\Models\Answer;
use Illuminate\Support\Collection;
class AssessmentController extends Controller
{
    //

    public function index(){

        $assessments = Assessment::with('questions')->get();
        // $assessment = Assessment::with('questions')->get();
        $assessment = Assessment::with('questions')->find(1);
        $qns = AssessmentGroup::with('questions')->get();
         $questions = $assessment->questions;
        // foreach($qns as $q ){
        //   if($qns->last() == $q){
        //     $qn = Question::where('id','=',$val['question_id'])->get();
        //     array_push($questions,$qn);
        //   }
         
        // }
       
        // $newassess = collect($assessments);
        // $qm = $newassess->all();
      //  return $qm->questions;
      
        // return  $questions->where('id', $assessment)->where('answer_text','=','yes')->count();
        return view('assessments.form_one')->with(compact('assessments'));
    }

    public function create(Request $request,$id){

        // Assessment
        // AssessmentGroup
        // Question
        // QuestionOption
    // 'user_id',
    // 'company_id',
    // 'assessment_name',
    // 'assessment_description',
    //  return $request->beneficiary_id;
       $uuid = random_int(1010, 9999);
       $agent = Agent::where('agent_id','=',$id)->first();
       $asses =  Assessment::create([
         'user_id' => $request->beneficiary_id,
         'beneficiary_id' => $request->beneficiary_id,
         'company_id' => $agent->company_id,
         'assessment_id' => $uuid,
         'assessment_name' => $request->assessment_name,
         'assessment_description' => 'assessment'
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
                  'question_assessment_id' => $asses->id
              ]);

              Answer::create([
                'agent_id' => $id,
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
     
           
             return response()->json(['success' => 'Assessment completed successfully. ', 'id' => $asses->assessment_id]);

    //  return $qn;
    }

  public function fetchid(){
    $asses_id = Assessment::pluck('assessment_id');

    return response($asses_id,200);
  }
}
