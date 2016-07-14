<?php
namespace App\Http\Middleware;

use Spatie\Authorize\Middleware\Authorize as BaseAuthorize;
use Symfony\Component\HttpFoundation\Response;

class Authorize extends BaseAuthorize
{
    protected function handleUnauthorizedRequest($request, $ability = null, $model = null)
    {
        return reponse('I am a teapot.', Response::HTTP_I_AM_A_TEAPOT);
    }
}