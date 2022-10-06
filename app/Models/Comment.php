<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
        'desc'];


        

    /* Relationships
     belongsToMany - many-to-many relationship. Posts may belong to many categories/tags (which are shared between posts).
     belongsTo - inverse one-to-one or many relationship. Post belongs to one user.
     */
   
    public function user()
    {
        return $this->belongsTo(User::class)->select('id', 'name','avatar');
    }
}
