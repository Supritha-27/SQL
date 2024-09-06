<?php
// Assuming you receive a parameter for the ID you want to delete
$deleteUserId = $_POST["deleteUserId"]; // Get the ID you want to delete


$conn = new mysqli('localhost', 'root', '', 'weather');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Delete user record
    $deleteUserSql = "DELETE FROM users WHERE user_id = '$deleteUserId'";
    $conn->query($deleteUserSql);

    // // Delete location record
    // $deleteLocationSql = "DELETE FROM locations WHERE locationId = '$deleteLocationId'";
    // $conn->query($deleteLocationSql);

    // // Delete weather record
    // $deleteWeatherSql = "DELETE FROM weather WHERE weatherId = '$deleteWeatherId'";
    // $conn->query($deleteWeatherSql);

    // // Delete event record
    // $deleteEventSql = "DELETE FROM events WHERE eventId = '$deleteEventId'";
    // $conn->query($deleteEventSql);

    // // Delete report record
    // $deleteReportSql = "DELETE FROM reports WHERE reportId = '$deleteReportId'";
    // $conn->query($deleteReportSql);

    echo "Record(s) Deleted Successfully!!!";
}
?>
