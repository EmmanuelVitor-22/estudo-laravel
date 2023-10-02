<?php

namespace App\View\Components\User;


use App\Models\User;
use Illuminate\View\Component;

class UserList extends Component
{

    public  $users;
    //para definir o tipo de lista que sera renderizado no componente
    // esse valor sera passado no  componente e sera injetado diretamente no construtor da classe
    public $type;
    public $cardClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($users = null, $type = 'lista', $cardClass='success')
        //defini o valor padrão
    {
        // DESTA FORMA DESAMARRA DA MODEL, DANDO MAIS FLEXBILIDADE
        $this->users = $users;
        $this->type = $type;
        $this->cardClass = $cardClass;
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
