@extends('chuckcms::backend.layouts.admin')

@section('content')
<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">

<!-- START card -->
<form action="{{ route('dashboard.page.save') }}" method="POST">
<div class="card card-transparent">
  <div class="card-header ">
    <div class="card-title">Bewerk pagina "{{ $page->title }}"
    </div>
  </div>
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">
		{{-- <h5>Fade effect</h5> Add the class
        <code>fade</code> to the tab panes
        <br>
        <br> --}}
        <div class="card card-transparent">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
            <li class="nav-item">
              <a href="#" class="active" data-toggle="tab" data-target="#fade1"><span>Pagina</span></a>
            </li>
            <li class="nav-item">
              <a href="#" data-toggle="tab" data-target="#fade2"><span>SEO</span></a>
            </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="fade1">
              <div class="row column-seperation">
                <div class="col-lg-12">
                      <div class="form-group form-group-default required ">
                        <label>Titel</label>
                        <input type="text" class="form-control" placeholder="Titel" id="page_title" name="page_title" value="{{ $page->title }}" required>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Slug</label>
                        <input type="text" class="form-control" placeholder="Titel" id="page_slug" name="slug" value="{{ $page->slug }}" required>
                        <input type="hidden" class="form-control" value="{{ $page->slug }}" id="page_slug_hidden" name="page_slug">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Template</label>
                        <select class="full-width" data-init-plugin="select2" name="template_id">
							@foreach($templates as $tmpl)
								<option value="{{ $tmpl->id }}" @if($tmpl->id == $page->template_id) selected @endif>{{ $tmpl->name }} (v{{ $tmpl->version }})</option>
							@endforeach
						</select>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Actief</label>
                        <select class="full-width" data-init-plugin="select2" name="active">
							<option value="1" @if($page->active == 1) selected @endif>Actief</option>
							<option value="0" @if($page->active == 0) selected @endif>Concept</option>
						</select>
                      </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="fade2">
              <div class="row">
                <div class="col-lg-12">
                      <div class="form-group form-group-default required ">
                        <label>Meta Titel</label>
                        <input type="text" class="form-control" placeholder="Meta Titel" id="meta_title" name="title" value="{{ $page->title }}" required>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Meta Beschrijving</label>
                        <textarea id="meta_description" name="meta_description" placeholder="Meta Beschrijving" style="height:105px;" class="form-control" required>{{ $page->meta_description }}</textarea>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Meta Sleutelwoorden</label>
                        <textarea id="meta_keywords" name="meta_keywords" placeholder="Meta Sleutelwoorden" style="height:105px;" class="form-control" required>{{ $page->meta_keywords }}</textarea>
                      </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <p class="pull-right">
            <input type="hidden" name="page_id" value="{{ $page->id }}">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <button type="submit" name="update" class="btn btn-success btn-cons pull-right" value="1">Opslaan</button>
            <a type="button" href="{{ route('dashboard.pages') }}" class="btn btn-default btn-cons pull-right">Annuleren</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END card -->
</form>
</div>
<!-- END CONTAINER FLUID -->


@endsection

@section('css')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script>
		$( document ).ready(function() { 
			$("#page_title").keyup(function(){
			    var text = $(this).val();
			    slug_text = text.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');
			    $("#page_slug").val(slug_text);
          $("#page_slug_hidden").val(slug_text);  
			});

			$(".selectable").select2();

		});
	</script>
@endsection