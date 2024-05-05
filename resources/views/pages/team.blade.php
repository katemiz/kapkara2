<section class="section container">


    <div class="tile is-ancestor">
      <div class="tile is-vertical ">
        <div class="tile">

            @foreach ($params->engineers as $group_title => $group)

                <h1 class="title mb-6 has-text-weight-light is-size-2 has-text-left">{{ $group_title }}</h1>

                @foreach ($group as $engineer)

                    <div class="tile is-parent is-vertical">
                    <div class="tile is-child">
                      <livewire:card-engineer :engineer="$engineer" />
                    </div>
                  </div>

                @endforeach

            @endforeach

        </div>

      </div>
    </div>

</section>
