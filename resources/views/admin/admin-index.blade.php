@extends('admin.admin-dashboard')
@section('admin')
<div class="page-content">
	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Administradores</h6>
                    <button type="button" class="btn btn-outline-primary">Agregar Nuevo Admin</button>
                    <div class="table-responsive">
                        <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <table id="dataTableExample" class="table dataTable no-footer" aria-describedby="dataTableExample_info">
                                <thead>
                                <tr>
                                    <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 114.453px;">Nombre</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 187.781px;">Apellido</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 82.3594px;">Correo electrónico</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="2" style="width: 50.625px;">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td class="sorting_1">Admin</td>
                                        <td>Test</td>
                                        <td>admin@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-icon">
                                                <i data-feather="delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- <tr class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>$86,000</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection