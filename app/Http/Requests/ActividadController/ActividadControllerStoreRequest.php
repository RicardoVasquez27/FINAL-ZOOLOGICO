<?php

namespace App\Http\Requests\ActividadController;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class ActividadControllerStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
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
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute es demasiado largo.',
            'string' => 'El campo :attribute debe ser una cadena de texto.',
            'date' => 'El campo :attribute debe ser una fecha válida.',
            'date_format' => 'El campo :attribute debe tener un formato de hora válido (HH:mm).',
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
            if (!empty($errors)) {
                return response()->json(['message' => 'Error en la validación', 'errors' => $errors], 422);
            }

            // Crear una nueva instancia de Actividad con los datos proporcionados
            $actividad = new Actividad();
            $actividad->nombre = $this->input('nombre');
            $actividad->fecha = $this->input('fecha');
            $actividad->hora = $this->input('hora');
            $actividad->save();

            return response()->json(['message' => 'Actividad creada con éxito', 'actividad' => $actividad], 201);
        }

        return parent::response($errors);
    }
}
