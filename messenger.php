<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link type="text/css" href="resources/css/w3.css" href="stylesheet">
    <link type="text/css" href="assets/css/mySTYLE.css" rel="stylesheet">
    <link type="text/css" href="assets/css/style.css" rel="stylesheet">
    <title>Messenger Gateway</title>
</head>
<body onload = "load_api_data();">
    

    <div class="card-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow:  0px  3px 3px 3px rgba(0,0,0,.4);">
                <div class="card-header mt-2">
                    <h5 class="text-dark"><strong> LIST OF INQUIRIES TODAY    <i class="fa fa-comments  float-right" style="font-size:37px;margin-top:-5px"></i></strong></h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="height: 400px">
                        <table class="table">
                            <div id="load_api_data"></div><br>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    

    <!-- script link -->
    <script type="text/javascript" src="resources/js/jquery.js"></script>
    <script type="text/javascript" src="resources/js/popper.min.js"></script>
    <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="resources/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="resources/js/Chart.min.js"></script>
    <script type="text/javascript" src="resources/js/script.js"></script>
    <script type="text/javascript" src="app/models/functions.js"></script>

    <script type="text/javascript">
        function load_api_data() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("load_api_data").innerHTML = this.responseText;
            }
            xhttp.open("GET", "z_messenger.php");
            xhttp.send();
        }
        setInterval(function() {    
            load_api_data();
        }, 2000);
    </script>
</body>
</html>