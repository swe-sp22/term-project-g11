<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $table = 'applications';
    protected $primaryKey = ['jobPostID','jobSeekerID'];

    protected $fillable = [
        'phoneNumber',
        'email',
        'faculty',
        'experience',
        'coverLetter',
        'graduationYear',
    ];
}
