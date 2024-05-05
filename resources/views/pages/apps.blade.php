<section class="section container">

    <h1 class="title mb-6 has-text-weight-light is-size-2 has-text-left">Applications</h1>

    <div class="tile is-ancestor">
      <div class="tile is-vertical ">
        <div class="tile">



            @foreach ($params->software as $group_title => $grouped_apps)

                <h2 class="subtitle">{{ $group_title }}</h2>

                @foreach ($grouped_apps as $uyg)

                {{-- @php
                    print_r(gettype($app->name))
                @endphp --}}

                {{-- <h1 class="subtitle">{{ gettype($app) }}</h1>
                <h1 class="subtitle">{{ $app->name }}</h1> --}}


                <div class="tile is-parent is-vertical">
                    <div class="tile is-child">
                      <livewire:card-app :uygulama="$uyg" />
                    </div>
                </div>

                @endforeach

            @endforeach



        </div>

      </div>
    </div>



</section>
