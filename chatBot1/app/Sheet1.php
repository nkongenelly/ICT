<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet1 extends Model
{
    //
    protected $fillable = ['firstName',
    'lastName',
    'email',
    'gender',
    'messengerUserId',
    'from',
    'to',
    'adults',
    'children',
    'feedback',
    'text',
    'reportIssue'];
}
