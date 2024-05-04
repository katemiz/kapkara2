<nav class="navbar is-dark">
    <div class="container">

      <div class="navbar-brand">
        <a class="navbar-item" href="/" wire:navigate>
          <span class="icon-text is-size-5">

            <span class="icon">
              <img src="{{ asset('/images/baykus_orange.svg')}}" alt="baykus logo" />

            </span>

            <span class="has-text-weight-bold">kapkara</span>
            <span class="has-text-weight-light">&nbsp;web house</span>
          </span>
        </a>

        <span class="navbar-burger burger" data-target="navbarMenu">
          <span />
          <span />
          <span />
        </span>
      </div>

      <div id="navbarMenu" class="navbar-menu">
        <div class="navbar-end">
          <a href="/" class="navbar-item is-active" wire:navigate>Home</a>
          <div class="navbar-item has-dropdown is-hoverable">
            <p class="navbar-link">Apps</p>
            <div class="navbar-dropdown">

                @foreach ( config('appconstants.software') as $uygulamalar)

                    @foreach ( $uygulamalar as $uygulama)
                        <a class="navbar-item" href="{{ $uygulama['url'] }}">{{ $uygulama['name'] }}</a>
                    @endforeach
                    <hr class="navbar-divider" />

                @endforeach

            </div>
          </div>

          <a href="/services" class="navbar-item" wire:navigate>Services</a>
          <a href="/team" class="navbar-item" wire:navigate>Team</a>
          <a href="/contact" class="navbar-item" wire:navigate>Contact</a>

        </div>
      </div>
    </div>
  </nav>
