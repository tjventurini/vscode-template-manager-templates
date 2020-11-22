{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Feature Test.')}}
<?php

namespace {{=$.NAMESPACE}};

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class {{=$.NAME}} extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
