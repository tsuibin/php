
<?php
$searchtype = $_POST['searchtype'];
$searchterm = $_POST['searchterm'];
$searchterm = trim($searchterm); //去处首尾空格
//$searchtype="title";
//$searchterm="java";
if (! $searchtype || ! $searchterm) {
    echo 'you have no ..please back again';
    exit();
}
if (! get_magic_quotes_gpc()) {
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
}
@$db = new mysqli('localhost', 'root', 'root', 'mybook');
if (mysqli_connect_errno()) {
    echo 'Error';
    exit();
}
$query = "select * from books where " . $searchtype . " like '%" . $searchterm . "%'";
$db->query("set names utf8");
$result = $db->query($query);
$num_results = $result->num_rows;
echo "<meta http-equiv='Content-Type content='text/html; charset=utf8' />";
echo "number of books  found: {$num_results}";
for ($i = 0; $i < $num_results; $i ++) {
    $row = $result->fetch_assoc();
    echo '<p><strong>' . ($i + 1) . '.Title:';
    echo htmlspecialchars(stripslashes($row['title']));
    echo '</strong><br />Name:';
    echo stripslashes($row['name']);
    echo '<br />ID:';
    echo stripslashes($row['id']);
    echo '<br />Price:';
    echo stripslashes($row['price']);
    echo '</p>';
}
//$result->free();
$db->close();
//stripslashes()
?>
