@extends('layouts.master')

@section('title')
    Registered Role
@endsection




@section('content')





<div class="row">





    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">     Registered Role
                </h4>
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
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>


                            <th>
                                Phone 
                            </th>
                            <th>
                                Usertype
                            </th>
                           
                            <th class="text-right">
                                Edit
                            </th>
                            <th>
                                <th class="text">
                                Delete
                            </th>
                        </thead>
                        <tbody>
                            @if($users)
                            @foreach($users as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>

                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>

                                    <td>{{ $row->phone }}</td>
                                    <td>-{{ $row->usertype }}</td>
                                    <td class="text-right">



                                        <a href="/role-edit/{{  $row->id   }}" class="btn btn-success">EDIT</a>
                                    </td>
                                    <td class="text-right">
                                        <form action="/role-delete/{{  $row->id   }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        <input type="hidden" name=id value="">
                                        <button  type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">No users found</td>
                            </tr>
                        @endif

                        </tbody>
                    </table>




                </div>

    </div>
</div>

</div>


    
@endsection




@section('scripts')
    
@endsection