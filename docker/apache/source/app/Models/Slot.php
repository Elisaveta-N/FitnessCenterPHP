<?php

namespace App\Models;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slot extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function activity() {
        return $this->belongsTo(Activity::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_slots');
    }
}
