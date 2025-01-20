<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Item extends Model
{
    use HasFactory;

    CONST STATUS_PENDING = 'pending';
    CONST STATUS_COMPLETED = 'completed';
    CONST STATUS_IN_PROGRESS = 'in-progress';

    protected $fillable = ['title', 'status', 'notes'];

    public function getStatusAttribute()
    {
        return Str::title($this->attributes['status']);
    }
}
