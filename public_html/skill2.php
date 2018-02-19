<?php include('head.php') ?>
    <div id="contain">
        <?php include('header.php'); ?>

        <div id="skill" class="container page-content">
            <div class="row justify-content-center">
                <div class="col-sm-8 pad padH">
                    <h2 class="text-center">Here is what I am skilled at... so far</h2>
                    <div id="frontend" class="row web-skills">
                        <div class="fluid">
                            <h3>Front End</h3>
                            <p>
                                I have spent a great deal of years focusing on building HTML/CSS applications. Or basically
                                focusing on the front-end side of things. Within the circle loaders, the numbers
                                represents the years I have been learning the language or framework.
                            </p>
                            <div class="row">
                                <div class="fluid">
                                    <div class="adjust">
                                        <div class="fourth">
                                            <div class="skill-container">
                                                <div class="progress-container" data-front="1">

                                                </div>

                                                <p class="h4 text-center pad-half padV">HTML</p>
                                            </div>
                                        </div>
                                        <div class="fourth">
                                            <div class="skill-container">
                                                <div class="progress-container" data-front="2">
                                                </div>
                                                <p class="h4 text-center pad-half padV">CSS</p>
                                            </div>
                                        </div>
                                        <div class="fourth">
                                            <div class="skill-container">
                                                <div class="progress-container" data-front="3">
                                                </div>
                                                <p class="h4 text-center pad-half padV">Javascript</p>
                                            </div>
                                        </div>
                                        <div class="fourth">
                                            <div class="skill-container">
                                                <div class="progress-container" data-front="4">
                                                </div>
                                                <p class="h4 text-center pad-half padV">Bootstrap</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="fluid">
                                    <div class="adjust">
                                        <div class="third">
                                            <div class="skill-container">
                                                <div class="progress-container" data-front="5">
                                                </div>
                                                <p class="h4 text-center pad-half padV">SCSS</p>
                                            </div>
                                        </div>
                                        <div class="third">
                                            <div class="skill-container">
                                                <div class="progress-container" data-front="6">
                                                </div>
                                                <p class="h4 text-center pad-half padV">Photoshop</p>
                                            </div>
                                        </div>
                                        <div class="third">
                                            <div class="skill-container">
                                                <div class="progress-container" data-front="7">
                                                </div>
                                                <p class="h4 text-center pad-half padV">Illustrator</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="backend" class="row web-skills">
                        <div class="fluid">
                            <h3>Back End</h3>

                            <div class="row">
                                <div class="fluid">
                                    <div class="adjust">
                                        <div class="fourth">
                                            <div class="skill-container">
                                                <div class="progress-container" data-back="1">
                                                </div>
                                                <p class="h4 text-center pad-half padV">PHP</p>
                                            </div>
                                        </div>
                                        <div class="fourth">
                                            <div class="skill-container">
                                                <div class="progress-container" data-back="2">
                                                </div>
                                                <p class="h4 text-center pad-half padV">Node.js</p>
                                            </div>
                                        </div>
                                        <div class="fourth">
                                            <div class="skill-container">
                                                <div class="progress-container" data-back="3">
                                                </div>
                                                <p class="h4 text-center pad-half padV">MongoDB</p>
                                            </div>
                                        </div>
                                        <div class="fourth">
                                            <div class="skill-container">
                                                <div class="progress-container" data-back="4">
                                                </div>
                                                <p class="h4 text-center pad-half padV">MySQL</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/progressbar.min.js"></script>
        <script type="text/javascript">
            window.onload = function(){
                var bar, bar2, bar3, bar4,
                    bar5, bar6, bar7, back, back2, back3, back4;

                 bar = new ProgressBar.Circle(".progress-container[data-front='1']", {
                  color: '#eee',
                  trailColor: 'white',
                  trailWidth: 1,
                  duration: 3000,
                  easing: 'bounce',
                  strokeWidth: 6,
                  from: {color: '#eee', a:0},
                  to: {color: '#97A4CB', a:1},
                  // Set default step function for all animate calls
                  step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    //var value = Math.round(circle.value() * 10);
                    var value = 0;
                      if (value === 0) {
                        circle.setText('6');
                      } else {
                        circle.setText(value);
                      }
                  }
                });

                 bar2 = new ProgressBar.Circle(".progress-container[data-front='2']", {
                  color: '#eee',
                  trailColor: 'white',
                  trailWidth: 1,
                  duration: 3000,
                  easing: 'bounce',
                  strokeWidth: 6,
                  from: {color: '#eee', a:0},
                  to: {color: '#97A4CB', a:1},
                  // Set default step function for all animate calls
                  step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    //var value = Math.round(circle.value() * 10);
                    var value = 0;
                      if (value === 0) {
                        circle.setText('6');
                      } else {
                        circle.setText(value);
                      }
                  }
                });

                 bar3 = new ProgressBar.Circle(".progress-container[data-front='3']", {
                  color: '#eee',
                  trailColor: 'white',
                  trailWidth: 1,
                  duration: 3000,
                  easing: 'bounce',
                  strokeWidth: 6,
                  from: {color: '#eee', a:0},
                  to: {color: '#97A4CB', a:1},
                  // Set default step function for all animate calls
                  step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    //var value = Math.round(circle.value() * 10);
                    var value = 0;
                      if (value === 0) {
                        circle.setText('3');
                      } else {
                        circle.setText(value);
                      }
                  }
                });

                 bar4 = new ProgressBar.Circle(".progress-container[data-front='4']", {
                  color: '#eee',
                  trailColor: 'white',
                  trailWidth: 1,
                  duration: 3000,
                  easing: 'bounce',
                  strokeWidth: 6,
                  from: {color: '#eee', a:0},
                  to: {color: '#97A4CB', a:1},
                  // Set default step function for all animate calls
                  step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    //var value = Math.round(circle.value() * 10);
                    var value = 0;
                      if (value === 0) {
                        circle.setText('<span class="tiny"><</span> 1');
                      } else {
                        circle.setText(value);
                      }
                  }
                });
                 bar5 = new ProgressBar.Circle(".progress-container[data-front='5']", {
                  color: '#eee',
                  trailColor: 'white',
                  trailWidth: 1,
                  duration: 3000,
                  easing: 'bounce',
                  strokeWidth: 6,
                  from: {color: '#eee', a:0},
                  to: {color: '#97A4CB', a:1},
                  // Set default step function for all animate calls
                  step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    //var value = Math.round(circle.value() * 10);
                    var value = 0;
                      if (value === 0) {
                        circle.setText(' <span class="tiny"><</span> 1');
                      } else {
                        circle.setText(value);
                      }
                  }
                });
                 bar6 = new ProgressBar.Circle(".progress-container[data-front='6']", {
                  color: '#eee',
                  trailColor: 'white',
                  trailWidth: 1,
                  duration: 3000,
                  easing: 'bounce',
                  strokeWidth: 6,
                  from: {color: '#eee', a:0},
                  to: {color: '#97A4CB', a:1},
                  // Set default step function for all animate calls
                  step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    //var value = Math.round(circle.value() * 10);
                    var value = 0;
                      if (value === 0) {
                        circle.setText('3');
                      } else {
                        circle.setText(value);
                      }
                  }
                });
                 bar7 = new ProgressBar.Circle(".progress-container[data-front='7']", {
                  color: '#eee',
                  trailColor: 'white',
                  trailWidth: 1,
                  duration: 3000,
                  easing: 'bounce',
                  strokeWidth: 6,
                  from: {color: '#eee', a:0},
                  to: {color: '#97A4CB', a:1},
                  // Set default step function for all animate calls
                  step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    //var value = Math.round(circle.value() * 10);
                    var value = 0;
                      if (value === 0) {
                        circle.setText('3');
                      } else {
                        circle.setText(value);
                      }
                  }
                });

                bar.animate(0.6);  // Number from 0.0 to 1.0
                bar2.animate(0.6);  // Number from 0.0 to 1.0
                bar3.animate(0.3);  // Number from 0.0 to 1.0
                bar4.animate(0.1);  // Number from 0.0 to 1.0
                bar5.animate(0.1);  // Number from 0.0 to 1.0
                bar6.animate(0.3);  // Number from 0.0 to 1.0
                bar7.animate(0.3);  // Number from 0.0 to 1.0

                back = new ProgressBar.Circle(".progress-container[data-back='1']", {
                 color: '#eee',
                 trailColor: 'white',
                 trailWidth: 1,
                 duration: 3000,
                 easing: 'bounce',
                 strokeWidth: 6,
                 from: {color: '#eee', a:0},
                 to: {color: '#eee', a:1},
                 // Set default step function for all animate calls
                 step: function(state, circle) {
                   circle.path.setAttribute('stroke', state.color);
                   //var value = Math.round(circle.value() * 10);
                   var value = 0;
                     if (value === 0) {
                       circle.setText(' <span class="tiny"><</span> 1');
                     } else {
                       circle.setText(value);
                     }
                 }
               });
                back2 = new ProgressBar.Circle(".progress-container[data-back='2']", {
                 color: '#eee',
                 trailColor: 'white',
                 trailWidth: 1,
                 duration: 3000,
                 easing: 'bounce',
                 strokeWidth: 6,
                 from: {color: '#eee', a:0},
                 to: {color: '#eee', a:1},
                 // Set default step function for all animate calls
                 step: function(state, circle) {
                   circle.path.setAttribute('stroke', state.color);
                   //var value = Math.round(circle.value() * 10);
                   var value = 0;
                     if (value === 0) {
                       circle.setText(' <span class="tiny"><</span> 1');
                     } else {
                       circle.setText(value);
                     }
                 }
               });
                back3 = new ProgressBar.Circle(".progress-container[data-back='3']", {
                 color: '#eee',
                 trailColor: 'white',
                 trailWidth: 1,
                 duration: 3000,
                 easing: 'bounce',
                 strokeWidth: 6,
                 from: {color: '#eee', a:0},
                 to: {color: '#eee', a:1},
                 // Set default step function for all animate calls
                 step: function(state, circle) {
                   circle.path.setAttribute('stroke', state.color);
                   //var value = Math.round(circle.value() * 10);
                   var value = 0;
                     if (value === 0) {
                       circle.setText(' <span class="tiny"><</span> 1');
                     } else {
                       circle.setText(value);
                     }
                 }
               });
                back4 = new ProgressBar.Circle(".progress-container[data-back='4']", {
                 color: '#eee',
                 trailColor: 'white',
                 trailWidth: 1,
                 duration: 3000,
                 easing: 'bounce',
                 strokeWidth: 6,
                 from: {color: '#eee', a:0},
                 to: {color: '#eee', a:1},
                 // Set default step function for all animate calls
                 step: function(state, circle) {
                   circle.path.setAttribute('stroke', state.color);
                   //var value = Math.round(circle.value() * 10);
                   var value = 0;
                     if (value === 0) {
                       circle.setText(' <span class="tiny"><</span> 1');
                     } else {
                       circle.setText(value);
                     }
                 }
               });

               back.animate(0.1);  // Number from 0.0 to 1.0
               back2.animate(0.1);  // Number from 0.0 to 1.0
               back3.animate(0.1);  // Number from 0.0 to 1.0
               back4.animate(0.1);  // Number from 0.0 to 1.0

            }
        </script>
<?php include('footer.php') ?>
