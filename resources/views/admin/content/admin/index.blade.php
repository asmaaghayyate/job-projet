@extends('admin.layouts.master')

@section('title', 'Users Home')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Admin</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/
                    List</span>
            </div>
        </div>

        {{-- @if(Auth::guard('admin')->user()->can('creer_admin')) --}}
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a href="{{ route('admin.create') }}" title="Create New admin" type="button"
                    class="btn btn-info btn-sm">
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>
        </div>
         {{-- @endif --}}


    </div>
    <!-- breadcrumb -->
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <!-- row opened -->
    <div class="row row-sm">

        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">


                        @php
                            $columns = ['Name', 'Email','permission'];

                            if (Auth::guard('admin')->user()->can('modifier_admin')) {
                            $columns[] = 'Modifier'; // Ajouter la colonne si la permission est présente
                        }

                        if (Auth::guard('admin')->user()->can('supprimer_admin')) {
                            $columns[] = 'Supprimer'; // Ajouter la colonne si la permission est présente
                        }
                        @endphp



                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    @foreach ($columns as $column)
                                        <th>{{ $column }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                          <td>


                                        @if($item->getAllPermissions()->isEmpty())
                                            Aucune permission attribuée.
                                        @else
                                            @foreach($item->getAllPermissions() as $index => $permission)

                                 <span class="badge badge-success">

                                    {{ $permission->name }}

                                </span>
                                 @if (($index + 1) % 4 == 0)
                                  <br><br>
                                 @endif
                                            @endforeach
                                        @endif

                                          </td>
                                          @if (Auth::guard('admin')->user()->can('modifier_admin'))
                                        <td >
                                            <a href="{{ route('admin.edit', $item) }}" class="btn btn-warning btn-sm"
                                                style="margin-right: 5px"><i class="fa-solid fa-pen "></i></a>

                                                <form id="delete-user-form-{{ $item->id }}"
                                                    action="{{ route('admin.destroy', $item->id) }}" method="POST" style="display: none;">
                                                  @csrf
                                                  @method('DELETE')
                                              </form>


                                            </td>
                                            @endif


                                            @if (Auth::guard('admin')->user()->can('supprimer_admin'))
                                        <td>
                                            <button onclick="confirmUserDelete({{ $item->id }});"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>


                                            <script>
                                                function confirmUserDelete(itemId) {
                                                    Swal.fire({
                                                        title: "Are you sure?",
                                                        text: "You won't be able to revert this!",
                                                        icon: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#3085d6",
                                                        cancelButtonColor: "#d33",
                                                        confirmButtonText: "Yes, delete it!"
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById('delete-user-form-' + itemId).submit();
                                                        }
                                                    });
                                                }
                                            </script>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $data->links() }} --}}
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
@endsection
