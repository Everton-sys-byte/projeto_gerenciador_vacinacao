<?php

namespace App\View\Components\buttonmessage;

use Illuminate\View\Component;

class BtnMensagem extends Component
{
    public $contador = 0;
    public $identificador;
    public $tipo;
    public $nome;
    public $mensagem;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($identificador, $tipo, $nome, $contador = 0, $mensagem)
    {
        $this->identificador = $identificador;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->contador = $contador;
        $this->mensagem = $mensagem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-message.btn-mensagem');
    }
}
