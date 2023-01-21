<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;

class PublishController extends Controller
{
    public function publish()
    {
        Redis::publish('create-item', json_encode([
            'name' => 'Book 1',
            'author' => 'Masoud Gharagozlu'
        ]));

        echo 'Published...!';
    }
}
