<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();
        $user->name ='Sita';
        $user->email ='Sita75@gmail.com';
        $user->password ='tAjBuIlD';
        $this->assertTrue($user->save());
    }
}
