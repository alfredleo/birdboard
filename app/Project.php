<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Add [title] to fillable property to allow mass assignment on [App\Project].
    protected $guarded = [];
}
