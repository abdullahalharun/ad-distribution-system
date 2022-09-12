<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit institution</h3>
                    <p class="text-subtitle text-muted">Edit institution Form</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit institution</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit institution Form</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('institution.update', $institution->id) }}" method="POST" class="form">
                                    @csrf @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Ministry</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="" value="{{$institution->ministry}}" name="ministry">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Department Or Directorate</label>
                                                <input type="text" id="email-id-column" class="form-control" value="{{$institution->departmentOrDirectorate}}" name="departmentOrDirectorate" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Administrative Office</label>
                                                <input type="text" id="city-column" class="form-control" placeholder="" value="{{$institution->office}}" name="office">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Regional Office</label>
                                                <input type="text" id="city-column" class="form-control" placeholder="" value="{{$institution->regionalOffice}}" name="regionalOffice">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Administrative Department</label>
                                                <input type="text" id="country-floating" class="form-control" value="{{$institution->administrativeDepartment}}" name="administrativeDepartment" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">District</label>
                                                <input type="text" id="District-column" class="form-control" value="{{$institution->district}}" name="district" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">District Level Office</label>
                                                <input type="text" id="districtLevelOffice-id-column" class="form-control" value="{{$institution->districtLevelOffice}}" name="districtLevelOffice" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Upazila</label>
                                                <input type="text" id="Upazila-column" class="form-control" value="{{$institution->upazila}}" name="upazila" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Upazilla Level Office</label>
                                                <input type="text" id="UpazilaLevelOffice-id-column" class="form-control" value="{{$institution->upazilaLevelOffice}}" name="upazilaLevelOffice" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>
</x-app-layout>