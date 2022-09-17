<?php

namespace src\Applications\Http\Controllers;

use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use src\Applications\Http\FormRequests\RespondentSaveRequest;
use Symfony\Component\HttpFoundation\Response;
use src\Business\Services\RespondentService;

class RespondentController extends BaseController
{
    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function save(
        RespondentSaveRequest $request,
        RespondentService $respondentService
    ): JsonResponse
    {
        $respondentService->save($request->validationData());

        return new JsonResponse(null, Response::HTTP_OK);
    }
}