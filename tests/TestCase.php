<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    // use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        config([
            'database.default' => 'mysql',
        ]);

        DB::purge('mysql');
        DB::reconnect('mysql');
    }
}
