<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\JobPost;
use App\Models\JobCategory;
use App\Models\Applications;

class CompanyController extends Controller
{
    public function companyHomePage(){
        return view('companyDashboard');
    }

    public function postJob(){
        return view('postJob');
    }

    public function postJob_action(Request $request){
        // validate request input
        $request->validate([
            'jobTitle' => 'required',
            'jobLocation' => 'required',
            'jobDescription' => 'required',
            'jobRequirments' => 'required',
            'jobCategory' => 'required',
            'deadline' => 'required|after:yesterday',
        ]);
        $category = JobCategory::where('categoryName','=',$request->jobCategory)->first();
        if(!$category){
            $addCategory = new JobCategory([
                'categoryName' => $request->jobCategory,
            ]);
            $save = $addCategory->save();
            if(!$save){
                return back()->with('fail', 'Something went wrong try again later!');
            }
        }
        $category = JobCategory::select('categoryID')->where('categoryName','=',$request->jobCategory)->first();
        $addJobPost = new JobPost([
            'jobTitle' => $request->jobTitle,
            'jobLocation' => $request->jobLocation,
            'jobDescription' => $request->jobDescription,
            'jobRequirments' => $request->jobRequirments,
            'companyID' => session('LoggedUser'),
            'categoryID' => $category->categoryID,
            'deadline' => $request->deadline,
        ]);
        $save = $addJobPost->save();
        if($save){
            return redirect()->route('companyDashboard');
        }else{
            return back()->with('fail', 'Something went wrong try again later!');
        }
    }
}