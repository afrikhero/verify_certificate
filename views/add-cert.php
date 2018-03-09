<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Certificate</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="login-panel panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Add Certificate</h3>
            </div>
            <div class="panel-body">
              <form role="form" id="form" method="post" action="../controllers/add-cert.php">
                <fieldset>
                  <div class="form-group" id="name-div">
                    <input class="form-control" placeholder="Full Name" name="name" type="text" autofocus />
                  </div>
                  <div class="form-group" id="id-div">
                    <input class="form-control" placeholder="Certificate ID" name="id" type="text" value="" />
                  </div>
                  <div class="form-group" id="course-div">
                    <input class="form-control" placeholder="Course" name="course" type="text" value="" />
                  </div>
                  <div class="form-group" id="date-div">
                    <input class="form-control" placeholder="Date" name="date" type="text" value=""  />
                  </div>
                  <input type="hidden" name="hide" value="true" />
                  <input class="btn btn-lg btn-success btn-block" type="submit" value="Add" name="add" />
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="../controllers/add-cert.js"></script>
  </body>
</html>
