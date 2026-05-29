<?php

namespace Milad\DBSecureSchemaState;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Connection;

class DBSecureSchemaStateServiceProvider extends ServiceProvider
{
    public function register()
    {
        Connection::resolverFor('pgsql', function ($connection, $database, $prefix, $config) {
            return new PostgresSecureConnection($connection, $database, $prefix, $config);
        });
    }
}