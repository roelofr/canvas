<?php

namespace Orchestra\Canvas\Tests\Feature\Generators\Routing;

use Orchestra\Canvas\Tests\Feature\Generators\TestCase;

class ControllerTest extends TestCase
{
    protected $files = [
        'app/Http/Controllers/FooController.php',
    ];

    /** @test */
    public function it_can_generate_controller_file()
    {
        $this->artisan('make:controller', ['name' => 'FooController'])
            ->assertExitCode(0);

        $this->assertFileContains([
            'namespace App\Http\Controllers;',
            'use Illuminate\Http\Request;',
            'class FooController extends Controller',
        ], 'app/Http/Controllers/FooController.php');

        $this->assertFileNotContains([
            'public function __invoke(Request $request)',
        ], 'app/Http/Controllers/FooController.php');
    }

    /** @test */
    public function it_can_generate_controller_with_invokable_options_file()
    {
        $this->artisan('make:controller', ['name' => 'FooController', '--invokable' => true])
            ->assertExitCode(0);

        $this->assertFileContains([
            'namespace App\Http\Controllers;',
            'use Illuminate\Http\Request;',
            'class FooController extends Controller',
            'public function __invoke(Request $request)',
        ], 'app/Http/Controllers/FooController.php');
    }

    /** @test */
    public function it_can_generate_controller_with_model_options_file()
    {
        $this->artisan('make:controller', ['name' => 'FooController', '--model' => 'Foo', '--no-interaction' => true])
            ->assertExitCode(0);

        $this->assertFileContains([
            'namespace App\Http\Controllers;',
            'use App\Foo;',
            'public function index()',
            'public function create()',
            'public function store(Request $request)',
            'public function show(Foo $foo)',
            'public function edit(Foo $foo)',
            'public function update(Request $request, Foo $foo)',
            'public function destroy(Foo $foo)',
        ], 'app/Http/Controllers/FooController.php');
    }

    /** @test */
    public function it_can_generate_controller_with_model_with_parent_options_file()
    {
        $this->artisan('make:controller', ['name' => 'FooController', '--model' => 'Bar', '--parent' => 'Foo', '--no-interaction' => true])
            ->assertExitCode(0);

        $this->assertFileContains([
            'namespace App\Http\Controllers;',
            'use App\Bar;',
            'use App\Foo;',
            'public function index(Foo $foo)',
            'public function create(Foo $foo)',
            'public function store(Request $request, Foo $foo)',
            'public function show(Foo $foo, Bar $bar)',
            'public function edit(Foo $foo, Bar $bar)',
            'public function update(Request $request, Foo $foo, Bar $bar)',
            'public function destroy(Foo $foo, Bar $bar)',
        ], 'app/Http/Controllers/FooController.php');
    }
}
