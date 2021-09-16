
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>

        Order history &middot;

    </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">

      <link href="../assets/css/toolkit-inverse.css" rel="stylesheet">


    <link href="../assets/css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>
  </head>


<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3 sidebar">
        <nav class="sidebar-nav">
          <div class="sidebar-header">
            <button class="nav-toggler nav-toggler-md sidebar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="sr-only">Toggle nav</span>
            </button>
            <a class="sidebar-brand img-responsive" href="../index.html">
              <span class="icon icon-leaf sidebar-brand-icon"></span>
            </a>
          </div>

          <div class="collapse nav-toggleable-md" id="nav-toggleable-md">
            <form class="sidebar-form">
              <input class="form-control" type="text" placeholder="Search...">
              <button type="submit" class="btn-link">
                <span class="icon icon-magnifying-glass"></span>
              </button>
            </form>
            <ul class="nav nav-pills nav-stacked flex-column">
              <li class="nav-header">Dashboards</li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Overview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../currentmembers/index.php">Current Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../votingperiod/index.php">Voting period</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Candidates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrations/index.php">Registrations</a>
        </li>
            </ul>
            <hr class="visible-xs mt-3">
          </div>
        </nav>
      </div>
      <div class="col-md-9 content">
        <div class="dashhead">
  <div class="dashhead-titles">
    <h6 class="dashhead-subtitle">Dashboards</h6>
    <h2 class="dashhead-title">Candidates</h2>
  </div>

  <div class="btn-toolbar dashhead-toolbar">
    <div class="btn-toolbar-item input-with-icon">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="icon icon-calendar"></span>
    </div>
  </div>
</div>

<div class="table-responsive">
  <table class="table" data-sort="table">
    <thead>
      <tr>
        <th><input type="checkbox" class="select-all" id="selectAll"></th>
        <th>Name</th>
        <th>Surname</th>
        <th>Political Party</th>
        <th>Position</th>
        <th>Date</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

      <?php
        require("../../../back-end/conn.php");

        $query = "SELECT candidate_name, candidate_surname, position_title, political_party, Now() as 'date' FROM `candidates`, `position` WHERE candidates.position_id = position.position_id";

        $result = mysqli_query($link, $query);

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td><input type='checkbox' class='select-row'></td>
                <td><a href='#'>".$row["candidate_name"]."</a></td>
                <td>".$row["candidate_surname"]."</td>
                <td>".$row["political_party"]."</td>
                <td>".$row["position_title"]."</td>
                <td>".$row["date"]."</td>
                <td><button type='button' class='btn btn-outline-primary'>
                  <span class='icon icon-pencil'></span>
                </button>
</td>
              </tr>";

          }

       ?>

    </tbody>
  </table>
</div>

<div class="text-center">
  <nav>
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>

  <hr class="visible-xs mt-3">

<h4>Add new candidate</h4>
<br>

<form method="post" action="candidate.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="first_name">First Name:</label>
    <input type="text" class="form-control" name="first_name" id="first_name">
</div>
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" name="last_name" id="last_name">
    </div>
    <div class="form-group">
        <label for="political_party">Political Party:</label>

        <select name="political_party" id="political_party" class="form-control">
            <option value="EFFSC">EFFSC</option>
            <option value="PASMA">PASMA</option>
            <option value="SASCO">SASCO</option>
            <option value="Independent">Independent</option>
        </select>
    </div>
    <div class="form-group">
        <label for="faculty">Faculty:</label>

        <select name="faculty" id="faculty" class="form-control">
            <option value="Education">Education</option>
            <option value="Applied Sciences">Applied Sciences</option>
            <option value="Business and Management Sciences">Business and Management Sciences</option>
            <option value="Engineering and Built Environment">Engineering and Built Environment</option>
        </select>
    </div>

    <div class="form-group">
        <label for="faculty">Position:</label>

        <select name="position" id="position" class="form-control">
          <?php

          require("../../../back-end/conn.php");

          $positions = array();

          $query = "SELECT * FROM `position`";

          $result = mysqli_query($link, $query);

          while($row = mysqli_fetch_assoc($result)) {
              echo "<option value='".$row["position_id"]."'><img src='..'>".$row["position_title"]."</option>";
            }
          ?>

        </select>
    </div>

    <div class="form-group">
    <label for="formControlFile">Image input: </label>
    <input type="file" name="file" class="form-control-file" id="formControlFile">
  </div>

    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
</form>

      </div>
    </div>
  </div>

  <div id="docsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Example modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>You're looking at an example modal in the dashboard theme.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cool, got it!</button>
      </div>
    </div>
  </div>
</div>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/tablesorter.min.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
  </body>
</html>
