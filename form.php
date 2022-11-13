
<?php
$firstname = $_POST['firstname'];
$lastname   = $_POST['lastname'];
$email  = $_POST['email'];
$password   = $_POST['password'];
$bio   = $_POST['bio'];

$conn = mysqli_connect('localhost', 'root', '', 'github_repos');

if ($conn->connect_error) {
    echo "Registraion Failed...";
    die('connection Failed  :  ' . $conn->connect_error);
} else 
{
    $stmt = $conn->prepare("insert into registrationform(firstname,lastname,email,password,bio) values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $password, $bio);
    $stmt->execute();
    echo "Registration Successfull....";
    // header('location:Registration_Form.html');
    $stmt->close();
    $conn->close();
}

?>