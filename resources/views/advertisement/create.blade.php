<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>New Advertisement</h3>
                    <p class="text-subtitle text-muted">New Advertisement Form</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add New Institution</li>
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
                            <h4 class="card-title">New Advertisement </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('advertisement.store') }}" method="POST" class="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group mb-3">
                                                <label class="noto-sans" for="formFile" class="form-label">বিজ্ঞাপন নির্বাচন</label>
                                                <input class="form-control" type="file" name="ad_file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="noto-sans" for="first-name-column">বিজ্ঞাপনের নাম</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="" name="ad_name">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="noto-sans" for="email-id-column">Advertisement Data</label>
                                                <input type="text" id="email-id-column" class="form-control" name="advertisementData" placeholder="">
                                            </div>
                                        </div> -->
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="noto-sans" for="institution">প্রতিষ্ঠান</label>
                                                <select class="choices form-select" name="institution_id" id="institution">
                                                    <option value="">Select Institution</option>
                                                    @foreach($institutions as $institution)
                                                    <option value="{{$institution->id}}">{{$institution->ministry}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="noto-sans" for="city-column">বিজ্ঞাপনের ধরণ</label>
                                                <select class="choices form-select" name="ad_type" id="adrevetisement_size">
                                                    <option value="">Select Ad Type</option>
                                                    <option value="acp">ACP</option>
                                                    <option value="tenda">Tenda</option>
                                                    <option value="legalNotice">Legal Notice</option>
                                                    <option value="supplementary">Supplementary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="noto-sans" for="city-column">প্রত্রিকার সংখ্যা</label>
                                                <select class="choices form-select" name="newspaper_number" id="adrevetisement_size">
                                                    <option value="2" selected>2</option>
                                                    <option value="4">4</option>
                                                    <option value="6">6</option>
                                                    <option value="8">8</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="noto-sans" for="newspaper_id">পত্রিকা নির্বাচন</label>
                                                <select class="choices form-select multiple-remove" multiple="multiple" name="newspapers[]" id="newspaper_id">
                                                    @foreach($newspapers as $newspaper)
                                                    <option value="{{$newspaper->id}}">{{$newspaper->newspaperName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="noto-sans" for="advertisement_size">বিজ্ঞাপনের সাইজ</label>
                                                <select class="choices form-select" name="ad_size_id" id="advertisement_size">
                                                    <option value="">Select Ad Size</option>
                                                    @foreach($adsizes as $adsize)
                                                    <option value="{{$adsize->id}}">{{$adsize->column.'*'.$adsize->inch.' (Column * Inch)'}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Create</button>
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

    @section('extra-js')
    <script>
        window.onload = function() {
            districts();
        }

        const districts = async () => {
            const {
                data
            } = await axios.get('https://bdapis.herokuapp.com/api/v1.1/districts');
            // .then(res => console.log(res.data))
            // .catch(err => console.log(err));   
            const dist = data.data;
            // console.log(dist)
            var options = "";
            for (const key of Object.keys(dist)) {
                options += '<option value=' + dist[key]._id + '>' + dist[key].district + '</option>';
            }
            document.getElementById("district").innerHTML = options;
        }
    </script>

    <!-- Include Choices JavaScript -->
    <script src="/assets/vendors/choices.js/choices.min.js"></script>

    @endsection
</x-app-layout>