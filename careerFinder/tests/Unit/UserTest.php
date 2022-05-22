<?php

namespace Tests\Unit;

use App\Models\Users;

use Tests\TestCase;


class UserTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    
    // check if email is not taken
    public function test_database_email()
    {
        $userEmail='selmy@gmail.com';
        $this->assertDatabaseMissing('users',[
            'email' => $userEmail
        ]);    
    }

    public function test_register_name(){
        $response = [
            'name' => '',
            'email' => 'selmyy@gmail.com',
            'password' => 'merna10iii',
            'confirmpassword' => 'merna10iii',
        ];
        //$this->post(route('register.action'),$response)->assertSessionHasErrors(['email']);
        $this->post(route('register.action'),$response)->assertSessionDoesntHaveErrors(['name']);
    }
    public function test_register_pass(){
        $response = [
            'name' => 'merna',
            'email' => 'selmyy@gmail.com',
            'password' => '10iii',
            'confirmpassword' => 'mna10iii',
        ];
        //$this->post(route('register.action'),$response)->assertSessionHasErrors(['email']);
        $this->post(route('register.action'),$response)->assertSessionDoesntHaveErrors();
    }
    public function test_register_email(){
        $response = [
            'name' => 'merna',
            'email' => 'selmil.com',
            'password' => 'mna10iii',
            'confirmpassword' => 'mna10iii',
        ];
        //$this->post(route('register.action'),$response)->assertSessionHasErrors(['email']);
        $this->post(route('register.action'),$response)->assertSessionDoesntHaveErrors(['email']);
    }
    

}
