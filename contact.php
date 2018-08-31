<?php

include 'core/Regina/src/Validation/Validate.php';

use Regina\Validation;

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
        $message = '<div>Your form has been submitted</div>';
        header('LOCATION: thanks.php');
    }else{
        $message = '<div style="color:#ff0000">Your form has errors!</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF=8">
                <title>Regina Besa</title>
                <link rel="stylesheet" type="text/css" href="dist/css/main.min.css">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
    <body>
        
        <header>
                <span class="logo">Regina Besa</span>
                <a id="toggleMenu">Menu</a>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="resume.php">Resume</a></li>
                        <li><a href="contact.php">Contact</a></li>                
                    </ul>
                </nav>
        </header>


<main>

<?php echo (!empty($message)?$message:null); ?>

        <h1>Regina Besa</h1>

<form action="contact.php" method="POST" novalidate>

    <div class="form-control">
        <label for="name">Name</label><br>
        <input value="<?php echo $valid->userInput('name'); ?>" type="text" name="name" id="name">
        <div>
        <?php echo $valid->error('name'); ?>
        </div>
  </div>

    <div class="form-control">
        <label for="email">Email Address</label><br>
        <input value="<?php echo $valid->userInput('email'); ?>" type="email" name="email" id="email">
        <div>
        <?php echo $valid->error('email'); ?>
        </div>
    </div>

    <div class="form-control">
        <label for="message">Ask us a Question</label><br>
        <textarea rows="4" cols="50" name="message"><?php echo $valid->userInput('message'); ?></textarea>
        <div>
        <?php echo $valid->error('message'); ?>
        </div>
    </div>    

    <div class="form-control">
        <input type="submit" value="Send">
    </div>
    
</form>

</main>
<script>

        var toggleMenu = document.getElementById('toggleMenu');
        var nav = document.querySelector('nav');
        toggleMenu.addEventListener(
          'click',
          function(){
            if(nav.style.display=='block'){
              nav.style.display='none';
            }else{
              nav.style.display='block';
            }
          }
        );
      </script>
    </body>
</html>
