<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="table.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
            
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
   
    <style type="text/css">
        .card{
            max-width: 1000px;
         
            margin-left: 150px;
        }
        
    
        </style>

</head>
<body>

<div class="content">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title">BloodBank</div>
                    </a>
                </li>

             <li>
                <a href="users_index.php">
                    <i class="fa fa-home"></i>
                    <div class="title">Home</div>
                </a>
             </li>

             <li>
                <a href="hospital_index.php">
                    <i class="fas fa-hospital"></i>
                    <div class="title">Hospital</div>
                </a>
             </li>
             <li>
                <a href="stock_index.php">
                    <i class="fas fa-hospital"></i>
                    <div class="title">Blood_stock</div>
                </a>
             </li>

             <li>
                <a href="doctor_index.php">
                    <i class="fas fa-user-md"></i>
                    <div class="title">Doctors</div>
                </a>
             </li>

             <li>
                <a href="campagency_index.php">
                    <i class="fas fa-user-md"></i>
                    <div class="title">CampAgency</div>
                </a>
             </li>

             <li>
                <a href="camp_index.php">
                    <i class="fas fa-ambulance"></i>
                    <div class="title">Campaign</div>
                </a>
             </li>

             <li>
                <a href="donor_index.php">
                    <i class="fas fa-hand-holding-medical"></i>
                    <div class="title">Donors</div>
                </a>
             </li>

             <li>
                <a href="receiver_index.php">
                    <i class="fas fa-wheelchair"></i>
                    <div class="title">Patients</div>
                </a>
             </li>

           
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <h2>Donors Information</h2>
        </div>
        

    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Donors Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="donor_insert.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label> Gender </label>
                            <input type="text" name="gender" class="form-control" placeholder="Enter Gender">
                        </div>

                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label> Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                            <label> Date</label>
                            <input type="text" name="date" class="form-control" placeholder="Enter Date">
                        </div>

                        <div class="form-group">
                            <label> Blood_group</label>
                            <input type="text" name="blood_group" class="form-control" placeholder="Enter Blood_group">
                        </div>

                        <div class="form-group">
                            <label> Camp </label>
                            <input type="text" name="camp_id" class="form-control" placeholder="Enter Camp">
                        </div>

                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Donors Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="donor_update.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_donor_id" id="update_donor_id">

                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label> Gender </label>
                            <input type="text" name="gender" id="gender" class="form-control"
                                placeholder="Enter Gender">
                        </div>

                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label> Address </label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                            <label> Date </label>
                            <input type="text" name="date" id="date" class="form-control"
                                placeholder="Enter Date">
                        </div>

                        <div class="form-group">
                            <label> Blood_group </label>
                            <input type="text" name="blood_group" id="blood_group" class="form-control"
                                placeholder="Enter Blood_group">
                        </div>

                        <div class="form-group">
                             <label> Camp </label>
                            <input type="text" name="camp_id" id="camp_id" class="form-control"
                                placeholder="Enter Camp">
                              <!--<label>CampAgency </label>
                            <select name="agency_id">
                <option value="CampAgency"></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                
              </select>
              <style type="text/css">
                       select{
                        width: 400px;
                        border: 1px solid #ddd;
                        border-radius: 3px;
                        outline: 0;
                        padding: 7px;
                        background-color: #fff;
                       
                    }
            </style>-->
                        </div>

        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Donors Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="donor_delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_donor_id" id="delete_donor_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="jumbotron">
            <div class="card">
                
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD DATA
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'blood_bank');

                $query = "CALL read_blood_donor_data()";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-hover">
                 
                   
                              <thead bgcolor="#27d3bf">
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Date</th>
                                <th scope="col">Blood_group</th>
                                <th scope="col">Camp</th>
                              
                              
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['donor_id']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['gender']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['address']; ?> </td>
                                <td> <?php echo $row['date']; ?> </td>
                                <td> <?php echo $row['blood_group']; ?> </td>
                                <td> <?php echo $row['camp_id']; ?> </td>
                               
                               
                               
                                <td>
                                    <button type="button" class="btn btn-primary editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>



   
    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_donor_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_donor_id').val(data[0]);
                $('#name').val(data[1]);
                $('#gender').val(data[2]);
                $('#email').val(data[3]);
                $('#address').val(data[4]);
                $('#date').val(data[5]);
                $('#blood_group').val(data[6]);
                $('#camp_id').val(data[7]);
               
            });
        });
    </script>

</div>
        </div>
        </div>

</body>
</html>
