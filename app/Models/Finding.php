<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finding extends Model
{
    use HasFactory;

    protected $table = 'reportdata';

    protected $fillable = [
        'user_id',
        'title',
        'asset_name',
        'severity',
        'severity_score',
        'description',
        'foto_bukti',
        'url_video',
        'submitted_by',
    ];
}
