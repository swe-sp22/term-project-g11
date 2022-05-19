<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\JobPost;
use App\Models\JobCategory;
use App\Models\Applications;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function companyHomePage(){
        $userInfo = Users::select('email','name')->where('userID','=',session('LoggedUser'))->first();
        $posts = JobPost::select('jobID',DB::raw('COUNT(applications.jobSeekerID) AS countApp'),'jobTitle','jobLocation','jobDescription','jobRequirments','deadline','categoryName')
        ->groupBy('job_posts.jobID','jobTitle','jobLocation','jobDescription','jobRequirments','deadline','categoryName')
        ->join('job_categories','job_categories.categoryID','=','job_posts.categoryID')
        ->leftJoin('applications','applications.jobPostID','job_posts.jobID')
        ->where('companyID','=',session('LoggedUser'))->get();
        $data['companyName'] = $userInfo->name;
        $data['companyEmail'] = $userInfo->email;
        $data['postsCount'] = $posts->count();
        $data['posts'] = $posts;
        return view('company.companyDashboard', $data);
    }

    public function postJob(){
        return view('company.postJob');
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