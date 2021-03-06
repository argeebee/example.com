<?php

include '../core/Regina/src/Validation/Validate.php';
include '../vendor/autoload.php';
include '../../config/keys.php';

use Regina\Validation;
use Mailgun\Mailgun;

$valid= new Regina\Validation\Validate();

$filter = [
    'name'=>FILTER_SANITIZE_STRING,
    'email'=>FILTER_SANITIZE_EMAIL,
    'message'=>FILTER_SANITIZE_STRING,
];

$input = filter_input_array(INPUT_POST, $filter);
if(!empty($input)){
    $valid->validation = [
        'email'=>[[
                'rule'=>'email',
                'message'=>'Please enter a valid email'

        ],[
            'rule'=>'notEmpty',
            'message'=>'Please enter an email'

        ]],
        'name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter a name'
        ]],
        'message'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter a message'
        ]]
    ];

    $valid->check($input);

    if(empty($valid->errors)){

        # Instantiate the client.
        $mgClient = new Mailgun(MG_KEY);

        # Make the call to the client.
        $result = $mgClient->sendMessage(MG_DOMAIN,[                          
                        'from'    =>"{$input['name']} <{$input['email']}>",
                        'to'      => 'regina besa <reginabesa@gmail.com>',
                        'subject' => 'Contact form submitted',
                        'text'    => $input['message']
        ]);

        if($result->http_response_code === 200){
            return header('LOCATION: thanks.php');
        }

    }else{
        $message = '<div style="color:#ff0000">Your form has errors!</div>';
    }
}
