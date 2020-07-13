<?php


class BaseClass {
    private $database;
    
    public function __construct()
    {
        $this->database = new \SQLite3('../teste.db');
        $this->init();
    }

    public function execute(string $SQL)
    {
        $x =  $this->database->exec($SQL);
    }

    public function seach(string $SQL)
    {
        return $this->database->query($SQL);
    }

    private function init():void
    {
        if ($this->validTable('USER')->fetchArray() == null) {
             $this->execute('CREATE TABLE USER(ID INTEGER PRIMARY KEY, NAME TEXT, EMAIL TEXT, SENHA PASSWORD, TYPE INTEGER)');
        }

        if ($this->validTable('PRODUTO')->fetchArray() == null) {
            $this->execute('CREATE TABLE PRODUTO(ID INTEGER PRIMARY KEY, NAME TEXT, PRECO FLOAT, DESCRICAO TEXT, TIPO Text, IMG TEXT)');
        }
        
        if ($this->validTable('CARINHO')->fetchArray() == null) {
            $this->execute('CREATE TABLE CARINHO(ID INTEGER PRIMARY KEY, IDPRODUTO INT, IDUSER INT)');
        }

        if ($this->validTable('LOGADO')->fetchArray() == null) {
            $this->execute('CREATE TABLE LOGADO(ID INTEGER PRIMARY KEY, IDUSER INT)');
        }

    }

    public function validTable($table)
    {
        return $this->seach("SELECT name FROM sqlite_master WHERE name='".$table."'");
    }
    
    public function insetUser(string $name, string $email, string $senha, int $typeUser)
    {
        $this->execute("INSERT INTO USER(NAME, EMAIL, SENHA, TYPE) VALUES ('".$name."', '".$email."', '".$senha."', '".$typeUser."')");
    }
    
    public function insetProduto(string $name, string $preco, string $descricao, string $tipo, string $img)
    {
        $result =  $this->execute("INSERT INTO PRODUTO(NAME, PRECO, DESCRICAO, TIPO, IMG) VALUES ('".$name."','".$preco."','".$descricao."','".$tipo."','".$img."')");
        return $result;
    }


    public function insetCarrinho(string $idProduto, string $idUser)
    {
        $result =  $this->execute("INSERT INTO CARINHO(IDPRODUTO, IDUSER) VALUES ('".$idProduto."','".$idUser."')");
        return $result;
    }

    public function setLogado($iduser)
    {
        $result =  $this->execute("INSERT INTO LOGADO(IDUSER) VALUES ('".$iduser."')");
        return $result;
    }

    public function deleteLog()
    {
       $this->execute("DELETE FROM LOGADO");
    }
}

