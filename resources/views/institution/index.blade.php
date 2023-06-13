<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Institutions</h3>
                    <!-- <p class="text-subtitle text-muted">For Institution to check they list</p> -->
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Institutions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span>All Institutions</span>
                        <a class="btn btn-primary" href="/institution/create">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Ministry / Division</th>
                                <th>Department / Directorate</th>
                                <th>Administrative Office</th>
                                <th>Regional Office</th>
                                <th>Administrative Division</th>
                                <th>District</th>
                                <th>Name of District Office</th>
                                <th>Upazila</th>
                                <th>Name of Upazila Office</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($institutions as $institution)
                            <tr>
                                <td>{{$institution->ministry}}</td>
                                <td>{{$institution->departmentOrDirectorate}}</td>
                                <td>{{$institution->office}}</td>
                                <td>{{$institution->regionalOffice}}</td>
                                <td>{{$institution->administrativeDepartment}}</td>
                                <td>{{$institution->district}}</td>
                                <td>{{$institution->districtLevelOffice}}</td>
                                <td>{{$institution->upazila}}</td>
                                <td>{{$institution->upazilaLevelOffice}}</td>

                                <td class="d-flex justify-content-center">
                                    <a href="/institution/{{$institution->id}}/edit">
                                        <i class="fa-solid fa-pen-to-square px-2"></i>
                                    </a>
                                    <a href="/institution/{{$institution->id}}/delete" onclick="confirmDelete()" class="delete" data-confirm="Are you sure you want to delete?">
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

    <script>
        function confirmDelete() {
            var deleteLinks = document.querySelectorAll('.delete');

            for (var i = 0; i < deleteLinks.length; i++) {
                deleteLinks[i].addEventListener('click', function(event) {
                    event.preventDefault();

                    var choice = confirm(this.getAttribute('data-confirm'));

                    if (choice) {
                        window.location.href = this.getAttribute('href');
                    }
                });
            }
        }
    </script>
    @section('extra-js')

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    @endsection
</x-app-layout>