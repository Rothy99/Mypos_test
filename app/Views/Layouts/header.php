  <!-- Navbar -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="floating-container">
  <div class="floating-button">+</div>
  <div class="element-container">

    <a href="google.com"> <span class="float-element tooltip-left">
      <i class="material-icons">phone
      </i></a>
    </span>
      <span class="float-element">
      <i class="material-icons">email
</i>
    </span>
      <span class="float-element">
      <i class="material-icons">chat</i>
    </span>
  </div>
</div>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <style>
    @import url("https://fonts.googleapis.com/css?family=Roboto");
@-webkit-keyframes come-in {
  0% {
    -webkit-transform: translatey(100px);
            transform: translatey(100px);
    opacity: 0;
  }
  30% {
    -webkit-transform: translateX(-50px) scale(0.4);
            transform: translateX(-50px) scale(0.4);
  }
  70% {
    -webkit-transform: translateX(0px) scale(1.2);
            transform: translateX(0px) scale(1.2);
  }
  100% {
    -webkit-transform: translatey(0px) scale(1);
            transform: translatey(0px) scale(1);
    opacity: 1;
  }
}
@keyframes come-in {
  0% {
    -webkit-transform: translatey(100px);
            transform: translatey(100px);
    opacity: 0;
  }
  30% {
    -webkit-transform: translateX(-50px) scale(0.4);
            transform: translateX(-50px) scale(0.4);
  }
  70% {
    -webkit-transform: translateX(0px) scale(1.2);
            transform: translateX(0px) scale(1.2);
  }
  100% {
    -webkit-transform: translatey(0px) scale(1);
            transform: translatey(0px) scale(1);
    opacity: 1;
  }
}
* {
  margin: 0;
  padding: 0;
}

html, body {
  background: #eaedf2;
  font-family: 'Roboto', sans-serif;
}

.floating-container {
  position: fixed;
  width: 100px;
  height: 100px;
  bottom: 0;
  right: 0;
  margin: 35px 25px;
}
.floating-container:hover {
  height: 300px;
}
.floating-container:hover .floating-button {
  box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
  -webkit-transform: translatey(5px);
          transform: translatey(5px);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.floating-container:hover .element-container .float-element:nth-child(1) {
  -webkit-animation: come-in 0.4s forwards 0.2s;
          animation: come-in 0.4s forwards 0.2s;
}
.floating-container:hover .element-container .float-element:nth-child(2) {
  -webkit-animation: come-in 0.4s forwards 0.4s;
          animation: come-in 0.4s forwards 0.4s;
}
.floating-container:hover .element-container .float-element:nth-child(3) {
  -webkit-animation: come-in 0.4s forwards 0.6s;
          animation: come-in 0.4s forwards 0.6s;
}
.floating-container .floating-button {
  position: absolute;
  width: 65px;
  height: 65px;
  background: #2cb3f0;
  bottom: 0;
  border-radius: 50%;
  left: 0;
  right: 0;
  margin: auto;
  color: white;
  line-height: 65px;
  text-align: center;
  font-size: 23px;
  z-index: 100;
  box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
  cursor: pointer;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.floating-container .float-element {
  position: relative;
  display: block;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  margin: 15px auto;
  color: white;
  font-weight: 500;
  text-align: center;
  line-height: 50px;
  z-index: 0;
  opacity: 0;
  -webkit-transform: translateY(100px);
          transform: translateY(100px);
}
.floating-container .float-element .material-icons {
  vertical-align: middle;
  font-size: 16px;
}
.floating-container .float-element:nth-child(1) {
  background: #42A5F5;
  box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
}
.floating-container .float-element:nth-child(2) {
  background: #4CAF50;
  box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
}
.floating-container .float-element:nth-child(3) {
  background: #FF9800;
  box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
}

  </style>