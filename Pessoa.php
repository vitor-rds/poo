<?php 

require_once "Endereco.php";

/*progamaçao orientada a objetos
é um arquivo por classe
public posso acessar de qualquer lugar
private apenas dentro da classe
protected dentro da propria classe e das filhas
atributos por padrao sao privados pq enteressam apenas a classe
por outro lado 'metodos' sao publicos, atraves dos metodos consigo interajir com um atributo de uma classe*/

class Pessoa
{
    private $nome;
    private $sobrenome;
    private $dataNacimento;
    private Endereco $endereco;
    private $dataCadastro;

    public function getNome() 
    {
        return $this->nome;
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }


    public function getSobrenome() 
    {
        return $this->sobrenome;
    }
    public function setSobrenome($valor)
    {
        $this->sobrenome = $valor;
    }

    public function saudar()
    {
        return "Olá, meu nome é $this->nome $this->sobrenome ";
    }

    public function setEndereco(Endereco $endereco)
    {   
        $this->endereco = $endereco;
    }
    public function dizerEndereco()
    {
        echo 'Moro em ' 
    . $this->endereco->getLogradouro() . ' ' 
    . $this->endereco->getNome() . ' ' 
    . $this->endereco->getNumero() . ' ' 
    . $this->endereco->getBairro() . ' ' 
    . $this->endereco->getCidade() . ' ' 
    . $this->endereco->getCep();

    }

}








?>