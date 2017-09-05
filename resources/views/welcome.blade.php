
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-grid.css.map" rel="stylesheet" />       
    <link href="css/style.css" rel="stylesheet" />       
    
  </head>
  <body>
      <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>        
        <script src="js/custom.js"></script>
        <nav class="nav navbar navbar-inverse">
            <div class="container-fluid">
               <div class="navbar-header">
                  <a class="navbar-brand" href="#">Menu</a>
                </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tasks
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="tasks/add_task.html">Add Task</a></li>
                      <li><a href="#">Overview</a></li>
                      <li><a href="#">Settings</a></li>
                    </ul>
                  </li>
                  <li> <a href="#">Admin</a></li>
              </ul> 
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                </ul>
            </div>
          </nav>
        <div class="container">
        <div class="jumbotron">
                <div class="page-header">
                        <h1> Task manager<br>   
                            <small> Think great, act smart </small></h1>
                </div>
        </div>
        <div id="content" class="row-fluid">
            <div class="row">
                <div class="col-sm-9">
                  <h2>Main Content Section</h2>
                <p> Welkom op de site van Task manager. Deze site is bedoeld om op een eenvoudige 
                  manier taken toe te voegen die moeten worden uitgevoerd.</p>
                  
                <p> Taken kunnen worden voorzien worden van één of meerder tags. Zo kunnen de taken 
                   worden gesorteerd en gefilterd worden volgens deze tags. De prioriteit kan hier
                   ook een deel mee worden bepaald. Dit heeft als voordeel dat taken op een bepaalde
                  manier kunnen worden gesorteerd op graad van belangerijkheid.  </p>
                </div>
            </div>
            @include(layout.sidebalk)
        </div>
  </body>
</html>