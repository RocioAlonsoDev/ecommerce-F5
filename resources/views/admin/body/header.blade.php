<nav class="navbar">
	<a href="#" class="sidebar-toggler">
		<i data-feather="menu"></i>
	</a>
	<div class="navbar-content">
		<ul class="navbar-nav">
			@php
			$id = Auth::user()->id;
			$data = App\Models\User::find($id);

			@endphp
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img class="wd-30 ht-30 rounded-circle" src="{{asset('../assets/images/others/user-icon.png')}}" alt="profile">
				</a>
				<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
					<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
						<div class="text-center">
							<p class="tx-16 fw-bolder">{{(!empty($data->name))||(!empty($data->surname)) ? ($data->name).' '.($data->surname) : 'Error' }}</p>
							<p class="tx-12 text-muted">{{(!empty($data->email)) ? ($data->email) : 'Error' }}</p>
						</div>
					</div>
					<ul class="list-unstyled p-1">
					<li class="dropdown-item py-2">
						<a href="{{route('admin.profile')}}" class="text-body ms-0">
						<i class="me-2 icon-md" data-feather="user"></i>
						<span>Perfil</span>
						</a>
					</li>
					<li class="dropdown-item py-2">
						<a href="{{route('admin.password.change')}}" class="text-body ms-0">
						<i class="me-2 icon-md" data-feather="edit"></i>
						<span>Contraseña</span>
						</a>
					</li>
					<li class="dropdown-item py-2">
						<a href="{{route('admin.logout')}}" class="text-body ms-0">
						<i class="me-2 icon-md" data-feather="log-out"></i>
						<span>Cerrar sesión</span>
						</a>
					</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</nav>