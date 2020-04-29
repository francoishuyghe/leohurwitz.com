<header class="banner">
  <div class="top">
    <button class="menu-text menu-toggle">MENU</button>
    <button class="hamburger menu-toggle hamburger--squeeze" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <a class="brand" href="{{ home_url('/') }}">
      {{ get_bloginfo('name', 'display') }}
    </a>
  </div>
  <div class="bottom">
    <div class="container">
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
