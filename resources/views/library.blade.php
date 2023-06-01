@extends('layout')
@section('content')
    <div class="row">
      <div class="col-lg-9 col-md-6 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-12 col-12">
                <table class="table display" style="width:100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Subject</th>
                      <th>Issuance Type/Number</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- <tr>
                    </tr> --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
          $('.table').DataTable();
      });
      </script>
@endsection

