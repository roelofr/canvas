#!/bin/bash

# Database
cp -rf vendor/laravel/framework/src/Illuminate/Database/Console/Factories/stubs/*.stub storage/database/factories/
cp -rf vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/*.stub storage/database/migrations/

# Foundation
cp -rf vendor/laravel/framework/src/Illuminate/Foundation/Console/stubs/*.stub storage/laravel/

## Eloquent
rm -rf storage/eloquent/*.stub
mv storage/laravel/model.stub storage/eloquent/model.stub
mv storage/laravel/observer.plain.stub storage/eloquent/observer.plain.stub
mv storage/laravel/observer.stub storage/eloquent/observer.stub
mv storage/laravel/pivot.model.stub storage/eloquent/pivot.model.stub

## Event
rm -rf storage/event/*.stub
mv storage/laravel/event-handler-queued.stub storage/event/handler-queued.stub
mv storage/laravel/event-handler.stub storage/event/handler.stub
mv storage/laravel/event.stub storage/event/event.stub

## Exception
rm -rf storage/exception/*.stub
mv storage/laravel/exception-render-report.stub storage/exception/render-and-report.stub
mv storage/laravel/exception-render.stub storage/exception/render.stub
mv storage/laravel/exception-report.stub storage/exception/report.stub
mv storage/laravel/exception.stub storage/exception/exception.stub

## Job
rm -rf storage/job/*.stub
mv storage/laravel/job-queued.stub storage/job/queued.stub
mv storage/laravel/job.stub storage/job/job.stub

## Listener
rm -rf storage/listener/*.stub
mv storage/laravel/listener-duck.stub storage/listener/duck.stub
mv storage/laravel/listener-queued-duck.stub storage/listener/queued-duck.stub
mv storage/laravel/listener-queued.stub storage/listener/queued.stub
mv storage/laravel/listener.stub storage/listener/listener.stub

## Policy
rm -rf storage/policy/*.stub
mv storage/laravel/policy.stub storage/policy/policy.stub
mv storage/laravel/policy.plain.stub storage/policy/plain.stub

## Testing
rm -rf storage/testing/*.stub
mv storage/laravel/test.stub storage/testing/feature.stub
mv storage/laravel/unit-test.stub storage/testing/unit.stub

# Routing
cp -rf vendor/laravel/framework/src/Illuminate/Routing/Console/stubs/*.stub storage/routing/


