<?php

namespace App\View\Components\User;


use App\Models\User;
use Illuminate\View\Component;

class UserList extends Component
{

    public $users;
    public $type;
    public $cardClass;
    public $curso = "Laravue";

//    ocultando atributos ou metodos (publicos).
//    Para ocultar é so passar o atributo ou metodo para essa variavel except, e ele não poderar
//    ser utilizado no component
    public $except = ['curso'];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($users = null, $type = 'lista', $cardClass = 'success')
    {
        $this->users = $users;
        $this->type = $type;
        $this->cardClass = $cardClass;
    }

    public function isSelected($userId)
    {
        return $userId === 3;
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
