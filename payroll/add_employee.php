<?php
  $conn = mysqli_connect('localhost', 'root', 'Praraj19','payroll');
  if (!$conn)
  {
    die("Database Connection Failed" . mysqli_error());
  }
  if(isset($_POST['submit'])!="")
  {
    $lname      = $_POST['lname'];
    $fname      = $_POST['fname'];
    $gender     = $_POST['gender'];
    $type       = $_POST['emp_type'];
    $division   = $_POST['division'];

    $sql = mysqli_query($conn,"INSERT into employee(lname, fname, gender, emp_type, division, deduction, overtime, bonus)VALUES('$lname','$fname','$gender', '$type', '$division', 0, 0, 0)");

    if($sql)
    {
      ?>
        <script>
            alert('Employee had been successfully added.');
            window.location.href='home_employee.php?page=emp_list';
        </script>
      <?php 
    }

    else
    {
      ?>
        <script>
            alert('Invalid.');
            window.location.href='index.php';
        </script>
      <?php 
    }
  }
?>