<?php
/**
 * Created by PhpStorm.
 * User: studio-book
 * Date: 12/9/16
 * Time: 5:27 PM
 */

namespace ShawnSandy\Summernote\App\Notes;


use App\User;
use ShawnSandy\Summernote\App\Models\Snotes;

trait NotesTrait
{

    /**
     * Gives the user class access to notes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function snotes(){
        $userNotes = new User;
        return $userNotes->hasMany(Snotes::class);
    }

}