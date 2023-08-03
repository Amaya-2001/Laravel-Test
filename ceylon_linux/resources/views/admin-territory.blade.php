<!DOCTYPE HTML>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head>


<body>


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
                                @foreach ($allZones as $zone_code => $ZoneName)
                                <option value="{{ $zone_code }}">{{ $ZoneName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="zone" class="col-sm-4 col-form-label">Region </label>
                        <div class="col-sm-8">
                            <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="regionSelection">
                                @foreach ($relatedRegions as $region_code => $RegionName)
                                <option value="{{ $region_code }}">{{ $RegionName }}</option>
                                @endforeach
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


    <!-- <script>
        // Function to handle dynamic update of Region options based on selected Zone
        function updateRegionOptions(selectedZone) {
            var url = 'adminTerritory';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.get(url, {
                zone: selectedZone
            }, function(data) {
                var options = '';
                $.each(data, function(value, text) {
                    options += '<option value="' + value + '">' + text + '</option>';
                });

                $('#regionSelection').html(options);
            });
        }

        // Trigger the function when the Zone selection changes
        $('#zoneSelection').on('change', function() {
            console.log('Zone Selection Changed');
            var selectedZone = $(this).val();
            updateRegionOptions(selectedZone);
        });

        // Call the function initially to populate the Region options based on the default selected Zone (if any)
        var selectedZone = $('#zoneSelection').val();
        updateRegionOptions(selectedZone);
    </script> -->




</body>

</html>