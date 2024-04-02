<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ActividadController as ActividadControllerRequest;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param ActividadControllerRequest\ActividadControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(ActividadControllerRequest\ActividadControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param ActividadControllerRequest\ActividadControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(ActividadControllerRequest\ActividadControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param ActividadControllerRequest\ActividadControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(ActividadControllerRequest\ActividadControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param ActividadControllerRequest\ActividadControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(ActividadControllerRequest\ActividadControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param ActividadControllerRequest\ActividadControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(ActividadControllerRequest\ActividadControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
