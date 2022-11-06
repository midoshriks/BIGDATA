<?php

namespace App\Models;

use App\Models\User;
use App\Models\compane;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class client extends Model
{
    use HasFactory;

    public $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'qr_code', 'id');
    }

    public function companes()
    {
        return $this->belongsTo(compane::class, 'type_compane', 'id');
    }
}
