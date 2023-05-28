@extends('Backendlayout.app')
@section('content')


<div class="container">
    <h1>Create Category</h1>
    <hr>

    <form action="{{ route ('store') }}" method="POST">
        @csrf

         <div class="col-md-6">
         <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Category Name">
        </div>
         </div>                                                         
         <div class="col-md-6">
      
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
  </div>

         <div class="col-md-6">  

         <div class="form-group">
            <label for="published">Published</label>
            <select class="form-control" id="published" name="published" required placeholder="col-md-6">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
         </div>
        <button type="submit" class="btn btn-primary">Submit</button>

         </div>
  
        
    </form>




 















</div>





@endsection





