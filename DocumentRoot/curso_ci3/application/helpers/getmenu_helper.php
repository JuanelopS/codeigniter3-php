<?php

function main_menu(){
    return array(
        array(
            'title' => 'Login',
            'url' => base_url()
        ),
        array(
            'title' => 'Register',
            'url' => base_url('register')
        )
    );
}