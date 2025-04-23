<?php include 'includes/header.php'; ?>
<?php include 'config/database.php'; ?>

<div class="container">
    <h2>Danh sách sản phẩm</h2>
    <a href="create.php" class="btn btn-primary mb-3">Thêm sản phẩm</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM products");
            while ($row = $stmt->fetch()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['description']}</td>";
                echo "<td>{$row['price']}</td>";
                echo "<td>
                        <a href='update.php?id={$row['id']}' class='btn btn-warning'>Sửa</a>
                        <a href='delete.php?id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"Bạn chắc chắn muốn xóa?\")'>Xóa</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>