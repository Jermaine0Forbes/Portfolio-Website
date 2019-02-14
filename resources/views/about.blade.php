@extends('layouts.layout')

@section('main')
    <div id="about" class="container page-content">
            <div class="row justify-content-center">
                <h2 id="about-title" class="about-block pad" > Here is my brief bio ...</h2>


                <div id="bio" class="row justify-content-center about-block">
                    <div class="col-10 col-sm-8 ">
                        <div class="border-pic">
                            <img class="img-fluid" src="img/white-logo.svg" alt="logo or picture of me">
                        </div>
                    </div>
                    <div class=" col-10 col-sm-8 ">
                        <div class="fluid">
                            <h3>About</h3>
                            <p>
                                Hello comrade, my name is Jermaine Forbes and I am a web developer. I have experience in front-end work for more
                                    than 5 years so that means I am capable of doing is HTML, CSS, and Javascript. Moreover, I also know how to use frameworks and
                                    libraries like Bootstrap, JQuery, and SCSS. In addition to that, I am also knowledgeable of how to use adobe software
                                    like Illustrator, and Photoshop. At this moment, I am trying to expand my knowledge by learning the LAMP stack with PHP
                                    and MYSQL, and I'm also focused on the MEAN stack with Node.js and MongoDB. I have a few  projects that I am working on that
                                    showcases my level of experience. I appreciate you reading this, and thank you for your time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="fluid row justify-content-center about-block ">
                    <div class="col-10 col-sm-8">
                        <div class="fluid">
                            <h3>Highlights</h3>
                            <div class="row">
                                <div class="half">
                                    <ul>
                                        <li>Creating responsive web design</li>
                                        <li>Excellent communication skills</li>
                                        <li>Ability to create web mockups</li>
                                        <li>Knowledge in AJAX and JSON</li>
                                    </ul>
                                </div>
                                <div class="half">
                                    <ul>
                                        <li>WordPress Development</li>
                                        <li>Delivers web projects in a timely manner.</li>
                                        <li>Testing and debugging web applications</li>
                                        <li>Knowledge in Git or version control software</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="experience" class="row justify-content-center about-block ">
                    <div class="col-10 col-sm-8">
                        <div class="fluid">
                            <h3>Experience</h3>
                            <div class="row">
                                <div class="half">
                                    <h4>Web Developer</h4>
                                </div>
                                <div class="half">
                                    <h4>December 2016 - Present</h4>
                                </div>
                            </div>
                            <div class="row">
                                <h4>Corey Consulting – 6900 Yumuri St / 305-928-1723</h4>
                            </div>
                            <div class="row">
                                <p>
                                    A web developer that focuses  more on the front end side of creating visuals for the various projects. With HTML, CSS, JQuery, and design software like Photoshop to create graphics or logos. I cultivated numerous bare boned sites to become proficient sights of exception.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- about -->    
@endsection
