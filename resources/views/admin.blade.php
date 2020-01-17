@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin-custom-cgm">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex flex-wrap">
          <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">User</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">User Administrator</h4>
        <p class="card-description">
            <button type="button" class="btn btn-primary btn-md">
            <i class="mdi mdi-account-plus"></i>
                Add user
            </button>
        </p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-1">
                        <img src="../../images/faces/face1.jpg" alt="image"/>
                    </td>
                    <td>
                    Herman Beck
                    </td>
                    <td>
                    $ 77.99
                    </td>
                    <td>
                    May 15, 2015
                    </td>
                    <td>
                        <div class="d-flex flex-nowrap">
                            <button type="button" class="btn btn-success btn-rounded btn-icon">
                            <i class="mdi mdi-lead-pencil"></i>
                            </button>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class="mdi mdi-delete-forever"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                        <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>
                        Herman Beck
                        </td>
                        <td>
                        $ 77.99
                        </td>
                        <td>
                        May 15, 2015
                        </td>
                        <td>
                            <div class="d-flex flex-nowrap">
                                <button type="button" class="btn btn-success btn-rounded btn-icon">
                                <i class="mdi mdi-lead-pencil"></i>
                                </button>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                <i class="mdi mdi-delete-forever"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
