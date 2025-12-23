<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

abstract class BaseRequest extends FormRequest
{
  /**
   * Authorization default
   * Bisa dioverride di child request
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Format error validasi standar (API friendly)
   */
  protected function failedValidation(Validator $validator)
  {
    throw new HttpResponseException(
      response()->json([
        'status'  => false,
        'message' => 'Validation error',
        'errors'  => $validator->errors(),
      ], 422)
    );
  }

  /**
   * Tempat normalisasi data
   * contoh: trim, cast, merge field
   */
  protected function prepareForValidation()
  {
    // $this->merge([
    //     'name' => trim($this->name),
    // ]);
  }
}
