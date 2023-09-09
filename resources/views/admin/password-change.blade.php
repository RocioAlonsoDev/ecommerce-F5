@extends('admin.admin-dashboard')
@section('admin')
<div class="page-content">

        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-block col-12 col-md-4 col-xl-3 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h6 class="card-title mb-0">Perfil</h6>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Nombre:</label>
                  <p class="text-muted">
                    {{
                        (!empty($profileData->name))||(!empty($profileData->surname)) ? ($profileData->name).' '.($profileData->surname) : 'No se puede obtener esta información ahora mismo.' 
                    }}
                    </p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Correo electrónico:</label>
                  <p class="text-muted">
                    {{
                        (!empty($profileData->email)) ? ($profileData->email) : 'No se puede obtener esta información ahora mismo.' 
                    }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-6 middle-wrapper pt-3 pt-md-0">
            <div class="row">
              <div class="col-md-12 grid-margin">
              <div class="card">
              <div class="card-body">
                <h6 class="card-title">Cambiar contraseña</h6>

                <form class="forms-sample" method='POST' action='{{route("admin.password.update")}}'>
                @csrf
                    <div class="mb-3">
                        <label for="old_password" class="form-label">Contraseña actual</label>
                        <input type="password" class="form-control @error('old_password') is-invalid @enderror" name='old_password' id="old_password" autocomplete="off">
                        @error('old_password')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Nueva contraseña</label>
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" name='new_password' id="new_password" autocomplete="off">
                        @error('new_password')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Repite tu nueva contraseña</label>
                        <input type="password" class="form-control" name='new_password_confirmation' id="new_password_confirmation" autocomplete="off"> 
                    </div>                    
                    <button type="submit" class="btn btn-primary me-2">Actualizar</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- middle wrapper end -->     
</div>
</div>
@endsection