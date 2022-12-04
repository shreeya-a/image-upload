<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    public  function index()
    {
        $images = Image::all();
        // return redirect()->route('welcome');
        return view('welcome', compact('images'));

    }
    // file()-> handles filesize
    public function uploadImage(Request $req)
    {
        // dd($req->all());
        // image-upload chai input tag ko name
        // dd($req->image);
        // dd($req->all());
        
        // store le chai storage bhitra app bhitra image bhanne folder banaucha but inside app ko public bhitra 
        //sub-folder ma bc access garna sajilo huncha public ma
        
        // $image = $req->file('image');
        // $image->store('images', 'public');
        // return back();

        if ($req->hasFile('image')) {
            $image = new Image();
            // $image = $req->file('image');
            //    $response = $image->store('images', 'public');
            // $file_path = $image->store('images', 'public');


            $name = $req->file('image');
            $file_path = $name->store('images', 'public');
            // $book->file=$request->file('file')->store('apiDocs','public');
            

            $image->name = $file_path;
            // $image1->name = $req->file('image')->store('images', 'public');

            // $name = $req->file('image')->getClientOriginalName();
            // $req->file('image')->storeAs('public/iamges/',$name);
            // $image1->name = $name;
        
            $image->save();
            return back();
        }

        // asset function le image ko path ka ho tya samma lagcha, domain haru link garcha
        // response images bhitra file ko path aaucha
    }
}
