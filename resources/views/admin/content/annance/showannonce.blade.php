@extends('admin.layouts.master')

@section('title', 'Home Page')





@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Détail de l'annonce</h4>

            </div>
        </div>

    </div>
    <!-- breadcrumb -->

    <!-- row opened -->

    <div class="row p-2">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Titre de l'annonce : {{ $annance->titre }} </h3>

                    <div class="row mb-3">
                        <!-- Image de l'entreprise -->
                        <div class="col-md-4">
                            <div class="card">
                                      <img src="{{ $annance->entreprise->image ? asset('storage/' . $annance->entreprise->image) : asset('assets/images/job-list-logo-01.png') }}"
                                     alt="Image de l'entreprise"
                                     class="card-img-top"
                                     style="max-width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>

                        <!-- Détails de l'annonce -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Employeur</h4>
                                    <p class="card-text">{{ $annance->user->name }}</p>

                                    <h4 class="card-title">Ville</h4>
                                    <p class="card-text">{{ $annance->ville }}</p>

                                    <h4 class="card-title">Description de l'annonce</h4>
                                    <p class="card-text">{!! $annance->description !!}</p>

                                    <h4 class="card-title">Date de création</h4>
                                    <p class="card-text">{{ $annance->created_at->format('d M Y H:i') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('styles')
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
    @endsection
