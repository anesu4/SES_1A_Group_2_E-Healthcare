<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        <h3 id="receieverName">Choose a Doctor to start</h3>
                    </div>
                    <div class="chat-history" id="history">
                        
                        <img id='output'>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-8" >
                                <div class="text-center w-100">
                                    <input type="text" class="form-control" id="textOut" title="type message" placeholder="enter message">
                                </div>
                            </div>
                            <div class="col-xs-4" id="chatUtil" >
                                <button class="btn btn-primary" onclick="sendMessage()" type="button" title="send message">
                                    <span>Send</span>
                                    <span class="glyphicon glyphicon-send"></span>
                                </button>
                                <div class="upload-file-container">
                                    <span id="fileName"></span>
                                    <input class="upload-file" accept="image/png,.pdf,image/jpeg,image/gif" id="sendFileBtn" type="file"> 
                                    <span class="glyphicon glyphicon-picture"></span>
                                </div>
                                <button class="btn btn-hide" onclick="deleteFile()" title="delete file" id="removeFileBtn">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/js/messages.js"></script>
<?php /**PATH D:\Git Repo\SES_1A_Group_2_E-Healthcare\resources\views/messages.blade.php ENDPATH**/ ?>