<?php
include './core/init.php';
$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hello <?php echo $_SESSION['name']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex">
            <a class="btn btn-outline-danger" href="logout.php">Logout</a>
        </form>
    </div>
</nav>


<div class="container-md">
    <div class="d-flex bd-highlight pt-5">
        <div class="p-2 flex-grow-1 bd-highlight">
            <h3>Contacts</h3>
        </div>
        <div class="p-2 bd-highlight pt-5 pb-5">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" id="search" class="form-control" placeholder="Search...." aria-label="Search...." aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="p-2 bd-highlight pt-5 pb-5">
            <div class="input-group">
                <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#addContact">
                    <i class="bi bi-person-plus"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add contact</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="p-3" method="post" action="http://localhost/Contact_application_Abdessamad/starter_files/add_person.php" role="form">
                    <div class="form-group p-2">
                        <label for="firtName">First name</label>
                        <input type="text" class="form-control" name="firstname" id="firtName">
                    </div>
                    <div class="form-group p-2">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="lastname" id="lastName">
                    </div>
                    <div class="form-group p-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group p-2">
                        <label for="address">Address</label>
                        <input type="address" class="form-control" name="address" id="address">
                    </div>
                    <div class="form-group p-2">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="p-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="group" id="Family" value="Family">
                            <label class="form-check-label" for="Family">Family</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="group" id="Friends" value="Friends">
                            <label class="form-check-label" for="Friends">Friends</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="group" id="Business" value="Business">
                            <label class="form-check-label" for="Business">Business</label>
                        </div>

                    </div>
                    <div class="form-group p-3">
                        <label for="Notes">Notes</label>
                        <textarea class="form-control" id="Notes" name="notes" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit" name="submit" id="send">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID Number</th>
                                    <th scope="col">First name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Group</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody class="customtable" id="table">
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr data-id="<?php echo $row["id"]; ?>">
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["first_name"]; ?></td>
                                            <td><?php echo $row["last_name"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["address1"]; ?></td>
                                            <td><?php echo $row["phone"]; ?></td>
                                            <td><em><?php echo $row["group"]; ?></em></td>
                                            <td>
                                                <i id="removeMeeBro" onclick="removeME('<?php echo $row["id"]; ?>')" class="fas fa-user-times" style="cursor: pointer;"></i>
                                            </td>
                                        </tr>
                                <?php

                                    }
                                } else {
                                    echo "0 results";
                                }
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script>
    function removeME(id) {
        $.post({
            url: "../remove.php",
            data: {
                id: id
            },
            success: (response) => {
                if (response) {
                    $(`tr[data-id=${id}]`).fadeOut();
                }
            },
            error: (error) => {
                console.error(error);
            },
        });
    }
</script>