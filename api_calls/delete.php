<?php 
    include('connect.php');
    session_start();
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM `projects` WHERE `id` = '$id'";
        $res = $conn->query($sql);
        if ($res == true) {
            $_SESSION['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">New record deleted successfully<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            echo header('location:../index.php');
        }else {
            $_SESSION['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Something went wrong!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            echo header('location:../index.php');
        }
    }else {
        $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Something went wrong!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
?>