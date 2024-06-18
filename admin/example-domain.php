<?php
include('db_config.php');

if (isset($_POST['opt_level'])) {
    $opt_level = $_POST['opt_level'];

    // Define the query based on the selected level
    $query = "";
    switch ($opt_level) {
        case 'bronze':
            $query = "SELECT * FROM tbl_add_bronze";
            break;
        case 'silver':
            $query = "SELECT * FROM tbl_add_silver";
            break;
        case 'gold':
            $query = "SELECT * FROM tbl_add_gold";
            break;
        case 'platinum':
            $query = "SELECT * FROM tbl_add_platinum";
            break;
        case 'diamond':
            $query = "SELECT * FROM tbl_add_daimond";
            break;
        case 'double_diamond':
            $query = "SELECT * FROM tbl_add_double_daimond";
            break;
        case 'triple_diamond':
            $query = "SELECT * FROM tbl_add_triple_daimond";
            break;
        case 'kait_king':
            $query = "SELECT * FROM tbl_add_kait_king";
            break;
        default:
            $query = "";
    }

    if ($query) {
        $result = mysqli_query($con, $query);
        if ($result) {
            $total = mysqli_num_rows($result);
            echo '
                <div class="col-4">
                    <span class="fw-semibold">' . ucfirst($opt_level) . '</span>
                    <h1 class="fw-bold mt-2 mb-0 h2">' . $total . '</h1>
                </div>';
        } else {
            echo '
                <div class="col-4">
                    <span class="fw-semibold">' . ucfirst($opt_level) . '</span>
                    <h1 class="fw-bold mt-2 mb-0 h2">Error in query execution</h1>
                </div>';
        }
    } else {
        echo '
            <div class="col-4">
                <span class="fw-semibold"></span>
                <h1 class="fw-bold mt-2 mb-0 h2"></h1>
            </div>';
    }
}
?>
