<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>

<body>
    <div class="p-3 mb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                    <h3>Chats</h3>
                    <div class="inbox_chat ">
                        <button type="button" class="btn btn-block w-75" >
                            <span class="" style="max-height: 20px;">
                            <h5 class="text-left">Dr Name</h5>
                            <!-- <p class="text-left ">Hey, may I book an appointment for 12:00pm?</p> -->
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <div class="">
                        <h3>Dr. Example name</h3>
                    </div>
                    <div class="chat-history">

                    </div>
                    <div class="container-fluid">
                        <form action="">
                            <div class="row">
                                <div class="col-xs-8" >
                                    <div class="text-center w-100"><input type="text" class="form-control" placeholder="enter message" >
            
                                    </div>
                                </div>
                                <div class="col-xs-4" >
                                    <button class="btn btn-primary" type="button ">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

</script>
<?php /**PATH D:\Git Repo\SES_1A_Group_2_E-Healthcare\resources\views/messages-display.blade.php ENDPATH**/ ?>