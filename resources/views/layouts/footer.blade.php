<footer>
  <div id="ec-top-footer">
    <div class="container d-flex align-content-center justify-content-between text-white">
      <div id="ec-menu-footer" class="py-2">
        <ul class="ec-box-menu d-flex flex-column flex-wrap ps-0">
          @foreach ($links as $link)
          <li class="list-group-item">
            <h5 class="text-uppercase">{{ $link['name_section'] }}</h5>
            <ul class="ps-0 d-flex flex-column flex-wrap">
              @foreach ($link['sections'] as $section)
              <li class="list-group-item py-1">{{$section}}</li>
              @endforeach
            </ul>
          </li>
          @endforeach
        </ul>
        <p class="text-white">All Site Content TIM and © 2020 DC Entertainment, uniess otherwise <span class="text-primary">noted here</span>. All rights reserved. <span class="text-primary">Cookies Setting.</span></p>
      </div>
      <div>
        <img class="ec-img-footer" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo-dc-comics">
      </div>
    </div>
  </div>

  <div id="ec-bottom-footer" class="bg-dark">
    <div class="container d-flex align-items-center justify-content-between">
      <button type="button" class="btn ec-border-primary rounded-0 text-white">Sign-up now!</button>
      <div id="socials" class="py-4 d-flex align-items-center">
        <h6 class="text-primary text-uppercase m-0">Follow us</h6>
        <ul class="d-flex align-items-center m-0 gap-2">
          <li class="list-group-item">
            <a href="">
              <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="fb">
            </a>
          </li>
          <li class="list-group-item">
            <a href="">
              <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter">
            </a>
          </li>
          <li class="list-group-item">
            <a href="">
              <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube">
            </a>
          </li>
          <li class="list-group-item">
            <a href="">
              <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest">
            </a>
          </li>
          <li class="list-group-item">
            <a href="">
              <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>