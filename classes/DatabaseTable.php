<?php
namespace classes;

class DatabaseTable{
    private $pdo;
    private $table;
    private $primaryKey;

    public function __construct($pdo,$table, $primaryKey){
       $this->pdo = $pdo; 
       $this->table = $table;
       $this->primaryKey = $primaryKey;
    }


    public function findAll(...$args) {

        if (count($args) === 0) {
            // Do something with one argument

            $query = 'SELECT * FROM `' . $this->table . '` ';
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        } else if (count($args) === 1) {
            // Do something with two arguments

            $stmt = $this->pdo->prepare($args[0]);
            $stmt->execute();

        } 

        return $stmt->fetchAll();
    }

    public function find($field, $value) {
        $query = 'SELECT * FROM `' . $this->table . '` WHERE `' . $field . '` =
        :value';
        $values = [
        'value' => $value
        ];
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($values);

        return $stmt->fetch();
    }

    public function update($values) {
        $query = ' UPDATE `' . $this->table .'` SET ';
        foreach ($values as $key => $value) {
        $query .= '`' . $key . '` = :' . $key . ',';
        }
        $query = rtrim($query, ',');
        $query .= ' WHERE `' . $this->primaryKey . '` = :primaryKey';

        // Set the :primaryKey variable
        $values['primaryKey'] = $values['id'];
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($values);
    }

    // public function save($record) {
    //     try {
    //     if (empty($record[$this->primaryKey])){
    //     unset($record[$this->primaryKey]);
    //     }
    //     $this->insert($record);
    //     } catch (\PDOException $e) {
    //     $this->update($record);
    //     }
    // }
        

    public function insert($values) {
            $query = 'INSERT INTO `' . $this->table . '` (';
            foreach ($values as $key => $value) {
            $query .= '`' . $key . '`,';
            }

            $query = rtrim($query, ',');

            $query .= ') VALUES (';
            foreach ($values as $key => $value) {
            $query .= ':' . $key . ',';
            }
            $query = rtrim($query, ',');
            $query .= ')';
            $values = $this->processDates($values);
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($values);
    }

    private function processDates($values) {
        foreach ($values as $key => $value) {
        if ($value instanceof DateTime) {
        $values[$key] = $value->format('Y-m-d');
        }
        }
        return $values;
    }
            

}