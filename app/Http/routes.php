<?php
use App\Models\Student;

$app['router']->get('/', function() {
    return '<h1>route success!!!</h1>';
});

$app['router']->get('welcome',
    'App\Http\Controllers\WelcomeController@test');

$app['router']->get('welcome', function () {
    $student = Student::first();
    $data = $student->getAttributes();
//    return "student id=".$data['id']."; student name="
//    .$data['name']."; student age=".$data['age'];
    $aPP = \Illuminate\Container\Container::getInstance();
    $factory = $aPP->make('view');
//    dd($factory);
    return $factory->make('welcome')->with('data', $data);
});

