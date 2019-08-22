<?php
include 'includes/language/lang.en.php';
include 'includes/language/lang.ar.php';
include 'includes/class/cls.connect-db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css"
              rel="stylesheet" type="text/css" />

    <title>RUWAQ</title>
    <style>
      body{
        background-color: #043F21;
        color:        #ffffff;
        margin: 0;
        position: relative;
                width: 100%;
                padding-right: 10px;
                padding-left: 10px;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                font-size: 1rem;
                font-weight: 500;
                line-height: 1.5;

        }
        .jumbotron{
              background-color: transparent;
              min-height: 30px;
        }
        .h1{
          font-size: 1rem;
        }

        }
        .card-body {
              -ms-flex: 1 1 auto;
              flex: 1 1 auto;
              padding: 2.25rem;
          }

        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
                position: relative;
                width: 100%;
                padding-right: 10px;
                padding-left: 10px;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                font-size: 2rem;
                font-weight: 500;
                line-height: 0.9;
            }

        

@media only screen and (min-width: 375px) {
  
  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
                
                font-size: 0.6rem;
                font-weight: 500;
                line-height: 0.9;
                position: relative;
                width: 100%;
                padding-right: 8px;
                padding-left: 5px;
     }
    
}
@media only screen and (min-width: 320px) {
  
  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
                
                font-size: 0.8rem;
                font-weight: 500;
                line-height: 0.9;
                position: relative;
                width: 100%;
                padding-right: 0px;
                padding-left: 2px;
                
              
     }
     .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
      font-size: 1rem;
      margin-bottom: .5rem;
      font-weight: 500;
      line-height: 1;
      }
    
}
@media only screen and (min-width: 1140px) {
  
  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
                position: relative;
                width: 100%;
                padding-right: 10px;
                padding-left: 10px;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                font-size: 1rem;
                font-weight: 500;
                line-height: 0.9;
            }
}

@media only screen and (min-width: 768px) {
  
  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
                
                font-size: 1rem;
                font-weight: 500;
                line-height: 2.9;
                position: relative;
                width: 100%;
                padding-right: 2px;
                padding-left: 2px;
     }
    
}

@media only screen and (min-width: 360px) {
  
  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
                
                font-size: 1rem;
                font-weight: 500;
                line-height: 0.9;
                position: relative;
                width: 100%;
                padding-right: 1px;
                padding-left: 0px;
     }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
      font-size: 1.5rem;
      margin-bottom: .5rem;
      font-weight: 500;
      line-height: 1;
      }
    
}
        
    </style>
  </head>
  <body>
  <div class="main">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <a class="navbar-brand font-weight-bolder text-success" href="index.php">RUWAQ</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
        <a class="nav-link text-success" href="#">Feedback <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success" href="admin.php">Admin</a>
        </li>
      </ul>
      <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
      </div>
    </div>
  </nav><br>
  <div class="container col-md-12">
  <div class="container col-md-8">
    <section class="jumbotron text-center" >
      <div class="container" style="height: 30px;">
      <h1 class="jumbotron-heading">RUWAQ USER FEEDBACK</h1>
      <h1  class="jumbotron-heading">ملاحظات المستخدمين لنظام رواق</h1>
      </div>
    </section style="height: 200px;width: 600px;">
      <div class="text-center"><img src="img/logo.jpg" alt="logo" style="
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 127px;
        height:75;
      "></div>
    <div class="text-center col-md-12">
                    <div id="message">
                    <div class="alert alert-success d-none" id="success" role="alert"></div>
                    <div class="alert alert-danger d-none" id="error" role="alert"></div>
                    </div>
                     <form method="post" action="" id="frm-feedback" name="frm-feedback">
      <div class="card mt-5 pl-4 pr-4 pt-3">
        <div class="card-header col d-flex justify-content-between">
        <h5 class="text-success">Required Fields</h5>
        <h5 class="text-success">حقول إلزامية</h5>
        </div>
        <div class="card-body text-success">
        <div class="container col-12">
          <div class="row justify-content-around">
          <div class="col-4 text-left"><?php echo $languageEn["title"]; ?></div>
          <div class="col-4">
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Enter the title" data-validation="required" data-validation-error-msg="Title Can't Be Empty">
          </div>
          <div class="col-4 text-right"><?php echo $languageAr["title"]; ?></div>
          </div>
                    <div class="row justify-content-around mt-3">
          <div class="col-4 text-left"><?php echo $languageEn["category"]; ?></div>
          <div class="col-4 text-left ">
                                            <select class="form-control" id="exampleFormControlSelect1" name="category" data-validation="required" data-validation-error-msg="Select The Category">
                                                <option value="">Select your Request</option>
                                                  <?php
                                                  $categories = Database::prepare("select * from categories");
                                                  $categories -> execute();
                                                  $categories = $categories -> fetchAll(PDO::FETCH_ASSOC);
                                                  foreach ($categories as $row){
                                                      $id = $row["id"];
                                                      $category = $row["category"];
                                                      ?>
                                                  <option value="<?php echo $id; ?>"><?php echo $category; ?></option>                                                  <?php
                                                  }
                                                  ?>
            </select>
          </div>
          <div class="col-4 text-right"><?php echo $languageAr["category"]; ?></div>
          </div>
          <div class="row justify-content-around mt-3">
          <div class="col-4 text-left"><?php echo $languageEn["comment"]; ?></div>
          <div class="col-4">
                                            <textarea class="form-control" id="validationTextarea" name="comment" style="height:100px;" placeholder="Enter your comment" data-validation="required" data-validation-error-msg="Comment Can't Be Empty"></textarea>
          </div>
          <div class="col-4 text-right"><?php echo $languageAr["comment"]; ?></div>
          </div>
        </div>
        </div>
      </div>
      
      <div class="card my-5 pl-4 pr-4 pt-3">
        <div class="card-header col d-flex justify-content-between">
        <h5 class="text-success"><?php echo $languageEn["optional"]; ?></h5>
        <h5 class="text-success"><?php echo $languageAr["optional"]; ?></h5>
        </div>
        <div class="card-body text-success">
        <div class="container">
          <div class="row justify-content-around">
          <div class="col-4 text-left"><?php echo $languageEn["os"]; ?></div>
          <div class="col-4 text-left form-group">
                                            <select class="form-control" id="exampleFormControlSelect1" name="os" data-validation="required" data-validation-optional="true">
                                                <option value="">Select your OS</option>
                                                    <?php
                                                    $component = Database::prepare("select * from os");
                                                    $component -> execute();
                                                    $component = $component -> fetchAll (PDO::FETCH_ASSOC);
                                                    foreach($component as $row){
                                                        $id = $row["id"];
                                                        $componentType = $row["os"];
                                                        ?>
                                                    <option value="<?php echo $id;?>"><?php echo $componentType ?></option>
                                                    <?php
                                                    }
                                                    ?>
            </select>
          </div>
          <div class="col-4 text-right"><?php echo $languageAr["os"]; ?></div>
          </div>
          <div class="row justify-content-around">
          <div class="col-4 text-left"><?php echo $languageEn["interface"]; ?></div>
          <div class="col-4 text-left form-group">
                                            <select class="form-control" id="exampleFormControlSelect1" name="interface" data-validation="required" data-validation-optional="true">
                                                <option value="">Select your Device</option>
                                                  <?php
                                                  $interface = Database::prepare("select * from interface");
                                                  $interface -> execute();
                                                  $interface = $interface -> fetchAll(PDO::FETCH_ASSOC);
                                                  foreach ($interface as $row){
                                                      $id = $row["id"];
                                                      $interfaceType = $row["interface"];
                                                      ?>
                                                  <option value="<?php echo $id; ?>"><?php echo $interfaceType; ?></option>
                                                  <?php
                                                  }
                                                  ?>
            </select>
          </div>
          <div class="col-4 text-right"><?php echo $languageAr["interface"]; ?></div>
          </div>
          <div class="row justify-content-around">
          <div class="col-4 text-left"><?php echo $languageEn["name"]; ?></div>
          <div class="col-4">
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter your name" data-validation="required" data-validation-optional="true">
          </div>
          <div class="col-4 text-right"><?php echo $languageAr["name"]; ?></div>
          </div>
          <div class="row justify-content-around mt-3">
          <div class="col-4 text-left"><?php echo $languageEn["mobile"]; ?></div>
          <div class="col-4">
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="mobile" placeholder="Enter your mobile number" data-validation="number" data-validation-optional="true">
          </div>
          <div class="col-4 text-right"><?php echo $languageAr["mobile"]; ?></div>
          </div>
          <div class="row justify-content-around mt-3">
          <div class="col-4 text-left"><?php echo $languageEn["organization"]; ?></div>
          <div class="col-4">
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="organization" placeholder="Enter your Organization" data-validation="required" data-validation-optional="true">
          </div>
          <div class="col-4 text-right"><?php echo $languageAr["organization"]; ?></div>
          </div>
        </div>
        </div>
<!--                            <div class="col justify-content-around mb-3"><button class="btn btn-success" name="submit" id="submit">Submit</button></div>-->
      </div>
                         </form>
            <div class="col justify-content-around mb-3"><button class="btn btn-success" name="submit" id="submit" style="margin-top:-3em;">Submit</button></div>
    </div>
    
  </div>
</div>
  <footer class="footer text-center" style="background-color:rgba(0, 0, 0, 0.5);">
    <div class="py-3">
      <small>Disclaimer</small>
    </div>
  </footer>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->       
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    


    <script>
    $("#submit").click(function (e) {
        e.preventDefault();
            $("#frm-feedback").ajaxForm(
                    {
                        type: 'POST',
                        dataType: 'json',
                        url: 'includes/process/add-feedback-process.php',
                        data: {},
                        success: function (data) {
        if (data['success'] == '1')
         {
             $("#success").removeClass("d-none");
             $("#success").html('<button type="button" class="close" data-dismiss="alert">&times;</button><h4>Success!</h4>' + data['message']);
             $('html, body').animate({
        scrollTop: $("#message").offset().top
    }, 500);
             setTimeout("location.reload();",3000);
         }
         else {
             
             $("#error").removeClass("d-none");
             $("#error").html('<button type="button" class="close" data-dismiss="alert">&times;</button><h4>Warning!</h4>' + data['message']);
             $('html, body').animate({
        scrollTop: $("#message").offset().top
    }, 500);
             
         }
                        },
         beforeSend: function () {
             $("#success").addClass("d-none");
             $("#error").addClass("d-none");
         },
         uploadProgress: function (event, position, total, percentComplete) {
         },
         error: function (data) {
        alert(data);
            }
                    }).submit();
        });
    </script>
    <script>
    $.validate({
        borderColorOnError: 'Red',
        modules : 'security'
    });
    </script>
  </body>
</html>

