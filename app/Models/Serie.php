<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Serie extends Model
{
    
    use HasFactory;
    protected $table = 'Series';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

     /**
    * Get the user that authored the serie.
    */
   public function author()
   {
    return $this->belongsTo(User::class,'author_id');
       
    
   }

   public function comments() : HasMany {
       return $this->hasMany(Comment::class, 'serie_id');
   }
  
}
