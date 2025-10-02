<?php


use App\Models\Task34;

// test('example', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });

it('hsa the expected fillable column', function () {
    $task = new Task34();
    // dd($task);
    expect($task->getFillable())->toEqual([
        'title',
        'is_completed'
    ]);
});

it('casts is_completed to bollean', function(){
    $task = new Task34();
    dd($task->getCasts());
});
