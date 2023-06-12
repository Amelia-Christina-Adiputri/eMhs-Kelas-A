<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Task;

class TabelTask extends Component
{
    protected $listeners= [
        'tabelTask'
    ];

    public function render()
    {
        $tsk = Task::orderby('id', 'desc')->paginate(10);
        return view('livewire.tabel-task', ['tsk'=>$tsk]);
    }

    public function tabelTask($task)
    {
        
    }
}
