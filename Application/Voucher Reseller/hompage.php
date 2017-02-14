<!DOCTYPE html>
<html>
<head>
  <title>Homepage||Reseller||Food</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

  <link type="text/css" rel="stylesheet" href="../css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../images/logo.png" type="image/png">
</head>
<body>
<!-- <div class = "center" id ="menLog">
  <img src="../images/logo.png"  >
</div> -->
<div id="container">
  <div class="card-header" id ="menLog" style=" margin: 0 auto; width: 15%; height: 15%">

    <img class="responsive-img" src="../images/logo.png"> 
  </div>

  <img class="responsive-img" src="../images/bk.jpg"> 

  <div class="card bordered z-depth-2 " style="margin-right: 5%; width:45%; float: left;" id="indexCard" >

    <div class="card-content ">
      <form id ="indexPage" method="POST" action="">
       <div class="row">
        <div class="input-field col s12">
          <input id="id_numberIndex" type="text" class="validate" placeholder="ID Number" >
        </div>
      </div>
      <a class="btn-floating btn-large waves-effect waves-light #00ff00 " id = "numberIndexSend"><i class="material-icons right">send</i></a>
    </form>
  </div>
</div>

<ul id="slide-out" class="side-nav">
  <li><div class="userView">
    <div class="background">
      <img src="../images/sidImage.jpeg">
    </div>
    <a href="#!user"><img class="circle" src="../images/admin.jpg"></a>
  </div></li>

  <li><a href="#!"><i class="material-icons">store</i></a></li>
  <li><div class="divider"></div></li>
  <li><a href="#!"><i class="material-icons">credit_card</i></a></li>
  <li><a href="#!" id="logOut" class="center"><i class="material-icons">lock</i></a></li>
</ul>
<a href="#slide-out" data-activates="slide-out" class="button-collapse show-on-large" ><i class="material-icons" style="font-size: 4rem;" id ="menuBtn">menu</i></a>


<div class="row" id="nameDisplay">
  <div >
    <h5>Admin Name</h5>
  </div>
</div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
// Initialize collapse button
$(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  // $('.collapsible').collapsible();
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
    );

  </script>

</body>
</html>