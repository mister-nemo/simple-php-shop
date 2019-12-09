@extends('layout')

@section('content')
  <div class="row text-left">

    <aside class="col-md-3 blog-sidebar">

      <div class="p-4">
		<div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Product name" aria-label="Product name" aria-describedby="button-addon2">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg></button>
		  </div>
		</div>
        <h4 class="font-italic d-flex justify-content-between">Categories 
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
  			<button type="button" class="btn btn-secondary">Unselect</button>
		</div>
        </h4>
		<div class="form-check">
		  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
		  <label class="form-check-label" for="defaultCheck1">
		    Category name
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
		  <label class="form-check-label" for="defaultCheck2">
		    Category name
		  </label>
		</div>
      </div>
    </aside>

	<div class="col-md-9 blog-main">

	  <div class="row mb-2">
	    <div class="col-md-6">
	      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <strong class="d-inline-block mb-2 text-primary">Category name</strong>
	          <h3 class="mb-0">Product name</h3>
	          <div class="mb-1 text-muted">Price</div>
	          <p class="card-text mb-auto"></p>
	          <a href="#" class="stretched-link">View product</a>
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-6">
	      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <strong class="d-inline-block mb-2 text-success">Category name</strong>
	          <h3 class="mb-0">Product name</h3>
	          <div class="mb-1 text-muted">Price</div>
	          <p class="mb-auto"></p>
	          <a href="#" class="stretched-link">View product</a>
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
	        </div>
	      </div>
	    </div>
	  </div>

	</div>

 </div>

@stop