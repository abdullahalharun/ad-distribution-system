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

        @livewire('ad-report')


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