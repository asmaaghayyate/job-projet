@extends('admin.layouts.master')

@section('title', 'Home Page')


@section('content')


@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Utilisateurs</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/
                    List</span>
            </div>
        </div>

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
         $columns = ['Nom', 'Email', 'Phone','Sexe' ,'cv ','Niveau d\'etude','Annees d\'experiences'];

                   if (Auth::guard('admin')->user()->can('supprimer_utilisateur')) {
                            $columns[] = 'Supprimer'; // Ajouter la colonne si la permission est présente
                        }// Toujours afficher la colonne Action
                        if (Auth::guard('admin')->user()->can('bloquer_utilisateur')) {
                            $columns[] = 'Bloquer'; // Ajouter la colonne si la permission est présente
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
                                @foreach ($lesutilisateurs as $item)

                                <tr class="{{ $item->is_blocked ? 'custom-warning' : '' }}">

                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                         <td>{{ $item->sexe }}</td>
                                        <td>
                           <a href="{{ asset('storage/' .$item->cv) }}" target="_blank">

                                   {{ Str::limit($item->cv, 15, '...')}}


                                            </a>
                                        </td>
                                        <td>{{ $item->niveau_etude }}</td>
                                        <td>{{ $item->annees_experiences }}</td>

                         @if(Auth::guard('admin')->user()->can('supprimer_utilisateur'))
                                       <td style="text-align: center">



                                        <form id="delete-user-form-{{ $item->id }}"
                                            action="{{ route('admin.utilisateur.destroy', $item) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>


                                        <button onclick="confirmUserDelete({{ $item->id }});"
                                            class="btn btn-danger btn-sm"><i class="fa-solid fa-trash" ></i></button>

                                        <script>
                                            function confirmUserDelete(itemId) {
                                                Swal.fire({
                                                    title: "Es-tu sûr?",
                                                    text: "Vous ne pourrez pas revenir en arrière!",
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#3085d6",
                                                    cancelButtonColor: "#d33",
                                                    confirmButtonText: "Oui, supprime-le!"
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        document.getElementById('delete-user-form-' +itemId).submit();
                                                    }
                                                });
                                            }
                                        </script>
                                       </td>
                                         @endif

                                @if(Auth::guard('admin')->user()->can('bloquer_utilisateur'))
                                <td>
                                <form action="{{ route('admin.utilisateur.toggle-blockd', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn {{ $item->is_blocked ? 'btn-warning' : 'btn-success' }} btn-sm"
                                        style="margin-left:20%">
                                        {{ $item->is_blocked ? 'Débloquer' : 'Bloquer' }}
                                    </button>
                                </form>
                                </td>
                                @endif
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="pagination-container">
                            {{ $lesutilisateurs->links() }}
                        </div>


                    </div>
                    {{-- {{ $data->links() }} --}}
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
@endsection


@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
@endsection
