
<?php 
include('include/header.php');
include('../middlewere/adminMiddlewere.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Product</h4>
                </div>
                <div class="card-body" id="products_table">
                    <table class="table table-bordered table-striped w-100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Số sản phẩm hiển thị trên mỗi trang
                            $itemsPerPage = 5;

                            // Trang hiện tại (được truyền vào từ người dùng hoặc tính toán dựa trên thao tác của người dùng)
                            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                            // Tính toán vị trí của sản phẩm đầu tiên trong trang
                            $offset = ($currentPage - 1) * $itemsPerPage;

                            // Câu lệnh SQL để lấy dữ liệu sản phẩm với phân trang
                            $sql = "SELECT * FROM products LIMIT $offset, $itemsPerPage";

                            // Thực hiện truy vấn SQL
                            $result = mysqli_query($conn, $sql);

                            // Xử lý kết quả truy vấn
                            if ($result) {
                                // Hiển thị dữ liệu sản phẩm
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['productID'] . "</td>";
                                    echo "<td><a href='../detail_product.php?product_id=" . $row['productID'] . "'>" . $row['p_name'] . "</a></td>";
                                    echo "<td><img src='../" . $row['p_img'] . "' alt='' width='170px' height='140px'></td>";
                                    echo "<td><div class='description' style='width: 200px; height: 100px; word-break: break-all; overflow-x: scroll;'>" . $row['p_desc'] . "</div></td>";
                                    echo "<td>" . $row['p_price'] . "</td>";
                                    echo "<td><a href='edit_product.php?productID=" . $row['productID'] . "' class='btn btn-primary'>Edit</a></td>";
                                    echo "<td><button type='button' style='background-color: red;' class='btn btn-sm-danger delete_product_btn' value='" . $row['productID'] . "'>Delete</button></td>";
                                    echo "</tr>";
                                }
                            } else {
                                // Xử lý khi truy vấn thất bại
                                echo "<tr><td colspan='7'>Lỗi trong quá trình thực hiện truy vấn: " . mysqli_error($conn) . "</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .pagination{
        margin: 20px;
        justify-content: center; /* căn giữa theo chiều ngang */
  align-items: center; /* căn giữa theo chiều dọc */
    }
</style>
<div class="container">
    <ul class="pagination">
        <?php
        // Tạo các liên kết phân trang
        $totalItems = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM products"));
        $totalPages = ceil($totalItems / $itemsPerPage);

        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
        }
        ?>
    </ul>
</div>

<?php include('include/footer.php'); ?>
