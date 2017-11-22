<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>
	<!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="includes/css/index.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Bootstrap Sidebar</h3>
                    <strong>BS</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a >
                            <i class="glyphicon glyphicon-home"></i>
                            Scan
                        </a>                        
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            Items
                        </a>                                              
                    </li>
                    <li>
                        <a href="" id="sales">
                            <i class="glyphicon glyphicon-tasks"></i>
                            Sales
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-th"></i>
                            Report
                        </a>
                    </li>
			<li>
                        <a href="setting.php">
                            <i class="glyphicon glyphicon-wrench"></i>
                            Setting
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>
                </ul>

               </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        
                    </div>
                </nav>            

                <div class="line"></div>
		<div id="maindiv">
		</div>

            </div>
        </div>





        

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
	<script>
    $(function() {
      $("#sales").click(function(evt) {
         $("#maindiv").load("sales.php")
         evt.preventDefault();
      })
    })
</script>
    </body>
</html>

