@extends('./layouts/master')
@section('content')
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
        <h1 class="app-page-title">Departement</h1>
        <div class="row g-4 settings-section">
          <div class="col-12 col-md-4">
            <h3 class="section-title">Departement</h3>
            <div class="section-intro">
              Ajout ici de nouveau departement 
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
              <div class="app-card-body">
                <form class="settings-form" method="POST" action="{{route('departement_store')}}">
                    @csrf
                  <div class="mb-3">
                    <label for="setting-input-1" class="form-label"
                      >Nom<span
                        class="ms-2"
                        data-container="body"
                        data-bs-toggle="popover"
                        data-trigger="hover"
                        data-placement="top"
                        data-content="This is a Bootstrap popover example. You can use popover to provide extra info."
                        ></span
                    ></label>
                    <input
                      type="text"
                      class="form-control"
                      id="setting-input-1"
                      name="name"
                      value="{{old('name')}}"
                    />
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  
                  
                  <button type="submit" class="btn btn-success">
                    Enregistrer
                  </button>
                </form>
              </div>
              <!--//app-card-body-->
            </div>
            <!--//app-card-->
          </div>
        </div>
        <!--//row-->
       
      <!--//container-fluid-->
    </div>
    <!--//app-content-->

    {{-- <footer class="app-footer">
      <div class="container text-center py-3">
        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"
          >Designed with <span class="sr-only">love</span
          ><i class="fas fa-heart" style="color: #fb866a"></i> by
          <a
            class="app-link"
            href="http://themes.3rdwavemedia.com"
            target="_blank"
            >Xiaoying Riley</a
          >
          for developers</small
        >
      </div>
    </footer> --}}
    <!--//app-footer-->
  </div>
@endsection