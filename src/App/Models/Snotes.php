<?php
/**
 * Created by PhpStorm.
 * User: studio-book
 * Date: 12/8/16
 * Time: 5:42 AM
 */

namespace ShawnSandy\Summernote\App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Snotes extends Model
{
    protected $fillable = ['notes_title', 'notes_content'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

}