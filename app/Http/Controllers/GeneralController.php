<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meme;
use View;
use Response;

class GeneralController extends Controller
{


  public function home()
  {
    $memes = Meme::where('status',1)->orderBy('id','desc')->paginate(100);

    $data['memes'] = $memes;

    return View::make('welcome', $data);

  }
  public function fileUpload(Request $request)
 {
     $this->validate($request, [
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);

     $image = $request->file('image');
     $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     $destinationPath = public_path('/memes');
     $image->move($destinationPath, $input['imagename']);

     /* create new meme */
     $meme = new Meme;
     $meme->status = 0;
     $meme->image = $input['imagename'];
     $meme->save();

     $request->session()->flash('alert-success', 'Image Upload successful');
     return back()->with('success','Image Upload successful');
 }
}
