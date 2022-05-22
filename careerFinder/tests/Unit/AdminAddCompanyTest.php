<?php

namespace Tests\Unit;

Use Tests\TestCase;

class AdminAddCompanyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_Company()
    {
        $companyData = [
            'name' => 'Energy',
            'email' => 'energydrinksCo@gmail.com',
            'password' => 'e123456',
            'confirmpassword' => 'e123456',
        ];
        $this ->post(route('addCompany.action'), $companyData)->assertSessionDoesntHaveErrors();
    }

}
