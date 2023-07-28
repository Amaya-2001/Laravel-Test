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


    <!-- User Registration -->
    <div class="container">
        <h6 class="text-center"><b>ADD USERS</b></h6>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="usersReg" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            <!-- validation custom message -->
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nic" class="col-sm-4 col-form-label">NIC<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nic" value="{{ old('nic') }}">
                            <!-- validation custom message -->
                            @error('nic')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">
                            Address<span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                            <!-- validation custom message -->
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-sm-4 col-form-label">Mobile<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="mobile">
                            <!-- validation custom message -->
                            @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email">
                            <!-- validation custom message -->
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-8">
                            <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="gender">
                                <option value="">Select</option>
                                <option value="male" @if(old('gender')==='male' ) selected @endif>Male</option>
                                <option value="female" @if(old('gender')==='female' ) selected @endif>Female</option>

                            </select>
                            <!-- validation custom message -->
                            @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="territory" class="col-sm-4 col-form-label">Territory<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-select form-select-lg @error('territory') is-invalid @enderror" aria-label=".form-select-lg example" name="territory">
                                <option value="">Select</option>
                                <option value="TERRITORY1" @if(old('territory')==='TERRITORY1' ) selected @endif>TERRITORY1</option>
                                <option value="TERRITORY2" @if(old('territory')==='TERRITORY2' ) selected @endif>TERRITORY2</option>
                                <option value="TERRITORY3" @if(old('territory')==='TERRITORY3' ) selected @endif>TERRITORY3</option>
                            </select>
                            <!-- validation custom message -->
                            @error('territory')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="userName" class="col-sm-4 col-form-label">User Name<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="username">
                            <!-- validation custom message -->
                            @error('username')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password">
                            <!-- validation custom message -->
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
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