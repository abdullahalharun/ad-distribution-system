<x-app-layout>
<div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit User</h3>
                    <p class="text-subtitle text-muted">Edit User Form</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
                            <h4 class="card-title">Edit User Form</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('user.update', $user->id) }}" method="POST" class="form">
                                    @csrf @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Name</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    placeholder="Name" name="name" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Email</label>
                                                <input type="email" id="email-id-column" class="form-control"
                                                    name="email" placeholder="Email" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Institution</label>
                                                <!-- <input type="text" id="city-column" class="form-control"
                                                    placeholder="Institution Code" name="institution_code" value="{{$user->institution_code}}"> -->
                                                <select class="choices form-select" name="institution_code" id="">
                                                    <option value="">Select Institution</option>
                                                    @foreach($institutions as $institution)
                                                    <option value="{{$institution->id}}">{{$institution->ministry}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Password</label>
                                                <input type="text" id="country-floating" class="form-control"
                                                    name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Company</label>
                                                <input type="text" id="company-column" class="form-control"
                                                    name="company-column" placeholder="Company">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Email</label>
                                                <input type="email" id="email-id-column" class="form-control"
                                                    name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <div class='form-check'>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox5"
                                                        class='form-check-input' checked>
                                                    <label for="checkbox5">Remember Me</label>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Update</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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