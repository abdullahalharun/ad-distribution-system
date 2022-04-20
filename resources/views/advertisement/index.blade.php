<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Advertisements</h3>
                    <!-- <p class="text-subtitle text-muted">For ad to check they list</p> -->
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Advertisements</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic choices start -->
        <section class="basic-choices">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4 class="card-title">Report</h4>
                        </div> -->
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <h6>Report by Ad Type</h6>
                                        <!-- <p>Use <code>.choices</code> class for basic choices control.</p> -->
                                        <div class="form-group">
                                            <select class="choices form-select">
                                                <option value="">Select Ad Type</option>
                                                <option value="eGP">eGP</option>
                                                <option value="tender">Tender</option>
                                                <option value="legalNotice">Notice</option>
                                                <option value="notice">Legal Notice</option>
                                                <option value="appointmentNotice">Appointment Notice</option>
                                                <option value="auctionNotice">Auction Notice</option>
                                                <option value="leaseNotice">Lease Notice</option>
                                                <option value="supplement">Supplement</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6 mb-4">
                                        <h6>Single Select with Label</h6>
                                        <p>Use <code>optgroup</code> attribute for basic choices with Label
                                            control.</p>
                                        <div class="form-group">
                                            <select class="choices form-select">
                                                <optgroup label="Figures">
                                                    <option value="romboid">Romboid</option>
                                                    <option value="trapeze">Trapeze</option>
                                                    <option value="triangle">Triangle</option>
                                                    <option value="polygon">Polygon</option>
                                                </optgroup>
                                                <optgroup label="Colors">
                                                    <option value="red">Red</option>
                                                    <option value="green">Green</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="purple">Purple</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic choices end -->

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span>All advertisements</span>
                        <a class="btn btn-primary" href="/advertisement/create">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Ad</th>
                                <th>Name</th>
                                <th>Institution</th>
                                <th>Type</th>
                                <th>Newspaper Number</th>
                                <th>Newspapers</th>
                                <th>Ad Size</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ads as $ad)
                            <tr>
                                <td class="flex-nowrap"><a href="/files/{{$ad->ad_file}}" target="_blank">View file</a></td>
                                <td>{{$ad->ad_name}}</td>
                                <td>{{$ad->institution_id}}</td>
                                <td>{{$ad->ad_type}}</td>
                                <td>{{$ad->newspaper_number}}</td>
                                <td>@foreach($ad->newspapers as $newspaper) {{ $newspaper.', ' }} @endforeach</td>

                                <td>{{$ad->ad_size_id}}</td>
                                <td>{{$ad->ad_price}}</td>

                                <td class="d-flex justify-content-center">
                                    <a href="/ad/{{$ad->id}}/edit">
                                        <i class="fa-solid fa-pen-to-square px-2"></i>
                                    </a>
                                    <a href="/ad/{{$ad->id}}/delete">
                                        <i class="fa-solid fa-trash-can text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

    @section('extra-js')
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <!-- Include Choices JavaScript -->
    <script src="/assets/vendors/choices.js/choices.min.js"></script>

    @endsection
</x-app-layout>