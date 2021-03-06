@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div> 

@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{session('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div> 

@endif

@if (session('update'))
    <div class="alert alert-info alert-dismissible fade show">
        {{session('update')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div> 

@endif

@if (session('warning'))
    <div class="alert alert-warning alert-dismissible fade show">
        {{session('warning')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div> 

@endif