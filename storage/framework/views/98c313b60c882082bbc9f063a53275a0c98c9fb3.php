<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>

<body>
    <div class="p-3 mb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                    <h3>Chats</h3>
                    <div class="inbox-chat" id="inbox">
                        
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="">
                        <h3 id="receieverName">receiver name</h3>
                    </div>
                    <div class="chat-history" id="history">
                        
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-8" >
                                <div class="text-center w-100">
                                    <input type="text" class="form-control" id="textOut" placeholder="enter message">
                                </div>
                            </div>
                            <div class="col-xs-4" >
                                <button class="btn btn-primary" onclick="sendMessage()" type="button" >
                                    <span>Send</span>
                                    <span class="glyphicon glyphicon-send"></span>
                                </button>
                                <div class="upload-file-container">
                                    <span id="fileName"></span>
                                    <input class="upload-file" id="sendFileBtn" type="file">
                                    <span class="glyphicon glyphicon-picture"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/messages.js"></script>
<?php /**PATH C:\Users\Mahmoud\Desktop\SES 1A Healthcare\SES_1A_Group_2_E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/messages.blade.php ENDPATH**/ ?>