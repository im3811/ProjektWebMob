




<?php
session_start();

$pageTitle = 'Comments'; // new code 
require 'config.php'; // new code 
include 'header.php'; // jnew code 


$conn = new mysqli(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);




if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

    if (isset($_POST['captcha']) && $_POST['captcha'] == $_SESSION['captcha_answer']) {

    $stmt = $conn->prepare("INSERT INTO comments (name, comment, last_modified_date) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $_POST['name'], $_POST['comment']);
    $stmt->execute();
    $stmt->close();

    unset($_SESSION['captcha_answer'], $_SESSION['num1'], $_SESSION['num2']);
    header('Location: ' . $_SERVER['PHP_SELF']); 
    exit;
    } else {
        echo '<div class="Wrong">Captcha Failed</div>';
        $_SESSION['num1'] = rand(1, 10);
        $_SESSION['num2'] = rand(1, 10);
        $_SESSION['captcha_answer'] = $_SESSION['num1'] + $_SESSION['num2'];
    }
}

if (!isset($_SESSION['captcha_answer'])) {
    $_SESSION['num1'] = rand(1, 10);
    $_SESSION['num2'] = rand(1, 10);
    $_SESSION['captcha_answer'] = $_SESSION['num1'] + $_SESSION['num2'];
} 
   
    $num1 = $_SESSION['num1'];
    $num2 = $_SESSION['num2'];








$stmt = $conn->prepare("SELECT name, comment, last_modified_date FROM comments ORDER BY last_modified_date DESC");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="comment">';
        echo '<strong>' . htmlspecialchars($row['name']) . '</strong>: ';
        echo htmlspecialchars($row['comment']) . ' ';
        echo '@' . htmlspecialchars($row['last_modified_date']);
        echo '</div>';
    }
} 



$stmt->close();
$conn->close();
?>


<form  method="post" class="animate-view">
<label for="name" class="animate-view">First name:</label>
    <input type="text" id="name" name="name" class="animate-view" required>
    
    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment" class="animate-view"  required></textarea>
    
    <label for="captcha">Solve <?php echo $num1; ?> + <?php echo $num2; ?>:</label>
    <input type="text" id="captcha" name="captcha" class="animate-view"  required>
    
    <input type="submit" value="Add to the List" class="animate-view" >


   
</form>
<?php include 'footer.php'?>

 <!-- new footer -->
