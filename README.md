Code Generators for Laravel Applications and Packages
==============

**Canvas** replicates of all the `make` artisan commands available in your basic Laravel application and allows for everyone to use it outside of Laravel installation such as when building Laravel packages.

[![Build Status](https://travis-ci.org/orchestral/canvas.svg?branch=master)](https://travis-ci.org/orchestral/canvas)
[![Latest Stable Version](https://poser.pugx.org/orchestra/canvas/v/stable)](https://packagist.org/packages/orchestra/canvas)
[![Total Downloads](https://poser.pugx.org/orchestra/canvas/downloads)](https://packagist.org/packages/orchestra/canvas)
[![Latest Unstable Version](https://poser.pugx.org/orchestra/canvas/v/unstable)](https://packagist.org/packages/orchestra/canvas)
[![License](https://poser.pugx.org/orchestra/canvas/license)](https://packagist.org/packages/orchestra/canvas)
[![Coverage Status](https://coveralls.io/repos/github/orchestral/canvas/badge.svg?branch=master)](https://coveralls.io/github/orchestral/canvas?branch=master)


## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require-dev": {
        "orchestra/canvas": "^4.0"
    }
}
```

And then run `composer install` from the terminal.

### Quick Installation

Above installation can also be simplify by using the following command:

    composer require --dev "orchestra/canvas"

## Usages

As a Laravel developer, you should be familiar with the following commands:

| Command.            | Description
|:--------------------|:---------------------     
| `make:channel` | Create a new channel class
| `make:command` | Create a new Artisan command
| `make:controller` | Create a new controller class
| `make:event` | Create a new event class
| `make:exception` | Create a new custom exception class
| `make:factory` | Create a new model factory
| `make:job` | Create a new job class
| `make:listener` | Create a new event listener class
| `make:mail` | Create a new email class
| `make:middleware` | Create a new middleware class
| `make:migration` | Create a new migration file
| `make:model` | Create a new Eloquent model class
| `make:notification` | Create a new notification class
| `make:observer` | Create a new observer class
| `make:policy` | Create a new policy class
| `make:provider` | Create a new service provider class
| `make:request` | Create a new form request class
| `make:resource` | Create a new resource
| `make:rule` | Create a new validation rule
| `make:seeder` | Create a new seeder class
| `make:test` | Create a new test class

Which can be execute via:

    php artisan make:migration CreatePostsTable --create

With **Canvas**, you can run the equivalent command via:

    ./vendor/bin/canvas make:migration CreatePostsTable --create

### `canvas.yaml` Preset file

To get started you can first create `canvas.yaml` in the root directory of your Laravel project or package.

#### Laravel preset

You can run the following command to create the file:

    ./vendor/bin/canvas preset laravel

Which will output the following as `canvas.yaml`:

```yaml
preset: laravel

namespace: App

model:
  namespace: App
```

#### Package preset

You can run the following command to create the file:

    ./vendor/bin/canvas preset laravel

Which will output the following as `canvas.yaml`:

```yaml
preset: package

namespace: PackageName
user-auth-provider: App\User

paths:
  src: src
  resource: resources

factory:
  path: database/factories

migration:
  path: database/migrations
  prefix: ''

console:
  namespace: PackageName\Console

model:
  namespace: PackageName

provider:
  namespace: PackageName

testing:
  namespace: PackageName\Tests
```

> You need to change `PackageName` to the root namespace for your package.


Alternatively, you can set `--namespace` option to ensure the namespace is used in the file:

    ./vendor/bin/canvas preset package --namespace="Foo\Bar"

```yaml
preset: package

namespace: Foo\Bar
user-auth-provider: App\User

paths:
  src: src
  resource: resources

factory:
  path: database/factories

migration:
  path: database/migrations
  prefix: ''

console:
  namespace: Foo\Bar\Console

model:
  namespace: Foo\Bar
  
provider:
  namespace: Foo\Bar

testing:
  namespace: Foo\Bar\Tests
```
