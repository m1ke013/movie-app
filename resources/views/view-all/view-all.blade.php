<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XMovies</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link href="./scss/custom.css" rel="stylesheet" media="all">
    <link href="./node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css" rel="stylesheet" media="all">
    <link href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" media="all">
    <link href="./node_modules/@fortawesome/fontawesome-free/css/brands.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/solid.min.css" media="all">
    <link href="./node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.ttf">
  </head>
  <body>
    
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
                <a href="home.html">Home</a>
              </li>
              <li>
                <a>Genre <i class="fa fa-plus"></i>
                </a>
                <ul class="genre">
                  <li>
                    <a title="Action movies" href="action.html">Action</a>
                  </li>
                  <li>
                    <a title="Adventure movies" href="adventure.html">Adventure</a>
                  </li>
                  <li>
                    <a title="Animation movies" href="animation.html">Animation</a>
                  </li>
                  <li>
                    <a title="Biography movies" href="genre/biography.html">Biography</a>
                  </li>
                  <li>
                    <a title="Costume movies" href="costume.html">Costume</a>
                  </li>
                  <li>
                    <a title="Comedy movies" href="comedy.html">Comedy</a>
                  </li>
                  <li>
                    <a title="Crime movies" href="crime.html">Crime</a>
                  </li>
                  <li>
                    <a title="Documentary movies" href="documentary.html">Documentary</a>
                  </li>
                  <li>
                    <a title="Drama movies" href="drama.html">Drama</a>
                  </li>
                  <li>
                    <a title="Family movies" href="family.html">Family</a>
                  </li>
                  <li>
                    <a title="Fantasy movies" href="fantasy.html">Fantasy</a>
                  </li>
                  <li>
                    <a title="Game-Show movies" href="game-show.html">Game-Show</a>
                  </li>
                  <li>
                    <a title="History movies" href="history.html">History</a>
                  </li>
                  <li>
                    <a title="Horror movies" href="horror.html">Horror</a>
                  </li>
                  <li>
                    <a title="Kungfu movies" href="kungfu.html">Kungfu</a>
                  </li>
                  <li>
                    <a title="Music movies" href="music.html">Music</a>
                  </li>
                  <li>
                    <a title="Mystery movies" href="mystery.html">Mystery</a>
                  </li>
                  <li>
                    <a title="Reality-TV movies" href="reality-tv.html">Reality-TV</a>
                  </li>
                  <li>
                    <a title="Romance movies" href="romance.html">Romance</a>
                  </li>
                  <li>
                    <a title="Sci-Fi movies" href="sci-fi.html">Sci-Fi</a>
                  </li>
                  <li>
                    <a title="Sport movies" href="sport.html">Sport</a>
                  </li>
                  <li>
                    <a title="Thriller movies" href="thriller.html">Thriller</a>
                  </li>
                  <li>
                    <a title="TV Show movies" href="tv-show.html">TV Show</a>
                  </li>
                  <li>
                    <a title="War movies" href="war.html">War</a>
                  </li>
                  <li>
                    <a title="Western movies" href="western.html">Western</a>
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
                  <li>
                    <a title="Australia movies" href="/country/australia">Australia</a>
                  </li>
                  <li>
                    <a title="Austria movies" href="/country/austria">Austria</a>
                  </li>
                  <li>
                    <a title="Belgium movies" href="/country/belgium">Belgium</a>
                  </li>
                  <li>
                    <a title="Brazil movies" href="/country/brazil">Brazil</a>
                  </li>
                  <li>
                    <a title="Canada movies" href="/country/canada">Canada</a>
                  </li>
                  <li>
                    <a title="China movies" href="/country/china">China</a>
                  </li>
                  <li>
                    <a title="Czech Republic movies" href="/country/czech-republic">Czech Republic</a>
                  </li>
                  <li>
                    <a title="Denmark movies" href="/country/denmark">Denmark</a>
                  </li>
                  <li>
                    <a title="Finland movies" href="/country/finland">Finland</a>
                  </li>
                  <li>
                    <a title="France movies" href="/country/france">France</a>
                  </li>
                  <li>
                    <a title="Germany movies" href="/country/germany">Germany</a>
                  </li>
                  <li>
                    <a title="Hong Kong movies" href="/country/hongkong">Hong Kong</a>
                  </li>
                  <li>
                    <a title="Hungary movies" href="/country/hungary">Hungary</a>
                  </li>
                  <li>
                    <a title="India movies" href="/country/india">India</a>
                  </li>
                  <li>
                    <a title="International movies" href="/country/international">International</a>
                  </li>
                  <li>
                    <a title="Ireland movies" href="/country/ireland">Ireland</a>
                  </li>
                  <li>
                    <a title="Israel movies" href="/country/israel">Israel</a>
                  </li>
                  <li>
                    <a title="Italy movies" href="/country/italy">Italy</a>
                  </li>
                  <li>
                    <a title="Japan movies" href="/country/japan">Japan</a>
                  </li>
                  <li>
                    <a title="Luxembourg movies" href="/country/luxembourg">Luxembourg</a>
                  </li>
                  <li>
                    <a title="Mexico movies" href="/country/mexico">Mexico</a>
                  </li>
                  <li>
                    <a title="Netherlands movies" href="/country/netherlands">Netherlands</a>
                  </li>
                  <li>
                    <a title="New Zealand movies" href="/country/new-zealand">New Zealand</a>
                  </li>
                  <li>
                    <a title="Norway movies" href="/country/norway">Norway</a>
                  </li>
                  <li>
                    <a title="Philippines movies" href="/country/philippines">Philippines</a>
                  </li>
                  <li>
                    <a title="Poland movies" href="/country/poland">Poland</a>
                  </li>
                  <li>
                    <a title="Romania movies" href="/country/romania">Romania</a>
                  </li>
                  <li>
                    <a title="Russia movies" href="/country/russia">Russia</a>
                  </li>
                  <li>
                    <a title="South Africa movies" href="/country/south-africa">South Africa</a>
                  </li>
                  <li>
                    <a title="South Korea movies" href="/country/south-korea">South Korea</a>
                  </li>
                  <li>
                    <a title="Spain movies" href="/country/spain">Spain</a>
                  </li>
                  <li>
                    <a title="Sweden movies" href="/country/sweden">Sweden</a>
                  </li>
                  <li>
                    <a title="Switzerland movies" href="/country/switzerland">Switzerland</a>
                  </li>
                  <li>
                    <a title="Thailand movies" href="/country/thailand">Thailand</a>
                  </li>
                  <li>
                    <a title="Turkey movies" href="/country/turkey">Turkey</a>
                  </li>
                  <li>
                    <a title="United Kingdom movies" href="/country/united-kingdom">United Kingdom</a>
                  </li>
                  <li>
                    <a title="United States movies" href="/country/united-states">United States</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="movies.html" title="Movies">Movies</a>
              </li>
              <li>
                <a href="tv-series.html" title="TV-Series">TV-Series</a>
              </li>
              <li>
                <a href="top-imdb.html" title="Top IMDb">Top IMDb</a>
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

    <!-- MAIN CONTENT -->
    <body>
      
  
      <div id="view-all">
          <div class="container mt-5">
              <section class="bl">
                  <div class="heading">
                      <h1>TV Series</h1>
                      <div id="filter-toggler"> 
                        <i class="fa fa-filter"></i> Filter 
                      </div>
                      <div class="clearfix"></div>
                  </div>
                  <form class="filters normal" action="">
                      <div class="filter dropdown"> 
                        <button class="dropdown-toggle" data-toggle="dropdown"> 
                          <i class="fa fa-folder-open"></i> Genre 
                          <span class="value" data-label-placement="true">All</span> 
                        </button>
                          <ul class="dropdown-menu genre lg c4">
                              <li> <input name="genre[]" type="checkbox" id="genre_action" value="25"> <label for="genre_action">Action</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_adventure" value="17"> <label for="genre_adventure">Adventure</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_animation" value="10"> <label for="genre_animation">Animation</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_biography" value="215"> <label for="genre_biography">Biography</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_costume" value="1693"> <label for="genre_costume">Costume</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_comedy" value="14"> <label for="genre_comedy">Comedy</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_crime" value="26"> <label for="genre_crime">Crime</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_documentary" value="131"> <label for="genre_documentary">Documentary</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_drama" value="1"> <label for="genre_drama">Drama</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_family" value="43"> <label for="genre_family">Family</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_fantasy" value="31"> <label for="genre_fantasy">Fantasy</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_game-show" value="212"> <label for="genre_game-show">Game-Show</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_history" value="47"> <label for="genre_history">History</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_horror" value="74"> <label for="genre_horror">Horror</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_kungfu" value="248"> <label for="genre_kungfu">Kungfu</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_music" value="199"> <label for="genre_music">Music</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_mystery" value="64"> <label for="genre_mystery">Mystery</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_reality-tv" value="4"> <label for="genre_reality-tv">Reality-TV</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_romance" value="23"> <label for="genre_romance">Romance</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_sci-fi" value="15"> <label for="genre_sci-fi">Sci-Fi</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_sport" value="44"> <label for="genre_sport">Sport</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_thriller" value="7"> <label for="genre_thriller">Thriller</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_tv-show" value="139"> <label for="genre_tv-show">TV Show</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_war" value="58"> <label for="genre_war">War</label> </li>
                              <li> <input name="genre[]" type="checkbox" id="genre_western" value="28"> <label for="genre_western">Western</label> </li>
                              <li> <input type="checkbox" id="genre_mode" name="genre_mode" value="and"> <label style="font-weight: 100" for="genre_mode">Include all selected</label> </li>
                          </ul>
                      </div>
                      <div class="filter dropdown"> <button class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-clone"></i> Type <span class="value" data-label-placement="true">TV-Series</span> </button>
                          <ul class="dropdown-menu c1">
                              <li> <input name="type[]" id="type_movie" type="checkbox" value="movie"> <label for="type_movie">Movie</label> </li>
                              <li> <input name="type[]" id="type_series" type="checkbox" value="series" checked="checked"> <label for="type_series">TV-Series</label> </li>
                          </ul>
                      </div>
                      <div class="filter dropdown"> <button class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-globe-americas"></i> Country <span class="value" data-label-placement="true">All</span> </button>
                          <ul class="dropdown-menu lg c4">
                              <li> <input name="country[]" type="checkbox" id="country_argentina" value="181863"> <label for="country_argentina">Argentina</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_australia" value="181851"> <label for="country_australia">Australia</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_austria" value="181882"> <label for="country_austria">Austria</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_belgium" value="181849"> <label for="country_belgium">Belgium</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_brazil" value="181867"> <label for="country_brazil">Brazil</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_canada" value="181861"> <label for="country_canada">Canada</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_china" value="108"> <label for="country_china">China</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_czech-republic" value="181859"> <label for="country_czech-republic">Czech Republic</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_denmark" value="181855"> <label for="country_denmark">Denmark</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_finland" value="181877"> <label for="country_finland">Finland</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_france" value="11"> <label for="country_france">France</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_germany" value="1025332"> <label for="country_germany">Germany</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_hongkong" value="2630"> <label for="country_hongkong">Hong Kong</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_hungary" value="181876"> <label for="country_hungary">Hungary</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_india" value="34"> <label for="country_india">India</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_international" value="18"> <label for="country_international">International</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_ireland" value="181862"> <label for="country_ireland">Ireland</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_israel" value="181887"> <label for="country_israel">Israel</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_italy" value="181857"> <label for="country_italy">Italy</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_japan" value="36"> <label for="country_japan">Japan</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_luxembourg" value="181878"> <label for="country_luxembourg">Luxembourg</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_mexico" value="181852"> <label for="country_mexico">Mexico</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_netherlands" value="181848"> <label for="country_netherlands">Netherlands</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_new-zealand" value="181847"> <label for="country_new-zealand">New Zealand</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_norway" value="181901"> <label for="country_norway">Norway</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_philippines" value="1025339"> <label for="country_philippines">Philippines</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_poland" value="181880"> <label for="country_poland">Poland</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_romania" value="181895"> <label for="country_romania">Romania</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_russia" value="181860"> <label for="country_russia">Russia</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_south-africa" value="181850"> <label for="country_south-africa">South Africa</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_south-korea" value="1025429"> <label for="country_south-korea">South Korea</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_spain" value="181871"> <label for="country_spain">Spain</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_sweden" value="181883"> <label for="country_sweden">Sweden</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_switzerland" value="181869"> <label for="country_switzerland">Switzerland</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_thailand" value="94"> <label for="country_thailand">Thailand</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_turkey" value="1025379"> <label for="country_turkey">Turkey</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_united-kingdom" value="8"> <label for="country_united-kingdom">United Kingdom</label> </li>
                              <li> <input name="country[]" type="checkbox" id="country_united-states" value="2"> <label for="country_united-states">United States</label> </li>
                          </ul>
                      </div>
                      <div class="filter dropdown"> <button class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-calendar-alt"></i> Year <span class="value" data-label-placement="true">All</span> </button>
                          <ul class="dropdown-menu md c3">
                              <li> <input name="release[]" type="checkbox" id="release_2023" value="2023"> <label for="release_2023">2023</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2022" value="2022"> <label for="release_2022">2022</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2021" value="2021"> <label for="release_2021">2021</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2020" value="2020"> <label for="release_2020">2020</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2019" value="2019"> <label for="release_2019">2019</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2018" value="2018"> <label for="release_2018">2018</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2017" value="2017"> <label for="release_2017">2017</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2016" value="2016"> <label for="release_2016">2016</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2015" value="2015"> <label for="release_2015">2015</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2014" value="2014"> <label for="release_2014">2014</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2013" value="2013"> <label for="release_2013">2013</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2012" value="2012"> <label for="release_2012">2012</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2011" value="2011"> <label for="release_2011">2011</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2010" value="2010"> <label for="release_2010">2010</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2009" value="2009"> <label for="release_2009">2009</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2008" value="2008"> <label for="release_2008">2008</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2007" value="2007"> <label for="release_2007">2007</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2006" value="2006"> <label for="release_2006">2006</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2005" value="2005"> <label for="release_2005">2005</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2004" value="2004"> <label for="release_2004">2004</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2003" value="2003"> <label for="release_2003">2003</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_2000s" value="2000s"> <label for="release_2000s">2000s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1990s" value="1990s"> <label for="release_1990s">1990s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1980s" value="1980s"> <label for="release_1980s">1980s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1970s" value="1970s"> <label for="release_1970s">1970s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1960s" value="1960s"> <label for="release_1960s">1960s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1950s" value="1950s"> <label for="release_1950s">1950s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1940s" value="1940s"> <label for="release_1940s">1940s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1930s" value="1930s"> <label for="release_1930s">1930s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1920s" value="1920s"> <label for="release_1920s">1920s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1910s" value="1910s"> <label for="release_1910s">1910s</label> </li>
                              <li> <input name="release[]" type="checkbox" id="release_1900s" value="1900s"> <label for="release_1900s">1900s</label> </li>
                          </ul>
                      </div>
                      <div class="filter dropdown"> <button class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-cube"></i> Quality <span class="value" data-label-placement="true">All</span> </button>
                          <ul class="dropdown-menu c1">
                              <li> <input name="quality[]" id="quality_HD" type="checkbox" value="HD"> <label for="quality_HD">HD</label> </li>
                              <li> <input name="quality[]" id="quality_HDRip" type="checkbox" value="HDRip"> <label for="quality_HDRip">HDRip</label> </li>
                              <li> <input name="quality[]" id="quality_SD" type="checkbox" value="SD"> <label for="quality_SD">SD</label> </li>
                              <li> <input name="quality[]" id="quality_TS" type="checkbox" value="TS"> <label for="quality_TS">TS</label> </li>
                              <li> <input name="quality[]" id="quality_CAM" type="checkbox" value="CAM"> <label for="quality_CAM">CAM</label> </li>
                          </ul>
                      </div>
                      <div class="filter dropdown"> <button class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-sort"></i> Sort <span class="value" data-label-placement="true">Default</span> </button>
                          <ul class="dropdown-menu sort c1">
                              <li><input name="sort" id="sort_default" type="radio" value="default" checked="checked"> <label for="sort_default">Default</label> </li>
                              <li> <input name="sort" id="sort_post_date:desc" type="radio" value="post_date:desc"> <label for="sort_post_date:desc">Recently Added</label> </li>
                              <li> <input name="sort" id="sort_views:desc" type="radio" value="views:desc"> <label for="sort_views:desc">Most Watched</label> </li>
                              <li> <input name="sort" id="sort_title:asc" type="radio" value="title:asc"> <label for="sort_title:asc">Name</label> </li>
                              <li> <input name="sort" id="sort_imdb:desc" type="radio" value="imdb:desc"> <label for="sort_imdb:desc">IMDb</label> </li>
                              <li> <input name="sort" id="sort_year:desc" type="radio" value="year:desc"> <label for="sort_year:desc">Release Date</label> </li>
                              <li> <input name="sort" id="sort_rated_scores:desc" type="radio" value="rated_scores:desc"> <label for="sort_rated_scores:desc">Site Rating</label> </li>
                          </ul>
                      </div>
                      <div class="filter submit"> <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-filter"></i> Filter </button> </div>
                      <div class="clearfix"></div>
                  </form>
                  <div class="content">
                      <div class="filmlist">
                          <div class="item tooltipstered" data-tip="30648?/cache9146fe">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/yellowjackets-30648" title="Yellowjackets" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/0f46955bc06da610df4ab4e92ee94568.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.90 </span>
                              <h3> <a class="title" title="Yellowjackets" href="https://fmovies.wtf/series/yellowjackets-30648">Yellowjackets</a> </h3>
                              <div class="meta"> SS 2 <i class="dot"></i> EP 8 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="kxro4?/cache055b38">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/top-chef-kxro4" title="Top Chef" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/dd4988f544e49136ec98cae00a7d2fbf.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.70 </span>
                              <h3> <a class="title" title="Top Chef" href="https://fmovies.wtf/series/top-chef-kxro4">Top Chef</a> </h3>
                              <div class="meta"> SS 20 <i class="dot"></i> EP 11 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="707k8?/cache54358d">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/power-book-ii-ghost-707k8" title="Power Book II: Ghost" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/8f6c4ef1362f570aac8effd19b04954c.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.40 </span>
                              <h3> <a class="title" title="Power Book II: Ghost" href="https://fmovies.wtf/series/power-book-ii-ghost-707k8">Power Book II: Ghost</a> </h3>
                              <div class="meta"> SS 3 <i class="dot"></i> EP 9 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="41ppk?/cache3e391f">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/ghosts-of-beirut-41ppk" title="Ghosts of Beirut" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/2c5506031f5f73c21206bb05121410ba.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> ?</span>
                              <h3> <a class="title" title="Ghosts of Beirut" href="https://fmovies.wtf/series/ghosts-of-beirut-41ppk">Ghosts of Beirut</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 1 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="yjoyz?/cache42a789">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/ghost-hunters-yjoyz" title="Ghost Hunters" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/7138c1aab687299f09ac706692c0bf43.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.30 </span>
                              <h3> <a class="title" title="Ghost Hunters" href="https://fmovies.wtf/series/ghost-hunters-yjoyz">Ghost Hunters</a> </h3>
                              <div class="meta"> SS 16 <i class="dot"></i> EP 7 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="70rx8?/cache6ed9d1">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/blindspotting-70rx8" title="Blindspotting" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/2d35dbf4e888410e64fc6825714f2933.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.60 </span>
                              <h3> <a class="title" title="Blindspotting" href="https://fmovies.wtf/series/blindspotting-70rx8">Blindspotting</a> </h3>
                              <div class="meta"> SS 2 <i class="dot"></i> EP 7 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="30oo2?/cache81700e">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/primo-30oo2" title="Primo" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/d3becc1564efc0cc6a74d4da357bd936.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> ? </span>
                              <h3> <a class="title" title="Primo" href="https://fmovies.wtf/series/primo-30oo2">Primo</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 8 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="60qx4?/cache4492e0">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/the-last-thing-he-told-me-60qx4" title="The Last Thing He Told Me" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/2ea6d871709a4d88fc35d803bc91ff40.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.90 </span>
                              <h3> <a class="title" title="The Last Thing He Told Me" href="https://fmovies.wtf/series/the-last-thing-he-told-me-60qx4">The Last Thing He Told Me</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 7 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="wq2ol?/cacheca7492">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/silo-wq2ol" title="Silo" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/a50f6f4b8203d9388060d72f0ed9b89b.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 8.30 </span>
                              <h3> <a class="title" title="Silo" href="https://fmovies.wtf/series/silo-wq2ol">Silo</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 4 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="41o1x?/cache69381a">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/masterchef-goes-large-41o1x" title="Masterchef Goes Large" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/350a23617a50f62f65c733f911d10b8b.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.60 </span>
                              <h3> <a class="title" title="Masterchef Goes Large" href="https://fmovies.wtf/series/masterchef-goes-large-41o1x">Masterchef Goes Large</a> </h3>
                              <div class="meta"> SS 19 <i class="dot"></i> EP 17 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="olwnj?/cache631de6">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/drops-of-god-olwnj" title="Drops of God" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/564c80a56b88641d9f67237ce25d8c5a.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 8.10 </span>
                              <h3> <a class="title" title="Drops of God" href="https://fmovies.wtf/series/drops-of-god-olwnj">Drops of God</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 6 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="qzwpn?/cache1f6988">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/city-on-fire-qzwpn" title="City on Fire" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/ca2d69e26a8738f133fd3b78b80425a5.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.20 </span>
                              <h3> <a class="title" title="City on Fire" href="https://fmovies.wtf/series/city-on-fire-qzwpn">City on Fire</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 4 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="20mxq?/cacheb0969e">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/the-marvelous-mrs-maisel-20mxq" title="The Marvelous Mrs. Maisel" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/494222d9360f6a3ef0042dc5f0dfdd75.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 8.70 </span>
                              <h3> <a class="title" title="The Marvelous Mrs. Maisel" href="https://fmovies.wtf/series/the-marvelous-mrs-maisel-20mxq">The Marvelous Mrs. Maisel</a> </h3>
                              <div class="meta"> SS 5 <i class="dot"></i> EP 8 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="olww8?/cache92e1c3">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/citadel-olww8" title="Citadel" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/1801df18711537c14f8b1aa164984055.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.30 </span>
                              <h3> <a class="title" title="Citadel" href="https://fmovies.wtf/series/citadel-olww8">Citadel</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 5 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="nkqq8?/cachebb611b">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/yakitori-soldiers-of-misfortune-nkqq8" title="Yakitori: Soldiers of Misfortune" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/f7bb1498cf34ad101b772aef8c9c2f73.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> ? </span>
                              <h3> <a class="title" title="Yakitori: Soldiers of Misfortune" href="https://fmovies.wtf/series/yakitori-soldiers-of-misfortune-nkqq8">Yakitori: Soldiers of Misfortune</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 6 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="pmvv6?/cache368305">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/xo-kitty-pmvv6" title="XO, Kitty" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/df87e1891c9da82c86ce2c2faa369a22.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> ? </span>
                              <h3> <a class="title" title="XO, Kitty" href="https://fmovies.wtf/series/xo-kitty-pmvv6">XO, Kitty</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 10 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="olrr8?/cached86b6b">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/kitti-katz-olrr8" title="Kitti Katz" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/8a72cd4c00e034e2f88cb5ba05b2a0d9.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> ? </span>
                              <h3> <a class="title" title="Kitti Katz" href="https://fmovies.wtf/series/kitti-katz-olrr8">Kitti Katz</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 10 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="yj44x?/cache40c854">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/farmer-wants-a-wife-yj44x" title="Farmer Wants A Wife" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/22910259e452881221906a62a3c35d0f.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 5.00 </span>
                              <h3> <a class="title" title="Farmer Wants A Wife" href="https://fmovies.wtf/series/farmer-wants-a-wife-yj44x">Farmer Wants A Wife</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 11 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="0m8n5?/cachee2c191">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/the-masked-singer-0m8n5" title="The Masked Singer" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/2ab81cdfa75f24374b85c1bfb1f839f8.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 5.80 </span>
                              <h3> <a class="title" title="The Masked Singer" href="https://fmovies.wtf/series/the-masked-singer-0m8n5">The Masked Singer</a> </h3>
                              <div class="meta"> SS 9 <i class="dot"></i> EP 14 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="kxz2r?/cache582378">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/nova-kxz2r" title="Nova" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/ccb29a5486527677983e47a66b7eeb2c.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 8.70 </span>
                              <h3> <a class="title" title="Nova" href="https://fmovies.wtf/series/nova-kxz2r">Nova</a> </h3>
                              <div class="meta"> SS 50 <i class="dot"></i> EP 9 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="82w7q?/cacheae650b">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/life-below-zero-first-alaskans-82w7q" title="Life Below Zero: First Alaskans" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/7ee96c42feffcfcdbda2b9c9e53af01d.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.90 </span>
                              <h3> <a class="title" title="Life Below Zero: First Alaskans" href="https://fmovies.wtf/series/life-below-zero-first-alaskans-82w7q">Life Below Zero: First Alaskans</a> </h3>
                              <div class="meta"> SS 2 <i class="dot"></i> EP 6 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="41orj?/cache340fa0">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/dr-pimple-popper-41orj" title="Dr. Pimple Popper" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/0acf80a47b761aa80702c04b8d96d0eb.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.60 </span>
                              <h3> <a class="title" title="Dr. Pimple Popper" href="https://fmovies.wtf/series/dr-pimple-popper-41orj">Dr. Pimple Popper</a> </h3>
                              <div class="meta"> SS 9 <i class="dot"></i> EP 7 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="mjr8x?/cache245e6c">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/mrs-davis-mjr8x" title="Mrs. Davis" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/5f588e3df3ece9443fdbeb5997d5bf6e.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.20</span>
                              <h3> <a class="title" title="Mrs. Davis" href="https://fmovies.wtf/series/mrs-davis-mjr8x">Mrs. Davis</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 8 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="lxoq3?/cache366fbd">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/the-secret-romantic-guesthouse-lxoq3" title="The Secret Romantic Guesthouse" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/73456bfac2883a97afb664384bd66cad.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.70 </span>
                              <h3> <a class="title" title="The Secret Romantic Guesthouse" href="https://fmovies.wtf/series/the-secret-romantic-guesthouse-lxoq3">The Secret Romantic Guesthouse</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 18 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="30ljr?/cache96b29a">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/married-at-first-sight-30ljr" title="Married at First Sight" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/ac7176fa28f3a1a91f872c368ca5698b.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.20 </span>
                              <h3> <a class="title" title="Married at First Sight" href="https://fmovies.wtf/series/married-at-first-sight-30ljr">Married at First Sight</a> </h3>
                              <div class="meta"> SS 16 <i class="dot"></i> EP 20 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="pmvrq?/cachec3633c">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/the-other-two-pmvrq" title="The Other Two" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/4294ffece61286828e98128f9c934dfd.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.80 </span>
                              <h3> <a class="title" title="The Other Two" href="https://fmovies.wtf/series/the-other-two-pmvrq">The Other Two</a> </h3>
                              <div class="meta"> SS 3 <i class="dot"></i> EP 4 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="lxq93?/cache649865">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/love-death-lxq93" title="Love &amp; Death" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/7390d9518eac7cec1845cd2effe70409.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.60 </span>
                              <h3> <a class="title" title="Love &amp; Death" href="https://fmovies.wtf/series/love-death-lxq93">Love &amp; Death</a> </h3>
                              <div class="meta"> SS 1 <i class="dot"></i> EP 6 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="olr0j?/cache98f74f">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/fear-the-walking-dead-olr0j" title="Fear the Walking Dead" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/03fdd35184e5a2c811430ed5d0f61fa2.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.80 </span>
                              <h3> <a class="title" title="Fear the Walking Dead" href="https://fmovies.wtf/series/fear-the-walking-dead-olr0j">Fear the Walking Dead</a> </h3>
                              <div class="meta"> SS 8 <i class="dot"></i> EP 2 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="1786p?/cache7f9b7a">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/dave-1786p" title="Dave" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/b6d9e31908af97f9b6613744fd524947.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 8.20 </span>
                              <h3> <a class="title" title="Dave" href="https://fmovies.wtf/series/dave-1786p">Dave</a> </h3>
                              <div class="meta"> SS 3 <i class="dot"></i> EP 8 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="j2yly?/cache46bf14">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/vanderpump-rules-j2yly" title="Vanderpump Rules" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/49c6892ad6cae909780a216bcfc0c2b5.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 5.70 </span>
                              <h3> <a class="title" title="Vanderpump Rules" href="https://fmovies.wtf/series/vanderpump-rules-j2yly">Vanderpump Rules</a> </h3>
                              <div class="meta"> SS 10 <i class="dot"></i> EP 15 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="kxz9r?/cachee46a11">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/the-flash-kxz9r" title="The Flash" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/7b1f491e410cba0b10bcabfcfddd65fd.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 7.50 </span>
                              <h3> <a class="title" title="The Flash" href="https://fmovies.wtf/series/the-flash-kxz9r">The Flash</a> </h3>
                              <div class="meta"> SS 9 <i class="dot"></i> EP 12 <i class="type">TV</i> </div>
                          </div>
                          <div class="item tooltipstered" data-tip="olyy8?/cache7022bc">
                              <div class="icons">
                                  <div class="quality">HD</div>
                              </div> <a href="https://fmovies.wtf/series/riverdale-olyy8" title="Riverdale" class="poster"> <img src="./Watch TV Series Online, Watch TV Shows Online Free_files/30d8618fb8fa49c73eea22196ec9edfa.jpg-w280"> </a> <span class="imdb"> <i class="fa fa-star"></i> 6.50 </span>
                              <h3> <a class="title" title="Riverdale" href="https://fmovies.wtf/series/riverdale-olyy8">Riverdale</a> </h3>
                              <div class="meta"> SS 7 <i class="dot"></i> EP 8 <i class="type">TV</i> </div>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                      <div class="pagenav">
                          <ul class="pagination">
                              <li class="disabled"> <span>«</span> </li>
                              <li class="active"> <span>1</span> </li>
                              <li> <a href="https://fmovies.wtf/tv-series?page=2">2</a> </li>
                              <li> <a href="https://fmovies.wtf/tv-series?page=3">3</a> </li>
                              <li> <a href="https://fmovies.wtf/tv-series?page=4">4</a> </li>
                              <li> <a href="https://fmovies.wtf/tv-series?page=5">5</a> </li>
                              <li> <a href="https://fmovies.wtf/tv-series?page=2" rel="next">→</a> </li>
                              <li> <a href="https://fmovies.wtf/tv-series?page=296">»</a> </li>
                          </ul>
                      </div>
                  </div>
              </section>
          </div>
      </div>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col about">
                    <div>
                        <div class="logo">
                            <img src="https://s1.bunnycdn.ru/assets/sites/fmovies/logo2.png">
                        </div>
                        <div class="desc">
                            <p>FMovies is top of <strong>free streaming website</strong>, where to watch movies online free without registration required. With a big database and great features, we're confident FMovies is the best free movies online website in the space that you can't simply miss! </p>
                            <p>
                                <a href="https://twitter.com/fmoviesdotto" target="_blank">
                                    <i class="fab fa-twitter"></i> Connect with us on twitter 
                                </a>
                            </p>
                            <p class="small font-italic">This site does not store any files on our server, we only linked to the media which is hosted on 3rd party services.</p>
                        </div>
                    </div>
                </div>
                <div class="links">
                    <div class="bl">
                        <div class="heading">Links</div>
                            <ul>
                                <li>
                                    <a href="/movies">Movies</a>
                                </li>
                                <li>
                                    <a href="/tv-series">TV-Shows</a>
                                </li>
                                <li>
                                    <a href="/most-watched">Most Watched</a>
                                </li>
                                <li>
                                    <a href="/top-imdb">Top IMDb</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bl">
                            <div class="heading"></div>
                            <ul>
                                <li>
                                <a href="genre/action" title="Action Movies and Shows">Action Movies</a>
                                </li>
                                <li>
                                <a href="genre/horror" title="Horror Movies and Shows">Horror Movies</a>
                                </li>
                                <li>
                                <a href="genre/sci-fi" title="Sci-fi Movies and Shows">Sci-fi Movies</a>
                                </li>
                                <li>
                                <a href="genre/thriller" title="Thriller Movies and Shows">Thriller Movies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="bl">
                            <div class="heading"></div>
                            <ul>
                                <li>
                                    <a href="contact" title="Contact us">Contact</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#md-request">Request</a>
                                </li>
                            </ul>
                        </div>
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
        </div>
    </footer>

    <!-- MODAL -->
    <div class="modal fade" id="md-register" tabindex="-1" role="dialog" aria-hidden="true" data-autodismiss="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">Create Account</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="closeBtn" aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-muted">Create an account to enjoy more features</p>
            <div style="display: none;"></div>
            <form autocomplete="off" class="ajax" data-action="ajax/user/register" data-user="true">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control form-control-lg" name="username" placeholder="Your username" required="">
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control form-control-lg" name="email" placeholder="Your email" required="">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control form-control-lg" name="password" placeholder="Your password" required="">
              </div>
              <div class="form-group">
                <label>Password confirmation</label>
                <input type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Repeat your password" required="">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-5">
                    <img class="captcha tip" data-src="https://fmovies.wtf/captcha/default?xQm0Y8yt" title="" style="cursor: pointer;" data-original-title="Click to reload">
                  </div>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form-control-lg" name="captcha" placeholder="Enter the captcha" required="">
                  </div>
                </div>
              </div>
              <div class="form-group mt-4">
                <button type="submit" class="btn rd full mt-2 btn-lg btn-primary">Register</button>
              </div>
              <div class="loader"></div>
            </form>
          </div>
          <div class="modal-footer">
            <span class="text-muted">Already have an account?</span>
            <a href="https://fmovies.wtf/#" data-rmodal="#md-login">Sign in</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="md-login" tabindex="-1" role="dialog" data-autodismiss="true" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">Sign In</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="close-Btn" aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div style="display: none;"></div>
            <form id="loginForm" autocomplete="off" class="ajax" data-action="ajax/user/login" data-user="true">
              <div class="form-group">
                <label>Your account</label>
                <input type="text" class="form-control form-control-lg" name="username" placeholder="Your username or email" required="">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control  form-control-lg" name="password" placeholder="Password" required="">
                <small class="form-text text-muted2 text-right">
                  <a href="https://fmovies.wtf/#" data-rmodal="#md-forgot-password">Forgot your password?</a>
                </small>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" checked="checked">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <div class="form-group mt-4">
                <button type="submit" class="btn full mt-2 btn-lg btn-primary">Login</button>
              </div>
              <div class="loader"></div>
            </form>
          </div>
          <div class="modal-footer">
            <span class="text-muted">Don't have an account? </span>
            <a href="https://fmovies.wtf/#" data-rmodal="#md-register">Register</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="md-forgot-password" data-prevent-duplicate="true" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">Reset Password</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="closeBtn" aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div style="display: none;"></div>
            <form autocomplete="off" class="ajax" data-action="ajax/user/forgot-password">
              <div class="form-group">
                <label>Your account</label>
                <input type="text" class="form-control form-control-lg" name="identifier" placeholder="Enter your username or email" required="">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-5">
                    <img class="captcha tip" data-src="https://fmovies.wtf/captcha/default?yhrie3DV" title="" style="cursor: pointer;" data-original-title="Click to reload">
                  </div>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form-control-lg" name="captcha" placeholder="Enter the captcha" required="">
                  </div>
                </div>
              </div>
              <div class="form-group mt-4">
                <button type="button" class="submit btn rd full mt-2 btn-lg btn-primary">Forgot</button>
              </div>
              <div class="loader"></div>
            </form>
          </div>
          <div class="modal-footer">
            <a href="https://fmovies.wtf/#" data-rmodal="#md-login">Back to Sign In</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="md-request" data-prevent-duplicate="true" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 450px">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">Send Your Request</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body mb-3">
            <p class="text-muted">If your movie/shows isn't listed in our library, you can send your request here, we will try to make it available asap!</p>
            <div style="display: none;"></div>
            <form autocomplete="off" class="ajax" data-action="ajax/film/request" data-source="ajax/film/search?form=request" data-once="true">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control form-control-lg" name="email" placeholder="Your email" required="">
              </div>
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="autocomplete form-control form-control-lg" name="title" placeholder="Enter your movie/show name" required="" autocomplete="off">
              </div>
              <div class="suggestions" style="display:none"></div>
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control form-control-lg" name="description" placeholder="Link IMDb if possible" required="">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-5">
                    <img class="captcha tip" data-src="https://fmovies.wtf/captcha/default?KQGhWVy1" title="" style="cursor: pointer;" data-original-title="Click to reload">
                  </div>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form-control-lg" name="captcha" placeholder="Enter the captcha" required="">
                  </div>
                </div>
              </div>
              <div class="form-group mt-4">
                <button type="button" class="submit btn rd full mt-2  mb-4 btn-lg btn-primary">Send Request</button>
              </div>
              <input type="hidden" name="vrf">
              <div class="loader"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL -->

    <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script defer src="./node_modules/@fortawesome/fontawesome-free/js/fontawesome.min.js"></script>
    <script defer src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script defer src="./assets/js/main.js"></script>
    <!-- <script defer src="./assets/js/swiper.min.js"></script> -->
  </body>
</html>