<?php
/*
Defina uma classe veiculo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veíuclo está ligado ou desligado)

2 - Implemente um método construtor que inicialize marca, modelo e ano.
Por padrão, o veículo é instanciado desligado.
Implemente o método ligar(esse método deve alterar a propriedade "ligado", se o veículo estiver desligado)
Implemente o método desligar(deve desligar se o veículo estiver ligado)
Implemnete o método exibirDados(esse método deve exibir as informações "marca, modelo, ano e ligado")

*/

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $capacidadeTanque;
    public $totalCombustivel;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->capacidadeTanque = 50;
        $this->totalCombustivel = 0;
    }

    public function ligar() {
        echo "O $this->modelo agora está ligado  <br>";
    }

    public function desligar() {
        echo "O carro agora está desligado  <br>";
    }

    public function abastecer($totalAbastecido) {
        $this->totalCombustivel += $totalAbastecido;
        echo "Total de combustível do $this->modelo é de $this->totalCombustivel <br>";
    }
}

$meuCarro1 = new Carro("Ford","F-50", 1980);
$meuCarro2 = new Carro("Fiat", "Uno", 2015);

$meuCarro1->ligar();
$meuCarro2->ligar();

$meuCarro1->abastecer(5);
$meuCarro1->abastecer(15);
?>