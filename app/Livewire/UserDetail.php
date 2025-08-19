<?php

namespace App\Livewire;

use App\Models\User as Models;

class UserDetail extends User
{
    public function mount($id)
    {
        $this->model = Models::find($id);
    }

    public function save()
    {
       $check = $this->update($this->model, $this->validate());
       if($check['status'])
       {
           $this->model = $check['data'];
       }
    }

    public function render()
    {
        if($this->model)
        {
            foreach ($this->model->toArray() as $key => $value) {
                $this->{$key} = $value;
            }
        }

        return view('livewire.user');
    }
}
