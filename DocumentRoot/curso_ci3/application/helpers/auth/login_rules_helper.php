<?php

function getLoginRules(){
    return array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'You must provide a %s.',
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required',
            'errors' => array(
                'required' => 'You must provide a %s.',
            ),
        ),

    );
}