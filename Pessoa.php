<?php 

 Class Pessoa
{
    public string $nome;
    public int $idade;
    private string $CorDosOlhos;
    private string $genero;
    public float $altura;
    public float $peso;
 
 public function __construct(string $CorDosOlhos, string $genero) {
    $this->CorDosOlhos = $CorDosOlhos;
    $this->genero = $genero;
 }



public function setNome (string $nome): void
{
   $this->nome = $nome; 
}

public function setIdade (int $idade): void
{
    $this->idade = $idade;
}




public function setCorDosOlhos (string $CorDosOlhos): void
{
    if ($CorDosOlhos == "Azul" || $CorDosOlhos == "Castanho" || $CorDosOlhos == "Preto" || $CorDosOlhos == "Verde" ) {
        $this->CorDosOlhos = $CorDosOlhos;
        } else {
            echo "Cor dos Olhos não Permitida" . "<br>";

            return;
        }
    
}


public function getCorDosOlhos()
{
    return $this->CorDosOlhos;
}




public function setGenero (string $genero): void
{
    if ($genero == "Feminino" || $genero == "Masculino"){
        $this->genero = $genero;
       } else {
        echo "Genero não permitido";

        return;

        }
    

}


public function getGenero ()
{
    return $this->genero;
}




public function setAltura (float $altura): void
{
    $this->altura = $altura;
}

public function setPeso (float $peso): void
{
    $this->peso = $peso;
}

} 

