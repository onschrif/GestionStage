<?php

namespace App\Http\Controllers;

use App\Entreprise;
use Illuminate\Http\Request;
use App\Stage_Users;
use Auth;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;
use Validator;
use Redirect;
use App\FileModel;

class AdminController extends Controller
{
    function AdminHome()
    {

        return view('admin/dashboard');
    }
    function login()
    {

        return view('login');
    }

    function newCompanys(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {

        } else {

            $companys= Entreprise::where('status','=',0)->latest()->paginate($perPage);

        }

        return view('admin/newCompanys',compact('companys'));

    }



    function acceptNewCompanys($id)
    {


            $companys= Entreprise::find($id);
            $companys->status=1;
            $companys->save();



        return redirect('admin/newCompanys');
    }

    function refuseNewCompanys($id)
    {

        Entreprise::destroy($id);




        return redirect('admin/newCompanys');
    }

    function deleteCompanys($id)
    {

        Entreprise::destroy($id);




        return redirect('admin/companys');
    }


    function companys(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 2;

        if (!empty($keyword)) {

        } else {

            $companys= Entreprise::where('status','=',1)->latest()->paginate($perPage);

        }

        return view('admin/companys',compact('companys'));

    }


    function profile()
    {

        return view('admin/profile');
    }


    function users(Request $request)
    {
        //$users=\App\User::all();
        $keywordS = $request->get('searchS');
        $keywordT = $request->get('searchT');
        $perPage = 10;

        if (!empty($keywordS)) {
            $students = \App\User::where('type','=','etudiant')->latest()->paginate($perPage);

        } else {
            $students = \App\User::where('type','=','etudiant')->latest()->paginate($perPage);


        }
        if (!empty($keywordT)) {
            $teachers= \App\User::where('type','=','enseignant')->latest()->paginate($perPage);
        } else {
            $teachers= \App\User::where('type','=','enseignant')->latest()->paginate($perPage);

        }

       // $students=\App\User::where('type','=','etudiant')->get();


        return view('admin/users',compact('students'),compact('teachers'));
    }

    function validation()
    {
        $Stageuser = Stage_Users::where('validation','=','non affecté')->get();
        $StageState = Stage_Users::where('validation','=','validé')->orWhere('validation','=','non validé')->get();

        return view('admin/validation',compact('Stageuser','StageState'));
    }
    function choisirEns(Request $request,$stage_id,$user_id)
    {
        $perPage = 10;

        if ($request->isMethod('POST')) {
            if(!empty($request->input('firstname'))){
                $teachers= \App\User::where('type','=','enseignant')->where('firstname','=',$request->input('firstname'))->latest()->paginate($perPage);
                return view('admin/affectation',compact('teachers','user_id','stage_id'));
            }else if(!empty($request->input('lastname'))){
                $teachers= \App\User::where('type','=','enseignant')->where('lastname','=',$request->input('lastname'))->latest()->paginate($perPage);
                return view('admin/affectation',compact('teachers','user_id','stage_id'));
            }else if(!empty($request->input('domaine'))){
                $teachers= \App\User::where('type','=','enseignant')->where('domaine','=',$request->input('domaine'))->latest()->paginate($perPage);
                return view('admin/affectation',compact('teachers','user_id','stage_id'));
            }

        }else{

            $teachers= \App\User::where('type','=','enseignant')->latest()->paginate($perPage);
            return view('admin/affectation',compact('teachers','user_id','stage_id'));

        }
    }
    function affecterEns($ens_id,$stage_id,$user_id)
    {
        $res = Stage_Users::where('user_id', '=', $user_id)->where('stage_id', '=', $stage_id)->update(['validator_id' => $ens_id,'validation'=>'en cours']);

        return redirect()->back();
    }
    function uploadDocumentation()
    {

        return view('admin/uploadDocumentation');
    }

    function uploadJournal(){

        $file = Input::file('journal');


        $rules = array(

            'journal' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg,pdf'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('admin/uploadDocumentation')->withInput()->withErrors($validator);

        } else if ($validator->passes()) {
            // checking file is valid.
            if (Input::file('journal')->isValid()) {

                // upload path
                $extension = Input::file('journal')->getClientOriginalExtension(); // getting  extension
                $filename = 'journal.docx'; // renameing

                $destinationPath = '../storage';//its refers proj/public/files directry

                //$file->move($destinationPath, $filename);


                $upload_success = $file->move($destinationPath, $filename);


                $notification = array(
                    'message' => 'File Uploaded successfully!',
                    'alert-type' => 'success'
                );

                return view('admin/uploadDocumentation')->with($notification);


            } else {
                // sending back with error message.
                $notification = array(
                    'message' => 'uploaded file is not valid!',
                    'alert-type' => 'error'
                );

                return view('admin/uploadDocumentation')->with($notification);
            }


        }

    }

    function uploadAttestation(){

        $file = Input::file('attestation');


        $rules = array(

            'attestation' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg,pdf'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('admin/uploadDocumentation')->withInput()->withErrors($validator);

        } else if ($validator->passes()) {
            // checking file is valid.
            if (Input::file('attestation')->isValid()) {

                // upload path
                $extension = Input::file('attestation')->getClientOriginalExtension(); // getting  extension
                $filename = 'attestation.pdf'; // renameing

                $destinationPath = '../storage';//its refers proj/public/files directry

                //$file->move($destinationPath, $filename);


                $upload_success = $file->move($destinationPath, $filename);


                $notification = array(
                    'message' => 'File Uploaded successfully!',
                    'alert-type' => 'success'
                );

                return view('admin/uploadDocumentation')->with($notification);


            } else {
                // sending back with error message.
                $notification = array(
                    'message' => 'uploaded file is not valid!',
                    'alert-type' => 'error'
                );

                return view('admin/uploadDocumentation')->with($notification);
            }


        }

    }

    function index()
    {

        return view('admin/dashboard');
    }
}
