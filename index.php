<?php

// copia do site

use League\CLImate\CLImate;

require_once('vendor/autoload.php');

// instanciando a nova classe do pacote do CLI
$climate = new League\CLImate\CLImate;

// MENU
$climate->out('[1 - SOMAR]');
$climate->out('[2 - SUBTRAIR]');
$climate->out('[3 - MULTIPLICAR]');
$climate->out('[4 - DIVIDIR]');

// mensagem de informação
$input = $climate->input('Escolha uma das opções acima: ');

// opções que irá aceitar
$input->accept(['1', '2', '3', '4']);

// pega o foi inserido no input
$menu = $input->prompt();

class Operacao {
    public $numero1;
    public $numero2;

    protected $climate;

    public function __construct (CLImate $climate) {
        $this->climate = $climate;
    }

    public function input() {
        $numero1Input   = $this->climate->input('Insira o primeiro número: ');
        $this->numero1  = $numero1Input->prompt();

        $numero2Input   = $this->climate->input('Insira o segundo número: ');
        $this->numero2  = $numero2Input->prompt();
    }
}

$operacao = new Operacao($climate);
$operacao->input();

switch ($menu) {
    case '1':
        // $numero1Input   = $climate->input('Insira o primeiro número: ');
        // $numero1        = $numero1Input->prompt();

        // $numero2Input   = $climate->input('Insira o segundo número: ');
        // $numero2        = $numero2Input->prompt();

        echo sprintf("Resultado %s ", (int) $operacao->numero1 + (int) $operacao->numero2);
        break;

    case '2':
       echo sprintf("Resultado %s ", (int) $operacao->numero1 - (int) $operacao->numero2);
        break;

    case '3':
        echo sprintf("Resultado %s ", (int) $operacao->numero1 * (int) $operacao->numero2);
        break;

    case '4':
        echo sprintf("Resultado %s ", (int) numero1 / (int) $numero2);
        break;

    default:
        # code...
        break;
}
