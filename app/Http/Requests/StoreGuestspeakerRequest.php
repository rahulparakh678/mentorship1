<?php

namespace App\Http\Requests;

use App\Guestspeaker;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreGuestspeakerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('guestspeaker_create');
    }

    public function rules()
    {
        return [
            'speakername' => [
                'string',
                'required',
            ],
            'speaker_name' => [
                'required',
            ],
            'speakermobile' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
