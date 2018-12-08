<?php

namespace App\Http\Controllers;


use App\Entreprise;
use App\Stage;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Stage_Users;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;
class EnseignantController extends Controller
{
    function internshipValidation(Request $request)
    {
        $user= Auth::user();
        $Stageuser = Stage_Users::where('validator_id','=',$user->id)->where('validation','=','en cours')->get();
        return view('enseignant/internshipValidation',compact('user','Stageuser'));

    }



    function internshipList(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {

        } else {

            $internships=Stage::where('ideator_id','=',Auth::user()->id)->latest()->paginate($perPage);

        }


        return view('enseignant/internshipList',compact('internships'));
    }

    function deleteInternship($id)
    {
        Stage::destroy($id);

        return redirect('main/EspaceEnseignant/internshipList');

    }


    function addInternship(Request $request)
    {
        if($request->isMethod('post')){
            $stage=new Stage();
            $stage->description=$request->input('description');
            $stage->type=$request->input('type');
            $stage->startingDate=$request->input('startingDate');
            $stage->endingDate = $request->input('endingDate');
            $stage->domaine=$request->input('domaine');
            $stage->title=$request->input('title');
            $stage->nbPersons=$request->input('nbPersons');
            $stage->status='autre';
            $stage->ideator_id=Auth::user()->id;
            $stage->save();
        }
        return view('enseignant/addInternship');
    }

    function updateInternship(Request $request,$id)
    {
        $internship= Stage::find($id);
        if($internship->ideator_id==Auth::user()->id){


            if($request->isMethod('post')){
                $stage=$internship;
                $stage->description=$request->input('description');
                $stage->type=$request->input('type');
                $stage->startingDate=$request->input('startingDate');
                $stage-> endingDate=$request->input('endingDate');
                $stage->domaine=$request->input('domaine');
                $stage->title=$request->input('title');
                $stage->nbPersons=$request->input('nbPersons');
                $stage->status='c';
                $stage->save();
                return redirect('main/EspaceEnseignant/internshipList');
            }else{

                return view('enseignant/updateInternship',compact('internship'));
            }
        }else{
            return redirect('main/EspaceEnseignant/internshipList');
        }

    }

    function validation(Request $request,$stage_id,$user_id)
    {

                $etat=$request->get('validation');
                if($etat=='validé'){
                    $users = Stage_Users::where('user_id', '=', $user_id)->where('stage_id', '=', $stage_id)->update(['validation' =>'validé']);

                }else{
                    $users = Stage_Users::where('user_id', '=', $user_id)->where('stage_id', '=', $stage_id)->update(['validation' =>'non validé']);

                }
        return redirect('main/EspaceEnseignant/internshipValidation');



    }



    function profile(Request $request)
    {
        $user= Auth::user();
        if($request->isMethod('post')){

                if(Hash::check($request->input('oldPassword'), $user->getAuthPassword())&&$request->input('password')==$request->input('confirmPassword')){

                   $user->password = Hash::make($request->input('password'));
                   $user->save();
                    return redirect('main/EspaceEnseignant/profile');
            }
           // return view('enseignant/addInternship');

        }else{

            return view('enseignant/profile');
          //  return redirect('main/EspaceEnseignant/profile');
        }





    }

    function internshipsRequests()
    {

        return view('enseignant/internshipsRequests');

    }

    function index()
    {

        return redirect('main/EspaceEnseignant/internshipValidation');

    }


    function deleteRequest($stage_id,$user_id)
    {
        $internship= Stage::find($stage_id);
        $user=User::find($user_id);

        $res = Stage_Users::where('user_id','=',$user->id)->where('stage_id','=',$internship->id)->delete();


        return redirect('main/EspaceEnseignant/internshipsRequests');

    }

function downloadCv($user_id)
    {
        $user=User::find($user_id);

        return response()->download(storage_path($user->file));

    }



    function acceptInternship($stage_id,$user_id)
    {


        $Stage_Users = Stage_Users::where('user_id','=',$user_id)->where('stage_id','=',$stage_id)->update(['assignment' => 1]);

        return redirect('main/EspaceEnseignant/internshipsRequests');

    }

    function downloadRapport($stage_id,$user_id)
    {
        $Stage_Users = Stage_Users::where('user_id','=',$user_id);

        return response()->download(storage_path($Stage_Users->rapport));

    }


    function downloadJournal($stage_id,$user_id)
    {
        $Stage_Users = Stage_Users::where('user_id','=',$user_id)->where('stage_id','=',$stage_id)->first();

        return response()->download(storage_path($Stage_Users->journal));

    }



}
