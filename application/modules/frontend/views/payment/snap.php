<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Demo application to show you the process of endTo-end payment using Jokul Checkout">

    <title>Jokul Checkout PHP Example Project</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://cdn-doku.oss-ap-southeast-5.aliyuncs.com/doku-ui-framework/doku/img/favicon.png"/>

    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/doku/main.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Load Jokul Checkout JS script -->
    <script src="https://sandbox.doku.com/jokul-checkout-js/v1/jokul-checkout-1.0.0.js"></script>

    <script src="https://cdn-doku.oss-ap-southeast-5.aliyuncs.com/doku-ui-framework/doku/js/jquery-3.3.1.min.js"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn-doku.oss-ap-southeast-5.aliyuncs.com/doku-ui-framework/doku/js/popper.min.js"></script>
    <script src="https://cdn-doku.oss-ap-southeast-5.aliyuncs.com/doku-ui-framework/doku/js/bootstrap.min.js"></script>


</head>

<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?= base_url() ?>assets/frontend/css/logo.png"
                     width="70" height="70" class="mr-2"  alt="DOKU Logo"><h5 class="d-inline font-weight-normal">Go2Indonesia Payment</h5>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex">
        <div class="col-12 col-md-5 order-md-2 mb-4 mb-md-0">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>Cart</span>
                <span class="badge badge-secondary badge-pill">1</span>
            </h4>

            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div class="d-flex">
                        <div class="mr-1">
                            <img src="https://cdn-doku.oss-ap-southeast-5.aliyuncs.com/doku-ui-framework/doku/img/doku1.png"
                                 alt="DOKU Plate" class="img-fluid" width="75" height="75">
                        </div>

                        <div class="mr-1">
                            <h6 class="my-0">DOKU Plate</h6>
                            <small class="text-muted">Size: 14cm | Color: #255ce7</small>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text dk-span-group">IDR</span>
                                </div>
                                <input type="number" class="form-control dk-text-input" id="amount" placeholder="120000"
                                       value="120000">
                            </div>
                        </div>

                    </div>

                </li>
            </ul>
        </div>

        <div class="col-12 col-md-7 order-md-1">
            <h4>Checkout</h4>
            <form id="formRequestData" class="needs-validation" novalidate>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control dk-text-input" id="customerName" name="customerName"
                                           placeholder="Anton Budiman"
                                           value="Anton Budiman" required>
                                    <div class="invalid-feedback">
                                        Valid name is required.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control dk-text-input" id="email" name="email"
                                           placeholder="you@example.com"
                                           value="anton@budiman.com" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control dk-text-input" id="phoneNumber" name="phoneNumber"
                                           placeholder="6281111111111"
                                           value="6281111111111" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid phone number for shipping updates.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control dk-text-input" id="address"
                                           placeholder="Menara Mulia" name="address"
                                           value="Menara Mulia" required>
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country</label>
                                        <select class="form-control" id="country" name="country" required>
                                            <option value="ID" selected>Indonesia</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>City</label>
                                        <select class="form-control" id="province" required>
                                            <option value="Jakarta" selected>Jakarta</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control dk-text-input"
                                               id="postalCode" name="postalCode"
                                               value="12930"
                                               required>
                                        <input type="hidden" class="form-control dk-text-input" id="clientId" name="clientId"
                                               placeholder="BRN-0268-1698132339076" value="BRN-0268-1698132339076"
                                               required>
                                        <input type="hidden" class="form-control dk-text-input" id="sharedKey"
                                               name="sharedKey"
                                               placeholder="SK-g79bd5Te2Ys55M8Gm6YR" value="SK-g79bd5Te2Ys55M8Gm6YR"
                                               required>
                                        <div class="invalid-feedback">
                                            Secret Key is required.
                                        </div>


                                        <div class="invalid-feedback">
                                            Postal code required.
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block mb-3" style="">Purchase</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="container-fluid p-3 px-md-4 mt-3 bg-white shadow-sm">
    <div class="row text-center">
        <div class="col-12">
            <img class="mb-2"
                 src="<?= base_url() ?>assets/frontend/css/logo.png" alt=""
                 width="24" height="24">
            <small class="d-inline ml-1 mb-3 text-muted">&copy; 2020</small>
        </div>
    </div>
</footer>
</body>

<script>
    $("#formConfig").submit(function (e) {
        $('#configuration').modal('hide');
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Configuration has been setup',
            confirmButtonText: 'Close',
        })

        e.preventDefault();
        return false;
    });


    $("#formRequestData").submit(function (e) {
        let unindexed_array_config = $('#formConfig').serializeArray();
        let unindexed_array_payment_request = $('#formRequestData').serializeArray();
        let indexed_array = {};

        $.map(unindexed_array_config, function (n) {
            indexed_array[n['name']] = n['value'];
        });

        $.map(unindexed_array_payment_request, function (n, i) {
            indexed_array[n['name']] = n['value'];
        });

        indexed_array['clientId'] = $("#clientId").val();
        indexed_array['sharedKey'] = $("#sharedKey").val();
        indexed_array['customerName'] = $("#customerName").val();
        indexed_array['email'] = $("#email").val();
        indexed_array['phoneNumber'] = $("#phoneNumber").val();
        indexed_array['address'] = $("#address").val();
        indexed_array['country'] = $("#country option:selected").val();
        indexed_array['expiredTime'] = parseInt($("#expiredTime").val());
        indexed_array['amount'] = $("#amount").val();

        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: JSON.stringify(indexed_array),
            url: "<?= site_url('payment')?>",
            contentType: "application/json",
            success: function (result) {
                loadJokulCheckout(result.response.payment.url);
            },
            error: function(xhr, textStatus, error){
                Swal.fire({
                    icon: 'error',
                    title: 'Order Failed',
                    confirmButtonText: 'Close',
                })
            }

        });
        e.preventDefault();
        return false;
    });


</script>

</html>