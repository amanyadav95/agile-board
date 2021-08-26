<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\File;

class FileManagerController extends Controller
{
    public function fileManager(Request $request)
    {
        $ext = [
                'image' => ['bmp','jpg','jpeg','gif','png','eps'],
                'docs'  => ['doc','docx','html','htm','odt','pdf','xls','xlsx','ods','ppt','pptx','txt','xml'],
                'audio' => ['m4a','flac','mp3','wav','wma','aac','ogg']
               ];
       $type = $request->filter;
        if ($type) {
            $files = File::whereIn('extension', $ext[$type])->get();
            return view('/filemanager',['files'=>$files]);
        }
        else {
            $files = File::get();
            return view('/filemanager',['files'=>$files]);
        }

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
