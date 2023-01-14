<?php

readonly class Database
{
    public function __construct(
        public DatabaseDriver $driver,
        public ?Mysql $connection_mysql = null,
        public ?Sqlsvr $connection_sqlsvr = null,
    ) {}
}

readonly class Mysql
{
    public function __construct(
        public string $driver,
        public string $url,
        public string $host,
        public string $port,
        public string $database,
        public string $username,
        public string $password,
        public string $unix_socket = '',
        public string $charset = '',
        public string $collation = '',
        public string $prefix = '',
        public bool $prefix_indexes = true,
        public bool $strict = true,
        public string $engine = '',
    ) {}
}

readonly class Sqlsvr
{
    public function __construct(
        public string $driver,
        public string $url,
        public string $host,
        public string $port,
        public string $database,
        public string $username,
        public string $password,
        public string $charset = 'utf8',
        public string $prefix = '',
        public bool $prefix_indexes = true,
        public bool $encrypt = true,
        public bool $trust_server_certificate = true,
    ) {}
}

enum DatabaseDriver: string
{
    case mysql = 'mysql';
    case sqlsvr = 'sqlsvr';
}
