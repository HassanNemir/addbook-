@extends('layouts.addBook')
@section('sub')
    Add New Record
    @endsection
@section('content')
    <div class="container">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">
                        <form class="form-horizontal" role="form" action="" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                               <label for="name" class="col-sm-2" control-label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Name" required/>

                            </div>
                            <div class="form-group">

                                <label for="name" class="col-sm-2" control-label>Phone Number</label>
                                <input class="form-control" type="text" name="number" placeholder="Enter phone number" required/>
                            </div>
                            <div class="form-group">

                                <label for="name" class="col-sm-2" control-label>Address</label>
                                <input class="form-control" type="text" name="address" placeholder="Enter address" required/>
                            </div>
                            <div class="form-group">
                            <input type="submit" value="Submit">
                            </div>



                        </form>
                </div>
            </div>
    </div>
@endsection