<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class UsersTable extends Component
{
    public $perPage = 10;
    public $search = '';
    public $orderBy ='id';
    public $orderAsc = 'asc';

    public function render()
    {
        return view('livewire.users-table',[
            'users' => User::search($this->search)
            ->orderby($this->orderBy, $this->orderAsc)
            ->simplePaginate($this->perPage)

        ]);
    }
}
