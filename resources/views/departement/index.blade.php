@extends('./layouts/master')
@section('content')
<div class="app-wrapper mt-5">
	    
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Departements</h1>
                </div>
                <div class="col-auto">
                     <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>
                                
                            </div><!--//col-->
                            
                            <div class="col-auto">						    
                                <a class="btn app-btn-secondary" href="{{route('create')}}">
                                    
                                    Ajouter un departement
                                </a>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->
           
            @if (session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif
            <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Tous les departements</a>
                
            </nav>
            
            
            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">id</th>
                                            <th class="cell">Nom</th>
                                            <th class="cell text-center">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($departements as $departement)
                                        <tr>
                                            <td class="cell">{{$departement->id}}</td>
                                            <td class="cell"><span class="truncate">{{$departement->name}}</span></td>
                                            <td class="cell text-center"><a class="btn-sm app-btn-secondary " href="{{route('edit',$departement->id)}}">Editer</a>
                                                <a class="btn-sm app-btn-secondary" href="{{route('delete',$departement->id)}}">Supprimer</a>
                                            </td>
                                        </tr>
                                        @empty
                                           <td colspan="4">Aucun Departement Ajouter</td> 
                                        @endforelse
                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->
                           
                        </div><!--//app-card-body-->		
                    </div><!--//app-card-->
                    <nav class="app-pagination">
                        {{$departements->links()}}
                    </nav><!--//app-pagination-->
                    
                </div><!--//tab-pane-->
                
                <!--//tab-pane-->
                
                <!--//tab-pane-->
                <!--//tab-pane-->
            </div><!--//tab-content-->
            
            
            
        </div><!--//container-fluid-->
    </div><!--//app-content-->
    
    <footer class="app-footer">
        <div class="container text-center py-3">
             <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
           
        </div>
    </footer><!--//app-footer-->
    
</div>
@endsection