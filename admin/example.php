<?php
include('db_config.php');

if (isset($_POST['opt_level1'])) {
    $opt_level1 = $_POST['opt_level1'];

    // Define the query based on the selected level
    $query = "";
    switch ($opt_level1) {
        case 'week_bronze':
            $query = "SELECT * FROM tbl_add_bronze WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
            break;
        case 'month_bronze':
            $query = "SELECT * FROM tbl_add_bronze WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
            break;
        case 'week_silver':
            $query = "SELECT * FROM tbl_add_silver WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
            break;
        case 'month_silver':
            $query = "SELECT * FROM tbl_add_silver WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
            break;
        case 'week_gold':
            $query = "SELECT * FROM tbl_add_gold WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
            break;
        case 'month_gold':
            $query = "SELECT * FROM tbl_add_gold WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
            break;
        case 'week_platinum':
            $query = "SELECT * FROM tbl_add_platinum WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
            break;
        case 'month_platinum':
            $query = "SELECT * FROM tbl_add_platinum WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
            break;
        case 'week_diamond':
            $query = "SELECT * FROM tbl_add_daimond WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
            break;
        case 'month_diamond':
            $query = "SELECT * FROM tbl_add_daimond WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
            break;
        case 'week_double_diamond':
            $query = "SELECT * FROM tbl_add_double_daimond WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
            break;
        case 'month_double_diamond':
            $query = "SELECT * FROM tbl_add_double_daimond WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
            break;
        case 'week_triple_diamond':
            $query = "SELECT * FROM tbl_add_triple_daimond WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
            break;
        case 'month_triple_diamond':
            $query = "SELECT * FROM tbl_add_triple_daimond WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
            break;
        case 'week_kait_king':
            $query = "SELECT * FROM tbl_add_kait_king WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
            break;
        case 'month_kait_king':
            $query = "SELECT * FROM tbl_add_kait_king WHERE registered_date >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
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
                    <span class="fw-semibold">' . ucfirst(str_replace('_', ' ', $opt_level1)) . '</span>
                    <h1 class="fw-bold mt-2 mb-0 h2">' . $total . '</h1>
                </div>';
        } else {
            echo '
                <div class="col-4">
                    <span class="fw-semibold">' . ucfirst(str_replace('_', ' ', $opt_level1)) . '</span>
                    <h1 class="fw-bold mt-2 mb-0 h2">Error in query execution</h1>
                </div>';
        }
    } else {
        echo '
            <div class="col-4">
                <span class="fw-semibold">Invalid level</span>
                <h1 class="fw-bold mt-2 mb-0 h2"></h1>
            </div>';
    }
}
?>
