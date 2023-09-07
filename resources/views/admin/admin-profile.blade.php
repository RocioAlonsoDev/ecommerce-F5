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
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
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
                <h6 class="card-title">Editar Perfil</h6>

                <form class="forms-sample" method='POST' action='{{route("admin.profile.update")}}'>
                @csrf
                <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name='name' id="exampleInputUsername1" autocomplete="off" value="{{$profileData->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name='surname' id="exampleInputUsername1" autocomplete="off" value="{{$profileData->surname}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name='email' id="exampleInputUsername1" autocomplete="off" value="{{$profileData->email}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
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