@extends('layouts.master')

@section('title')
    About  Us Edit
@endsection


@section('content')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">    About  Us- Edit Data

                    <form action="{{ url('aboutus-update/'.$aboutus->id) }}" method="POST">
                        {{ @csrf_field() }}
                        {{ method_field('PUT') }}
        
                    <div class="modal-body">
                      
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Title:</label>
                          <input type="text" name="title" class="form-control" value="{{ $aboutus->title}}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Sub-Title:</label>
                            <input type="text" name="subtitle" class="form-control" value="{{ $aboutus->subtitle}}">
                          </div>
        
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Description</label>
                          <textarea class="form-control" name="description" rows="10" cols="5">{{ $aboutus->description}}</textarea>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <a href="{{ url('abouts') }}" class="btn btn-secondary" >Back</a>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

                </h4>
            </div>
        </div>
    </div>
</div>


@endsection




@section('scripts')
    
@endsection