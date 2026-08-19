<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->web(append: [
            \App\Http\Middleware\LocaleMiddleware::class,
        ]);

    })


->withExceptions(function ($exceptions): void {
    $exceptions->render(function (
        NotFoundHttpException $exception,
        $request
    ) {
        return response()->view('error.404', [], 404);
    });
})



->withExceptions(function (Exceptions $exceptions): void {

    $exceptions->render(function (
        AccessDeniedHttpException $e,
        $request
    ) {
        return response()->view('errors.403', [], 403);
    });

})
    ->create();
