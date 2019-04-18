<?php

namespace App;

use App\Model\Issue;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

    protected  $fillable = ['issue_id', 'ip_address'];
    public function issues()
    {
        return $this->belongsTo(Issue::class);
    }
}
