@if(Session::has('success'))
    <div class="alert alert-success alert-rounded">
        <strong><h5 class="text-success"><i class="fa fa-check-circle"></i> Success</h5></strong>
        {{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif

@if(Session::has('info'))
    <div class="alert alert-info alert-rounded">  
        {{ Session::get('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning alert-rounded">  
        {{ Session::get('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif

@if(Session::has('danger'))
    <div class="alert alert-danger alert-rounded">  
        {{ Session::get('danger') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif