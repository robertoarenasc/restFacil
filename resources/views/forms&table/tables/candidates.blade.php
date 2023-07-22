@extends('welcome')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->	  
      <div class="content-header">
          <div class="d-md-flex align-items-center justify-content-between">
              <div>
                  <a href="jobs-details.html" class="waves-effect waves-light btn btn-outline btn-primary">Jobs</a>
                  <a href="candidates.html" class="waves-effect waves-light btn active btn-outline btn-primary mx-lg-10">Candidates</a>
                  <a href="mailbox.html" class="waves-effect waves-light btn btn-outline btn-primary">Messages</a>
              </div>
              <a href="#" class="waves-effect waves-light btn btn-danger mt-10 mt-md-0">Post A Jobs</a>
              
          </div>
      </div>
        
      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-12">
                  <div class="box">
                      <div class="box-body">
                          <div>
                              <ul class="nav nav-pills nav-fill">
                                <li class="nav-item b-1">
                                  <a class="nav-link active text-center" href="#">51 <br>Active</a>
                                </li>
                                <li class="nav-item b-1">
                                  <a class="nav-link text-center" href="#">41 <br>Awaiting Review</a>
                                </li>
                                <li class="nav-item b-1">
                                  <a class="nav-link text-center" href="#">0 <br>Reviewed</a>
                                </li>
                                <li class="nav-item b-1">
                                  <a class="nav-link text-center" href="#">10 <br>Contacting</a>
                                </li>
                                <li class="nav-item b-1">
                                  <a class="nav-link text-center" href="#">0 <br>Hired</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link disabled text-center" href="#" tabindex="-1" aria-disabled="true">0 <br>Rejected</a>
                                </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="box">
                      <div class="box-body px-0">
                          <div class="table-responsive">
                            <table id="example2" class="table mb-0 w-p100">
                              <thead>
                                  <tr>
                                      <th>
                                          <input type="checkbox" id="ch_bx_1" class="filled-in">
                                          <label for="ch_bx_1" class="mb-0"></label>
                                      </th>
                                      <th>Name</th>
                                      <th>Status</th>
                                      <th>Screener Questions</th>
                                      <th>Apply Date</th>
                                      <th><i class="fa fa-lock me-5"></i>Interested?</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_2" class="filled-in">
                                          <label for="ch_bx_2" class="mb-0"></label>
                                      </td>
                                      <td>Johen Doe</td>
                                      <td>Awaiting Review</td>
                                      <td><span class="badge badge-success-light">1/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>	
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_3" class="filled-in">
                                          <label for="ch_bx_3" class="mb-0"></label>
                                      </td>
                                      <td>Aditi Row</td>
                                      <td>Awaiting Review</td>
                                      <td><span class="badge badge-success-light">1/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_4" class="filled-in">
                                          <label for="ch_bx_4" class="mb-0"></label>
                                      </td>
                                      <td>Mical Doe</td>
                                      <td>Awaiting Review</td>
                                      <td><span class="badge badge-secondary-light">0/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_5" class="filled-in">
                                          <label for="ch_bx_5" class="mb-0"></label>
                                      </td>
                                      <td>Shone Marsh</td>
                                      <td>Awaiting Review</td>
                                      <td><span class="badge badge-secondary-light">0/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_6" class="filled-in">
                                          <label for="ch_bx_6" class="mb-0"></label>
                                      </td>
                                      <td>Riki Ponting</td>
                                      <td>Contacting</td>
                                      <td><span class="badge badge-success-light">1/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_7" class="filled-in">
                                          <label for="ch_bx_7" class="mb-0"></label>
                                      </td>
                                      <td>Gail Doe</td>
                                      <td>Contacting</td>
                                      <td><span class="badge badge-success-light">1/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_8" class="filled-in">
                                          <label for="ch_bx_8" class="mb-0"></label>
                                      </td>
                                      <td>Gama Doe</td>
                                      <td>Awaiting Review</td>
                                      <td><span class="badge badge-success-light">1/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_9" class="filled-in">
                                          <label for="ch_bx_9" class="mb-0"></label>
                                      </td>
                                      <td>Jaksan Doe</td>
                                      <td>Awaiting Review</td>
                                      <td><span class="badge badge-secondary-light">0/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_10" class="filled-in">
                                          <label for="ch_bx_10" class="mb-0"></label>
                                      </td>
                                      <td>Vidito Doe</td>
                                      <td>Awaiting Review</td>
                                      <td><span class="badge badge-secondary-light">0/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_11" class="filled-in">
                                          <label for="ch_bx_11" class="mb-0"></label>
                                      </td>
                                      <td>Jamkon Doe</td>
                                      <td>Contacting</td>
                                      <td><span class="badge badge-success-light">1/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_12" class="filled-in">
                                          <label for="ch_bx_12" class="mb-0"></label>
                                      </td>
                                      <td>Micalrow Doe</td>
                                      <td>Contacting</td>
                                      <td><span class="badge badge-success-light">1/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <input type="checkbox" id="ch_bx_13" class="filled-in">
                                          <label for="ch_bx_13" class="mb-0"></label>
                                      </td>
                                      <td>Johen Doe</td>
                                      <td>Awaiting Review</td>
                                      <td><span class="badge badge-secondary-light">0/1 Preferred Question met</span></td>
                                      <td>19 Nov</td>
                                      <td>
                                          <div class="btn-group">
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-success"><i class="fa fa-check"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-primary"><i class="fa fa-question"></i></a>
                                            <a href="#" class="waves-effect waves-light btn btn-outline btn-danger"><i class="fa fa-close"></i></a>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="dropdown">
                                              <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Sent Email</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                            </table>
                          </div>              
                      </div>
                    </div>
              </div>
          </div>
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection

@push('js_candidates')
<script src="{{asset('vendor_components/datatable/datatables.min.js')}}"></script>	
<script src="{{asset('js/pages/data-table.js')}}"></script>
    
@endpush