<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head>


<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <p class="font-weight-bold text-right mr-5">Welcome System Admin<br>current date</p>

    <!-- Zone Registration -->
    <div class="container">
        <h6 class="text-center"><b>ADD ZONE</b></h6>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="/adminZone" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="zoneCode" class="col-sm-4 col-form-label">Zone Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="zoneCode" name="zoneCode" placeholder="Automatically">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="zlDescription" class="col-sm-4 col-form-label">Zone Long Description</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="zlDescription" name="zlDescription" placeholder="Ex:ZONE 1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="shortDescription" class="col-sm-4 col-form-label">Short Description</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="shortDescription" name="shortDescription" placeholder="Ex: Z01">
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