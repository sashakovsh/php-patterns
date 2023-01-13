<?php

abstract class AbstractFactory {
    abstract public function DbConnection(): CreateConnectionInterface;
    abstract public function DBRecord(): CreateRecordInterface;
    abstract public function DBQueryBuilder(): CreateQueryInterface;
}

interface CreateConnectionInterface {
}

interface CreateRecordInterface {
}

interface CreateQueryInterface {
}

class MySQLFactory implements CreateConnectionInterface, CreateQueryInterface, CreateRecordInterface {
    public function DbConnection(){
        
    }
}