<?php

// namespace Tests\Unit;
// use PHPUnit\Framework\TestCase;

// class HomepageTest extends TestCase
// {
//     /**
//      * A basic unit test example.
//      */
//     public function test_example(): void
//     {
//         $this->assertTrue(true);
//     }
// }


// Class 34 Start
// test('example', function () {
//     expect(true)->toBeTrue();
// });


// uses(Tests\TestCase::class); 

// it('has a Homepage')
//     ->get('/')
//     ->assertStatus(200);

it('has a Homepage', function(){
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee("get started");
});



