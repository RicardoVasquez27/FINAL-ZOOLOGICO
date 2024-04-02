<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RecintoController as RecintoControllerRequest;

class RecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param RecintoControllerRequest\RecintoControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(RecintoControllerRequest\RecintoControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param RecintoControllerRequest\RecintoControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(RecintoControllerRequest\RecintoControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param RecintoControllerRequest\RecintoControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(RecintoControllerRequest\RecintoControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param RecintoControllerRequest\RecintoControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(RecintoControllerRequest\RecintoControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param RecintoControllerRequest\RecintoControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(RecintoControllerRequest\RecintoControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
