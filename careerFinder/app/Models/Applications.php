<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $table = 'applications';
    protected $primaryKey = 'appID';

    protected $fillable = [
        'jobPostID',
        'jobSeekerID',
        'applicantName',
        'phoneNumber',
        'email',
        'faculty',
        'experience',
        'coverLetter',
        'graduationYear',
    ];
}
