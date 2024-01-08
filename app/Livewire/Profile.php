<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{

    public $user;
    public $nome;
    public $cognome;
    public $current_name;
    public $email;
    public $tel;
    public $ruolo;

    public function render()
    {
        return view('livewire.profile');
    }

    public function mount()
    {
        $this->user = Auth()->user();
        $this->current_name = $this->user->name;

        $partiNome = explode(" ", $this->user->name);
        if(count($partiNome) > 0)
        {
            $this->nome = $partiNome[0];
            $this->cognome = $partiNome[1];
        }
        $this->email = $this->user->email;
        $this->tel = $this->user->phone;
        $this->ruolo = $this->user->role;
    }
}
