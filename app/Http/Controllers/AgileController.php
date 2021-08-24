<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class AgileController extends Controller
{
    public function addtask(Request $request)
    {
        $validated = $request->newtask;
        if ($validated) {
            $newtask = new Task;
            $newtask->tasks = $request->newtask;
            $newtask->status = ('Todo');
            $newtask->order = ('');
            $newtask->save();
        }
        return redirect('/home');
    }

    public function statusUpdade(Request $request)
    {
        $order  = $request->order;
        $status = $request->status;
        $id     = $request->taskid;
        Task::where('id',$id)->update(['status'=>$status]);
        foreach ($order as $key => $taskid) {
            Task::where('id',$taskid)->update(['order'=>$key]);
        }
        return response('');
    }

    public function taskUpdate(Request $request)
    {
        $id = $request->edtId;
        $task = $request->edtTsk;
        Task::where('id',$id)->update(['tasks'=>$task]);
        return response('');
    }

    public function taskDelete(Request $request)
    {
        $id = $request->edtId;
        Task::where('id',$id)->delete();
        return response('');
    }
}
