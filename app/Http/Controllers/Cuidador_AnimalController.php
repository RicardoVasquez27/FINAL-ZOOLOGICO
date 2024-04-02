<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Cuidador_AnimalController as Cuidador_AnimalControllerRequest;

class Cuidador_AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(Cuidador_AnimalControllerRequest\Cuidador_AnimalControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
