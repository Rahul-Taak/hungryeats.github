<?php include"dbConnect.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>🌶 Hungry Eats</title>

    <style>
    body {
        background-image: url("img/resBg.png");
        background-size: cover;
    }

    #center {
        text-align: center;
        font-size: 40px;
        padding: 5px 0px;
        color: white;
        font-family: 'Ubuntu', sans-serif;
        background-color: #0068A8;
    }

    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

    table,
    th,
    td {
        font-family: 'Ubuntu', sans-serif;
    }

    footer {
        font-family: 'Ubuntu', sans-serif;
    }
    </style>

</head>

<body>






    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">🍽 Order Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"
                    style="background-color:#0068A8;color: white;font-family:'Ubuntu',sans-serif;font-size:20px">
                    <div class="px-5" style="display:flex;">
                        <div>
                            <img src="img/Logo.png" class="my-2 rotate" style="height:160px;">
                            <h3 style="color: #BCF500;"><em>A Food For Every Taste !!</em></h3>
                        </div>
                        <div class="conatiner my-2" style="margin:50px;">
                            <div class="my-2">Place Your Order</div>
                            <div class="dropdown">
                                <a class="btn btn-warning dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Choose Your Payment Option
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item">
                                            <div class="modal-footer btn btn-primary"
                                                data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                                                Online Payment
                                            </div>
                                        </a></li>
                                    <li><a class="dropdown-item">
                                            <div class="modal-footer btn btn-primary"
                                                data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">
                                                Cash On Delivery
                                            </div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Online Payment --------------------------------------------->

    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">💸 Online Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile Number : </label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="mb-3 px-3">
                            <label for="exampleInputName1" class="form-label">Name : </label>
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 px-3">
                            <label for="exampleInputAddress1" class="form-label">Address : </label>
                            <textarea type="text" class="form-control" id="exampleInputAddress1"
                                aria-describedby="emailHelp"></textarea>
                        </div>

                        <div class="mb-3 px-3">
                            <label for="exampleInputCard1" class="form-label">Card Number : </label>
                            <input type="text" class="form-control" id="exampleInputCard1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 px-3">
                            <label for="exampleInputCvv1" class="form-label">CVV : </label>
                            <input type="number" class="form-control" id="exampleInputCvv1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 px-3">
                            <label for="exampleInputExp1" class="form-label">Expiry Date : </label>
                            <input type="date" class="form-control" id="exampleInputExp1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 form-check mx-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Accept all terms and conditions</label>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="modal-footer btn btn-primary"
                                data-bs-target="#exampleModalToggle5" data-bs-toggle="modal">
                                Place an Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Cash On Delivery -------------------------------------------->

    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel3">💸 Cash On Delivery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile Number : </label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="mb-3 px-3">
                            <label for="exampleInputName1" class="form-label">Name : </label>
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 px-3">
                            <label for="exampleInputAddress1" class="form-label">Address : </label>
                            <textarea type="text" class="form-control" id="exampleInputAddress1"
                                aria-describedby="emailHelp"></textarea>
                        </div>

                        <div class="mb-3 px-3">
                            <label for="exampleInputLand1" class="form-label">Landmark : </label>
                            <input type="text" class="form-control" id="exampleInputLand1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 form-check mx-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Accept all terms and conditions</label>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="modal-footer btn btn-primary"
                                data-bs-target="#exampleModalToggle5" data-bs-toggle="modal">
                                Place an Order
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Thank You ------------------------------------------------>

    <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel5">🌶 Hungry Eats</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <span style="text-align:center;">
                        <h2>Thank You For Placing An Order !!</h2>
                        <button type="button" style="float:right;" class="btn btn-success"
                            data-bs-dismiss="modal">OK</button>
                    </span>
                </div>

            </div>
        </div>
    </div>

    <!-- Navbar ------------------------------------------------------>

    <?php include "navbar.php"; ?>

    <!-- Heading ----------------------------------------------------->

    <div id="center">My Orders 🍽</div>

    <!-- Table ------------------------------------------------------->

    <div class="container my-4">

        <table class="table table-dark table-striped table-hover">
            <?php
            echo '<thead>
                <tr>
                    <th>SNo.</th>
                    <th>TYPE</th>
                    <th>SIZE</th>
                    <th>PRICE</th>
                    <th>ACTION</th>
                </tr>
                </thead>';

                $sql3 = "SELECT * FROM orderkro";
                $result3 = mysqli_query($conn, $sql3);
                $count = 1;
                $item = 0;
                $total = 0;
                while($row = mysqli_fetch_array($result3)){
                    echo '<tbody>
                    <tr>
                    <td>&nbsp;&nbsp;'.$count.'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>₹ '.$row[4].'</td>
                    <td><a href="delete.php?z='.$row[0].'"><input type="button" class="btn btn-sm btn-warning" value="Delete"></a></td>
                    </tr>
                    </tbody>';
                    $count++;
                    $item++;
                    $total = $total + $row[4];
                }
 
            ?>
        </table>
        <div class="container">
            <?php
            echo '<table class="table">
            <td><h5 class="p-1 px-4 mb-2 bg-dark bg-gradient border border-dark text-white">Total Items Are : &nbsp;&nbsp; '.$item.'</h5></td>
            <td><h5 class="p-1 px-4 mb-2 bg-dark bg-gradient border border-dark text-white">Total Price Is : &nbsp;&nbsp; ₹ '.$total.'/-</h5></td>
            </table>'
            ?>
        </div>
        <div class="container text-center">
            <a href="menu.php"><button class="btn btn-primary mx-2">Add More Items</button></a>
            <a class="btn btn-danger mx-2" data-bs-toggle="modal" href="#exampleModalToggle" role="button">🍽 Order
                Now</a>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <!-- JavaScript ----------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>