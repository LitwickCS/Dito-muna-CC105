<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="admindashboard.css" />
    <title>Admin</title>
  </head>

  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <a href="" class="logo">
        <i class="bx bx-code-alt"></i>
        <div class="logo-name"><span>On_</span>A.ment</div>
      </a>
      <ul class="side-menu">
        <li class="active">
          <a href="admindashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
        </li>
        <li>
          <a href="students.php"><i class="bx bx-group"></i>Students</a>
        </li>
        <li>
          <a href="documents.php"><i class='bx bxs-folder'></i></i>Documents</a>
        </li>
        <li>
          <a href="appointments.php"><i class='bx bxs-phone'></i>Appointments</a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="logIn&signUp.php" class="logout">
            <i class="bx bx-log-out-circle"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
      
      <!-- Dark Theme Toggle -->
      <nav>
        <i class="bx bx-menu"></i>
        <input type="checkbox" id="theme-toggle" hidden />
        <label for="theme-toggle" class="theme-toggle"></label>
      </nav>
      <!-- End of Dark Theme Toggle-->

      <main>
        <div class="header">
          <h1>Admin Dashboard</h1>
        </div>

    
    <script src="admindashboard.js"></script>
  </body>
</html>
