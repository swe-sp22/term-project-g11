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
    

    //Checking validation
    
    public function test_database()
    {
        $this->assertDatabaseHas('users',[
            'name' =>'ahmed elselmy'
        ]);    
    }

    // check wether password and confirm password are equal
    public function test_user_password()
    {
        $confirmPass = 'John Doe';
        $user1 = Users::make([
            'password' => 'John Doe',
        ]);
        $this->assertTrue($user1->password == $confirmPass);
    }
    // check if email is not taken
    public function test_database_email()
    {
        $userEmail='selmy@gmail.com';
        $this->assertDatabaseMissing('users',[
            'email' => $userEmail
        ]);    
    }
    // check the validation of the email format
    public function test_email_validation()
    {
        $request = 'aa@hotmail.com';
        $this->assertTrue(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $request) == FALSE);
    }
    public function test_register(){
        $response = [
            'name' => 'merna',
            'email' => 'selmyy@gmail.com',
            'password' => 'merna10iii',
            'confirmpassword' => 'merna10iii',
        ];
        //$this->post(route('register.action'),$response)->assertSessionHasErrors(['email']);
        $this->post(route('register.action'),$response)->assertSessionDoesntHaveErrors();
    }
    // public function test_register(){
    //     $response = [
    //         'name' => 'merna',
    //         'email' => 'selmmy@gmail.com',
    //         'password' => 'merna10iii',
    //         'confirmpassword' => 'merna10iii',
    //     ];
    //     //$this->post(route('register.action'),$response)->assertSessionHasErrors(['email']);
    //     $this->post(route('register.action'),$response)->assertSessionDoesntHaveErrors(['email']);
    // }

}
