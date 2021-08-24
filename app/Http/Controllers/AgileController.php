<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class AgileController extends Controller
{
    public function addtask(Request $request)
    {
        $newtask = new Task;
        $newtask->tasks = $request->newtask;
        $newtask->status = ('Todo');
        $newtask->order = ('');
        $newtask->save();
        return redirect('/home');
    }

    public function statusUpdade(Request $request)
    {
        $status = $request->status;
        $id   = $request->taskid;
        Task::where('id',$id)->update(['status'=>$status]);
        return Response('');
    }
}
