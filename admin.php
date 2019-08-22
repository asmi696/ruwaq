<?php
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">

        <title>RUWAQ</title>
         <style>
          .modal-title{
                color: black;
            }
            .modal-body{
                color:black;
            }
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                </div>
            </div>
        </div>
    <div class="container col-md-12">
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
                                <a class="nav-link text-success" href="index.php">Feedback<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="#">Admin</a>
                            </li>
                        </ul>
                        <!--<form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>-->
                    </div>
                </div>
            </nav>
            <div class="container col-md-12">
                <section class="jumbotron text-center" >
                  <div class="container" style="height: 30px;">
                  <h1 class="jumbotron-heading">RUWAQ USER FEEDBACK</h1>
                  <h1  class="jumbotron-heading">ملاحظات المستخدمين لنظام رواق</h1>
                  </div>
                </section style="height: 200px;width: 600px;"><br>
                <div class="text-center"><img src="img/logo.jpg" alt="logo" style="
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    padding: 5px;
                    width: 127px;
                    height:75;
                  "></div>
                <div class="text-center">



                    <div class="card my-5">
                        <div class="card-body text-success sec" >
                            <div class="row mt-1" >
                                <div class="col-lg-6 col-md-6 col-sm-12 pr-4 pl-4 mt-4"  >
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-success">Statistics</h5>
                                        </div>
                                        <div class="card-body my-1">
<!--                                            <img src="img/pie-chart.jpg" class="img-fluid" alt="">-->
                                            <canvas id="pieChart">
                                            </canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 pr-4 pl-4 mt-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-success">Advanced Search</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <!-- Search form -->
                                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <!-- Search form -->
                                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <!-- Search form -->
                                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <!-- Search form -->
                                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4" >
                                <div class="col-lg-6 col-md-6 col-sm-12 pr-4 pl-4 mt-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-success">Feature Requests</h5>
                                        </div>
                                        <div class="card-body my-1" >
                                            <select multiple class="form-control-plaintext" id="exampleFormControlSelect2">
                                                <?php
                                                $catId = '1';
                                                $featureRequest = Database::prepare("select f.id as feedbackId, f.category_id, f.title, c.id as categoryId, c.category from feedback f left join categories c on f.category_id = c.id  where f.category_id = :catId order by f.date desc");
                                                $featureRequest -> bindParam(':catId', $catId, PDO::PARAM_INT);
                                                $featureRequest -> execute();
                                                $countFR = $featureRequest -> rowCount();
                                                $featureRequest = $featureRequest -> fetchAll (PDO::FETCH_ASSOC);
                                                
                                                foreach ($featureRequest as $row){
                                                    $id = $row["categoryId"];
                                                    $category = $row["category"];
                                                    $title = $row["title"];
                                                    $feedbackId = $row["feedbackId"];
                                                    ?>
                                                
                                                <option value="<?php echo $feedbackId; ?>" style=" <?php if (preg_match('/[اأإء-ي]/ui', $title)) {
                                                        echo "text-align:right";
                                                    }?>" id="<?php echo $feedbackId; ?>"><?php echo $title; ?></option>
                                                <?php
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="myModel"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 pr-4 pl-4 mt-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="text-success">Bug Reports</h5>
                                        </div>
                                        <div class="">
                                            <select multiple class="form-control-plaintext view" id="exampleFormControlSelect2">
<?php
                                                $catId = '2';
                                                $featureRequest = Database::prepare("select f.id as feedbackId, f.category_id, f.title, c.id as categoryId, c.category from feedback f left join categories c on f.category_id = c.id  where f.category_id = :catId order by f.date desc");
                                                $featureRequest -> bindParam(':catId', $catId, PDO::PARAM_INT);
                                                $featureRequest -> execute();
                                                $countBR = $featureRequest -> rowCount();
                                                $featureRequest = $featureRequest -> fetchAll (PDO::FETCH_ASSOC);
                                                
                                                foreach ($featureRequest as $row){
                                                    $id = $row["categoryId"];
                                                    $category = $row["category"];
                                                    $title = $row["title"];
                                                    $feedbackId = $row["feedbackId"]
                                                    ?>
                                                <option value="<?php echo $feedbackId; ?>" style=" <?php if (preg_match('/[اأإء-ي]/ui', $title)) {
                                                        echo "text-align:right";
                                                    }?>"><?php echo $title; ?></option>
                                                <?php
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <footer class="footer text-center" style="background-color:rgba(0, 0, 0, 0.5);">
                <div class="py-3">
                    <small>Disclaimer</small>
                </div>
            </footer>
        </div>
    </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script>
        $('select').on('change', function(){
            var id = this.value;
            $.get("details-model.php", {'id': id}).done(function (data){
                $('.modal-content').html(data);
                $('#exampleModal').modal();
            });
        });
    </script>    
    <script>
        var fr = "<?php echo $countFR; ?>";
         var br = "<?php echo $countBR; ?>"
     var data = {
    datasets: [{
        data: [
            fr,
            br,
           
        ],
        backgroundColor: [
            "#FF6384",
            "#36A2EB"
        ],
        label: 'My dataset' // for legend
    }],
    labels: [
        "Feature Requests",
        "Bug Reports"
    ]
};

var pieOptions = {
  events: false,
  animation: {
    duration: 1000,
    easing: "easeOutQuart",
    onComplete: function () {
      var ctx = this.chart.ctx;
      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';

      this.data.datasets.forEach(function (dataset) {

        for (var i = 0; i < dataset.data.length; i++) {
          var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              total = dataset._meta[Object.keys(dataset._meta)[0]].total,
              mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius)/2,
              start_angle = model.startAngle,
              end_angle = model.endAngle,
              mid_angle = start_angle + (end_angle - start_angle)/2;

          var x = mid_radius * Math.cos(mid_angle);
          var y = mid_radius * Math.sin(mid_angle);

          ctx.fillStyle = '#fff';
          if (i == 3){ // Darker text color for lighter background
            ctx.fillStyle = '#444';
          }
          var percent = String(Math.round(dataset.data[i]/total*100)) + "%";      
          //Don't Display If Legend is hide or value is 0
          if(dataset.data[i] != 0 && dataset._meta[0].data[i].hidden != true) {
            ctx.fillText(dataset.data[i], model.x + x, model.y + y);
            // Display percent in another line, line break doesn't work for fillText
            ctx.fillText(percent, model.x + x, model.y + y + 15);
          }
        }
      });               
    }
  }
};

var pieChartCanvas = $("#pieChart");
var pieChart = new Chart(pieChartCanvas, {
  type: 'pie', // or doughnut
  data: data,
  options: pieOptions
});
</script>
    </body>
</html>