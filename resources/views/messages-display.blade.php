@include('layouts/header')
<!DOCTYPE html>
<head>
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/listtyicons/style.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/selectbox/select_option1.min.css')}}" rel="stylesheet" />

    <!-- Login and Registration Form Title and CSS -->
    <title>Account</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
</head>
<body>
    <div class="p-3 mb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <h3>Chats</h3>
                    <div class="inbox_chat">
                        <div class="btn-group-vertical" >
                            <button class="btn input-block-level form-control btn-lg">
                            <h3>Dr Name</h3>
                            <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <div class="">
                        <h3>Dr. Example name</h3>
                    </div>
                    <div class="chat-history">
    
                    </div>
                    <div class="container" >
                        <form action="">
                            <div class="row">
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" >
                                    <div class="text-center"><input type="text" class="form-control" placeholder="enter message" ></div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
                                    <button class="btn" type="button">Send</button>
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
