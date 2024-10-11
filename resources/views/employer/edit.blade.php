@extends('./layouts/master')
@section('content')
<div class="app-wrapper mt-5">
    <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl">
        <h1 class="app-page-title">Employer</h1>
        <div class="row g-4 settings-section">
          <div class="col-12 col-md-4">
            
            <div class="section-intro">
              Enregistrer ici de nouveau Employer 
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
              <div class="app-card-body">
                <form class="settings-form" method="POST" action="{{route('employer_update',$employer->id)}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="setting-input-1" class="form-label"
                      >Departement<span
                        class="ms-2"
                        data-container="body"
                        data-bs-toggle="popover"
                        data-trigger="hover"
                        data-placement="top"
                     
                        ></span
                    ></label>
                    <select name="departement" id="departement_id" class="form-control">
                      {{-- @foreach ($departement as $departement)
                          <option value="{{$departement->id}} {{$employer->departement->id==$departement->id ? 'selected':''}}">{{$departement->name}}</option>
                      @endforeach --}}
                      @foreach ($departement as $departement)
                      <option value="{{$departement->id}}" {{$employer->departement->id==$departement->id ? 'selected':''}}>{{$departement->name}}</option>
                      @endforeach
                   
                  </select>
                    </select>
                    @error('departement')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                    </div>
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
                      value="{{$employer->nom}}"
                    />
                   
                  </div>
                  <div class="mb-3">
                    <label for="setting-input-1" class="form-label"
                      >Prenom<span
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
                      name="prenom"
                      value="{{$employer->prenom}}"
                    />
                  
                  </div>
                  <div class="mb-3">
                    <label for="setting-input-1" class="form-label"
                      >Email<span
                        class="ms-2"
                        data-container="body"
                        data-bs-toggle="popover"
                        data-trigger="hover"
                        data-placement="top"
                        data-content="This is a Bootstrap popover example. You can use popover to provide extra info."
                        ></span
                    ></label>
                    <input
                      type="econtactmail"
                      class="form-control"
                      id="setting-input-1"
                      name="email"
                      value="{{$employer->email}}"
                    />
                   
                  </div>
                  <div class="mb-3">
                    <label for="setting-input-1" class="form-label"
                      >Contact<span
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
                      name="contact"
                      value="{{$employer->contact}}"
                    />
                  
                  </div>
                  {{-- <div class="mb-3">
                    <label for="setting-input-1" class="form-label"
                      >Montant_journalier<span
                        class="ms-2"
                        data-container="body"
                        data-bs-toggle="popover"
                        data-trigger="hover"
                        data-placement="top"
                        data-content="This is a Bootstrap popover example. You can use popover to provide extra info."
                        ></span
                    ></label>
                    <input
                      type="number"
                      class="form-control"
                      id="setting-input-1"
                      name="montant_journalier"
                      value="{{old('montant_journalier')}}"
                    />
                    @error('montant_journalier')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div> --}}
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