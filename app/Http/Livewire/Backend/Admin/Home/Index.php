<?php

namespace App\Http\Livewire\Backend\Admin\Home;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.backend.admin.home.index')
        ->extends('Layouts.Backend.Admin.main');
    }
}
