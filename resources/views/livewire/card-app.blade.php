<div class="card">

    <div class="card-image box">

        {{ $uygulama->name }}<br/>

        <a href="{{ $uygulama->url }}">
          <figure class="image"><img src="/images/{{ $uygulama->banner_img }}" alt={{ $uygulama->label }} /></figure>
        </a>
    </div>

      <div class="card-content">
        <div class="media">
          <h1 class="title mb-6 has-text-weight-light is-size-3 has-text-left">
            {{ $uygulama->label }}
          </h1>
        </div>

        <div class="content">
          {!! $uygulama->desc !!}
        </div>
      </div>

</div>
