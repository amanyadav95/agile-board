<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\File;

class FileManagerController extends Controller
{
    public function FileManager()
    {
        $files = File::get();
        return view('/filemanager',['files'=>$files]);
    }

    public function fileUplode(Request $request)
    {
        $file      = $request->file('file');
        $name      = $request->file('file')->getClientOriginalName();
        $extension = $request->file('file')->extension();
        $path      = $request->file('file')->store('files');
        $url       = asset('storage/'.$path);

        $file = new File;
        $file->filename = $name;
        $file->filepath = $url;
        $file->extension = $extension;
        $file->save();
        // dd($name,$extension,$url);
        return Redirect('/file-manager');
    }
}
