<?php

$meta = [];
$meta['title'] = 'Regina Besa';
$meta['description'] = 'Regina Besa\'s Resume';
$meta['keywords'] = 'Regina Besa, Web Developer, Mobile Developer';

$content = <<<EOT

        <section>
           <h2>Developer</h2> 
           <p>Creative Technologist with recent volunteer experience. Professional with excellent time management skills that enjoys a good challenge.</p>

           <ul>
                <li>Strong Technical Skills</li>
                <li>Analytical Thinker</li>
           </ul>
        
        
           <h3 class="text-initial">Core Competencies</h3>
           <ul class="cc-left">
               <li>Front End Development</li>
               <li>Server Side Programming</li>
               <li>Organizational Skills</li>
               <!-- <li>Pivot Tables</li>
               <li>Microsoft Office</li> -->
               
           </ul>


           <ul class="cc-right">
                <li>Passionate Problem Solver</li>
                <li>Excellent Team Player</li>
                <li>Strong Leadership Skills</li>
                <!-- <li>Google Products</li> -->
            </ul>
        </div>
</section>


<section class="certs">
<div class="col-2">
    <h2>Certifications and Technical Proficiences</h2>

            <ul>
                <li>
                    <em>Certifications</em>
                    Agile Certified Scrum Master
                </li> 

                <li>
                    <em>Platforms</em>
                    Linux, Windows, LAMP
                </li>

                <li>
                    <em>Database</em>
                    mySQL 
                </li>

                <li>
                    <em>Tools</em>
                    VS Code, Git
                </li>


                <li>
                    <em>Languages</em>
                    HTML, CSS, JavaScript, BASH, SQL
                </li>
            </ul>
        </div>
        </section>

            

            <section class="emp">
<div class="col-3">
                <h2>Professional Experience</h2>
                <h3>Motorola Mobility, Victory Staffing - Libertyville, IL <span class="date">2006-2008</span></h3>
                <!-- <p>About the employer</p> -->

                <h4>3G GSM Multimedia Software Test Consultant</h4>
                <ul>
                    <li>Managed Test Plans and organized Test Cases on Test Management Site. 
                        Reported defects with collected log and panic data for Root Cause Analysis.</li>
                    <li>Identified SW bugs and defects in the multimedia partition of the mobile devices.</li>
                </ul>
                
                <h5>Key Contributions:</h5>
                <ul>
                    <li>Maintained internal ticketing site, optimizing procedures and efficiency; 
                        organizing and saving time for entire MMS Team </li>
                </ul>

                <h3>Transportation Security Administration - Rosemont, IL<span class="date">2002-2005</span></h3>
                <!-- <p>About the employer</p> -->

                <h3>Security Screener</h3>
                <ul>
                    <li>Conducted screening of passengers, baggage, or cargo to ensure compiance with TSA regulations.</li>
                    <li>Operated basic security equipment such as x-ray machines and hans wands at screening checkpoints.</li>
                </ul>
                <h4>Key Contributions:</h4>
                <ul>
                <li>Trained newly hired employees</li>
                </ul>

            </div>
            </section>

            <section class="edu">
            <div class="col-4">
                <h2>Education</h2>
                <h3>MicroTrain Technologies - Chicago, IL <span class="date">2018</span></h3>
                <h4>Agile Full Stack Web Mobile and Hybrid Mobile Application Development</h4>

                
                <h3>DeVry University - Chicago, IL <span class="date">2005</span></h3>
                <h4>Bachelor of Science - Computer Information Systems</h4>
            </div>
            </section>
                            

            

        </div>
     
EOT;

include '../core/layout.php';