<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Basemethod</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <link href="css/core-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



        <!-- the header  -->
        <header>
           <?php include '/elements/header.php'; ?>
        </header>

       
        <!-- body content wrapper  -->
        <section class="main-wrapper">

                <!-- breadcrumps -->
                <?php include '/elements/application-bar_breadcrumps.php'; ?>
             
                <!-- application button center content     -->
                <?php include '/elements/application-bar_buttons-center.php'; ?>    

                <!-- application bar last     -->
                <?php include 'elements/application-bar_last.php'; ?>

                <!-- sidebar here -->
                <?php include 'elements/sidebar.php'; ?>

            
                <div class="main-content">  <!-- main contents -->

                        <?php include '/elements/application-bar_tabbuttons.php'; ?>
                        <?php include '/elements/application-bar_buttons.php'; ?>


                        <div class="content-holder">  
                        <!-- start content holder  -->
                        <!-- you can insert your code here  -->

                                <!-- /*************************************************/ -->

                                
                                    <div class="container">
                                        <h3> Form Modal Sample </h3>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#exampleModal">
                                                Launch demo modal Form Sample
                                        </button>

                                        <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#two-column">
                                        Form With Two Column
                                        </button>

                                        <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#dialog-box">
                                                New Dialog Box with Icons
                                        </button>

                                    </div>

                                <!-- /*************************************************/ -->

                        <!--end  content holder  -->         
                        </div>

                </div>  <!-- end of main contents --> 

        </section> <!--end of  body content wrapper-->

        <!-- footer sections -->
        <footer>
            <?php include 'elements/footer.php'; ?>
        </footer>


        <!-- include the modals -->
        <?php include 'elements/modal-content.php'; ?>

        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- all scripts load here -->
        <script src="js/all-scripts.js"></script>





  </body>
</html>