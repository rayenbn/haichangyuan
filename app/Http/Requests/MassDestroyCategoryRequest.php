<?php

namespace App\Http\Requests;

use App\Category_products;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('product_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:productscategory,id',
        ];
    }
}
