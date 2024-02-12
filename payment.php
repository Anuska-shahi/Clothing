<?php include 'includes/session.php'; ?>
<?php
if (!isset($_SESSION['user'])) {
	header('location: index.php');
}
?>
<?php include 'includes/header.php'; ?>
<style>
/* table, th, td {
  border:1px solid black;
  padding: 5px;
} */
body{
    margin:0;
    padding:0;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    background-color: black;
    border-radius: 5px;
}
.container{
    margin-left:300px;
}
    .address{
    width: 350px;
    height: 520px;
    background: white;
    color: black;
    top: 50%;
    left: 50%;
    position: left;
    box-sizing: border-box;
    padding: 10px 50px; 
   

}
.address1{
    width: 350px;
    height: 520px;
    background: white;
    color: black;
    top: 20%;
    left: 60%;
    position: absolute;
    box-sizing: border-box;
    padding: 10px 50px;

}
.address input{
    display: inline-block;
    margin-bottom: 10px;
    margin-right: 2px;
    width: 100%;
    font-size: 15px;
}

.address1 input{
    display: inline-block;
    margin-bottom: 10px;
    margin-right: 2px;
    width: 100%;
    font-size: 15px;
}

    .address label {
        display: inline-block;
        padding-right: 0px;
        font-size: 16px;
    }

    .address1 label {
        display: inline-block;
        padding-right: 0px;
        font-size: 16px;
    }

    .payment{
        padding-top:50px;
        font-size:15px;
    }

    .payment label{
        font-size:20px;
    }

</style>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper">
            <div class="container">

                <!-- Main content -->
                <div>
                    <h1>Payment</h1>
                    <!-- <h3>All transactions are secured and encrypted</h3> -->
                    <!-- <div class="box-body">
                        <table style="width:100%">
                            <tr>
                                <th>
                                    <a href=""><img src="card.png" width="500" height="200"></a>
                                </th> 
                            </tr>
                            <tr>
                                <th>
                                <a href="https://www.esewa.com.np"><img src="Esewa.png" width="500" height="150"></a>
                                </th>                               
                            </tr>
                            <tr>
                                <th>
                                <a href="https://khalti.com"><img src="khalti.png" width="500" height="150"></a>
                                </th>                               
                            </tr>
                            <tbody id="tbody">
                            </tbody>
                        </table>
                    </div> -->
                    <div class="address" col-sm-6>
                    <h3 style="padding-bottom:20px;">Billing Address</h3>
  <form action="/action_page.php">
    <label for="fname">Full Name</label>
    <input type="text" name="firstname" placeholder="Enter Full Name.." required></br>

    <label for="lname">Phone No</label>
    <input type="text"name="lastname" placeholder="Enter Phone No.." required></br>

    <label for="fname">Country</label>
    <input type="text" name="firstname" placeholder="Enter Country.." required></br>

    <label for="lname">Address</label>
    <input type="text" name="lastname" placeholder="Enter Address.." required></br>

    <label for="fname">City</label>
    <input type="text" name="firstname" placeholder="Enter City.." required></br>

    <label for="lname">State</label>
    <input type="text" name="lastname" placeholder="Enter State.." required></br>

    <label for="lname">Zip Code</label>
    <input type="text" name="lastname" placeholder="Enter Zip Code.." required></br>
  </form>
</div>


<div class="address1" col-sm-6>
<h3 style="padding-bottom:20px;">Shipping Address</h3>
  <form action="/action_page.php">
    <label for="name">Full Name</label>
    <input type="text" name="firstname" placeholder="Enter Full Name.." required></br>

    <label for="contact">Phone No</label>
    <input type="text"name="lastname" placeholder="Enter Phone No.." required></br>

    <label for="country">Country</label>
    <input type="text" name="firstname" placeholder="Enter Country.." required></br>

    <label for="address">Address</label>
    <input type="text" name="lastname" placeholder="Enter Address.." required></br>

    <label for="city">City</label>
    <input type="text" name="firstname" placeholder="Enter City.." required></br>

    <label for="state">State</label>
    <input type="text" name="lastname" placeholder="Enter State.." required></br>

    <label for="zipcode">Zip Code</label>
    <input type="text" name="lastname" placeholder="Enter Zip Code.." required></br>

 
  </form>
</div>
                
<div class="payment">
                <p><label>Select Payment Method:</label>
                                        <select>  
                                            <option value="Select">Select</option>
                                            <option value="Sumit">Cash on Delivery</option>  
                                            <a href="https://www.esewa.com.np"><option value="Sumit">Esewa</option></a>
                                            <a href="https://khalti.com/"><option value="Sumit">Khalti</option> </a>
                                            <a href="https://www.paypal.com/np/home"><option value="Sumit">PayPal</option> </a>
                                        </select></br>
                                        <!-- <button>Confirm Payment</button> -->
                                        <input type="submit" value="Confirm Payment">
                                    </p>
                                    </div>    
</div>

            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
        
    </div>

    <?php include 'includes/scripts.php'; ?>
    <script>
    $(function() {
        $(document).on('click', '.transact', function(e) {
            e.preventDefault();
            $('#transaction').modal('show');
            var id = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: 'transaction.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#date').html(response.date);
                    $('#transid').html(response.transaction);
                    $('#detail').prepend(response.list);
                    $('#total').html(response.total);
                }
            });
        });

        $("#transaction").on("hidden.bs.modal", function() {
            $('.prepend_items').remove();
        });
    });
    </script>
</body>


</html>