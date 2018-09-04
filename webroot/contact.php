<?php
include '../core/processContactForm.php';

$meta = [];
$meta['title'] = 'Contact Regina Besa';


$content = <<<EOT

<h1>Regina Besa</h1>

<form action="contact.php" method="POST" novalidate>

    <div class="form-control">
        <label for="name">Name</label>
        <br>
        <input value="{$valid->userInput('name')}" type="text" name="name" id="name">
        <div>
        {$valid->error('name')}
        </div>
    </div>

    <div class="form-control">
        <label for="email">Email Address</label>
        <br>
        <input value="{$valid->userInput('email')}" type="email" name="email" id="email">
        <div>
        {$valid->error('email')}
        </div>
    </div>

    <div class="form-control">
        <label for="message">Ask us a Question</label>
        <br>
        <textarea rows="4" cols="50" name="message">{$valid->userInput('message')}</textarea>
        <div>
        {$valid->error('message')}
        </div>
    </div>    

    <div class="form-control">
        <input type="submit" value="Send">
    </div>
    
</form>
EOT;

include '../core/layout.php';