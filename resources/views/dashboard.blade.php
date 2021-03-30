<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="row">
               <div class="col">      
                    <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5"><a href="{{ url('customers') }}">Customer List</a></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left"> 5 customers <br/></span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                    </a>
                </div>
        </div>
        <div class="col">  
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><a href="{{ url('customers/create') }}">Customer Create</a></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"></span>
              <span class="float-right"><a href="{{ url('customers') }}">Update List</a>
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
        </div>
        </div>

                
                 
            </div>
        </div>
    </div>
</x-app-layout>
