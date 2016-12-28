<?php
/**
 * Created by PhpStorm.
 * User: studio-book
 * Date: 12/6/16
 * Time: 6:36 PM
 */

namespace ShawnSandy\Summernote\App\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use ShawnSandy\Summernote\App\Models\Snotes;
use ShawnSandy\Summernote\App\Notes\StoreNotesRequest;

class NotesController extends Controller
{

    public function index()
    {
        $notes = Snotes::with('user')->get();
        return view('notes::index', compact('notes'));
    }

    public function show($id)
    {

    }

    public function create()
    {
        $images = [];
        return view('notes::create', compact('images'));
    }

    public function  store(StoreNotesRequest $request){
        $notes = $request->user()->snotes()->create($request->all());
        if($notes):
            return back()->with('status', 'Your notes has bee created');
        endif;
        return back()->withInput();
    }


    public function edit($id){

    }

    public function update(Request $request, $id)  {

    }

    public function destroy($id){

    }

}
