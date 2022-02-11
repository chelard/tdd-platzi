<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_has_many_repositories()
    {
        $user = new User();

        $this->assertInstanceOf(Collection::class, $user->repositories);
    }
}
