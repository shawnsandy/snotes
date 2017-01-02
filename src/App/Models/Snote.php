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
use Illuminate\Database\Eloquent\SoftDeletes;

class Snote extends Model
{
    use SoftDeletes;
    protected $fillable = ['notes_title', 'notes_content'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

}
