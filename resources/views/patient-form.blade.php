@include('layouts/header')
<!DOCTYPE html>
<head>
    <script type="text/javascript"async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABZr8y9YuOF9eQhxoC_P70V73zuJjFbkc&libraries=places&callback=initMap" ></script>
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/listtyicons/style.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/selectbox/select_option1.min.css')}}" rel="stylesheet" />

    <!-- Login and Registration Form Title and CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container container-small"> 
        <div>
            <h3>Patient Forms</h3>
        </div>
        <form>
        <div class="form-group col-md-2">
            <label for="inputTitle">Title</label>
            <select id="inputTitle" class="form-control">
                <option selected>...</option>
                <option>Mr</option> 
                <option>Mrs</option> 
                <option>Miss</option> 
                <option>Dr</option>
            </select>
            </div>
           <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputfName">First name</label>
                <input type="fname" class="form-control" id="fname" placeholder="First name">
            </div>
            <div class="form-group col-md-2">
                <label for="inputInitals">Initals</label>
                <input type="Initals" class="form-control" id="Inital" placeholder="Initals">
            </div>
            <div class="form-group col-md-4">
                <label for="inputlName">Last name</label>
                <input type="lName" class="form-control" id="lName" placeholder="Last name">
            </div>
            <div class="form-row">
            <div class="form-group col-md-5">
            <form action="/action_page.php">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday">
                </form>
            </div>
             <div class="form-group col-md-">
                    <form>
                    <input type="radio" name="gender" value="Male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                    <br>
            </form> 
            </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputMobile">Mobile</label>
                  <input type="Mobile" class="form-control" id="Mobile" placeholder="Mobile">
             </div>
            <div class="form-group col-md-6">
                <label for="inputHomePhone">Home Phone</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Home Phone">
            </div>
            </div>
        <div class="form-group col-md-12">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Street Name and Apartment, studio, or floor Number">
        </div>
        <div class="form-group col-md-12">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Street Name and Apartment, studio, or floor Number">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" placeholder= "City">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
            <option selected>...</option>
            <option name="nsw">New South Wales</option>
	        <option name="vic">Victoria</option>
	        <option name="qld">Queensland</option>
	        <option name="wa">Western Australia</option>
	        <option name="sa">South Australia</option>
	        <option name="tas">Tasmania</option>
	        <option name="act">Australian Capital Territory</option>
	        <option name="nt">Northern Territory</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<script>
    
</script>
