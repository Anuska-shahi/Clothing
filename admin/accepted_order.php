<?php include 'includes/session.php'; ?>
<?php
$where = '';
if (isset($_GET['category'])) {
  $catid = $_GET['category'];
  $where = 'WHERE category_id =' . $catid;
}

?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Order List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Order</li>
                    <li class="active">Accepted Order List</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <div class="pull-right">
                                    <form method="POST" class="form-inline" action="sales_print.php">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right col-sm-8" id="reservation"
                                                name="date_range">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm btn-flat" name="print"><span
                                                class="glyphicon glyphicon-print"></span> Print</button>
                                    </form>
                                </div>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th class="hidden"></th>
                                        <th>Date</th>
                                        <th>Buyer Name</th>
                                        <th>Transaction#</th>
                                        <th>Amount</th>
                                        <th>Full Details</th>
                                        <th>Status</th>
                                        <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                    $conn = $pdo->open();

                    try {
                      $stmt = $conn->prepare("SELECT *, sales.id AS salesid FROM sales LEFT JOIN users ON users.id=sales.user_id ORDER BY sales_date DESC");
                      $stmt->execute();
                      foreach ($stmt as $row) {
                        $stmt = $conn->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id WHERE details.sales_id=:id");
                        $stmt->execute(['id' => $row['salesid']]);
                        $total = 0;
                        foreach ($stmt as $details) {
                          $subtotal = $details['price'] * $details['quantity'];
                          $total += $subtotal;
                        }
                        echo "
                          <tr>
                            <td class='hidden'></td>
                            <td>" . date('M d, Y', strtotime($row['sales_date'])) . "</td>
                            <td>" . $row['firstname'] . ' ' . $row['lastname'] . "</td>
                            <td>" . $row['pay_id'] . "</td>
                            <td>Rs " . number_format($total, 2) . "</td>
                            <td><button type='button' class='btn btn-info btn-sm btn-flat transact' data-id='" . $row['salesid'] . "'><i class='fa fa-search'></i> View</button></td>
                            <td>Processing</td>
                            <td>
                              <button class='btn btn-success btn-sm text delete btn-flat' data-id='" . $row['id'] . "'></i> Done</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-trash'></i> Delete</button>
                            </td>
                          </tr>
                        ";
                      }
                    } catch (PDOException $e) {
                      echo $e->getMessage();
                    }

                    $pdo->close();
                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/products_modal.php'; ?>
        <?php include 'includes/products_modal2.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <script>
    $(function() {
        $(document).on('click', '.text', function(e) {
            <?php echo 'alert("This order is completed")'; ?>
        });

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.photo', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.desc', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            getRow(id);
        });

        $('#select_category').change(function() {
            var val = $(this).val();
            if (val == 0) {
                window.location = 'products.php';
            } else {
                window.location = 'products.php?category=' + val;
            }
        });

        $('#addproduct').click(function(e) {
            e.preventDefault();
            getCategory();
        });

        $("#addnew").on("hidden.bs.modal", function() {
            $('.append_items').remove();
        });

        $("#edit").on("hidden.bs.modal", function() {
            $('.append_items').remove();
        });

    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'products_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#desc').html(response.description);
                $('.name').html(response.prodname);
                $('.prodid').val(response.prodid);
                $('#edit_name').val(response.prodname);
                $('#catselected').val(response.category_id).html(response.catname);
                $('#edit_price').val(response.price);
                CKEDITOR.instances["editor2"].setData(response.description);
                getCategory();
            }
        });
    }

    function getCategory() {
        $.ajax({
            type: 'POST',
            url: 'category_fetch.php',
            dataType: 'json',
            success: function(response) {
                $('#category').append(response);
                $('#edit_category').append(response);
            }
        });
    }
    </script>
</body>

</html>