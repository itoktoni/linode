<?php

namespace App\Actions;

use Illuminate\Database\Eloquent\Model;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateAction
{
    use AsAction;

    public function handle(Model $model, $data)
    {
        $check = $model->saveRepository($data);

        return $check;
    }
}
