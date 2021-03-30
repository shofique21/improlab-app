<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Improlab </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customers.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                   Create Customer </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="box-body">
        <div class="box-header with-border" style="background-color: #0ab3b3;">
            <h3 class="box-title" style="color:#fff">Customer List</h3><br>
        </div>
    </div>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Status</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->fullName }}</td>
                <td>{{ $customer->mobile_no }}</td>
                <td>{{ $customer->user_email }}</td>
                <td>{{ $customer->status }}</td>
                <td> <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-xs btn-info" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i> View
                        </a></td>
                <td>
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-xs btn-success" style="display:block;float:left;margin-right:10px;" >
                            <i class="fas fa-edit  fa-lg"></i>
                            Edit
                        </a>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit"  class="btn btn-xs btn-danger" title="delete">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</x-app-layout>