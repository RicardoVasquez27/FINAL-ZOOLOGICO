<?php

namespace App\Http\Requests\ActividadController;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class ActividadControllerUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules()
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
    public function messages()
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

            // Obtener el ID de la actividad a actualizar
            $id = $this->route('id');

            // Buscar la actividad en la base de datos
            $actividad = Actividad::find($id);

            // Verificar si la actividad existe
            if (!$actividad) {
                return response()->json(['error' => 'No se pudo encontrar la actividad.'], 404);
            }

            // Actualizar la actividad con los datos proporcionados
            $actividad->nombre = $this->input('nombre');
            $actividad->fecha = $this->input('fecha');
            $actividad->hora = $this->input('hora');
            $actividad->save();

            return response()->json(['message' => 'Actividad actualizada con éxito', 'actividad' => $actividad], 200);
        }

        return parent::response($errors);
    }
}
