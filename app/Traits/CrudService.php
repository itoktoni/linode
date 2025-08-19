<?php

namespace App\Traits;

use App\Enums\AlertType;
use Illuminate\Database\Eloquent\Model;
use WireUi\Traits\WireUiActions;

trait CrudService
{
    use WireUiActions;

    public function create(Model $model, $data)
    {
        $check = $model->saveRepository($data);

        if($check['status'])
        {
            $this->notification()->send([
                'icon' => AlertType::SUCCESS,
                'title' => 'Info Notification!',
                'description' => $check['message'],
            ]);

            $this->reset();
        }
        else
        {
            $this->notification()->send([
                'icon' => AlertType::ERROR,
                'title' => 'Info Notification!',
                'description' => $check['message'],
            ]);
        }

        return $check;
    }
}
