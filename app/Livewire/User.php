<?php

namespace App\Livewire;

use Livewire\Component;

class User extends Component
{
    public $name;
    public $email;
    public $password;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function save()
    {
        dd($this->validate());
    }

    public function render()
    {
        return view('livewire.user');
    }
}
