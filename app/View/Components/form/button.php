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
    public string $isRed;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $nome,
                                bool $isRed)
    {
        $this->nome = $nome;
        $this->isRed = $isRed;
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
