<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;
class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $open_tasks = DB::table('task')->where('closed',0)->paginate(4);
        $closed_tasks = DB::table('task')->where('closed',1)->paginate(4);
        $side = $this->sideBalk(7);
        return view('tasks.overview_task', compact('open_tasks','closed_tasks','side'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $side = $this->sideBalk(4);
        return view('tasks.create_task',compact('side'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['date'] < date("Y-m-d")){
            $request->session()->flash('flash_error', 'The tasks deadline can\'t be in the past!');
            return $this->create(); 
        }
        $request->session()->flash('flash_message', 'Task was successful saved!');
        DB::table('task')->insertGetId(
            ['deadline_date' => $request['date'],
            'deadline_time'=> $request['time'],
            'title' =>  $request['title'],
            'omschrijving' => $request['body'],
            'notificate' => array_key_exists('email',$request),
            'closed' => '0',
            ]
        );
        return $this->create();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taak = Task::find($id);
        $side = $this->sideBalk(3);
        return view('tasks.task',compact('side','taak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taak = Task::find($id);
        $side = $this->sideBalk(3);
        return view('tasks.create_task',compact('side','taak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $taak = Task::find($id);
        DB::table('task')
        ->where('id', $id)
        ->update(
            [
                'deadline_date' => $request['date'] ."",
                'deadline_time'=> $request['time'],
                'title' =>  $request['title'],
                'omschrijving' => $request['body'],
                'notificate' => isset($request->email),
                'closed' => isset($request->closed)
            ]);
                    $side = $this->sideBalk(3);
            return $this->show($id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Task::findOrFail($id);
        $item->delete();
        return $this->index();
    }

   public function sideBalk($numb){
    return DB::table('task')->orderBy('deadline_date')->orderBy('deadline_time')->limit($numb)->get();
   } 
   
}