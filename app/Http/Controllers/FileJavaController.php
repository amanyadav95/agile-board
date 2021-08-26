<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\File;

class FileJavaController extends Controller
{
    public function fileJava()
    {
        return view('/filemanagerjava');
    }

    public function fileUplode(Request $request)
    {
        $name       = $request->file('file')->getClientOriginalName();
        $extension  = $request->file('file')->extension();
        $path       = $request->file('file')->store('files');
        $url        = asset('storage/'.$path);

        $file = new File;
        $file->filename = $name;
        $file->filepath = $url;
        $file->extension = $extension;
        $file->save();
        $upFile = File::orderBy('id', 'desc')->limit(1)->get();
        return response()->json($upFile);
    }

    public function allFile(Request $request)
    {
        $ext = [
                'image' => ['bmp','jpg','jpeg','gif','png','eps'],
                'docs'  => ['doc','docx','html','htm','odt','pdf','xls','xlsx','ods','ppt','pptx','txt','xml'],
                'audio' => ['m4a','flac','mp3','wav','wma','aac','ogg']
               ];
       $type = $request->filter;
        if ($type) {
            $files = File::whereIn('extension', $ext[$type])->get();
            return response()->json($files);
        }
        else {
            $files = File::get();
            return response()->json($files);
        }

    }

}
