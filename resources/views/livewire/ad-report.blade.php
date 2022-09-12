<div>
    <!-- Basic choices start -->
    <section class="">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <div class="card-header">
                            <h4 class="card-title">Report</h4>
                        </div> -->
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h6>Filter by Ad Type</h6>
                                    <!-- <p>Use <code>.choices</code> class for basic choices control.</p> -->
                                    <div class="form-group">
                                        <select wire:model="adType" class=" form-select">
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


                                <div class="col-md-4 mb-4">
                                    <h6>Filter by Institution</h6>
                                    <!-- <p>Use <code>.choices</code> class for basic choices control.</p> -->
                                    <div class="form-group">
                                        <select wire:model="byMinistry" class=" form-select">
                                            <option value="">Select Ministry</option>
                                            @foreach($institutions as $institution)
                                            <option value="{{$institution->id}}">{{ $institution->ministry }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-4">
                                    <h6>Order By</h6>
                                    <!-- <p>Use <code>.choices</code> class for basic choices control.</p> -->
                                    <div class="form-group">
                                        <select wire:model="sortBy" class="form-select">
                                            <option value="">Order By</option>
                                            <option value="asc">ASC</option>
                                            <option value="desc">DESC</option>
                                        </select>
                                    </div>
                                </div>

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
                    <span>All advertisements ({{ $ads->count() }})</span>
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
                            <td>
                                @if($ad->newspapers)
                                @foreach($ad->newspapers as $newspaper) {{ $newspaper.', ' }} @endforeach
                                @endif
                            </td>

                            <td>{{$ad->ad_size_id}}</td>
                            <td>{{$ad->ad_price}}</td>

                            <td class="d-flex justify-content-center">
                                <a href="/advertisement/{{$ad->id}}/edit">
                                    <i class="fa-solid fa-pen-to-square px-2"></i>
                                </a>
                                <a href="/advertisement/{{$ad->id}}/delete">
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