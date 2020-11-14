@extends('admin.home')
@section('Funds')



<!-- <button  data-toggle="model" data-target="#addmodel">Add New</button> -->
<div class="container mt-3 ">
    <div class="row">
        <div class="col-lg-12">
            @if ($errors->any())

            <div class="row">
                @foreach ($errors->all() as $error)
                <div class="col-4">

                    <div class="alert alert-danger">


                        {{ $error }}

                    </div>
                </div>
                @endforeach


            </div>

            @endif
            @if(Session::has('msg'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('msg') }}</p>
            @endif

            <div class="card">
                <div class="card-header">

                    <p>
                        <span class="text-muted">
                            Name:
                        </span>
                        <span style="font-weight:bold">
                            {{$SingleFund->discription}}

                        </span>

                    </p>

                </div>
                <div class="card-body">
                    <form action="{{route('storeEditableFunds',$SingleFund->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4>Target Assets Category</h4>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Equity Sectors">Equity Sectors</label>
                                <input type="number" class="form-control" name="equity_sector" id="Equity Sectors"
                                    placeholder="Equity Sectors (US)">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="International Equities">International Equities</label>

                                <input type="number" name="international_equilities" class="form-control"
                                    id="internationalequities" placeholder="International Equities">
                            </div>
                            <div class="form-group col-md-4">

                                <label for="Real Estate">Real Estate</label>
                                <input type="number" class="form-control" id="realestate" placeholder="Real Estate"
                                    name="real_estate">


                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Commodities">Commodities</label>
                                <input type="number" class="form-control" id="Commodities" placeholder="Commodities"
                                    name="commodities">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Cash">Cash</label>
                                <input type="number" class="form-control" id="Cash" placeholder="cash_usd"
                                    name="cash_usd">
                            </div>

                        </div>


                        <h4>Target Geography</h4>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="North America">North America</label>
                                <input type="number" class="form-control" name="north_america" id="Equity Sectors"
                                    placeholder="north_america">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Asia">Asia</label>
                                <input type="number" name="asia" class="form-control" id="asia" placeholder="Asia">
                            </div>
                            <div class="form-group col-md-4">

                                <label for="Europe">Europe</label>
                                <input type="number" class="form-control" id="Europe" placeholder="Europe"
                                    name="europe">


                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Ocinia">Ocinia</label>
                                <input type="number" class="form-control" id="Ocinia" placeholder="Ocinia"
                                    name="ocinia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="South America">South America</label>
                                <input type="number" class="form-control" id="south_america" placeholder="South America"
                                    name="south_america">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Africa">Africa</label>
                                <input type="number" class="form-control" id="Africa" placeholder="Africa"
                                    name="africa">
                            </div>

                        </div>


                        <h4>Asset Class BreakDown </h4>
                        <hr>
                        {{-- Equity Selectors --}}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Small Cap">Small Cap</label>
                                <input type="number" class="form-control" name="small_cap" id="Small Cap"
                                    placeholder="Small Cap">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Healt Care">Healt Care</label>
                                <input type="number" name="health_care" class="form-control" id="Healt Care"
                                    placeholder="Healt Care">
                            </div>
                            <div class="form-group col-md-4">

                                <label for="Consumer Discretionary">Consumer Discretionary</label>
                                <input type="number" class="form-control" id="Consumer_Discretionary"
                                    placeholder="Consumer Discretionary" name="consumer_discretionary">


                            </div>
                        </div>

                        {{-- International Equities --}}

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Asia ex-Japan">Asia ex-Japan</label>
                                <input type="number" class="form-control" id="Asis_ex-Japan" placeholder="Asia ex-Japan"
                                    name="asia_ex_japan">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="China Tech">China Tech</label>
                                <input type="number" class="form-control" id="China_Tech" placeholder="China_Tech"
                                    name="china_tech">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Emerging Markets">Emerging Markets</label>
                                <input type="number" class="form-control" id="Emerging_Markets"
                                    placeholder="Emerging Markets" name="emerging_market">
                            </div>
                        </div>



                        {{-- Real Estate --}}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Global ex-US REITS">Global ex-US REITS</label>
                                <input type="number" class="form-control" id="Global_ex-US REITS-Japan"
                                    placeholder="Global ex-US REITS" name="global_ex_us__reits">
                            </div>
                        </div>

                        {{-- Commodities --}}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Precious Metals(Gold)">Precious Metals(Gold)</label>
                                <input type="number" class="form-control" id="Precious_Metals(Gold)"
                                    placeholder="Precious_Metals(Gold)" name="precious_metals_gold">
                            </div>
                        </div>
                        {{-- Cash --}}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Cash">Cash</label>
                                <input type="number" class="form-control" placeholder="Cash" name="_cash">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Cash">Image</label>
                                <input type="file" class="form-control" placeholder="Image" name="Image">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right ">Send</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>


@endsection
