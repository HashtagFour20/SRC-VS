


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
            <a class="nav-link active" href="index.php">Current Members</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../votingperiod/index.php">Voting period</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../candidates/index.php">Candidates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../registrations/index.php">Registrations</a>
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
    <h2 class="dashhead-title">Current Members</h2>
  </div>

  <div class="table-responsive">
    <table class="table" data-sort="table">
      <thead>
        <tr>
          <th>Position</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
            require("../../../back-end/getAllCurrentMembers.php");
            $currentMembers = getAllCurrentMembers();

            foreach($currentMembers as $member){
                echo "<tr>
                    <td>".$member["position_title"]."</td>
                    <td>".$member["member_name"]."</td>
                    <td>".$member["member_surname"]."</td>
                    <td><button type='button' class='btn btn-outline-primary' onclick='getCurrentMember(".json_encode($member).")'><span class='icon icon-pencil'></span></button></td>
                    </tr>";
            }
        ?>
      </tbody>
    </table>
  </div>

  <div id="updater">
  </div>


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

<script>
        const getCurrentMember = member => {
            document.getElementById("updater").innerHTML = "<div class='input-group mb-3'>" +
                                                            "<div class='input-group-prepend'>" +
                                                            "<span class='input-group-text' id='basic-addon1'>Member Name</span>" +
                                                            "</div>" +
                                                            "<input type='text' class='form-control' value='" + member.member_name + "' aria-label='Member Name' aria-describedby='basic-addon1'>" +
                                                            "</div>" +

                                                            "<div class='input-group mb-3'>" +
                                                            "<div class='input-group-prepend'>" +
                                                            "<span class='input-group-text' id='basic-addon1'>Member Surname</span>" +
                                                            "</div>" +
                                                            "<input type='text' class='form-control' value='" + member.member_surname + "' aria-label='Member Name' aria-describedby='basic-addon1'>" +
                                                            "</div>" +

                                                            "<div class='input-group mb-3'>" +
                                                            "<div class='input-group-prepend'>" +
                                                            "<span class='input-group-text' id='basic-addon1'>Position title</span>" +
                                                            "</div>" +
                                                            "<input type='text' class='form-control' value='" + member.position_title + "' aria-label='Member Name' aria-describedby='basic-addon1'>" +
                                                            "</div>" +

                                                            "<input type='hidden' value='" + member.member_id + "'>" +
                                                            "<button type='button' class='btn btn-success'> Update </button>" +
                                                            "<button type='button' onclick='cancelUpdate()' class='btn btn-danger'> Cancel </button>";
        }

        const cancelUpdate = () => {
          document.getElementById("updater").innerHTML = "";
        }

    </script>



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
