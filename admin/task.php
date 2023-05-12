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
      <a style="font-size: 17px" href="task.php"
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
        >Departments</a
      >
    </div>

    <!-- Main content -->
    <div class="main">
      <nav
        id="navbar"
        style="background-color: rgb(5, 5, 151)"
        class="navbar navbar-expand-lg"
      >
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">CLOCK IN</a>
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
      <center>
        <div class="card mt-5" style="width: 80%">
          <div class="card-body">
            <button
              class="btn btn-success btn-sm"
              style="margin-left: 1300px; margin-bottom: 10px"
            >
              Print
            </button>
            <h5>Attendance List</h5>
            <form style="display: flex" class="mt-5">
              <select name="" id="" class="form-select" style="width: 150px">
                <option value="" selected disabled>Employees</option>
                <option value="">All</option>
                <option value="">Katlego Mashego</option>
              </select>
              <select
                name=""
                id=""
                class="form-select"
                style="width: 150px; margin-left: 80px"
              >
                <option value="" selected disabled>Start date</option>
                <option value="20/March/2023">20/March/2023</option>
                <option value="20/March/2023">20/March/2023</option>
                <option value="20/March/2023">20/March/2023</option>
                <option value="20/March/2023">20/March/2023</option>
              </select>
              <select
                name=""
                id=""
                class="form-select"
                style="width: 150px; margin-left: 80px"
              >
                <option value="" selected disabled>End date</option>
                <option value="20/March/2023">20/March/2023</option>
                <option value="20/March/2023">20/March/2023</option>
                <option value="20/March/2023">20/March/2023</option>
                <option value="20/March/2023">20/March/2023</option>
              </select>
              <button class="btn btn-info" style="margin-left: 600px">
                Filter
              </button>
            </form>
          </div>
          <div class="card mt-5">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Fullnames</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Katlego Komane</td>
                    <td>katlego@gmail.com</td>
                    <td>10:10 20-March-2023</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </center>
    </div>

    <script src="../assets/js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
 