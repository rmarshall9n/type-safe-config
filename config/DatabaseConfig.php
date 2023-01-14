<?php

return new Database(
    driver: DatabaseDriver::from(envget('dbdriver') ?? 'mysql'),
    connection_mysql: new Mysql(
        driver: 'value_driver',
        url: 'value_url',
        host: 'value_host',
        port: 'value_port',
        database: 'value_database',
        username: 'value_username',
        password: 'value_password',
    ),
    connection_sqlsvr: new Sqlsvr(
        driver: 'value_driver',
        url: 'value_url',
        host: 'value_host',
        port: 'value_port',
        database: 'value_database',
        username: 'value_username',
        password: 'value_password',
    )
);
