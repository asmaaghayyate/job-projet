@extends('admin.layouts.master')

@section('title', 'Home Page')


@section('content')


@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Annances</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/
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
         $columns = ['Employeur', 'Entreprise', 'Titre','Date' ,'Description','Ville', 'Categorie', 'etat',"Changer l'état",'Action'];
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
                                @foreach ($lesannances as $item)
                                    <tr>
                                        <td>{{ $item->user?->name }}</td>
                                        <td>{{ $item->entreprise?->name }}</td>
                                        <td>{{ $item->titre }}</td>
                                         <td>{{ $item->created_at }}</td>
                                        <td>{!! Str::limit($item->description, 25, '...')  !!}</td>
                                        <td>{{ $item->ville }}</td>
                                        <td>{{ $item->categorie }}</td>

                                        <td style="">
                                            <span class="badge badge-{{ \App\Enums\EtatEnum::getColor($item->etat) }}">
                                                         {{ $item->etat }}
                                            </span>
                                        </td>


                                        <td class="d-flex">
                                            <form action="{{route('updatetat',$item->id)}}" method="POST">
                                                @csrf
                                                <div class="form-group">

                                                    <select name="etat" id="etat" class="form-control">
                                                        <option value="publiée" {{ $item->etat === 'publiée' ? 'selected' : '' }}>Publiée</option>
                                                        <option value="en attente" {{ $item->etat === 'en attente' ? 'selected' : '' }}>En attente</option>
                                                        <option value="fermée" {{ $item->etat === 'fermée' ? 'selected' : '' }}>Fermée</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm">Modifier</button>
                                            </form>


                                        </td>
                                        <td> <a href="" class="btn btn-warning btn-sm"
                                            style="margin-right: 5px"><i class="fa-solid fa-eye "></i></a>
                                        </td>


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


@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
@endsection