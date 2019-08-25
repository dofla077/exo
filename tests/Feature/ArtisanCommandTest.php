<?php

namespace Tests\Feature;

use Tests\TestCase;

class ArtisanCommandTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**public function test_empty_log_command_empties_logs_table(Kernel $kernel)
     * {
     * DB::table('logs')->insert(['message' => 'Did something']);
     * $kernel->call('logs:empty');
     * $this->assertCount(0, DB::table('logs')->get());
     * }**/
}
