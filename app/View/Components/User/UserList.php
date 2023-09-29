<?php

namespace App\View\Components\User;

use App\Models\User;
use Illuminate\View\Component;

class UserList extends Component
{

    public $users;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->users = User::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user.user-list');
    }
}
