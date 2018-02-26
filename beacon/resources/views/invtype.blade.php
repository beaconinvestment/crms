<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create a Customer</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .bk{
            height: 100px;
            background-color: #0056b3;
        }
        .bk h1{
            color: white;
        }
        .bk2 h5{
            color:gray;
        }
    </style>
</head>
<body>
    <div class="container col-lg-12  bk">
        <h1 style="font-family: Georgia;">Select type of investment</h1><br/>
    </div>
    <div class="container col-lg-12 bk2" style="font-family: Georgia">
      <br>
        <br>
          <h5>Add Investment type here....</h5>
        <br>
    </div>
    <div class="container col-lg-12" style="padding-left: 200px">
       <form method="post" action="{{url('eloquent')}}">
           <form>
               <div class="form-group col-lg-5">
                   <label for="inputtype">Investment type</label>
                      <select id="inputtype" class="form-control">
                        <option selected>Choose...</option>
                        <option>1 Commertial</option>
                        <option>2 Residential</option>
                      </select>
                </div>
            </div>
        </form>
        <br>
        <div>
            <div class="btn-group btn-group-justified">
                <a href="/eloquent" class="btn btn-primary pull-right">Back</a></h3>
                <a href="/eloquent" class="btn btn-primary pull-right">Save</a></h3>
            </div>
        </div>
      </form>
    </div>
  </body>
</html>