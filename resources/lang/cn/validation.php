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

    'accepted'             => ':attribute 必须被接受',
    'active_url'           => ':attribute 不是有效的URL地址',
    'after'                => ':attribute 必须是在 :date 之后的日期',
    'alpha'                => ':attribute 只允许包含字母。',
    'alpha_dash'           => ':attribute 只可以包含字母、数字或者横线',
    'alpha_num'            => ':attribute 只可以包含字母或者数字',
    'array'                => ':attribute 必须是一个数组。',
    'before'               => ':attribute 必须是在 :date 之前的日期',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 与 :max 之间',
        'file'    => ':attribute 的大小必须是 :min 到 :max KB.',
        'string'  => ':attribute 必须是 :min 到 :max 个字符。',
        'array'   => ':attribute 的条目数量必须是 :min 到 :max 之间。',
    ],
    'boolean'              => ':attribute 字段必须是 true 或 false.',
    'confirmed'            => ':attribute 确认不匹配。',
    'date'                 => ':attribute 不是一个有效的日期。',
    'date_format'          => ':attribute 日期格式与 :format 不匹配',
    'different'            => ':attribute 和 :other 必须不一致',
    'digits'               => ':attribute 必须 :digits 位',
    'digits_between'       => ':attribute 位数必须在 :min 到 :max 之间。',
    'email'                => ':attribute 必须是一个有效的电子邮件地址',
    'exists'               => '选中的:attribute无效。',
    'filled'               => ':attribute字段必填。',
    'image'                => ':attribute必须是一个图片',
    'in'                   => '选中的:attribute无效。',
    'integer'              => ':attribute必须是一个整数',
    'ip'                   => ':attribute必须是一个有效的IP地址',
    'json'                 => ':attribute必须是一个有效的JSON字符串',
    'max'                  => [
        'numeric' => ':attribute 不能大于:max.',
        'file'    => ':attribute 文件大小不能大于:max KB。',
        'string'  => ':attribute 不能多于:max 个字符。',
        'array'   => ':attribute 的条目数量不能大于 :max 个。',
    ],
    'mimes'                => ':attribute 的MIME类型必须是 type: :values.',
    'min'                  => [
        'numeric' => ':attribute 不能小于 :min.',
        'file'    => ':attribute 文件大小不能小于 :min KB。',
        'string'  => ':attribute 不能少于 :min 个字符。',
        'array'   => ':attribute 的条目数量至少 :min 个。',
    ],
    'not_in'               => '选中的 :attribute 无效。',
    'numeric'              => ':attribute 必须是一个数字。',
    'regex'                => ':attribute 格式无效。',
    'required'             => ':attribute 字段必填。',
    'required_if'          => '当 :other 是 :value 时， :attribute 字段必填。',
    'required_unless'      => ':attribute 字段必填，除非 :other 是 :values。',
    'required_with'        => '当 :values 存在时， :attribute 字段必填。',
    'required_with_all'    => '当 :values 存在时， :attribute 字段必填。 ',
    'required_without'     => '当 :values 不存在时， :attribute 字段必填。 ',
    'required_without_all' => '当 :values 中没有任何一个存在时， :attribute 字段必填。',
    'same'                 => ':attribute 和 :other 必须一致。',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size.',
        'file'    => ':attribute 必须是 :size KB。',
        'string'  => ':attribute 必须是 :size 个字符。',
        'array'   => ':attribute 必须包含 :size 个条目数量。',
    ],
    'string'               => ':attribute 必须是字符串。',
    'timezone'             => ':attribute 必须是一个有效的时区。',
    'unique'               => ':attribute 已经存在',
    'url'                  => ':attribute 格式无效。',

    'path'                 => [
        'valid'   => ':attribute 无效或者路径无法读取。',
    ],

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
