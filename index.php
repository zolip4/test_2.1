<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/css/custom-bootstrap.all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <div class="menu">
        <a onClick="switchMenu()" href="#"><i class="fas fa-bars"></i></a>
        <form>
            <input type="search" placeholder="Search">
        </form>
        <div class="navbar">
            <ul>
                <li class="navbar__flag text-primary">
                    <div class="dropdown">
                        <img class="dropbtn" src="images/11.png">
                        <div id="myDropdown" class="dropdown-content">
                            <div class="language">
                                <div class="language__list">
                                    <img class="dropbtn" src="images/11.png"><a href="#">Contact</a>
                                </div>
                                <div class="language__list">
                                    <img class="dropbtn" src="images/22.png"><a href="#">Home</a>
                                </div>
                                <div class="language__list">
                                    <img class="dropbtn" src="images/33.png"><a href="#">About</a>
                                </div>
                                <div class="language__list">
                                    <img class="dropbtn" src="images/44.png"><a href="#">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <i class="fas fa-lock"></i>
                    <a href="#" class="dropbtn" >Login</a>
                    <div id="myDropdown" class="dropdown-content login-dd">
                       <div class="login-dd__form">
                           <form class="form-example">
                               <div class="prepend">
                                   <input type="text" placeholder="Username" required>
                               </div>
                               <div class="append">
                                   <input type="password" placeholder="Password" required>
                               </div>
                               <a class="btn btn-link" href="#reset" rel="modal:open">reset password?</a>
                               <button type="submit" class="btn btn-primary">Signin</button>
                           </form>
                       </div>
                    </div>
                </li>
                <li><i class="fas fa-user-friends"></i><a href="#">Profile</a></li>
            </ul>
        </div>
    </div>
    <div id="reset" class="modal">
        <div class="header-modal">
            <h2>Reset password</h2>
        </div>
        <div class="content-modal">
            <div class="prepend">
                <input type="password" placeholder="Password" required>
            </div>
            <div class="append">
                <input type="password" placeholder="Password" required>
            </div>
        </div>
        <div class="footer-modal">
            <button class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="#close-modal" rel="modal:close">Close</a></button>
        </div>
    </div>
    <div class="sidebar">
        <div class="sidebar__brand">
            <a href="/index.php">Custom</a>
        </div>
        <nav>
            <ul>
                <li>
                    <span class="nav-link">Getting started<i class="fas fa-chevron-up"></i></span>
                    <div class="nav-link-sub">
                        <a href="#">Sub link 1</a>
                        <a href="#">Sub link 2</a>
                        <a href="#">Sub link 3</a>
                    </div>
                </li>
                <li>
                    <span class="nav-link">Getting started<i class="fas fa-chevron-up"></i></span>
                    <div class="nav-link-sub">
                        <a href="#">Sub link 1</a>
                        <a href="#">Sub link 2</a>
                        <a href="#">Sub link 3</a>
                    </div>
                </li>
                <li>
                    <span class="nav-link">Getting started<i class="fas fa-chevron-up"></i></span>
                    <div class="nav-link-sub">
                        <a href="#">Sub link 1</a>
                        <a href="#">Sub link 2</a>
                        <a href="#">Sub link 3</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="main">
<!-- Grid -->
        <div class="example-grid row">
            <div class="col-m-6 col-s-12">
                <h2 class="title">Auto-layout columns</h2>
                <div class="col-example col-style">
                    <div class="row">
                        <div class="col-item col">col</div>
                        <div class="col-item col">col</div>
                        <div class="col-item col">col</div>
                        <div class="col-item col">col</div>
                    </div>
                    <div class="row">
                        <div class="col-item col-4">col-4</div>
                        <div class="col-item col-4">col-4</div>
                        <div class="col-item col-4">col-4</div>
                    </div>
                </div>
            </div>
            <div class="col-m-6 col-s-12">
                <h2 class="title">Setting one column width</h2>
                <div class="col-example col-style">
                    <div class="row">
                        <div class="col-item col-l-8 col-m-8 col-s-8">col-l-8</div>
                        <div class="col-item col-l-4 col-m-4 col-s-4">col-l-4</div>
                    </div>
                    <div class="row">
                        <div class="col-item offset-m-3 offset-s-3 col-m-6 col-s-6">offset-l-3</div>
                    </div>
                </div>
            </div>
        </div>
<!-- Colors -->
        <div class="colors row">
            <div class="col-m-6 col-s-12">
                <h2 class="title">Text colors</h2>
                <div class="colors-example col-style">
                    <p class="text-primary">.text-primary</p>
                    <p class="text-secondary">.text-secondary</p>
                    <p class="text-success">.text-success</p>
                    <p class="text-info">.text-info</p>
                    <p class="text-warning">.text-warning</p>
                    <p class="text-danger">.text-danger</p>
                    <p class="text-white bg-dark">.text-white .bg-dark</p>
                    <p class="text-muted">.text-muted</p>
                </div>
            </div>
            <div class="col-m-6 col-s-12">
                <h2 class="title">Background colors</h2>
                <div class="colors-example col-style">
                    <div class="bg-primary">.bg-primary</div>
                    <div class="bg-secondary">.bg-secondary</div>
                    <div class="bg-success">.bg-success</div>
                    <div class="bg-info">.bg-info</div>
                    <div class="bg-warning">.bg-warning</div>
                    <div class="bg-danger">.bg-danger</div>
                    <div class="bg-white text-dark">.bg-white .text-dark</div>
                    <div class="bg-muted">.bg-muted</div>
                </div>
            </div>
        </div>
<!-- Tables -->
        <div class="row">
            <div class="col-m-6 col-s-12">
                <h2 class="title">Dark table</h2>
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-m-6 col-s-12">
                <h2 class="title">Custom table</h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
<!-- Forms -->
        <div class="row">
            <div class="col-6 col-s-12">
                <h2 class="title">Example form fields</h2>
                <form class="form-example">
                    <div class="prepend">
                        <div class="input-group">
                            <span>@</span>
                        </div>
                        <input type="text" placeholder="Username" required>
                    </div>
                    <div class="append">
                        <input type="email" placeholder="Email" required>
                        <div class="input-group">
                            <span class="input-group-text">@example.com</span>
                        </div>
                    </div>
                    <div class="append">
                        <input type="text" placeholder="Recipient's username" required>
                        <div class="input-group">
                            <div class="btn btn-success">Go</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 col-s-12">
                <h2 class="title">Example form</h2>
                <form class="example-form">
                    <div class="prepend large-input">
                        <input type="text" placeholder="Name" required>
                    </div>
                    <div class="prepend large-input">
                        <input type="text" placeholder="Sub name" required>
                    </div>
                    <div class="append">
                        <input type="email" placeholder="Email" required>
                        <div class="input-group">
                            <span class="input-group-text">@example.com</span>
                        </div>
                    </div>
                    <div class="append max-input">
                        <input type="text" placeholder="Recipient's username" required>
                        <div class="input-group">
                            <div class="btn btn-success">Check</div>
                        </div>
                    </div>
                    <div class="single-select">
                        <select name="contract-start" id="ctrl_102" class="select contract-start" required="">
                            <option>Item 1</option>
                            <option>Item 2</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-s-12">
                <h2 class="title">Form components</h2>
                <div class="form-example">
                    <div class="row">
                        <div class="col-6 col-s-12">
                            <div class="switcher">
                                <input type="checkbox" id="switch" class="switch-checkbox" />
                                <label for="switch" class="switch"></label>
                                <span>Off/On</span>
                            </div>
                            <div class="radio-btn">
                                <div class="radio">
                                    <input id="radio-1" name="radio" type="radio" checked>
                                    <label for="radio-1" class="radio-label">Checked</label>
                                </div>

                                <div class="radio">
                                    <input id="radio-2" name="radio" type="radio">
                                    <label  for="radio-2" class="radio-label">Unchecked</label>
                                </div>

                                <div class="radio">
                                    <input id="radio-3" name="radio" type="radio" disabled>
                                    <label for="radio-3" class="radio-label">Disabled</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-s-12">
                            <div class="single-select">
                                <select name="contract-start" id="ctrl_102" class="select contract-start" required="">
                                    <option>Item 1</option>
                                    <option>Item 2</option>
                                </select>
                            </div>
                            <select class="multi-select-list" multiple="multiple">
                                <option value="cp">Item 1</option>
                                <option value="cs">Item 2</option>
                                <option value="oc">Item 3</option>
                                <option value="c">Item 4</option>
                            </select>
                            <input id="dt" class="input"  value="2019-03-27">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-s-12">
                <h2 class="title">Chart</h2>
                <div class="form-example">
                    <canvas id="pie-chart" width="250" height="100"></canvas>
                </div>
            </div>
        </div>
<!-- Buttons -->
        <div class="row">
            <div class="col">
                <h2 class="title">Buttons</h2>
                   <div class="element-example">
                       <button type="button" class="btn btn-primary">Primary</button>
                       <button type="button" class="btn btn-secondary">Secondary</button>
                       <button type="button" class="btn btn-success">Success</button>
                       <button type="button" class="btn btn-danger">Danger</button>
                       <button type="button" class="btn btn-warning">Warning</button>
                       <button type="button" class="btn btn-info">Info</button>
                       <button type="button" class="btn btn-light">Light</button>
                       <button type="button" class="btn btn-dark">Dark</button>
                       <button type="button" class="btn btn-primary disabled">Disabled</button>
                       <a href="#" class="btn btn-primary">Link</a>
                       <button type="button" class="btn btn-link">Button</button>
                       <div class="button-row btn-group">
                           <button type="button" class="btn btn-primary">Primary</button>
                           <button type="button" class="btn btn-primary">Primary</button>
                           <button type="button" class="btn btn-primary">Primary</button>
                       </div>
                   </div>
            </div>
        </div>
<!-- Accordion -->
        <div class="row">
            <div class="col-m-6 col-s-12">
                <h2 class="title">Аккордион / Accordion</h2>
                <div class="form-example">
                    <div class="accordion-item">
                        <div class="click-button btn btn-link"><span>Item 1</span></div>
                        <div class="answer">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="click-button btn btn-link"><span>Item 2</span></div>
                        <div class="answer">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="click-button btn btn-link"><span>Item 3</span></div>
                        <div class="answer">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
<!-- Tabs -->
            <div class="col-m-6 col-s-12">
                <h2 class="title">Tabs</h2>
                <div class="form-example">
                    <ul class="tabs">
                        <li class="tab-link current" data-tab="tab-1">Tab One</li>
                        <li class="tab-link" data-tab="tab-2">Tab Two</li>
                        <li class="tab-link" data-tab="tab-3">Tab Three</li>
                        <li class="tab-link" data-tab="tab-4">Tab Four</li>
                    </ul>
                    <div id="tab-1" class="tab-content current">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                    <div id="tab-2" class="tab-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et euismod elit, a bibendum libero.
                            Nam ut ultrices augue. Aenean a ligula erat. Aenean purus nulla, congue sit amet interdum ac,
                            dignissim vitae ligula. Aenean metus arcu, aliquam at dui ut, mollis maximus tortor.
                        </p>
                    </div>
                    <div id="tab-3" class="tab-content">
                        <p>
                            Aenean in mi id nunc eleifend bibendum. Ut eu elit ipsum. Etiam congue faucibus lacus eu cursus.
                            Sed fermentum lacinia sodales. Sed felis dolor
                        </p>
                    </div>
                    <div id="tab-4" class="tab-content">
                        <p>
                            Donec volutpat dignissim ipsum ut pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Quisque tortor felis, sollicitudin a porttitor eu, finibus ut mauris. Donec id gravida metus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
<!-- Slider -->
        <div class="row">
            <div class="col-m-6 col-s-12">
                <h2 class="title">Slick Slider</h2>
                <div class="single-item">
                    <div class="slide-item">Slide 1</div>
                    <div class="slide-item">Slide 2</div>
                    <div class="slide-item">Slide 3</div>
                </div>
            </div>
            <div class="col-m-6 col-s-12">
                <h2 class="title">Owl Carousel</h2>
                <div class="owl-carousel owl-one">
                    <div class="slide-item-owl">Slide 1</div>
                    <div class="slide-item-owl">Slide 2</div>
                    <div class="slide-item-owl">Slide 3</div>
                    <div class="slide-item-owl">Slide 4</div>
                    <div class="slide-item-owl">Slide 5</div>
                    <div class="slide-item-owl">Slide 6</div>
                    <div class="slide-item-owl">Slide 7</div>
                </div>
            </div>
        </div>
<!-- Modal -->
        <div class="row">
            <div class="col">
                <h2 class="title">Modal</h2>
                <div class="element-example">
                    <a class="btn btn-primary" href="#ex1" rel="modal:open">Open Modal</a>
                    <a class="btn btn-success" href="#ex2" rel="modal:open">Success Modal</a>
                    <a class="btn btn-info" href="#ex3" rel="modal:open">Info Modal</a>
                    <a class="btn btn-danger" href="#ex4" rel="modal:open">Danger Modal</a>
                    <a class="btn btn-warning" href="#ex5" rel="modal:open">Warning Modal</a>
                </div>
            </div>
        </div>
        <div id="ex1" class="modal">
            <div class="header-modal">
                <h2>Title modal</h2>
            </div>
            <div class="content-modal">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
            </div>
            <div class="footer-modal">
                <button class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="#close-modal" rel="modal:close">Close</a></button>
            </div>
        </div>
        <div id="ex2" class="modal modal-alert">
            <div class="header-modal text-center bg-success">
                <i class="far fa-check-circle"></i><br>
                <p>successful</p>
            </div>
            <div class="content-modal text-center">
                <p>
                    Your account has been created
                </p>
            </div>
            <div class="footer-modal-alert text-center">
                <a class="btn btn-primary" href="#close-modal" rel="modal:close">Ok!</a></button>
            </div>
        </div>
        <div id="ex3" class="modal modal-alert">
            <div class="header-modal text-center bg-info">
                <i class="far fa-question-circle"></i>
                <p>info</p>
            </div>
            <div class="content-modal text-center">
                <p>
                    Info info info
                </p>
            </div>
            <div class="footer-modal-alert text-center">
                <a class="btn btn-primary" href="#close-modal" rel="modal:close">Ok!</a></button>
            </div>
        </div>
        <div id="ex4" class="modal modal-alert">
            <div class="header-modal text-center bg-danger">
                <i class="fas fa-exclamation-circle"></i>
                <p>danger</p>
            </div>
            <div class="content-modal text-center">
                <p>
                    Danger danger danger
                </p>
            </div>
            <div class="footer-modal-alert text-center">
                <a class="btn btn-primary" href="#close-modal" rel="modal:close">Ok!</a></button>
            </div>
        </div>
        <div id="ex5" class="modal modal-alert">
            <div class="header-modal text-center bg-warning">
                <i class="fas fa-bug"></i>
                <p>error</p>
            </div>
            <div class="content-modal text-center">
                <p>
                    Error error error
                </p>
            </div>
            <div class="footer-modal-alert text-center">
                <a class="btn btn-primary" href="#close-modal" rel="modal:close">Ok!</a></button>
            </div>
        </div>
<!-- Alerts -->
        <div class="row">
            <div class="col">
                <h2 class="title">Alerts</h2>
                <div class="form-example">
                    <div class="alert bg-primary">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        This is an alert box.
                    </div>
                    <div class="alert bg-secondary">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        This is an alert box.
                    </div>
                    <div class="alert bg-success">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        This is an alert box.
                    </div>
                    <div class="alert bg-info">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        This is an alert box.
                    </div>
                    <div class="alert bg-warning">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        This is an alert box.
                    </div>
                    <div class="alert bg-danger">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        This is an alert box.
                    </div>
                    <div class="alert bg-dark">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        This is an alert box.
                    </div>
                    <div class="alert bg-muted">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        This is an alert box.
                    </div>
                    <div class="alert bg-primary">
                        <h2>Title alert</h2>
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book.
                    </div>
                </div>
            </div>
        </div>
<!-- Label -->
        <div class="row">
            <div class="col">
                <h2 class="title">Labels</h2>
                <div class="element-example">
                    <span class="label bg-primary">Primary</span>
                    <span class="label bg-secondary">Secondary</span>
                    <span class="label bg-success">Success</span>
                    <span class="label bg-info">Info</span>
                    <span class="label bg-warning">Warning</span>
                    <span class="label bg-danger">Danger</span>
                </div>
            </div>
<!-- Pagination -->
            <div class="col">
                <h2 class="title">Pagination</h2>
                <div class="form-example">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#">Prev</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">...</a>
                        <a href="#">10</a>
                        <a href="#">Next</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>
            </div>
        </div>
<!-- Progress bar -->
        <div class="row">
            <div class="col">
                <h2 class="title">Progress Bar</h2>
                <div class="form-example">
                    <div class="progress primary">
                        <div class="progress-text">90%</div>
                        <div class="progress-bar"></div>
                    </div>
                    <div class="progress success">
                        <div class="progress-text">60%</div>
                        <div class="progress-bar"></div>
                    </div>
                    <div class="progress danger">
                        <div class="progress-text">30%</div>
                        <div class="progress-bar"></div>
                    </div>
                </div>
            </div>
        </div>
<!-- Cards -->
        <h2 class="title">Cards</h2>
        <div class="form-example">
            <div class="row">
                <div class="col-2 col-s-12">
                    <div class="card">
                        <div class="card__title">Card title</div>
                        <div class="card__sub-title text-secondary">Sub title</div>
                        <div class="card__description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s
                        </div>
                        <div class="btn btn-primary">Button</div>
                    </div>
                </div>
                <div class="col-3 col-s-12">
                    <div class="card">
                        <div class="card__list">Featured</div>
                        <div class="card__list">Cras justo odio</div>
                        <div class="card__list">Dapibus ac facilisis in</div>
                        <div class="card__list">Vestibulum at eros</div>
                    </div>
                </div>
                <div class="col-4 col-s-12">
                    <div class="card">
                        <div class="card__title">Card title</div>
                        <div class="card__description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s
                        </div>
                        <div class="btn btn-primary">Button</div>
                    </div>
                </div>
                <div class="col-3 col-s-12">
                    <div class="card">
                        <img src="/images/sample-1.jpg" class="card__image">
                        <div class="card__description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s
                        </div>
                        <div class="btn btn-link card__link">Link</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="js/bundle-min.js" charset="UTF-8"></script>
</body>
</html>