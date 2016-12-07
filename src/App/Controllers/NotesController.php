<?php
/**
 * Created by PhpStorm.
 * User: studio-book
 * Date: 12/6/16
 * Time: 6:36 PM
 */

namespace ShawnSandy\Summernote\App\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NotesController extends Controller
{

    public function index()
    {
        return view('notes::index');
    }

    public function show($id)
    {

    }

    public function create()
    {
        $images = [];
        return view('notes::create', compact('images'));
    }

    public function  store(Request $request){

        return $request->all();

    }


    public function edit($id){

    }

    public function update(Request $request, $id)  {

    }

    public function destroy($id){

    }

}