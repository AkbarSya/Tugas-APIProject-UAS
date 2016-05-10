@extends('app')
@section('content') 
<section class="main-content">
   <div class="content-wrap">
      <div class="wrapper">
         <div class="row">
            <div class="col-md-12">
               <section class="panel no-b">
                  <header class="panel-heading no-b">
                     <h2><b>Airport</b></h2>
                  </header>
                  <div class="panel-body">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered responsive no-m" data-sortable="" data-sortable-initialized="true">
                           <thead>
                              <tr>
                                 <th style="width: 30px;">No</th>
                                 <th>Airport Name</th>
                                 <th>Location</th>
                                 <th>Country</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $no = 1; ?> @foreach($data as $key) 
                              <tr>
                                 <td>{{$no++}}</td>
                                 <td>{{$key->airport_name}} {{$key->airport_code}}</td>
                                 <td>{{$key->location_name}}</td>
                                 <td>{{$key->country_name}}</td>
                              </tr>
                              @endforeach 
                           </tbody>
                        </table>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
   <a class="exit-offscreen"></a> 
</section>
@endsection