<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\JobPost;


class JobSeekerController extends Controller
{
    public function jobsfeed()
    {
        $User=Users::select('name','email')->where('userID','=',session('LoggedUser'))->first();
        $Job=JobPost::join('users','users.userID','=','job_posts.companyID')->join('job_categories','job_categories.categoryID','=','job_posts.categoryID')->select('jobTitle','jobDescription','name','deadline','categoryName','jobID')->get();
        // $Job=JobPost::join('users','users.userID','=','job_posts.companyID')->get();
            //    return $Job;
        $userInfo['name'] =$User->name;
        $userInfo['email'] = $User->email;
        $userInfo['posts'] = $Job;
        return view('jobsfeed',$userInfo);
    }
}
