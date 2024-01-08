<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class EditProfileModal extends Component
{
    public $user;
    public $nome;
    public $cognome;
    public $email;
    public $tel;
    public $ruolo;


    public function render()
    {
        return view('livewire.edit-profile-modal');
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

    public function save()
    {
        $parole = array($this->nome, $this->cognome);
        $nomeCompleto = implode(" ", $parole);

        $profile = User::find(Auth()->id());
        $profile->name = $nomeCompleto;
        $profile->email = $this->email;
        $profile->phone = $this->tel;
        $profile->role = $this->ruolo;

        $profile->save();

        return redirect('/profile');
    }
}
