<?php

include_once '../../../autoload.php';

use Impl\Creational\Builder\FormBuilder;
use Impl\Creational\Builder\Form;
use Impl\Creational\Builder\Input;

$formBuilder = new FormBuilder('action.php');

$form = $formBuilder
    ->method(Form::ACTION_GET)
    ->input('name', Input::TYPE_TEXT)
    ->input('email', Input::TYPE_EMAIL)
    ->input('birth_date', Input::TYPE_DATE)
    ->input('password', Input::TYPE_PASSWORD)
    ->input('adult', Input::TYPE_CHECKBOX)
    ->submit()
    ->build();

echo $form->render();