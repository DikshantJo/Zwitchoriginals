<?php

return [
    [
        'key'    => 'sales.payment_methods.razorpay',
        'name'   => 'Razorpay',
        'sort'   => 6,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ], 
            [
                'name'          => 'key_id',
                'title'         => 'key-id',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],	
			[
                'name'          => 'secret',
                'title'         => 'key-secret',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'active',
                'title'         => 'status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ]
        ]
    ]
];