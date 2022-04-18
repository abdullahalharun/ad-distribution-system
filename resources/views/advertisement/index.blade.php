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
    @endsection
</x-app-layout>