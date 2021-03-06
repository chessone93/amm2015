<?php

/**
* @author StefanoChessa
* Classe Categoria di film
*/

class Categoria {
    /**
* Identificatore unico del film
* @var int
*/
    private $id;

    /**
* Nome della casa produttrice
* @var CasaProduttrice
*/
    private $costruttore;

    /**
* Nome della cattegoria di film
* @var String
*/
    private $nome;

    

    /**
* Restituisce identificatore unico per la classe
* @return int
*/
    public function getId() {
        return $this->id;
    }

    /**
* Imposta un identificatore unico per la classe
* @param int $id
* @return boolean true se il valore e' stato aggiornato correttamente,
* false altrimenti
*/
    public function setId($id) {
        $intVal = filter_var($id, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
        if (!isset($intVal)) {
            return false;
        }
        $this->id = $intVal;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return true;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCasaProduttrice($casaproduttrice) {
        $this->casaproduttrice = $casaproduttrice;
        return true;
    }

    public function getCasaProduttrice() {
        return $this->casaproduttrice;
    }


    

}

?>
