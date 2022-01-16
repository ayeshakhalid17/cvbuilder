<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
  
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <title>cvbuilder</title>
</head>
<body style="background-color: #172f3a;" >

    <div >
        <nav class="navbar navbar-expand-lg navbar-light " >
            <a class="navbar-brand" href="#"><img class="image" src="imgaes/logo_transparent.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html" >Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        

                    </ul>
                </span>
            </div>
        </nav>
        
        
    <div class="gap"></div>
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md-12  col-lg-4">
                <div class="card"  class="imglink" >
                    <a href="https://www.google.com/" >
                        <img src="imgaes/temp.jpg"style="width: 20rem; height: 30rem;"  class="ig" class="card-img-top"  >
                        
                    
                    </a>
                    <a href="basic.php" class="btn btn-danger"  class="btn" >Create CV</a>
                    
                </div>
                <ul class="list d-flex">
                    <li class="circle" id="c1" onclick="colorborder(this)" style="background-color:#f5f5f5"></li>
                    <li class="circle" id="c2" onclick="colorborder(this)" style="background-color:#e47575"></li>
                    <li class="circle" id="c3" onclick="colorborder(this)" style="background-color:#4db6e7"></li>
                    <li class="circle" id="c4" onclick="colorborder(this)" style="background-color:#66bb90"></li></ul> 
            </div>
            <div class="col-sm-12 col-md-12  col-lg-4">
                <div class="card" class="imglink"  >
                    <a href="https://www.google.com/"><img src="imgaes/temp.jpg"style="width: 20rem; height: 30rem;"  class="card-img-top"  ></a>
                    <form method="POST" action="save_summary.php" enctype="multipart/form-data">
                        <input type="hidden" id="mydata" name="color">
                    <button h class="btn btn-danger  "  class="btn" >Create CV</button>
                    </form>
                </div>
                <ul class="list d-flex">
                    <li class="circle" id="c1" onclick="colorborder(this) "style="background-color:#10806d"></li>
                    <li class="circle" id="c2" onclick="colorborder(this)"style="background-color:#b16713"></li>
                    <li class="circle" id="c3" onclick="colorborder(this)" style="background-color:#380f0d"></li>
                    <li class="circle" id="c4" onclick="colorborder(this)"style="background-color:#4682bf"></li></ul> 
            </div>
            <div class="col-sm-12 col-md-12  col-lg-4">
                <div class="card"   class="imglink"  >
                    <a href="https://www.google.com/"><img src="imgaes/temp.jpg"style="width: 20rem; height: 30rem;"  class="card-img-top"  ></a>
                    <a href="basic.php" class="btn btn-danger  "  class="btn" >Create CV</a>
                </div>
                <ul class="list d-flex">
                    <li class="circle" id="c1" onclick="colorborder(this)" style="background-color:#00ab9f;"></li>
                    <li class="circle" id="c2" onclick="colorborder(this)" style="background-color:navy"></li>
                    <li class="circle" id="c3" onclick="colorborder(this)" style="background-color:rgba(220, 20, 60, 0.493)"></li>
                    <li class="circle" id="c4" onclick="colorborder(this) "style="background-color:mediumseagreen"></li></ul> 
            </div>
        </div>
    </div>
    <div class="gap"></div>
    </div>
  
    
</div>
<script>
    function colorborder(e){
    selected=document.getElementsByClassName("circle");
    Array.from(selected,child => {
    child.style.border="none";});
    e.style.border="5px solid black";
    var bgcolor = e.style.backgroundColor;
    document.getElementById("mydata").value=bgcolor;}
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>
</html>