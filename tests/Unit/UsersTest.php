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
        $user->name ='Ram';
        $user->email ='ram75@gmail.com';
        $user->password ='tAjBuIlD';
        $this->assertTrue($user->save());
    }
    public function testUpdateUserName()
    {
        $user = User::all()->last();
        $user-> where('name', 'Ram')
            -> update(['name' => 'Steve Smith']);
        $this->assertTrue($user->save());
    }
}
