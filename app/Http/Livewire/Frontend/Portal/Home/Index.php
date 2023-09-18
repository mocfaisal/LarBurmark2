<?php

namespace App\Http\Livewire\Frontend\Portal\Home;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.portal.home.index')
        ->extends('Layouts.Frontend.Portal.main');
    }
}
