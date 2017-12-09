@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="container">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             {{$error}}
        </div>
    </div>    
    @endforeach
@endif

@if(session('success'))
    <div class="container">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{session('success')}}     
        </div>
    </div>  
@endif

@if(session('error'))
<div class="container">
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {{session('error')}}  
    </div>
</div>
@endif