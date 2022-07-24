<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Login</title>
            <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- Styles -->

        <style>
            *{
                margin:0 auto;
            }
            .flex-container{
                position: absolute;
                display:block;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                width:100%;
                height:100%;
                justify-content:center;
                align-items:center;

            }
        </style>
     
</head>
<body>
   <div class="container">
    <div class="row" style="margin-top:45px;">
        <div class="col-md-4 col-md-offset-4">
            <h3> Agent Registration</h3>
        <form action="{{route('auth.create')}}" method="post">
            @csrf
           @if(Session::get('success'))
           <div class="alert alert-success">
            {{Session::get('success')}}
           </div>
           @endif
           @if(Session::get('error'))
           <div class="alert alert-danger">
            {{Session::get('error')}}
           </div>
           @endif
            <div class="form-group">

                <label for="agentName">AgentID</label>
                <input type="text" class="form-control" name="agentName" value="{{old('agentName')}}" id="agentId" placeholder="Agent Name">
                <span class="text-danger">@error('agentName'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="agentId">AgentID</label>
                <input type="number" class="form-control" name="agent_id" value="{{substr(uniqid(rand(), true), 4, 4)}}" {{ 'agent_id' ? '' : 'disabled' }} id="agentId" placeholder="Agent ID">
                <span class="text-danger">@error('agent_id'){{$message}} @enderror</span>
            </div>

            <div class="form-group">
                <label for="agent_pin">AgentPin</label>
                <input type="text" class="form-control" name="agent_pin" {{ 'agent_pin' ? '' : 'disabled' }} value="{{substr(uniqid(rand(), true), 4, 4)}}" id="agent_pin" placeholder="Agent Pin">
                <span class="text-danger">@error('agent_pin'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
           <button type="submit"  class="btn btn-primary btn-block">Register Agent</button>
           <!-- <span class="text-danger">@error('name'){{$message}} @enderror</span> -->
            </div>
            <br>
            <a href="{{route('agentLogin')}}">Already have an account</a>
        </form>
        </div>
    </div>

  
   </div>
</body>
</html>

