@extends('welcome')
 <!-- Content Wrapper. Contains page content -->

@section('content')
<div class="content-wrapper">
    <div class="container-full">
        
      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-12">
                <div class="box">
                  <div class="box-body">
                      <div class="d-md-flex d-block align-items-center justify-content-between">
                            <h4 class="box-title mb-md-0 mb-20">Billing History</h4>
                          <a href="#" class="btn btn-primary"><i class="fa fa-download"></i>Get Statement</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="box">
                  <div class="box-body">
                      <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">45871</th>
                                <td>Monthly Subscription</td>
                                <td>1/04/2020</td>
                                <td>30/04/2022</td>
                                <td>$99</td>
                                <td><span class="badge badge-sm badge-danger">Due</span></td>
                              </tr>
                              <tr>
                                <th scope="row">458791</th>
                                <td>Yearly Subscription</td>
                                <td>1/03/2019</td>
                                <td>30/03/2022</td>
                                <td>$999</td>
                                <td><span class="badge badge-sm badge-success">Paid</span></td>
                              </tr>
                              <tr>
                                <th scope="row">45871</th>
                                <td>Monthly Subscription</td>
                                <td>1/04/2020</td>
                                <td>30/04/2022</td>
                                <td>$99</td>
                                <td><span class="badge badge-sm badge-danger">Due</span></td>
                              </tr>
                              <tr>
                                <th scope="row">458791</th>
                                <td>Yearly Subscription</td>
                                <td>1/03/2019</td>
                                <td>30/03/2022</td>
                                <td>$999</td>
                                <td><span class="badge badge-sm badge-success">Paid</span></td>
                              </tr>
                              <tr>
                                <th scope="row">45871</th>
                                <td>Monthly Subscription</td>
                                <td>1/04/2020</td>
                                <td>30/04/2022</td>
                                <td>$99</td>
                                <td><span class="badge badge-sm badge-danger">Due</span></td>
                              </tr>
                              <tr>
                                <th scope="row">458791</th>
                                <td>Yearly Subscription</td>
                                <td>1/03/2019</td>
                                <td>30/03/2022</td>
                                <td>$999</td>
                                <td><span class="badge badge-sm badge-success">Paid</span></td>
                              </tr>
                              <tr>
                                <th scope="row">45871</th>
                                <td>Monthly Subscription</td>
                                <td>1/04/2020</td>
                                <td>30/04/2022</td>
                                <td>$99</td>
                                <td><span class="badge badge-sm badge-danger">Due</span></td>
                              </tr>
                              <tr>
                                <th scope="row">458791</th>
                                <td>Yearly Subscription</td>
                                <td>1/03/2019</td>
                                <td>30/03/2022</td>
                                <td>$999</td>
                                <td><span class="badge badge-sm badge-success">Paid</span></td>
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
