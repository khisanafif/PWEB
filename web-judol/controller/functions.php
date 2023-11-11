<?php
function redirect($url)
{
    header("Location: $url");
    exit();
}

// Fungsi menampilkan pesan error
function display_error($message)
{
    echo '<div class="error-message">' . $message . '</div>';
}

// Fungsi menampilkan pesan sukses
function display_success($message)
{
    echo '<div class="success-message">' . $message . '</div>';
}


// Fungsi halaman admin
function admin()
{
    require_once('../view/admin-panel/admin-login.php');
}

// Fungsi dashboard admin
function dashboard()
{
    require_once('../view/admin-panel/admin-dashboard.php');
}

// Fungsi halaman login customer
function customer_login()
{
    require_once('../view/forms/customer-login.php');
}

// Fungsi proses login customer
function customer_login_save()
{
    echo "Proses Login Customer";
}

// Fungsi untuk halaman registrasi customer
function customer_register()
{
    require_once('../view/forms/customer-register.php');
}

// Fungsi untuk proses registrasi customer
function customer_register_save()
{
    echo "Proses Register Customer";
}

// Fungsi untuk halaman profil customer
function customer_profile()
{
    require_once('../view/forms/customer-profile.php');
}

// Fungsi untuk proses edit profil customer
function customer_profile_edited()
{
    // Implementasi proses edit profil customer di sini
    echo "Proses Edit Profil Customer";
}

// Fungsi untuk halaman detail item
function item($id)
{
    require_once('../view/shop/item.php');
    getItemById($id);
}

// Fungsi untuk halaman keranjang belanja
function cart()
{
    require_once('../view/shop/cart.php');

}

// Fungsi untuk halaman detail pesanan
function order()
{
    require_once('../view/shop/order.php');
}

// Fungsi untuk halaman kontak
function contact()
{
    require_once('../view/shop/contact.php');
}
function logout()
{
    session_start(); // Pastikan sesi dimulai sebelum menghapus
    session_destroy();

    echo "Proses Logout Berhasil";
}

?>

