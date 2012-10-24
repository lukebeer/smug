<?php
interface IDBDriver {
    public static function getConnection(); // PDO connection - singleton.
    public static function getOperator($operatorEnum); // OperatorEnum -> DB operator
    public static function getSelectQueryBuilder($filter);
    public static function getInsertUpdateQueryBuilder($dataEntity);
}

// Given a DataEntity prepare an INSERT/UPDATE PDOStatement and bindValues.
interface IInsertUpdateBuilder {
    public function __construct($dataEntity);
    public function getStatement();
}

// Given a filter object prepare a SELECT PDOStatement and bindValues.
interface ISelectBuilder {
    public function __construct($filter);
    public function getStatement();
}
?>