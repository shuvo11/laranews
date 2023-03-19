@extends('Backendlayout.app')
@section('content')



                        <div class="container">
                        <div class="card">
                            <div class="card-body">
                              
                                <h6 class="card-title mt-5"><i
                        class="me-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Table  All Category</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">PublishStatus</th>
                                                <th scope="col">Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($category as $categorys)
                                            <tr>
                                                <th scope="row">{{ $categorys->id }}</th>
                                                <td>{{ $categorys->name }}</td>
                                                <td>{{ $categorys->description }}</td>
                                                <td>{{ $categorys->published }}</td>
                                                <td> <button type="submit" class="btn btn-primary"><a href="{{ route ('edit', $categorys->id) }}">Edit</a></button><br>
                                                <button type="button" class="btn btn-danger">Delete</button> </td>
                                            </tr>
                                            @endforeach
                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
             
                         </div>




@endsection