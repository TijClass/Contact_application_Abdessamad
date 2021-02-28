 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container-fluid">
         <a class="navbar-brand" href="#">Logo</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <form class="d-flex">
             <button class="btn btn-outline-danger" type="submit">Logout</button>
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
                 <input type="text" class="form-control" placeholder="Search...." aria-label="Search...." aria-describedby="basic-addon1">
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
                 <form class="p-3">
                     <div class="form-group p-2">
                         <label for="firtName">First name</label>
                         <input type="text" class="form-control" id="firtName">
                     </div>
                     <div class="form-group p-2">
                         <label for="lastName">Last name</label>
                         <input type="text" class="form-control" id="lastName">
                     </div>
                     <div class="form-group p-2">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" id="email">
                     </div>
                     <div class="form-group p-2">
                         <label for="address">Address</label>
                         <input type="address" class="form-control" id="address">
                     </div>
                     <div class="form-group p-2">
                         <label for="phone">Phone</label>
                         <input type="phone" class="form-control" id="phone">
                     </div>
                     <div class="p-3">
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Family" value="Family">
                             <label class="form-check-label" for="Family">Family</label>
                         </div>

                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Friends" value="Friends">
                             <label class="form-check-label" for="Friends">Friends</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Business" value="Business">
                             <label class="form-check-label" for="Business">Business</label>
                         </div>

                     </div>
                     <div class="form-group p-3">
                         <label for="Notes">Notes</label>
                         <textarea class="form-control" id="Notes" rows="3"></textarea>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Add</button>
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
                             <tbody class="customtable">
                                 <tr>
                                     <td>01</td>
                                     <td>Bensaad</td>
                                     <td>Abdessamad</td>
                                     <td>bens@mail.com</td>
                                     <td>Street 12KL</td>
                                     <td>+212000000</td>
                                     <td><em>Family</em></td>
                                     <td><a href="#">Edit</a></td>
                                 </tr>
                                 <tr>
                                     <td>02</td>
                                     <td>Bensaad</td>
                                     <td>Abdessamad</td>
                                     <td>bens@mail.com</td>
                                     <td>Street 12KL</td>
                                     <td>+212000000</td>
                                     <td><em>Family</em></td>
                                     <td><a href="#">Edit</a></td>
                                 </tr>
                                 <tr>
                                     <td>03</td>
                                     <td>Bensaad</td>
                                     <td>Abdessamad</td>
                                     <td>bens@mail.com</td>
                                     <td>Street 12KL</td>
                                     <td>+212000000</td>
                                     <td><em>Family</em></td>
                                     <td><a href="#">Edit</a></td>
                                 </tr>
                                 <tr>
                                     <td>04</td>
                                     <td>Bensaad</td>
                                     <td>Abdessamad</td>
                                     <td>bens@mail.com</td>
                                     <td>Street 12KL</td>
                                     <td>+212000000</td>
                                     <td><em>Family</em></td>
                                     <td><a href="#">Edit</a></td>
                                 </tr>
                                 <tr>
                                     <td>05</td>
                                     <td>Bensaad</td>
                                     <td>Abdessamad</td>
                                     <td>bens@mail.com</td>
                                     <td>Street 12KL</td>
                                     <td>+212000000</td>
                                     <td><em>Family</em></td>
                                     <td><a href="#">Edit</a></td>
                                 </tr>
                                 <tr>
                                     <td>06</td>
                                     <td>Bensaad</td>
                                     <td>Abdessamad</td>
                                     <td>bens@mail.com</td>
                                     <td>Street 12KL</td>
                                     <td>+212000000</td>
                                     <td><em>Family</em></td>
                                     <td><a href="#">Edit</a></td>
                                 </tr>
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