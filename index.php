<?php

class Professor{
    private $nome;
    private $idade;
    private $matricula;
    private $salario;

    public function nome()
    {
        echo "O se nome é " , get_class($this) , "\n";
    }

  

 public function getNome() {
    return $this->nome;
  }
  
  public function setNome($nome) {
    $this->nome= $nome;
  }
  
  public function getIdade() {
    return $this->idade;
  }
  
  public function setIdade($idade) {
    $this->idade= $idade;
  }

  public   function getMatricula() {
    return $this->matricula;
  }
  
  public function setMatricula($matricula) {
    $this->matricula= $matricula;
  }
  
  public function getSalario() {
    return $this->salario;
  }
} 


class ProfessorHorista extends Professor{
    private $horastrabalhadas;
    private $valorhoraaula;


    public function calcularSalario($horastrabalhadas,$valorhoraaula){
      return $horastrabalhadas * $valorhoraaula;
      
    }

    public function nome() {
        echo "O se nome é " , get_class($this) , "\n";
    }

    public function getHorastrabalhadas() {
        return $this->$horastrabalhadas;
      }
      
    public function setHorastrabalhada($horastrabalhadas) {
        $this->horastrabalhadas= $horastrabalhadas;
      }

    
    public function getValorHoraAula() {
        return $this->$valorhoraaula;
      }
      
    public function setValorHoraAula($valorhoraaula) {
        $this->valorhoraaula= $valorhoraaula;
      }
}


class ProfessorFixo extends Professor{
    private $salariofixo;

    public function nome() {
      echo "O se nome é " , get_class($this) , "\n";
  }




    public function getSalariofixo() {
    return $this->$salariofixo;
  }
  
    public function setSalariofixo($salariofixo) {
    $this->salariofixo= $salariofixo;
  }

}


  for ($i = 5; $i <= 15; $i++) {
    echo $i;
}

class Usuario {
  private $login;
  private $senha;

public function __construct($login, $senha){
  $this->login = $login;
  $this->senha = $senha;
}

 public function validarSenha($senha){
    
    if($senha == 0111){
      echo "A Senha está correta!";
    }else{
      
      echo "A senha está errada!";
  
      echo $senha;
    }
  }


 public function getLogin() {
  return $this->login;
  }

 public function setLogin($login) {
  $this->login= $login;
 }
 
 public function getSenha() {
  return $this->senha;
 }

 public function setSenha($senha) {
  $this->senha= $senha;
 }

  
}


  $professor = new Professor;
  echo "O nome dessa classe é: " , get_class($professor) , "\n";
  
  $professorfixo = new ProfessorFixo;
  echo "O nome dessa classe é: " , get_class($professorfixo) , "\n";
 
  $professorhorista = new ProfessorHorista;
  echo "O nome dessa classe é: " , get_class($professorhorista) , "\n";
  


 $ob1 = new Usuario("Junior72957",0111);
 $ob1->validarSenha(0111);

 echo $ob1->getSenha();

?>