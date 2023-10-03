<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class button extends Component
{

    /**
     * @var string
     */
    public string $nome;
    /**
     * @var string
     */
    public string $variante;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $nome,
                                string $variante)
    {
        $this->nome = $nome;
        $this->variante = $variante;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
