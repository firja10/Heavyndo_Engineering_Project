<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="container">
        <div class="row mt-3">
            <div class="col-6 offset-3">
                <div class="card">
                    
                    <div class="card-header">
                        Chat Room
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>

                        <div class="form-group" id = "data-message">

                        </div>

                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Send</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{url('js/app.js')}}"></script>
    
    <script>
        $(function () {
           const Http = window.axios;
           const Echo = windows.Echo;
           const name = $("#name"); 
           const message = $("#message");



           $("input, textarea").keyup(function() {
            $(this).removeClass('is-invalid');

        });

        $('button').click(function() {
           
            if(name.val() ==  ''){
                name.addClass('is-invalid');
            }
            else if(message.val() == '')
            {
                message.addClass('is-invalid');
            }
            else {
                Http.post("{{url('send')}}", {
                    'name':name.val(),
                    'message':message.val(),
                }).then(()=>{
                    'message'.val('');
                });
            }
            
            

        });


        let channel = Echo.channel('tugas-andre');
        channel.listen('NotifikasiPesan', function (data) {
            $('#data-message').append('<strong>$(data.message.name)</strong> : $(data.message.message) <br>')
        })

           

        });

      

    </script>

</body>
</html>