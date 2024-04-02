<?php

namespace App\Http\Requests\ActividadController;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class ActividadControllerShowRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [
            '' => '',
        ];
    }

    /**
     * messages
     * @author PlantUmlGen
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => 'The :attribute is required.',
            'max' => 'The :attribute is very long.',
            'unique' => 'The :attribute has already been taken.',
            'exists' => 'Could not find :attribute',
        ];
    }

    /**
     * response
     * @author PlantUmlGen
     * @return JsonResponse
     */
    public function response(array $errors): JsonResponse
    {
        if ($this->expectsJson()) {
            // Verificar si la solicitud tiene un parámetro de ID
            $id = $this->route('id');

            // Buscar la actividad por su ID
            $actividad = Actividad::find($id);

            // Verificar si la actividad existe
            if (!$actividad) {
                return response()->json(['error' => 'No se pudo encontrar la actividad.'], 404);
            }

            return response()->json(['actividad' => $actividad], 200);
        }

        return parent::response($errors);
    }
}
