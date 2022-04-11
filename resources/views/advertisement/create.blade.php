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
                            <h4 class="card-title">New Advertisement Form</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('advertisement.store') }}" method="POST" class="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Advertisement Name</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    placeholder="" name="advertisementName">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Advertisement Data</label>
                                                <input type="text" id="email-id-column" class="form-control"
                                                    name="advertisementData" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Institution</label>
                                                <select class="choices form-select" name="institution_id" id="adrevetisement_size">
                                                    <option value="">Select Institution</option>
                                                    @foreach($institutions as $institution)
                                                    <option value="{{$institution->id}}">{{$institution->ministry}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="advertisement_size">Advertisement Size</label>
                                                <select class="choices form-select" name="advertisement_size_id" id="advertisement_size">
                                                    <option value="">Select Ad Size</option>
                                                    @foreach($adsizes as $adsize)
                                                    <option value="{{$adsize->column.'*'.$adsize->inch}}">{{$adsize->column.'*'.$adsize->inch}}</option>
                                                    @endforeach                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="newspaper_id">Newspaper</label>
                                                <select class="choices form-select" name="newspaper_id" id="newspaper_id">
                                                    <option value="">Select Newspaper</option>
                                                    @foreach($newspapers as $newspaper)
                                                    <option value="{{$newspaper->id}}">{{$newspaper->newspaperName}}</option>
                                                    @endforeach                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Create</button>
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

@section('extra-js')
<script>
    window.onload = function() {
        districts();
    }
    
    const districts = async () => 
    {
        const {data} = await axios.get('https://bdapis.herokuapp.com/api/v1.1/districts');
            // .then(res => console.log(res.data))
            // .catch(err => console.log(err));   
        const dist = data.data;
        // console.log(dist)
        var options = "";
        for (const key of Object.keys(dist)) {
            options += '<option value='+ dist[key]._id +'>' + dist[key].district + '</option>';
        }
        document.getElementById("district").innerHTML= options;         
    }

    
</script>
@endsection
</x-app-layout>