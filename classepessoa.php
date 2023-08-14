<?php 

 Class Pessoa
{
    public string $nome;
    public int $idade;
    public string $carreira;
    public float $altura;
 
 public function __construct(int $idade, string $carreira) {
    $this->idade = $idade;
    $this -> carreira = $carreira;
 }



public function setNome (string $nome): void
{
   $this ->nome = $nome; 

}

public function setIdade (int $idade): void
{
    $this ->idade = $idade;
}

public function setCarreira (string $carreira): void 
{
    $this ->carreira = $carreira;
}

public function setAltura (float $altura): void
{
    $this ->altura = $altura;
}

}



