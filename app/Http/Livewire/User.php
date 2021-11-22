<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as UserModel;

class User extends Component
{
    public function render()
    {
        return view('livewire.user', [
            'users' => UserModel::with('attendances')->get()
        ]);
    }
}
