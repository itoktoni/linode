<?php

namespace App\Livewire;

use App\Models\User as Models;
use Livewire\Component;
use App\Plugins\Response;
use App\Traits\CrudService;
use WireUi\Traits\WireUiActions;

class User extends Component
{
    use Response, WireUiActions, CrudService;

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

    public function mount(Models $model)
    {
        $this->model = $model;
    }

    public function save()
    {
       $this->create($this->model, $this->validate());
    }
}
