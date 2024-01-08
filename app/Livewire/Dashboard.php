<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{

    public $current_user;

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function mount()
    {
        $user = Auth()->user();
        $this->current_user = $user->name;
    }
}
