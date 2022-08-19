<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form_list;
use App\Models\Training;
use App\Models\Response;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $forms = Form_list::orderBy('created_at','desc')->get();
        return view('activities.index',compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $form = Form_list::find($id);
        return view('view_form.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // return response()->json($request);
        //  return $request;
        $loop = true;
        $form_data =$request->form_data;
        $code = $form_data;
        $form_code = $request->form_code;
        if(empty($form_code)){
            while($loop == true){
                $code=  mt_rand(0,9999999999);
                $code = sprintf("%'.09d",$code);
                $chk =  Form_list::where('form_code','=', $code)->count();
                if($chk <= 0)
                break;
            }
        }
        $fname = $code.".html";
        // public_path()
        $create_form = file_put_contents(public_path("forms/".$fname),$form_data);

        if(!$create_form){
            // $resp['status'] = 'failed';
            // $resp['error'] = 'error occured while saving the form';
            return response()->json(['error'=> 'error occured while saving the form', 'status'=>'failed'],401);
            exit;
        }
  

        if(empty($form_code))
         $form = new Form_list();
         $form->form_code = $code;
         $form->title = $request->title;
         $form->form = $form_data;
         $form->training_id = intval($request->training_id);
         $form->description = $request->description;
         $form->fname =$fname;
         if($form->save()){
           return redirect()->back()->with('success','form has successfully been submitted');
         }
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     /**
     * View Forms the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewform($id)
    {
        //
        $form = Form_list::find($id);
        return view('viewform.index',compact('forms'));
    }

    /**
     * Response the specif
     * ied resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  response($id){
        // assessment/viewform
        $responses = Response::where('rl_id','=',$id)->find(1);
        return view('viewresponse.index')->with('id',$id,compact('responses'));
    }


      /**
     * Form the specif
     * ied resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  response_form($id){
        // assessment/viewform
        $form = Form_list::find($id);
        return view('viewresponse.create')->with('form',$form);
        // return "HELLO FORM";
    }
}
