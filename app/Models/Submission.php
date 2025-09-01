<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = ['contact_id', 'message', 'file_path'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
