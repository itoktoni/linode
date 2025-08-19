<?php

namespace App\Livewire;

use App\Actions\CreateAction;
use App\Actions\CreateUser;
use App\Models\User as ModelsUser;
use Livewire\Component;
use App\Plugins\Response;
use WireUi\Traits\WireUiActions;

class User extends Component
{
    use Response, WireUiActions;

    public $name;
    public $email;
    public $password;

    public $model;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function mount(ModelsUser $model)
    {
        $this->model = $model;
    }

    public function save()
    {
        $check = $this->model->saveRepository($this->validate());
        if($check['status'])
        {
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Info Notification!',
                'description' => $check['message'],
            ]);
        }
        else
        {
            $this->notification()->send([
                'icon' => 'error',
                'title' => 'Info Notification!',
                'description' => $check['message'],
            ]);
        }
    }

    public function render()
    {
        return view('livewire.user');
    }
}
