<footer class="footer has-background-dark" id="footer">

    <div class="columns has-text-white">

      <div class="column has-text-centered-mobile">
        <img
          src="{{ asset('/images/baykus_orange.svg')}}"
          width="28px"
          alt="Company Icon" />
        <br />
        <a href={params.company.url} class="has-text-weight-light has-text-white">
          {{ config('appconstants.company.name') }}
        </a>
      </div>

      <div class="column">
        <p
          class="has-text-weight-light has-text-centered has-text-centered-mobile">
          {{ config('appconstants.company.title') }}
        </p>
        <p
          class="has-text-weight-light has-text-centered has-text-centered-mobile is-size-7">
          {{ config('appconstants.app.version') }}
        </p>
      </div>

      <div class="column">
        <p class="has-text-weight-light has-text-right has-text-centered-mobile">
            {{ config('appconstants.app.copyright') }}
        </p>
        <p
          class="has-text-weight-light has-text-right has-text-centered-mobile
          is-size-7">
          {{ config('appconstants.company.motto') }}
        </p>
      </div>

    </div>

  </footer>
