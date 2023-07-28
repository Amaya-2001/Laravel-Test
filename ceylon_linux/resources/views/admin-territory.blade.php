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
    <div class=" text-right mr-5">
        <h6 class="font-weight-bold">Welcome System Admin<br></h6>{{ $currentDateTimeFormatted }}
    </div>

    <!-- Region Registration -->
    <div class="container">
        <h6 class="text-center"><b>ADD TERRITORY</b></h6>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="adminTerritory" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="zone" class="col-sm-4 col-form-label">Zone </label>
                        <div class="col-sm-8">
                            <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="zoneSelection">
                                <option selected>Select</option>
                                <option value="1">ZONE1</option>
                                <option value="2">ZONE2</option>
                                <option value="3">ZONE3</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="zone" class="col-sm-4 col-form-label">Region </label>
                        <div class="col-sm-8">
                            <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="regionSelection">
                                <option selected>Select</option>
                                <option value="1">REGION1</option>
                                <option value="2">REGION2</option>
                                <option value="3">REGION3</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="zlDescription" class="col-sm-4 col-form-label">Territory Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="territory_code" placeholder="Automatically">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="regionName" class="col-sm-4 col-form-label">Territory Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="territory_name" placeholder="Ex: TERRITORY1">
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