@extends('admin.layouts.master')

@section('title', 'Edite Admin')


@section('content')
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Modfier Admin
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.update' , $admin) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row row-sm">
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                <label class="form-label">name: <span class="tx-danger">*</span></label>
                                <input class="form-control" name="name" placeholder="Enter admin name" required=""
                                    value="{{ old('name', $admin->name) }}" type="text" />
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                <label class="form-label">email: <span class="tx-danger">*</span></label>
                                <input class="form-control" name="email" placeholder="Enter admin email" required
                                    value="{{ old('email', $admin->email) }}" type="email" />
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Password: </label>
                                <div class="input-group">
                                    <input class="form-control" name="password" placeholder="Enter admin password"
                                        value="{{ old('password') }}" type="password" id="passwordField" />
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="fas fa-eye" id="toggleIcon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group mg-b-0">
                                <label class="form-label">Permissions : <span class="tx-danger">*</span></label>

                                <div class="permissions-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="delete-user" name="permissions[]" value="supprimer_utilisateur" @if($admin->hasPermissionTo('supprimer_utilisateur')) checked @endif >
                                        <label class="form-check-label" for="delete-user">Supprimer Utilisateur</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="block-user" name="permissions[]" value="bloquer_utilisateur" @if($admin->hasPermissionTo('bloquer_utilisateur')) checked @endif >
                                        <label class="form-check-label" for="block-user">Bloquer Utilisateur</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="delete-annonce" name="permissions[]" value="supprimer_annonce"  @if($admin->hasPermissionTo('supprimer_annonce')) checked @endif>
                                        <label class="form-check-label" for="delete-annonce">Supprimer Annonce</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="block-annonce" name="permissions[]" value="bloquer_annonce" @if($admin->hasPermissionTo('bloquer_annonce')) checked @endif>
                                        <label class="form-check-label" for="block-annonce">Bloquer Annonce</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="change-annonce-state" name="permissions[]" value="changer_etat_annonce" @if($admin->hasPermissionTo('changer_etat_annonce')) checked @endif>
                                        <label class="form-check-label" for="change-annonce-state">Changer État Annonce</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="create-admin" name="permissions[]" value="creer_admin" @if($admin->hasPermissionTo('creer_admin')) checked @endif>
                                        <label class="form-check-label" for="create-admin">Créer Admin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="delete-admin" name="permissions[]" value="supprimer_admin" @if($admin->hasPermissionTo('supprimer_admin')) checked @endif>
                                        <label class="form-check-label" for="delete-admin">Supprimer Admin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="edit-admin" name="permissions[]" value="modifier_admin" @if($admin->hasPermissionTo('modifier_admin')) checked @endif>
                                        <label class="form-check-label" for="edit-admin">Modifier Admin</label>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <script>
                            const togglePassword = document.querySelector('#togglePassword');
                            const passwordField = document.querySelector('#passwordField');
                            const toggleIcon = document.querySelector('#toggleIcon');

                            togglePassword.addEventListener('click', function(e) {
                                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                                passwordField.setAttribute('type', type);
                                toggleIcon.classList.toggle('fa-eye-slash');
                            });
                        </script>




                        <div class="col-12">
                            <button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">
                                Modifier
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
