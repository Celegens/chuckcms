@extends('chuckcms::templates.' . $template->slug . '.layouts.boarder')

@section('title')
	Pages
@endsection

@section('add_record')
	<a href="{{ route('dashboard.page.create') }}" class="btn btn-link text-primary m-l-20 hidden-md-down">Voege Nieuwe Pagina Toe</a>
@endsection

@section('css')
	<link href="{{ URL::to('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/plugins/datatables-responsive/css/datatables.responsive.css') }}" rel="stylesheet" type="text/css" media="screen" />
@endsection

@section('scripts')
	<script src="{{ URL::to('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/tables.js') }}" type="text/javascript"></script>
@endsection

@section('content')
<div class=" container-fluid   container-fixed-lg">
    <div class="row">
		<div class="col-lg-12">
		<!-- START card -->
			<div class="card card-transparent">
				<div class="card-header ">
					<div class="card-title">Paginas</div>
					<div class="tools">
						<a class="collapse" href="javascript:;"></a>
						<a class="config" data-toggle="modal" href="#grid-config"></a>
						<a class="reload" href="javascript:;"></a>
						<a class="remove" href="javascript:;"></a>
					</div>
				</div>
				<div class="card-block">
					<div class="table-responsive">
						<table class="table table-hover table-condensed" id="condensedTable">
						<thead>
							<tr>
								<th style="width:10%">ID</th>
								<th style="width:30%">Page</th>
								<th style="width:30%">Status</th>
								<th style="width:30%">Actions</th>
							</tr>
						</thead>
							<tbody>
								@foreach($pages as $page)
								<tr>
									<td class="v-align-middle">{{ $page->id }}</td>
							    	<td class="v-align-middle semi-bold">{{ $page->title }}</td>
							    	<td class="v-align-middle">
							    		@if($page->active == 1)
											Actief
							        	@else
							        		Concept
							        	@endif 
							    	</td>
							    	<td class="v-align-middle semi-bold">
							    		<a href="{{ route('dashboard.page.edit', ['page_id' => $page->id]) }}" class="btn btn-default btn-sm btn-rounded m-r-20">
							    			<i data-feather="edit-2"></i> edit
							    		</a>
							    		<a href="{{ route('dashboard.page.edit.pagebuilder', ['page_id' => $page->id]) }}" class="btn btn-default btn-sm btn-rounded m-r-20">
							    			<i data-feather="edit"></i> builder
							    		</a>
							    	</td>
							  	</tr>
							  	@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<!-- END card -->
		</div>
    </div>
</div>
@endsection