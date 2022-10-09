<?php

interface Button {
    public function render();
}

interface GUIFactory{
    public function createButton();
}

class SubmitButton implements Button{
    public function render(){
        echo 'Rendering Submit Button';
    }
}

class ResetButton implements Button{
    public function render(){
        echo 'Rendering reset Button';
    }
}

class ResetFactory implements GUIFactory{
    public function createButton(){
        return new ResetButton();
    }
}

class SubmitFactory implements GUIFactory{
    public function createButton(){
        return new SubmitButton();
    }
}

$submitFactory = new SubmitFactory();
$button = $submitFactory->createButton();
$button->render();
echo '</br>';
$resetFactory = new ResetFactory();
$button = $resetFactory->createButton();
$button->render();