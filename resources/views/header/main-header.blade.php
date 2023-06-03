<header class="main-header static">
    <div class="container">
        <div id="menu-toggler">
            <i class="fa-solid fa-list-ul"></i>
        </div>
        <a href="index.html" id="logo">
          <img src="./assets/images/logo2.png">
        </a>
        <ul id="menu">
          <li>
            <a href="{{route('index')}}">Home</a>
          </li>
          <li>
            <a>Genre <i class="fa fa-plus"></i>
            </a>
            <ul class="genre">
              <li>
                <a title="Action movies" href="action.html">Action</a>
              </li>
             
            </ul>
          </li>
          <li>
            <a>Country <i class="fa fa-plus"></i>
            </a>
            <ul class="country">
              <li>
                <a title="Argentina movies" href="/country/argentina.html">Argentina</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{route('movies')}}" title="Movies">Movies</a>
          </li>
          <li>
            <a href="{{route('tv-series')}}" title="TV-Series">TV-Series</a>
          </li>
          <li>
            <a href="" title="Top IMDb">Top IMDb</a>
          </li>
        </ul>
        <div id="user">
          <div class="guest" data-toggle="modal" data-target="#md-login">
            <i class="fa-solid fa-circle-user"></i>
            <span>Login/ Register</span>
          </div>
          
        </div>
        <div id="search-toggler">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <form id="search" autocomplete="off" action="./search">
          <input type="text" name="keyword" placeholder="Enter your keywords..." autocomplete="off">
          <button></button>
          <div class="suggestions"></div>
          <input type="hidden" name="vrf">
        </form>
      </div>
</header>
