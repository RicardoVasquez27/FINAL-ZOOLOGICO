<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CuidadorController as CuidadorControllerRequest;

class CuidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param CuidadorControllerRequest\CuidadorControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(CuidadorControllerRequest\CuidadorControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param CuidadorControllerRequest\CuidadorControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(CuidadorControllerRequest\CuidadorControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param CuidadorControllerRequest\CuidadorControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(CuidadorControllerRequest\CuidadorControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param CuidadorControllerRequest\CuidadorControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(CuidadorControllerRequest\CuidadorControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param CuidadorControllerRequest\CuidadorControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(CuidadorControllerRequest\CuidadorControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
