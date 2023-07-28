<!DOCTYPE HTML>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Zone Registration -->
    <div class="container">
        <h5 class="text-center"><b>ADD INDIVIDUAL PURCHASE ORDER</b></h5>
        <div class="row justify-content-center">
            <div class="col">
                <form action="product_order" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="zone" class=" col-form-label">Zone </label>
                                <div class="col">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected>Select</option>
                                        <option value="ZONE1">ZONE1</option>
                                        <option value="ZONE2">ZONE2</option>
                                        <option value="ZONE3">ZONE3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label for="region" class=" col-form-label">Region</label>
                                <div class="col">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected>Select</option>
                                        <option value="REGION1">REGION1</option>
                                        <option value="REGION2">REGION2</option>
                                        <option value="REGION3">REGION3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label for="territory" class=" col-form-label">Territory</label>
                                <div class="col">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected>Select</option>
                                        <option value="TERRITORY1">TERRITORY1</option>
                                        <option value="TERRITORY2">TERRITORY2</option>
                                        <option value="TERRITORY3">TERRITORY3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label for="distributor" class=" col-form-label">Distributor</label>
                                <div class="col">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected>Select</option>
                                        <option value="DISTRIBUTOR1">DISTRIBUTOR1</option>
                                        <option value="DISTRIBUTOR2">DISTRIBUTOR2</option>
                                        <option value="DISTRIBUTOR3">DISTRIBUTOR3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second row -->
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="date" class=" col-form-label">Date</label>
                                        <div class="col">
                                            <input type="date" class="form-control" name="date" placeholder="Automatically">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="po_no" class=" col-form-label">PO No</label>
                                        <div class="col">
                                            <input type="text" class="form-control" name="po_no" placeholder="Automatically">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="remark" class=" col-form-label">Remark</label>
                                        <div class="col">
                                            <input type="text" class="form-control" name="remark" placeholder="Type">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add PO table -->
                    <div class="row">
                        <div class="col"><input type="text" class="form-control" name="remark" placeholder="SKU CODE"></div>
                        <div class="col"><input type="text" class="form-control" name="remark" placeholder="SKU NAME"></div>
                        <div class="col"><input type="text" class="form-control" name="remark" placeholder="UNIT PRICE"></div>
                        <div class="col"><input type="text" class="form-control" name="remark" placeholder="AVB QTY"></div>
                        <div class="col"><input type="text" class="form-control" name="remark" placeholder="ENTER QTY"></div>
                        <div class="col"><input type="text" class="form-control" name="remark" placeholder="UNITS"></div>
                        <div class="col"><input type="text" class="form-control" name="remark" placeholder="TOTAL PRICE"></div>

                    </div>
                    <!-- Add Product Order button -->
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-success col-sm-3">Add PO</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>