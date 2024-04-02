<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EspecieController as EspecieControllerRequest;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param EspecieControllerRequest\EspecieControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(EspecieControllerRequest\EspecieControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param EspecieControllerRequest\EspecieControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(EspecieControllerRequest\EspecieControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param EspecieControllerRequest\EspecieControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(EspecieControllerRequest\EspecieControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param EspecieControllerRequest\EspecieControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(EspecieControllerRequest\EspecieControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param EspecieControllerRequest\EspecieControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(EspecieControllerRequest\EspecieControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
