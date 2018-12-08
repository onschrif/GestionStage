<?php

namespace App\Http\Controllers;

use App\Entreprise;
use App\Stage;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Stage_Users;
use Illuminate\Support\Facades\Hash;

class ResponsableController extends Controller
{
    function addCompany(Request $request)
    {

        $company = Entreprise::where('manager_id', '=', Auth::user()->id)->get();
        if (empty($company[0])){
            if($request->isMethod('post')){
                $entreprise=new Entreprise();
                $entreprise->name=$request->input('name');
                $entreprise->fiscalNumber=$request->input('fiscalNumber');
                $entreprise->mail=$request->input('email');
                $entreprise->phone=$request->input('phoneNumber');
                $entreprise->address=$request->input('address');
                $entreprise->description=$request->input('description');
                $entreprise->status=0;
                $entreprise->manager_id=Auth::user()->id;
                $entreprise->save();
                $exist=true;
                $req=0;
                return view('manager/addCompany',compact('exist','req'));
            }
            $exist=false;
            return view('manager/addCompany',compact('exist'));

        }else{
            $req=$company[0]->status;
            $exist=true;
            return view('manager/addCompany',compact('exist','req'));
        }


    }


    function internshipList(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {

        } else {

            $internships=Stage::where('ideator_id','=',Auth::user()->id)->latest()->paginate($perPage);

        }


        return view('manager/internshipList',compact('internships'));
    }

    function deleteInternship($id)
    {
        Stage::destroy($id);

        return redirect('main/EspaceResponsable/internshipList');

    }


    function addInternship(Request $request)
    {
        $company = Entreprise::where('manager_id', '=', Auth::user()->id)->get();
        if (empty($company[0])){

            $exist=false;
            return view('manager/addInternship',compact('exist'));

        }elseif ($request->isMethod('post')){
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

            $exist=true;
            $req=1;
            return view('manager/addInternship',compact('exist','req'));
        }
        else{
            $req=$company[0]->status;
            $exist=true;
            return view('manager/addInternship',compact('exist','req'));
        }


    }

    function updateInternship(Request $request,$id)
    {
        $internship= Stage::find($id);
        if($internship->ideator_id==Auth::user()->id){


        if($request->isMethod('post')){
            $stage=$internship;
            $stage->description=$request->input('description');
            $stage->type=$request->input('type');
            $stage-> endingDate=$request->input('endingDate');
            $stage->duration=$request->input('duration');
            $stage->domaine=$request->input('domaine');
            $stage->title=$request->input('title');
            $stage->nbPersons=$request->input('nbPersons');
            $stage->status='autre';
            $stage->save();
            return redirect('main/EspaceResponsable/internshipList');
        }else{

            return view('manager/updateInternship',compact('internship'));
        }
        }else{
            return redirect('main/EspaceResponsable/internshipList');
        }

    }



    function profile(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {

            $user->telNumber = $request->input('telNumber');
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            if (Hash ::check($request->input('oldPassword'), $user->getAuthPassword()) && $request->input('password') == $request->input('confirmPassword')&&$request->input('password')!='') {

                $user->password = Hash::make($request->input('password'));


            }
            $user->save();


            return view('manager/profile',compact('user'));
        }

        return view('manager/profile',compact('user'));
    }

    function internshipsRequests()
    {

        return view('manager/internshipsRequests');
    }

    function index()
    {

        return view('manager/dashboard');
    }

    function deleteRequest($stage_id,$user_id)
    {

       Stage_Users::where('user_id','=',$user_id)->where('stage_id','=',$stage_id)->delete();


        return redirect('main/EspaceResponsable/internshipsRequests');

    }


    function acceptInternship($stage_id,$user_id)
    {

        Stage_Users::where('user_id','=',$user_id)->where('stage_id','=',$stage_id)->update(['assignment' => 1]);


        return redirect('main/EspaceResponsable/internshipsRequests');

    }

    function downloadCv($user_id)
    {
        $user=User::find($user_id);

        return response()->download(storage_path($user->file));

    }

}
