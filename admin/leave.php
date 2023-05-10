<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>InvestHood Docs</title>
  </head>
  <body>
    <!-- Sidebar -->

    <div class="sidebar">
      <div class="text-center">
        <div
          class="text-white bg-danger text-center"
          style="
            border-radius: 50%;
            height: 60px;
            width: 60px;
            padding: 19px;
            margin: 5px;
            margin-left: 65px;
          "
        >
          A
        </div>
        <div class="text-center text-danger">Administrator</div>
      </div>
      <hr style="color: #fff" />
      <a style="font-size: 17px" href="index.php"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          style="margin: 5px"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-cast"
          viewBox="0 0 16 16"
        >
          <path
            d="m7.646 9.354-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0z"
          />
          <path
            d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086l-1-1z"
          /></svg
        >Dashboard</a
      >
      <a style="font-size: 17px" href="Employees.php"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          style="margin: 5px"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-person-plus"
          viewBox="0 0 16 16"
        >
          <path
            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
          />
          <path
            fill-rule="evenodd"
            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"
          /></svg
        >Employees</a
      >
      <a style="font-size: 17px" href="clockin.php"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          style="margin: 5px"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-bell"
          viewBox="0 0 16 16"
        >
          <path
            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
          /></svg
        >Clock In</a
      >
      <a style="font-size: 17px" href="leave.php"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          style="margin: 5px"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-calendar-check"
          viewBox="0 0 16 16"
        >
          <path
            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"
          />
          <path
            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"
          /></svg
        >Leave Management</a
      >
      <a style="font-size: 17px" href=""
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          style="margin: 5px"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-list-task"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"
          />
          <path
            d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"
          />
          <path
            fill-rule="evenodd"
            d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"
          /></svg
        >Task Management</a
      >
      <a style="font-size: 17px" href="#"
      ><svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        style="margin: 5px"
        height="16"
        fill="currentColor"
        class="bi bi-layout-three-columns"
        viewBox="0 0 16 16"
      >
        <path
          d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13zM1.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5H5V1H1.5zM10 15V1H6v14h4zm1 0h3.5a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5H11v14z"
        /></svg
      >Departments</a>
    </div>

    <!-- Main content -->
    <div class="main">
      <nav
        id="navbar"
        style="background-color: rgb(5, 5, 151)"
        class="navbar navbar-expand-lg"
      >
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">LEAVE MANAGEMENT</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex m-auto" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-dark text-white" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>

      <!-- content about clock in -->
      <div class="container mt-5">
        <div class="row">
          <div class="col-6 col-sm-4">
            <div class="card" style="width: 39rem">
              <h6 style="color: grey; margin: 15px">Types of leaves</h6>
              <!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-info btn-sm"
                style="width: 150px; margin-left: 400px"
                data-bs-toggle="modal"
                data-bs-target="#addleave"
              >
                Add Leave
              </button>

              <!-- Modal -->
              <div
                class="modal fade"
                id="addleave"
                data-bs-backdrop="static"
                data-bs-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Add Leave
                      </h1>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                         
                          <input type="text" class="form-control form-control-sm" id="" placeholder="Name of leave">
                         
                        </div>
                        <div class="mb-3">
                         
                         <input type="text" class="form-control form-control-sm" id=""  placeholder="Description">
                        
                       </div>
                       <div class="mb-3">
                         
                       <input type="number" class="form-control form-control-sm" id=""  placeholder="Credits">
                        
                       </div>
                      
                         
                         <div class="mb-3">
                         
                          <select class="form-control" name="" id="">
                            <option value="" selected disabled>Intended Employee</option>
                            <option value="active">Intern</option>
                          </select>
                          
                         </div>
                         
                         
                       
                        
                        <button type="submit" class="btn btn-primary">Add Leave</button>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Credits</th>
                      <th scope="col">Intended Employee</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Annual Leave</td>
                      <td>Leave with pay</td>
                      <td>12</td>
                      <td>Interns</td>
                      <td>
                        <button
                          type="button"
                          class="btn btn-warning btn-sm"
                          data-bs-toggle="modal"
                          data-bs-target="#editleave"
                          data-bs-whatever="@mdo"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-pencil-square"
                            viewBox="0 0 16 16"
                          >
                            <path
                              d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                            />
                            <path
                              fill-rule="evenodd"
                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                            />
                          </svg>
                        </button>

                        <div
                          class="modal fade"
                          id="editleave"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Edit Leave
                                </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="mb-3">
                                   
                                    <input type="text" class="form-control form-control-sm" id="" placeholder="Name of leave">
                                   
                                  </div>
                                  <div class="mb-3">
                                   
                                   <input type="text" class="form-control form-control-sm" id=""  placeholder="Description">
                                  
                                 </div>
                                 <div class="mb-3">
                                   
                                 <input type="number" class="form-control form-control-sm" id=""  placeholder="Credits">
                                  
                                 </div>
                                
                                   
                                   <div class="mb-3">
                                   
                                    <select class="form-control" name="" id="">
                                      <option value="" selected disabled>Intended Employee</option>
                                      <option value="active">Intern</option>
                                    </select>
                                    
                                   </div>
                                   
                                   
                                 
                                  
                                  <button type="submit" class="btn btn-primary">Update Leave</button>
                                </form>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                        <button class="btn btn-sm btn-danger">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-trash3"
                            viewBox="0 0 16 16"
                          >
                            <path
                              d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"
                            />
                          </svg>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4" style="margin-left: 250px">
            <div class="card" style="width: 38rem">
              <h6 style="color: grey; margin: 15px">Applications</h6>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Applicant</th>
                      <th scope="col">Type of leave</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Katlego Mashego</td>
                      <td>Annual Leave</td>
                      <td>
                        <!-- Button trigger modal -->
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-info"
                          data-bs-toggle="modal"
                          data-bs-target="#edit"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-pencil-square"
                            viewBox="0 0 16 16"
                          >
                            <path
                              d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                            />
                            <path
                              fill-rule="evenodd"
                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                            />
                          </svg>
                        </button>

                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="edit"
                          data-bs-backdrop="static"
                          data-bs-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="staticBackdropLabel"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="staticBackdropLabel"
                                >
                                  Employee Code: 1111
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <strong>Full Names:</strong> Katlego Mashego<br>
                                <strong>Leave Type:</strong> Annual Leave<br>
                                <strong>Number of days:</strong> 5<br>
                                <strong>From:</strong> 18-April-2023<br>
                                <strong>To:</strong> 22-April-2023<br>
                                <strong>Reason for leave:</strong> Taking a break<br>
                              </div>
                              <div class="modal-footer">
                                <button
                                  type="button"
                                  class="btn btn-danger"
                                  data-bs-dismiss="modal"
                                >
                                  Reject
                                </button>
                                <button type="button" class="btn btn-success">
                                  Accept
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
