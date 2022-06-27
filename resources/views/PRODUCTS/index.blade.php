@extends('products.app')
@section('content')
<div class="container jumbotron" style="margin-top: 50px">

        <div class="text-center">
            <h2>Welcome, <span style="color: navy"> {{auth()->user()->name}}! </span></h2>
        </div>

    <div class="row">
        <div class="col-md-6">
<form action=" {{ route('products.store')}} " method="post">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Title:</strong>
            <input type="text" name="name" id="" class="form-control" placeholder="title">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Description:</strong>
<textarea name="detail" class="form-control" style="height: 100px" placeholder="decription"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
        </div>
        @if ($message = Session::get ('success'))
        <div class="class alert-success">
        <p>{{$message}} </p>
        </div>
        @endif


        <div class="col-md-6">
            
            <table class="table-responsive">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                @foreach ($Products as $Product )

                <tr>
                    <td> {{ ++$i}} </td>
                    <td> {{ $Product->name}} </td>
                    <td> {{ $Product->detail}} </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg"   data-toggle="modal" data-target="#modelId{{$Product->id}}">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                    </td>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId{{$Product->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action=" {{ route('products.store')}} " method="post">
                                            @csrf
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong> Title:</strong>
                                                    <input type="text" name="name" id="" value="{{$Product->name}}" class="form-control" placeholder="title">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong> Description:</strong>
                                        <textarea name="detail" class="form-control" style="height: 100px" placeholder="decription" >
                                            {{$Product->detail}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
             <!-- Delete loop -->
                    <td>
             <button type="button" class="btn btn-primary btn-lg" style="background-color: rgb(131, 42, 42)" data-toggle="modal" data-target="#deleteModal{{$Product->id}}">
             <i class="fa fa-trash" aria-hidden="true"></i>
             </button>

             <!-- Modal -->
             <div class="modal fade" id="deleteModal{{$Product->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title">Modal title</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                         </div>
                         <div class="modal-body">
                            You cannot undo this action. Do you want to proceed?
                         </div>
                         <div class="modal-footer text-center mx-auto">
                             <form action=" {{route('products.destroy', $Product->id)}}" method="post">
                                @csrf

                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                             <button type="submit" class="btn btn-primary">Yes</button>
                            </form>
                         </div>
                     </div>
                 </div>
             </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{$Products->render()}}
</div>
@endsection

