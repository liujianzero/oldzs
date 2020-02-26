<div class="container">
  <div class="row justify-content-center" style="margin-top: 5rem;">
    <div class="col-60 col-sm-25">
      <card>
        @include('layouts._errors')
        {{ $slot }}
      </card>
    </div>
  </div>
</div>
