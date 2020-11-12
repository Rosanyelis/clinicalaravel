<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('layouts.includes.head')
</head>

    <body class="skin-megna fixed-layout">

        @include('layouts.includes.loader')
        
        <div id="main-wrapper">
            
            @include('layouts.includes.header')
            
            @include('layouts.includes.aside')
            
            <div class="page-wrapper">
                
                <div class="container-fluid">
                    
                    @yield('content')
                    {{-- <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h4 class="text-themecolor">Dashboard</h4>
                        </div>
                        <div class="col-md-7 align-self-center text-right">
                            <div class="d-flex justify-content-end align-items-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                                <button type="button" class="btn btn-info d-none d-lg-block m-l-15">
                                    <i class="fa fa-plus-circle"></i> Create New
                                </button> 
                            </div>
                        </div>
                    </div> --}}
                    
                    {{-- <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    This is some text within a card block.
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>
               
            </div>
            
            
            @include('layouts.includes.footer')
        </div>
      

        @include('layouts.includes.scripts')
    </body>

</html>