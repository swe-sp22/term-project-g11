<?php

namespace Tests\Unit;

use Tests\TestCase;
class CompanyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function test_add_post()
    {
        $response = [
            'jobTitle' => 'front end developer needed',
            'jobLocation' => 'alex',
            'jobDescription' => 'fresh grad front end developer needed',
            'jobRequirments' => 'react needed',
            'jobCategory' => 'web',
            'deadline' => '2022-06-03',
        ];
        $this->post(route('postJob.action'), $response)->assertSessionDoesntHaveErrors();
    }
}
