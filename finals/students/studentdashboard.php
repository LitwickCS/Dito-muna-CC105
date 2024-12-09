<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="studentdashboard.css" />
    <title>On_A.ment</title>
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
          <a href="studentdashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
        </li>
        <li>
          <a href="requestDoc.php"><i class='bx bxs-folder'></i></i>Document</a>
        </li>
        <li>
          <a href="requestAppointment.php"><i class='bx bxs-phone'></i>Appointment</a>
        </li>
        <li>
          <a href="registrar.php"><i class="bx bx-group"></i>Registrar</a>
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
        <!-- Header Section -->
        <div class="header">
          <h1>Welcome, !</h1>
        </div>

        <!-- User Info Section -->
        <div class="user-info">
          <div class="user-card">
            <h3></h3>
            <p>Student</p>
          </div>
        </div>

        <!-- Key Stats Section -->
        <section class="stats">
          <div class="stat-card">
            <h4>Total Requests</h4>
            <p>0</p>
          </div>
          <div class="stat-card">
            <h4>Pending Approval</h4>
            <p>0</p>
          </div>
          <div class="stat-card">
            <h4>Completed Requests</h4>
            <p>0</p>
          </div>
          <div class="stat-card">
            <h4>Upcoming Appointments</h4>
            <p>0</p>
          </div>
        </section>

        <!-- Request Analytics Chart (if needed) -->
        <div class="chart-container">
          <h3>Request Analytics</h3>
          <canvas id="requestChart"></canvas>
        </div>
      </main>
    </div>
  </div>
        <div class="header">
          <h1>Student Dashboard</h1>
        </div>

        <div class="bottom-data">
          <div class="orders">
            <div class="header">
              <i class="bx bx-receipt"></i>
              <h3>Recent Requests</h3>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Document</th>
                  <th>Request Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                </tr>

                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Appointments -->
          <div class="reminders">
            <div class="header">
              <i class="bx bx-note"></i>
              <h3>Appointments</h3>
            </div>
            <ul class="task-list">
              <li>
                <div class="task-title"></div>
              </li>
              <li>
                <div class="task-title"></div>
              </li>
              <li>
                <div class="task-title"></div>
              </li>
            </ul>
          </div>

          <!-- End of Reminders-->
        </div>
      </main>
  

    <script src="studentdashboard.js"></script>
  </body>
</html>
