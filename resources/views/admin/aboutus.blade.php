@extends('layouts.master')

@section('title')
    About  Us
@endsection




@section('content')





<div class="row">


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fs-5" id="exampleModalLabel">Add About Us</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
             
            </div>
            <form action="/save-aboutus" method="POST">
                {{ @csrf_field() }}

            <div class="modal-body">
              
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Title:</label>
                  <input type="text" name="title" class="form-control" id="recipient-name">
                </div>
                
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Sub-Title:</label>
                    <input type="text" name="subtitle" class="form-control" id="recipient-name">
                  </div>

                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Description</label>
                  <textarea class="form-control" name="description" id="message-text"></textarea>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      



    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> About Us</h4>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>  Id</th>
                            <th> Title </th>
                            <th>  SubTitle</th>
                            <th >Description </th>

                            <th>  EDIT</th>
                            <th>  DELETE</th>
                        </thead>
                        <tbody>
                            @foreach ($aboutus as  $data)
                                



                            <tr>
                                <td> {{ $data->id}}</td>
                               <td>{{  $data->title}}</td>
                                <td > {{ $data->subtitle }}</td>
                                <td> {{ $data->description }}</td>
                                <td>  <a href="{{ url('about-us/'.$data->id) }}"class="btn btn-success">EDIT</a>
                                </td>
                                <td>

                                <form action="{{ url('about-us-delete/'.$data->id) }}" method="POST">
                                    {{ @csrf_field() }}
                                    {{ method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>

                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
    </div>
</div>
</div>
</div>




    
@endsection




@section('scripts')
    
@endsection