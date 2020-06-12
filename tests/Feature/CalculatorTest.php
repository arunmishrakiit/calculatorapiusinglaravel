<?php

namespace Tests\Feature;

use App\Calculator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testRequiresNum1AndNum2()
    {
        $this->json('POST', 'api/v1/add',['num1' => 4, 'num2' => ''])
            ->assertStatus(200)
            ->assertJson([
                'error' => 'num1 and num2 must be a valid numbers.'
            ]);
    }

    public function testAddSuccessfully()
    {
        $this->json('POST', 'api/v1/add', ['num1' => 4, 'num2' => 2])
            ->assertStatus(200)
            ->assertJson(['answer' => 6]);
    }

    public function testSubstractSuccessfully()
    {
        $this->json('POST', 'api/v1/substract', ['num1' => 4, 'num2' => 2])
            ->assertStatus(200)
            ->assertJson(['answer' => 2]);
    }

    public function testMultiplySuccessfully()
    {
        $this->json('POST', 'api/v1/multiply', ['num1' => 4, 'num2' => 2])
            ->assertStatus(200)
            ->assertJson(['answer' => 8]);
    }
    
    public function testDivideSuccessfully()
    {
        $this->json('POST', 'api/v1/divide', ['num1' => 4, 'num2' => 2])
            ->assertStatus(200)
            ->assertJson(['answer' => 2]);
    }

    public function testSquareRootSuccessfully()
    {
        $this->json('POST', 'api/v1/squareRoot', ['num1' => 4])
            ->assertStatus(200)
            ->assertJson(['answer' => 16]);
    }

    public function testSaveSuccessfully()
    {
        $this->json('POST', 'api/v1/save', ['value' => 40])
            ->assertStatus(200)
            ->assertJson(['save' => true]);
    }

    public function testRetrieveSuccessfully()
    {
        $this->json('GET', 'api/v1/savedValue',[])
            ->assertStatus(200)
            ->assertJson(['value' => 40]);
    }

    public function testClearSuccessfully()
    {
        $this->json('POST', 'api/v1/clear',[])
            ->assertStatus(200)
            ->assertJson(['value' => null]);
    }
}
