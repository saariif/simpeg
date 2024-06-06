<?php
function cekKeyActive($key)
{
    // Inisialisasi cURL session
    $ch = curl_init('https://api.iainmadura.ac.id/api/onhand/detect?key=' . $key);

    // Set opsi cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Melakukan permintaan cURL
    $response = curl_exec($ch);

    // Menangani kesalahan jika ada
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    }

    // Menutup koneksi cURL
    curl_close($ch);

    // Menguraikan respons JSON
    $decodedResponse = json_decode($response, true);

    return $decodedResponse;
}
if (isset($_SESSION['LOGIN_MODE']) && $_SESSION['LOGIN_MODE'] === 'ONEHAND') {
    // echo "<meta http-equiv=refresh content=0;url=\"onehandx.php?key=$_SESSION[LOGIN_TOKEN]&t=$_SESSION[LOGIN_TYPE]\">";
    // exit;
    $cek = cekKeyActive($_SESSION['LOGIN_TOKEN']);
    if (!$cek['status']) {
        unset($_SESSION['LOGIN_MODE']);
        unset($_SESSION['LOGIN_TOKEN']);
        unset($_SESSION['LOGIN_TYPE']);
        echo "<meta http-equiv=refresh content=0;url=\"logout.php\">";
        exit;
    }
}