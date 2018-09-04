<?php 

$meta = [];
$meta['title'] = 'Regina Besa';
$meta['description'] = 'About Regina Besa';
$meta['keywords'] = 'Regina Besa, Web Developer, Mobile Developer';

$content = <<<EOT
   
<h1>Hello I'm Regina Besa</h1>
<p><img class="avatar" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="Regina B"> 
    Regina Besa is a full stack hybrid mobile app developer passionate about technology and baking. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
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

EOT;

include '../core/layout.php';