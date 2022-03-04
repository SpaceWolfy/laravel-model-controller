<nav class="navigation-bar">
  <ul>
    <li class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ url('/') }}">MOVIES</a></li>
    <li><a href="">TV</a></li>
    <li><a href="">VIDEOS</a></li>
  </ul>
  
  <div class="search-bar">
    <input type="text" placeholder="Search">
    <i class="fa-solid fa-magnifying-glass"></i>
  </div>
</nav>