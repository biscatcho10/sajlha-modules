<?php

namespace Modules\Base\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpKernel\DataCollector\RequestDataCollector;

class APIController extends Controller
{
    protected function buildFailedValidationResponse(RequestDataCollector $request, array $errors)
    {
         return new JsonResponse($errors,422);

    }

}
