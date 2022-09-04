<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Agent;
use App\Models\Assessment;
use App\Models\FarmerAssessment;
use App\Models\Beneficiary;
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

        // dd($assessments);
        // $assessments[1]->questions[0]->count('answer_score');

        $d =  $assessments->map(function ($item, $key) {
       
          return $key;
       
           });

          //  for($d as $key){
          //   $count =  $assessments[$val]->questions->sum('answer_score');
          //  }

        return view('assessments.farmer_assessment')->with(compact('assessments'));
    }


    public function create(Request $request,$id){

      //  return $request;
       $data = $request->data;
       $quesionscore = new Question();
       $agent = Agent::where('agent_id','=',$id)->first();
       $uuid = random_int(1010, 9999);
       $farm = Assessment::where('assessment_id','=',$request->farm_assessment_id)->first();
     
       $farmer = FarmerAssessment::where('assessment_id','=',$request->farm_assessment_id)->first();

       if(isset($farmer)){
       return response()->json(['error'=> 'Beneficiary Already taken Assessment.Thank you'],400);
       }else{
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
          foreach( $data as $key => $val){
            switch($val['assessemt_question_id']){
              case 1:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                  'input_type_id' => $input->id,
                  'option_group_id' => 0,
                  'answer_score' => ($val['answer_response_score']) == "A" ? 3 : (($val['answer_response_score']) == "B" ? 2 : (($val['answer_response_score']) == "C" ? 1 : 0)),
                  'answer_response_score' =>$val['answer_response_score'],
                  'question_name' =>$val['assessemt_question'] ,
                  'answer_text' => $val['assessment_user_response_answer'],
                  'question_required' => $val["answer_required"] == "yes" ? true : false,
                  'answer_required' => $val["answer_required"]== "yes" ? true : false,
                  'question_farmer_assessment_id' => $asses->id
                ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break;

              case 2:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                  'input_type_id' => $input->id,
                  'option_group_id' => 0,
                  'answer_score' =>  ($val['answer_response_score']) == "D" ? 3 : (($val['answer_response_score']) == "C" ? 2 : (($val['answer_response_score']) == "B" ? 1 : 0)),
                  'answer_response_score' =>$val['answer_response_score'],
                  'question_name' =>$val['assessemt_question'] ,
                  'answer_text' => $val['assessment_user_response_answer'],
                  'question_required' => $val["answer_required"] == "yes" ? true : false,
                  'answer_required' => $val["answer_required"]== "yes" ? true : false,
                  'question_farmer_assessment_id' => $asses->id
                ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break;

              case 3:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                    'input_type_id' => $input->id,
                    'option_group_id' => 0,
                    'answer_score' =>   ($val['answer_response_score']) == "A" ? 3 : (($val['answer_response_score']) == "B" ? 2 : (($val['answer_response_score']) == "C" ? 1 : 0)),
                    'answer_response_score' =>$val['answer_response_score'],
                    'question_name' =>$val['assessemt_question'] ,
                    'answer_text' => $val['assessment_user_response_answer'],
                    'question_required' => $val["answer_required"] == "yes" ? true : false,
                    'answer_required' => $val["answer_required"]== "yes" ? true : false,
                    'question_farmer_assessment_id' => $asses->id
                  ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break; 
              case 4:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                      'input_type_id' => $input->id,
                      'option_group_id' => 0,
                      'answer_score' =>   ($val['answer_response_score']) == "A" ? 3 : (($val['answer_response_score']) == "B" ? 2 : (($val['answer_response_score']) == "C" ? 1 : 0)),
                      'answer_response_score' =>$val['answer_response_score'],
                      'question_name' =>$val['assessemt_question'] ,
                      'answer_text' => $val['assessment_user_response_answer'],
                      'question_required' => $val["answer_required"] == "yes" ? true : false,
                      'answer_required' => $val["answer_required"]== "yes" ? true : false,
                      'question_farmer_assessment_id' => $asses->id
                    ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break; 
              case 5:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                        'input_type_id' => $input->id,
                        'option_group_id' => 0,
                        'answer_score' =>   ($val['answer_response_score']) == "D" ? 3 : (($val['answer_response_score']) == "C" ? 2 : (($val['answer_response_score']) == "B" ? 1 : 0)),
                        'answer_response_score' =>$val['answer_response_score'],
                        'question_name' =>$val['assessemt_question'] ,
                        'answer_text' => $val['assessment_user_response_answer'],
                        'question_required' => $val["answer_required"] == "yes" ? true : false,
                        'answer_required' => $val["answer_required"]== "yes" ? true : false,
                        'question_farmer_assessment_id' => $asses->id
                      ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break; 
              case 6:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                          'input_type_id' => $input->id,
                          'option_group_id' => 0,
                          'answer_score' =>   ($val['answer_response_score']) == "D" ? 3 : (($val['answer_response_score']) == "C" ? 2 : (($val['answer_response_score']) == "B" ? 1 : 0)),
                          'answer_response_score' =>$val['answer_response_score'],
                          'question_name' =>$val['assessemt_question'] ,
                          'answer_text' => $val['assessment_user_response_answer'],
                          'question_required' => $val["answer_required"] == "yes" ? true : false,
                          'answer_required' => $val["answer_required"]== "yes" ? true : false,
                          'question_farmer_assessment_id' => $asses->id
                        ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break; 
              case 7:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                            'input_type_id' => $input->id,
                            'option_group_id' => 0,
                            'answer_score' =>   ($val['answer_response_score']) == "A" ? 3 : (($val['answer_response_score']) == "B" ? 2 : (($val['answer_response_score']) == "C" ? 1 : 0)),
                            'answer_response_score' =>$val['answer_response_score'],
                            'question_name' =>$val['assessemt_question'] ,
                            'answer_text' => $val['assessment_user_response_answer'],
                            'question_required' => $val["answer_required"] == "yes" ? true : false,
                            'answer_required' => $val["answer_required"]== "yes" ? true : false,
                            'question_farmer_assessment_id' => $asses->id
                          ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break;
              case 8:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                              'input_type_id' => $input->id,
                              'option_group_id' => 0,
                              'answer_score' =>   ($val['answer_response_score']) == "D" ? 3 : (($val['answer_response_score']) == "C" ? 2 : (($val['answer_response_score']) == "B" ? 1 : 0)),
                              'answer_response_score' =>$val['answer_response_score'],
                              'question_name' =>$val['assessemt_question'] ,
                              'answer_text' => $val['assessment_user_response_answer'],
                              'question_required' => $val["answer_required"] == "yes" ? true : false,
                              'answer_required' => $val["answer_required"]== "yes" ? true : false,
                              'question_farmer_assessment_id' => $asses->id
                            ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break;
              case 9:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                                'input_type_id' => $input->id,
                                'option_group_id' => 0,
                                'answer_score' =>   ($val['answer_response_score']) == "A" ? 3 : (($val['answer_response_score']) == "B" ? 2 : (($val['answer_response_score']) == "C" ? 1 : 0)),
                                'answer_response_score' =>$val['answer_response_score'],
                                'question_name' =>$val['assessemt_question'] ,
                                'answer_text' => $val['assessment_user_response_answer'],
                                'question_required' => $val["answer_required"] == "yes" ? true : false,
                                'answer_required' => $val["answer_required"]== "yes" ? true : false,
                                'question_farmer_assessment_id' => $asses->id
                              ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break; 
              case 10:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                                  'input_type_id' => $input->id,
                                  'option_group_id' => 0,
                                  'answer_score' =>   ($val['answer_response_score']) == "D" ? 3 : (($val['answer_response_score']) == "C" ? 2 : (($val['answer_response_score']) == "B" ? 1 : 0)),
                                  'answer_response_score' =>$val['answer_response_score'],
                                  'question_name' =>$val['assessemt_question'] ,
                                  'answer_text' => $val['assessment_user_response_answer'],
                                  'question_required' => $val["answer_required"] == "yes" ? true : false,
                                  'answer_required' => $val["answer_required"]== "yes" ? true : false,
                                  'question_farmer_assessment_id' => $asses->id
                                ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break; 
              case 11:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                                    'input_type_id' => $input->id,
                                    'option_group_id' => 0,
                                    'answer_score' =>   ($val['answer_response_score']) == "A" ? 3 : (($val['answer_response_score']) == "B" ? 2 : (($val['answer_response_score']) == "C" ? 1 : 0)),
                                    'answer_response_score' =>$val['answer_response_score'],
                                    'question_name' =>$val['assessemt_question'] ,
                                    'answer_text' => $val['assessment_user_response_answer'],
                                    'question_required' => $val["answer_required"] == "yes" ? true : false,
                                    'answer_required' => $val["answer_required"]== "yes" ? true : false,
                                    'question_farmer_assessment_id' => $asses->id
                                  ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break;
              case 12:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                                      'input_type_id' => $input->id,
                                      'option_group_id' => 0,
                                      'answer_score' =>   ($val['answer_response_score']) == "D" ? 3 : (($val['answer_response_score']) == "C" ? 2 : (($val['answer_response_score']) == "B" ? 1 : 0)),
                                      'answer_response_score' =>$val['answer_response_score'],
                                      'question_name' =>$val['assessemt_question'] ,
                                      'answer_text' => $val['assessment_user_response_answer'],
                                      'question_required' => $val["answer_required"] == "yes" ? true : false,
                                      'answer_required' => $val["answer_required"]== "yes" ? true : false,
                                      'question_farmer_assessment_id' => $asses->id
                                    ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break; 
              case 13:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                                        'input_type_id' => $input->id,
                                        'option_group_id' => 0,
                                        'answer_score' =>   ($val['answer_response_score']) == "A" ? 3 : (($val['answer_response_score']) == "B" ? 2 : (($val['answer_response_score']) == "C" ? 1 : 0)),
                                        'answer_response_score' =>$val['answer_response_score'],
                                        'question_name' =>$val['assessemt_question'] ,
                                        'answer_text' => $val['assessment_user_response_answer'],
                                        'question_required' => $val["answer_required"] == "yes" ? true : false,
                                        'answer_required' => $val["answer_required"]== "yes" ? true : false,
                                        'question_farmer_assessment_id' => $asses->id
                                      ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break;
                
              case 14:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                                          'input_type_id' => $input->id,
                                          'option_group_id' => 0,
                                          'answer_score' =>   ($val['answer_response_score']) == "D" ? 3 : (($val['answer_response_score']) == "C" ? 2 : (($val['answer_response_score']) == "B" ? 1 : 0)),
                                          'answer_response_score' =>$val['answer_response_score'],
                                          'question_name' =>$val['assessemt_question'] ,
                                          'answer_text' => $val['assessment_user_response_answer'],
                                          'question_required' => $val["answer_required"] == "yes" ? true : false,
                                          'answer_required' => $val["answer_required"]== "yes" ? true : false,
                                          'question_farmer_assessment_id' => $asses->id
                                        ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break;       
              case 15:
                $input =  InputType::create(['input_type_name' =>  $val['type']]);
                $qn = Question::create([
                                            'input_type_id' => $input->id,
                                            'option_group_id' => 0,
                                            'answer_score' =>   ($val['answer_response_score']) == "A" ? 3 : (($val['answer_response_score']) == "B" ? 2 : (($val['answer_response_score']) == "C" ? 1 : 0)),
                                            'answer_response_score' =>$val['answer_response_score'],
                                            'question_name' =>$val['assessemt_question'] ,
                                            'answer_text' => $val['assessment_user_response_answer'],
                                            'question_required' => $val["answer_required"] == "yes" ? true : false,
                                            'answer_required' => $val["answer_required"]== "yes" ? true : false,
                                            'question_farmer_assessment_id' => $asses->id
                                          ]);
                Answer::create([ 'agent_id' => $id,'question_option_id' => $qn->id,'user_id' => $farm->beneficiary_id,'answer_text' => $val["assessment_user_response_answer"],]);
                AssessmentGroup::create(['question_id' => $qn->id,'beneficiary_id' => $farm->beneficiary_id]);
                break;
              }

          }
        }
       }

      

       

      //   if($asses ){
      //       $data = $request->data;
      //       foreach( $data as $key => $val){
          
      //        $input =  InputType::create([
      //           'input_type_name' =>  $val['type']
      //           ]);
      //        $qn = Question::create([
      //             'input_type_id' => $input->id,
      //             'option_group_id' => 0,
      //             'question_name' =>$val['assessemt_question'] ,
      //             'answer_text' => $val['assessment_user_response_answer'],
      //             'question_required' => $val["answer_required"] == "yes" ? true : false,
      //             'answer_required' => $val["answer_required"]== "yes" ? true : false,
      //             'question_farmer_assessment_id' => $asses->id
      //         ]);

      //         Answer::create([
      //           'agent_id' => $id,
      //           'question_option_id' => $qn->id,
      //           'user_id' => $farm->beneficiary_id,
      //           'answer_text' => $val["assessment_user_response_answer"],
      //         ]);

      //         AssessmentGroup::create([
      //           'question_id' => $qn->id,
      //           'beneficiary_id' => $farm->beneficiary_id
      //         ]);
      
   
      

               
      //          }
      //        }
     
           
             return response()->json(['success' => 'Assessment completed successfully. ', 'id' => $asses->farmer_assessment_id],200);

    //  return $qn;
    }

    public function approve(Request $request, $id){
      $assessment = FarmerAssessment::find($id);
      $assessment->update(['status'=>true]);
       $beneficiary = Beneficiary::where('beneficiary_uid','=',$assessment->beneficiary_id)->first();
       $beneficiary->update(['assessment_status' => true]);
       @session()->flash('success', 'Approved successfully');
      
      return response()->json(['success' => 'Approved successfully.']);
    }
}
