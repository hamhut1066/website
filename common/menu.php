<div class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand click" dest="index" href="#">hamhut1066</a>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        <li><a class = "click" dest="feed" id="feed" href="#">Feed</a></li>
        <li><a class="click" dest="todo" href="#">Todo</a></li>
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a class="click" dest="thisisaredherring" href="#">I am a Red Herring</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Personal - external</li>
                <li><a href="http://blog.hamhut1066.com">Ghost Blog</a></li>
                <li class="dropdown-header">Professional</li>
                <li><a class="click" dest="cv" href="#">Curriculum Vitae</a></li>
              </ul>
            </li>
            <li class="btn navbar-right">
                <audio controls>
                <source src="http://home.hamhut1066.com:1235/stream.ogg" type="audio/ogg">
                :( no support for ogg
                </audio>
            </li>
        </ul>
        </li><!-- drop down -->
        <form class="navbar-form navbar-right" action="/search" method="get">
            <div class="form-group">
                <input type="text" placeholder="Search" name="s" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Go</button>
        </form>
    </div><!--/.navbar-collapse -->
    </div>
</div>
