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
        <h1>Regina Besa</h1>
        <p>
            Thanks for stopping by and taking the time to leave a message.
            I'll get back back to you very soon.
            Please come back soon.
        </p>
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
