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
              Modifier ici un departement 
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
              <div class="app-card-body">
                <form class="settings-form" method="POST" action="{{route('update',$departement->id)}}">
                    @csrf
                    @method('put')
                  <div class="mb-3">
                    <label for="setting-input-1" class="form-label"
                      >Nom<span
                        class="ms-2"
                        data-container="body"
                        data-bs-toggle="popover"
                        data-trigger="hover"
                        data-placement="top"
                        data-content="This is a Bootstrap popover example. You can use popover to provide extra info."
                        ><svg
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          class="bi bi-info-circle"
                          fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                          />
                          <path
                            d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"
                          />
                          <circle cx="8" cy="4.5" r="1" /></svg></span
                    ></label>
                    <input
                      type="text"
                      class="form-control"
                      id="setting-input-1"
                      name="name"
                      value="{{$departement->name}}"
                    />
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  
                  
                  <button type="submit" class="btn btn-warning">
                    Modifier
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