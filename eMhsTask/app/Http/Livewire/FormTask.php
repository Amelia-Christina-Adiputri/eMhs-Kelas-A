<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;

class FormTask extends Component
{
    public $nama;
    public $judul;
    public $deskripsi;

    public function render()
    {
        return view('livewire.form-task');
    }

    public function simpan()
    {
        $task=Task::create([
            'nama'=>$this->nama,
            'judul_task'=>$this->judul,
            'deskripsi_task'=>$this->deskripsi
        ]);
        $this->resetInput();

        $this->emit('tabelTask', $task);
    }

    public function resetInput()
    {
        $this->nama=null;
        $this->judul = null;
        $this->deskripsi = null;
    }
}
