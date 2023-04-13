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
                                                <th scope="col">Slug Description</th>
                                                <th scope="col">PublishStatus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($category as $categorys)
                                            <tr>
                                                <th scope="row">{{ $categorys->id }}</th>
                                                <td>{{ $categorys->name }}</td>
                                                <td>{{ $categorys->description }}</td>
                                                <td>{{ $categorys->published }}
                                                <div>
                

                                                @if($categorys->published == 1)

                                                <span class="badge badge-success">Published</span>
                                                    @else
                                                        <span class="badge badge-danger">Unpublished</span>
                                                    @endif
                                                </div>

                                             </td>





                                             <td>
                                                    @if($categorys->published == 1)
                                              
                                                       
                                                        <a href="{{ route ('Category.publish', $categorys->id) }}"><button type="submit" class="btn btn-sm btn-success">publish</button></a>
                                                  
                                                    @else
                                                 
                                                            
                                                    <a href="{{ route ('Category.unpublish', $categorys->id) }}"><button type="submit" class="btn btn-sm btn-danger">unpublish</button></a>
                                                  
                                                            @endif
                                                    </td>
          

 
                                                </td>
                                                <td> <a type="submit" class="btn btn-primary" href="{{ route ('edit', $categorys->id) }}">Edit</a><br>
                                                <a type="button" class="btn btn-danger" href="{{ route ('destroy', $categorys->id) }}">Delete</a> </td>
                                            </tr>
                                            @endforeach
                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
             
                         </div>


                         <script>



@endsection