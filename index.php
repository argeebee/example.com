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
        <h1>Hello I'm Regina Besa</h1>
        <p><img class="avatar" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="Regina B"> 
            Regina Besa is a junior developer passionate about technology and baking. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </p>



<h2>Projects</h2>

<div class="grid">
    <div class="col">
        <div class="card">
            <h3>Draw on Canvas</h3>

                <p>
                    Built a drawing application using the canvas and JavaScript.
                </p>

                    <div class="card-controls">

                        <a href="/draw/index.html">DRAW</a>
                    
                    </div>

        </div>
    </div>

    <div class="col">
            <div class="card">
                <h3>Draw on Canvas</h3>
    
                    <p>
                        Built a drawing application using the canvas and JavaScript.
                    </p>
    
                        <div class="card-controls">
    
                            <a href="/draw.html">DRAW</a>
                        
                        </div>
    
            </div>
        </div>



        <div class="col">
                <div class="card">
                    <h3>Draw on Canvas</h3>
        
                        <p>
                            Built a drawing application using the canvas and JavaScript.
                        </p>
        
                            <div class="card-controls">
        
                                <a href="/draw.html">DRAW</a>
                            
                            </div>
        
                </div>
            </div>




</div>


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
