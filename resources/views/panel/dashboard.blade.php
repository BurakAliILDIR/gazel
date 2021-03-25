@extends('panel.layouts.app')
@section('title', 'Anasayfa')
@section('content')

    <div class="row mt-0 mt-lg-8">
		<div class="col-xl-12">
            <div class="card card-custom gutter-b">
				<div class="card-header h-auto border-0">
					<div class="card-title py-5">
						<h3 class="card-label">
							<span class="d-block text-dark font-weight-bolder">@yield('title')</span>
						</h3>
					</div>
					<div class="card-toolbar">
						<ul class="nav nav-pills nav-pills-sm nav-dark-75">
							<li class="nav-item">
                                <a href="#" class="nav-link py-2 px-4">
                                    <span class="navi-icon">
                                        <i class="flaticon2-gear"></i>
                                    </span>
                                    <span class="nav-text">Settings</span>
                                </a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">
                            {{-- İçerik--}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
