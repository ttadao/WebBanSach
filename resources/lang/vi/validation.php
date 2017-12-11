<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Trường :attribute phải được chấp nhận.',
    'active_url'           => 'Trường :attribute không phải là một đường dẫn URL.',
    'after'                => 'Trường :attribute phải là một ngày sau :date.',
    'alpha'                => 'Trường :attribute chỉ có thể chứa các chữ cái.',
    'alpha_dash'           => 'Trường :attribute chỉ có thể chứa các chữ cái, số và dấu gạch ngang.',
    'alpha_num'            => 'Trường :attribute chỉ có thể chứa các chữ cái và số.',
    'array'                => 'Trường :attribute phải là một danh sách.',
    'before'               => 'Trường :attribute phải là một ngày trước :date.',
    'between'              => [
        'numeric' => 'Giá trị trường :attribute phải trong khoảng :min và :max.',
        'file'    => 'Trường :attribute phải từ :min đến :max KB.',
        'string'  => 'Trường :attribute phải từ :min đến :max ký tự.',
        'array'   => 'Trường :attribute phải từ :min đến :max mục.',
    ],
    'boolean'              => 'Trường :attribute phải là true hoặc false.',
    'confirmed'            => 'Trường mật khẩu xác nhận không khớp.',
    'date'                 => 'Trường :attribute không phải là một ngày hợp lệ.',
    'date_format'          => 'Trường :attribute không phù hợp với định dạng :format.',
    'different'            => 'Trường :attribute và :other phải khác nhau.',
    'digits'               => 'Trường :attribute phải chứa :digits ký số.',
    'digits_between'       => 'Trường :attribute phải chứa từ :min đến :max ký số.',
    'distinct'             => 'Trường :attribute có một giá trị trùng lặp.',
    'email'                => 'Trường này phải là một địa chỉ email hợp lệ.',
    'exists'               => 'Trường được chọn :attribute không hợp lệ.',
    'filled'               => 'Trường :attribute bắt buộc phải nhập.',
    'image'                => 'Trường :attribute phải là một hình ảnh.',
    'in'                   => 'Trường được chọn :attribute không hợp lệ.',
    'in_array'             => 'Trường :attribute không tồn tại trong :other.',
    'integer'              => 'Trường :attribute phải là số nguyên.',
    'ip'                   => 'Trường :attribute phải là một địa chỉ IP hợp lệ.',
    'json'                 => 'Trường :attribute phải là một chuỗi JSON hợp lệ.',
    'max'                  => [
        'numeric' => 'Trường :attribute không được lớn hơn :max.',
        'file'    => 'Trường :attribute không được vượt quá :max KB.',
        'string'  => 'Trường này không được vượt quá :max ký tự.',
        'array'   => 'Trường :attribute không được có quá :max mục.',
    ],
    'mimes'                => 'Trường :attribute phải là một tập tin kiểu: :values.',
    'min'                  => [
        'numeric' => 'Giá trị trường :attribute phải tối thiểu là :min.',
        'file'    => 'Trường :attribute phải ít nhất :min KB.',
        'string'  => 'Trường :attribute phải có ít nhất :min ký tự.',
        'array'   => 'Trường :attribute phải có ít nhất :min mục.',
    ],
    'not_in'               => 'Trường được chọn :attribute không hợp lệ.',
    'numeric'              => 'Trường :attribute phải là một số.',
    'present'              => 'Trường :attribute phải tồn tại.',
    'regex'                => 'Trường :attribute sai định dạng.',
    'required'             => 'Trường này bắt buộc phải nhập.',
    'required_if'          => 'Trường :attribute bắt buộc nhập khi :other là :value.',
    'required_unless'      => 'Trường :attribute bắt buộc nhập trừ khi :other là :values.',
    'required_with'        => 'Trường :attribute bắt buộc nhập khi :values tồn tại.',
    'required_with_all'    => 'Trường :attribute bắt buộc nhập khi :values tồn tại.',
    'required_without'     => 'Trường :attribute bắt buộc nhập khi :values không tồn tại.',
    'required_without_all' => 'Trường :attribute bắt buộc nhập khi không có :values tồn tại.',
    'same'                 => 'Trường :attribute và :other phải trùng khớp.',
    'size'                 => [
        'numeric' => 'Trường :attribute phải bằng :size.',
        'file'    => 'Trường :attribute phải bằng :size KB.',
        'string'  => 'Trường :attribute phải chứa :size ký tự.',
        'array'   => 'Trường :attribute phải chứa :size mục.',
    ],
    'string'               => 'Trường :attribute phải là một chuỗi.',
    'timezone'             => 'Trường :attribute phải là múi giờ hợp lệ.',
    'unique'               => 'Thông tin đã tồn tại trong hệ thống.',
    'url'                  => 'Trường :attribute sai định dạng.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
