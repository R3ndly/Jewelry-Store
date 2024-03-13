<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Worker;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminWorkerController extends Controller
{
    public function index(): View
    {
        $workers = Worker::paginate(10);

        return view('admin.workers.index',compact('workers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
     public function create(): View
     {
         return view('admin.workers.create');
        }
        

    
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $file_name = "";
        if($request->hasFile('image')){
            $file_name = '/img/workers/'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img/workers'),$file_name);
        } else {
            echo "Фото не загружено";
        }

        $worker = new Worker;
        $worker->name = $request->name;
        $worker->surname = $request->surname;
        $worker->patronymic = $request->patronymic;
        $worker->position = $request->position;
        $worker->salary = $request->salary;
        $worker->gender = $request->gender;
        $worker->phone = $request->phone;
        $worker->email = $request->email;
        $worker->image = $file_name;
        $worker->save();

        return redirect()->route('admin.workers.index')->with('Выполнено','изделия добавлены');
    }
    public function show(Worker $worker): View
    {
        return view('admin.workers.show', compact('worker'));
    }
    
    
    public function edit(Worker $worker): View
    {
        return view('admin.workers.edit', compact('worker'));
    }
    


     
    public function update(Request $request, Worker $worker): RedirectResponse
    {
        $request->validate([
           'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $file_name = $worker->image;
        if($request->hasFile('image')) {
            $file_name = '/img/workers/'.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img/workers'),$file_name);
        } else {
            echo "Фото не загружено";
        }
        $worker->name = $request->name;
        $worker->surname = $request->surname;
        $worker->patronymic = $request->patronymic;
        $worker->position = $request->position;
        $worker->salary = $request->salary;
        $worker->gender = $request->gender;
        $worker->phone = $request->phone;
        $worker->email = $request->email;
        $worker->image = $file_name;
        $worker->save();

        return redirect()->route('admin.workers.index')->with('выполнено','изделия добавлены');
    }


    
     public function destroy(Worker $worker): RedirectResponse
     {
         $worker->delete();
         
         
         return redirect()->route('admin.workers.index')
         
         ->with('выполнено','изделие удалёно.');
        }
        
}
