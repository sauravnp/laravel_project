<section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>

        <div class="row">
            @foreach ($services as $service )

            <div class="col-sm-6 col-md-4 mx-auto">
                <div class="box ">
                    <div class="img-box">
                        <img src="assets/images/s1.png" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$service->name}}
                        </h5>
                        <p>
                            {{$service->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>




        </div>

        