<div class="card">
    <div class="card-image">
      <figure class="image is-rounded">
        <img src="/images/{{$engineer->img}}" alt="Image of {{$engineer->name}}" />
      </figure>
    </div>
    <div class="card-content">
      <div class="media">

        <div class="media-content">
          <p class="title is-4">{{$engineer->name}}</p>
          <p class="subtitle is-6">{{$engineer->profession}}</p>
        </div>
      </div>

      <div class="content">
        <p>{{$engineer->expertise}}</p>

        @if ($engineer->link)
          <p>
            <a href="/{{$engineer->link}}">more ...</a>
          </p>
        @endif

        <a href="mailto:{{$engineer->mail}}">{{$engineer->mail}}</a>

        @isset($engineer->media)

          <div class="mt-2">

            @if ($engineer->media->linkedin)
              <a href={{$engineer->media->linkedin}}>
                <span class="icon has-text-link">
                  <Icon name="linkedin" color="link" />
                </span>
              </a>
            @endif

            @if ($engineer->media->github)
              <a href={{$engineer->media->github}}>
                <span class="icon has-text-link">
                  <Icon name="github" color="link" />
                </span>
              </a>
            @endif

            @if ($engineer->media->twitter)
              <a href={{$engineer->media->twitter}}>
                <span class="icon has-text-link">
                  <Icon name="twitter" color="link" />
                </span>
              </a>
            @endif

          </div>
        @endif
        </div>
    </div>

  </div>
