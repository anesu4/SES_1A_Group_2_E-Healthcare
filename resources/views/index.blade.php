@include('layouts/header')

<!DOCTYPE html>
<html>
    <body>
    <title>E-Healthcare</title>
        <div class="login-page">
            
            <div class="form">
                <form class="register-formx">
                    <input type="text" placeholder="Username:">
                    <input type="text" placeholder="Password:">
                    <input type="text" placeholder="Email:">
                    <button>Create</button>
                    <p class="message">Already Registered?<a href="#">Login</a></p>                   
                </form>
                <form class="login-form">
                    <input type="text" placeholder="Username:"/>
                    <input type="password" placeholder="Password:"/>
                    <button>Login</button>
                    <p class="message">Not Registered? <a href="">Register</a></p> 
                    <!-- PHP Code for register url code. url('/register') -->
                </form>
            </div>
        </div>

        <!-- //BootStrap Code for Beautified Form - Anesu 22/04 -->
        <!-- <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
                <option>NSW</option>
                <option>WA</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form> -->
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js">
        </script>
        <script>
            $('.message a').click(function(){
                $('form').animate({height: "toggle", opcatity: "toggle"}, "slow")
            })
        </script>
    </body>
</html>
