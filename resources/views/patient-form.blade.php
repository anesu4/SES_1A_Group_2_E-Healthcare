@include('layouts/header')
    <div class="container container-small"> 
        <div>
            <h3>Patient Forms</h3>
        </div>
        <form>
        <div class="form-group col-md-2">
            <label for="inputTitle">Title</label>
            <select id="inputTitle" class="form-control">
                <option selected>...</option>
                <option name="mr">Mr</option> 
                <option name="mrs">Mrs</option> 
                <option name="miss">Miss</option> 
                <option name="dr">Dr</option>
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
            <div class="form-group col-md-8">
            <form action="/action_page.php">
                <label for="DOB">DOB:</label>
                <input type="date" id="DOB" name="DOB">
                </form>
            </div>
             <div class="form-group col-md-4">
                    <form>
                    <input type="radio" name="gender" value="Male" > Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                    <br>
            </form> 
            </div>
            <div class="form-group col-md-6">
                <label for="inputMeicareNumber">Meicare Number</label>
                <input type="MeicareNumber" class="form-control" id="MeicareNumber" placeholder="Meicare Number">
            </div>
            <div class="form-group col-md-1">
                <label for="Ref#">Ref#</label>
                <input type="Ref#" class="form-control" id="Ref#"placeholder="Ref#">
            </div>
               <div class="form-group col-md-5">
            <form action="/action_page.php">
                <label for="Expiry Date">Expiry Date:</label>
                <input type="date" class="form-control" id="Expiry Date" name="Expiry Date">
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
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="contactName">Emergency Contact Name</label>
                <input type="contactName" class="form-control" id="contactName" placeholder="Emergency Contact Name">
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="EmergencyContactRelationship">Emergency Contact Relationship</label>
                <input type="EmergencyContactRelationship" class="form-control" id="EmergencyContactRelationship" placeholder="Emergency Contact Relationship">
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="contactMobile">Emergency Contact Mobile</label>
                <input type="contactMobile" class="form-control" id="contactMobile" placeholder="Emergency Contact Mobile">
            </div>
            <div class="form-group col-md-12">
            <label for="inputAddress">Emergency Contact Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Street Name and Apartment, studio, or floor Number">
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
        <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<script>
    
</script>