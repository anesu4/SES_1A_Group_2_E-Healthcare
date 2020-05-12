<?php $__env->startSection('content'); ?>



<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<html>
    <head>
        <title>Login and Registration Form Design</title>
        <link rel="stylesheet" href="assets/style.css"/>
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>"/>
        <link href=" <?php echo e(asset('plugins/font-awesome/font-awesome.min.css')); ?>"/>
        <link href=" <?php echo e(asset('img/background1.jpg')); ?>"/>
    </head>
    <div class="header">
        <!--placeholder header-->
        <h1>E-Healthcare</h1>
        <h4>Better health</h4>
    </div>
    <body>
        <div class="login-page">
            <div class="form-box" id="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()"><?php echo e(__('Login')); ?></button>
                    <button type="button" class="toggle-btn" onclick="register()"><?php echo e(__('Register')); ?></button>
                </div>
                
                <div>
                    <form id="login" class="input-group" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                                <i class = "fa fa-user" ></i>
                                <input id="email" type="email text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-field" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <i class="fa fa-lock"></i>
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-field" name="password" required autocomplete="current-password" placeholder="Password">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>

                                <button type="submit" class="submit-btn">
                                    <?php echo e(__('Login')); ?>

                                </button>
                    </form>


                    <form id="register" class="input-group" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <p>Are you a doctor or patient?</p>
                        <div class="button-box2">
                            <div id="btn2"></div>
                            <button type="button" class="toggle-btn2" onclick="patient()">Patient</button>
                            <button type="button" class="toggle-btn2" onclick="doctor()">Doctor</button>
                        </div>

                        <div class="col-md-6">
                            <input id="name" type="text" class="input-field <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Name">

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <input id="email" type="email" class="input-field <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email Address">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input id="password password-confirm" type="password" class="input-field <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="Password"/>

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        <input id="password-confirm" type="password" class="input-field" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                        
                        <input type="text" class="input-field" id="search-location" placeholder="Enter your location"/>
                        <div class="input-field" id="certFile-container"> <!-- yes, this id isnt great, if you wanna change it make sure to upadate css & JS -->
                            <p>Upload doctor certification</p>
                            <input type="file" id="certFile">
                        </div>
                        <button type="submit" class="submit-btn">
                            <?php echo e(__('Register')); ?>

                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <footer>
                This is just chillin here as a placeholder footer <!-- placeholder footer, doesnt do anything. check css -->
            </footer>
        </div>
        <script>
            //Acronyms IF = input field
            //variables to switch login & register objects
            var loginForm = document.getElementById("login");
            var regForm = document.getElementById("register");
            var toggleBtn = document.getElementById("btn");
            var formBox = document.getElementById("form-box");
            //register-form input fields. *fyi some of this code is pretty dodgy and basic, but it works
            var toggleBtn2 = document.getElementById("btn2");
            var certFileIF = document.getElementById("certFile-container");
            var locationIF = document.getElementById("search-location");

            //boolean checks if doctor form is selected, false by default becacuse patient is selected
            var doctorForm = false;

            function register(){
                //shift button and form to register;  login = Overflow:hidden; reduce form height
                loginForm.style.left="-400px"
                regForm.style.left="50px"
                toggleBtn.style.left="96px"
                //check if doctor is selected, without it the form will not extend to correct height
                if(doctorForm){
                    formBox.setAttribute("style","height:600px")
                }
                else {
                    formBox.setAttribute("style","height:450px")
                }
            }
            function login(){
                //shift button and form to login;  register = Overflow:hidden; extend form height
                loginForm.style.left="50px"
                regForm.style.left="500px"
                toggleBtn.style.left="0px"
                formBox.setAttribute("style","height:300px");
            }
            function patient(){
                //toggle btn to highlight patient
                toggleBtn2.style.left="0px"
                //hide doctor input fields; reduces form height
                locationIF.setAttribute("style","display:none");
                certFileIF.setAttribute("style","display:none");
                formBox.setAttribute("style","height:450px");
                doctorForm = false;
            }
            function doctor(){

                //toggle btn to highlight doctor
                toggleBtn2.style.left="96px"

                //show doctor input fields; extend form height
                locationIF.setAttribute("style","display:inline");
                certFileIF.setAttribute("style","display:inline-block");
                formBox.setAttribute("style","height:600px");
                doctorForm = true;
            }
        </script>
    </body>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js">
        </script>
        <script>
            $('.message a').click(function(){
                $('form').animate({height: "toggle", opcatity: "toggle"}, "slow")
            })
        </script>
    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/auth/login.blade.php ENDPATH**/ ?>