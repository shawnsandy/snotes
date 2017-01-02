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
use ShawnSandy\Summernote\App\Models\Snote;
use ShawnSandy\Summernote\App\Notes\StoreNotesRequest;

class NotesController extends Controller
{

    public function index()
    {
        $notes = Snote::with('user')->orderBy('id', 'DESC')->get();
        return view('notes::index', compact('notes'));
    }

    public function show($id)
    {
        $note = Snote::with('user')->where('id', $id)->first();
        return view('notes::show-note', compact('note'));
    }

    public function create()
    {
        $images = [];
        return view('notes::create', compact('images'));
    }

    public function  store(StoreNotesRequest $request){
        $notes = $request->user()->snotes()->create($request->all());
        if($notes):
            return redirect('/snotes/'.$notes->id.'/edit')->with('success', 'Your notes has been created, you can continue editing');
        endif;
        return back()->withInput()->with('error', 'Sorry failed to create note');
    }


    public function edit($id){
        $note = Snote::find($id);
        $images = [];
        return view('notes::edit', compact('note', 'images'));
    }

    public function update(StoreNotesRequest $request, $id)  {

        $note = Snote::find($id);
        $note->update($request->all());
        if(!$note):
            return back()->withInput()->with('error', 'Opps it seems like the update failed');
        endif;
        return back()->with('success', 'Your note has been saved');

    }

    public function destroy($id){


    }

}
