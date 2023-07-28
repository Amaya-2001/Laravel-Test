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

    <!-- Product Registration -->
    <div class="container">
        <h6 class="text-center"><b>ADD SKU</b></h6>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="product_regs" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="sku_id" class="col-sm-4 col-form-label">SKU ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sku_id" placeholder="Automatically">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sku_code" class="col-sm-4 col-form-label">SKU Code<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sku_code" value="{{ old('sku_code') }}">
                            <!-- validation custom message -->
                            @error('sku_code')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sku_name" class="col-sm-4 col-form-label">SKU Name<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sku_name" placeholder="Main Product Name/auto" value="{{ old('sku_name') }}">
                            <!-- validation custom message -->
                            @error('sku_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mrp" class="col-sm-4 col-form-label">MRP<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="mrp" value="{{ old('mrp') }}">
                            <!-- validation custom message -->
                            @error('mrp')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="distributor_price" class="col-sm-4 col-form-label">Distributor Price<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="distributor_price" value="{{ old('distributor_price') }}">
                            <!-- validation custom message -->
                            @error('distributor_price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row g-3">
                        <label for="weight/volume" class="col-sm-4 col-form-label">Weight/Volume<span class="text-danger">*</span></label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="weight_volume_value" value="{{ old('weight_volume_value') }}">
                            <!-- validation custom message -->
                            @error('weight_volume_value')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="weight_volume_unit" value="{{old('weight_volume_unit')}}">
                                <option value=""></option>
                                <option value="mg" @if(old('weight_volume_unit')==='mg' ) selected @endif>mg</option>
                                <option value="g" @if(old('weight_volume_unit')==='g' ) selected @endif>g</option>
                                <option value="kg" @if(old('weight_volume_unit')==='kg' ) selected @endif>kg</option>
                            </select>
                            <!-- validation custom message -->
                            @error('weight_volume_unit')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success col-sm-3">SAVE</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>