<?php
/*
    require_once("functions.php");
    $singleExpense = null;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $singleExpense = getSingleExpense($id);
    }

    if(isset($_POST['update-button'])){
        $id = $_POST['update-id'];
        $name = $_POST['update-name'];
        $amount = $_POST['update-amount'];
        updateExpense($id, $name, $amount);
        header("Location: table.php");
        exit();
    }
        <img
                src="assets/hide.png"
                alt="Toggle Password Visibility"
                id="hideSignup"
              />

               <!-- Log In -->
         <form action="function.php" class="log-in-form">
            <h2 class="title">Log In</h2>
            <div class="input-field">
              <i class="bx bxs-user"></i>
              <input
                type="text"
                placeholder="Student Number"
      
                required
              />
            </div>
            <div class="input-field">
              <i class="bx bxs-lock"></i>
              <input
                type="password"
                placeholder="Password"
                id="password"
                minlength="7"
                maxlength="14"
                required
              />
              <img
                src="assets/hide.png"
                alt="Toggle Password Visibility"
                id="hide"
              />
            </div
               <input type="submit" value="Log In" class="btn solid" name="login" />
                </form>
<!-- Log In -->
                <form action="index.php" method="POST" class="log-in-form">
                    <h2 class="title">Log In</h2>
                    <div class="input-field">
                        <i class="bx bxs-user"></i>
                        <input type="text" placeholder="Student Number" name="studentNumber" required />
                    </div>
                    <div class="input-field">
                        <i class="bx bxs-lock"></i>
                        <input type="password" placeholder="Password" name="password" required />
                    </div>
                    <input type="submit" value="Log In" class="btn solid" name="login" />
                </form>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="POST">
        <label for="">Name</label>
        <input type="text" name="update-name" id="" value="<?php echo $singleExpense['name']; ?>">
        <label for="">Amount</label>
        <input type="text" name="update-amount" id="" value="<?php echo $singleExpense['amount'];?>">
        <input type="hidden" name="update-id" value="<?php echo $singleExpense['expense_id']; ?>">
        <button type="submit" name="update-button">Update</button>
    </form>
</body>
</html>

<?php
session_start();
require_once("function.php");

if (isset($_POST['save-info'])) {
    $studentNumber = $_POST['studentNumber'];
    $firstName = $_POST['firstName']; 
    $lastName = $_POST['lastName']; 
    $courses = $_POST['courses']; 
    $email = $_POST['email']; 
    $password = $_POST['password'];

    $signal = insertStudentInfo(studentNumber: $studentNumber, firstName: $firstName, lastName: $lastName, 
                                courses: $courses, email: $email, password: $password);
    header("Location: logIn&signUp.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $studentNumber = $_POST['studentNumber'];
    $password = $_POST['password'];

    // Admin Check
    if ($studentNumber === "0" && $password === "admin123") {
        $_SESSION['role'] = 'admin';
        header("Location: admindashboard.php");
        exit();
    }

    // Normal User Check
    $connection = getConnection();
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $statement = $connection->prepare("SELECT * FROM tblStudents WHERE StudentNumber = ?");
    $statement->bind_param("s", $studentNumber);
    $statement->execute();
    $result = $statement->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify Password
        if ($password === $user['Password']) { // Direct plain-text comparison
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = 'user';
            header("Location: studentdashboard.php");
            exit();
        } else {
            echo '<script>alert("Invalid login credentials!");</script>';
        }
    } else {
        echo '<script>alert("Invalid login credentials!");</script>';
    }
}
?>

<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header("Location: logIn&signUp.php");
    exit();
}
?>