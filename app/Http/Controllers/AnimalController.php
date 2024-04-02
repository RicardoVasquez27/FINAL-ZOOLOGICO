<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AnimalController as AnimalControllerRequest;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param AnimalControllerRequest\AnimalControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(AnimalControllerRequest\AnimalControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param AnimalControllerRequest\AnimalControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(AnimalControllerRequest\AnimalControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param AnimalControllerRequest\AnimalControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(AnimalControllerRequest\AnimalControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param AnimalControllerRequest\AnimalControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(AnimalControllerRequest\AnimalControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param AnimalControllerRequest\AnimalControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(AnimalControllerRequest\AnimalControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
