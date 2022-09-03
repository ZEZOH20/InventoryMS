<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class comment extends Model
{
    protected $fillable = [
        'comment', 'user_id',
    ];
    use HasFactory;
    public function user(){
        return $this->BelongsTo(User::class);
    }
}
