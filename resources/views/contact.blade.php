<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
    <title>Contact Form</title>
</head>
<body>
    <style>
        body {
            background-color: #456;
        }
    </style>
    <div class="container">
    <section style="padding-top: 60px;">
    <div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3">
    <div class="card">
      <div class="card-header">
      <h1>Contact Form</h1>
       <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
         @csrf
         @if ($message = Session::get('msg'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif   
         <div class="form-group">
           <label for="name">Name</label>
           <input type="text" name="name" class="form-control">
         </div> 
         <div class="form-group">
           <label for="email">Email</label>
           <input type="email" name="email" class="form-control">
         </div> 
         <div class="form-group">
           <label for="name">Phone</label>
           <input type="text" name="phone" class="form-control">
         </div> 
         <div class="form-group">
           <label for="msg">File</label>
           <input type="file" name="file" class="form-control">
         </div> 
         <button class="btn btn-success">Submit</button>
       </form>
      </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
</body>
</html>