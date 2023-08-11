<?php 

 Class Pessoa
{
    public string $nome;
    public int $idade;
    public string $carreira;
    public float $altura;
 


public function setNome (string $nome): void
{
   $this -> nome = $nome; 

}

public function setIdade (int $idade): void
{
    $this -> idade = $idade;
}

public function setCarreira (string $carreira): void 
{
    $this -> carreira = $carreira;
}

public function setAltura (float $altura): void
{
    $this -> altura = $altura;
}

}

 $carol = new Pessoa();
 $carol -> setNome("carol");
 $carol -> setIdade(24);
 $carol -> setCarreira("Atendente Televendas");
 $carol ->setAltura(1.67);
echo "Nome: " . $carol -> nome . "<br>"; 
echo "Idade: " . $carol -> idade . "<br>";
echo "Carreira: " . $carol -> carreira . "<br>";
echo "Altura: " . $carol -> altura . "<br>";



