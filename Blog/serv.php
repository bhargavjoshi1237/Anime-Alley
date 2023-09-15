$servername = "sql207.infinityfree.com";
$username = "if0_34859889";
$password = "3swHxBENMN";
$dbname = "if0_34859889_i";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM blogs";  //This is where I specify what data to query
$result = mysqli_query($conn, $sql);

$data = array();
while($enr = mysqli_fetch_assoc($result)){
    $a = array($enr['column1'], $enr['column2']);
    array_push($data, $a);
}

echo json_encode($data);