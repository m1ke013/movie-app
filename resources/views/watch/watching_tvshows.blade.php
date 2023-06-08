@extends('layouts.app')
@section('content')
<!-- MAIN CONTENT -->
<div id="watch-video">
  @foreach ( $findMovie as $movie)
    <div class="nav"> <!--BREADCRUMBS-->
        <div class="container">
            <ol class="breadcrumb" itemscope="">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="">
                <a itemprop="item" href="{{route('index')}}" title="Watch online movies">
                <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="">
                <a itemprop="item" href="" title="Movies">
                <span itemprop="name">Movies</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
            <li class="breadcrumb-item active" itemprop="itemListElement" itemscope="">
                <a itemprop="item" href="#" title="{{$movie['name']}}">
                <span itemprop="name">{{$movie['name']}}</span>
                </a>
                <meta itemprop="position" content="3">
            </li>
            </ol>
        </div>
    </div>
    <div id="watch" data-id="kxn7w" data-type="movie" data-short-url="https://fmovies.wtf/watch/kxn7w" data-epid="" data-epname="">
      <div class="play" style="background-image:url('https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}')">
        <div class="container">
          <div class="d-flex justify-content-center" style="position: relative; z-index: 2;">
            <div id="bg_00000000"></div>
            
            <div class="bg-ssp-6140" style="width:728px!important;height:90px!important;position:relative!important;text-align:left!important;overflow:hidden!important;">
              <div style="display:none">
                <img data-cfasync="false" src="./FMovies _ Watch Hypnotic (2023) Online Free on fmovies.wtf_files/re`c" rel="noindex nofollow" referrerpolicy="unsafe-url">
              </div>
              <script data-cfasync="false" async="" type="text/javascript" src="./FMovies _ Watch Hypnotic (2023) Online Free on fmovies.wtf_files/60442"></script>
              <style>
                .bg-ssp-6140 {
                  display: flex;
                  justify-content: center;
                }
              </style>
              
            </div>
          </div>
        <!-- Season -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Season
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <!-- Episode -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Episode
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
          <div id="video-player">
            {{-- <video id="player" controls>
              <source src="https://mega.nz/folder/Pt8AHLAC#tAte3gNlNossthoHiSCL5w/file/fkN3HKjb" type="video/mkv">
            </video> --}}
            {{-- <iframe  id="player" frameborder="0" src="https://mega.nz/embed/Pt8AHLAC#tAte3gNlNossthoHiSCL5w/file/fkN3HKjb" allowfullscreen allow="autoplay;"></iframe> --}}

            {{-- <iframe width="560" height="315" src="https://autoembed.to/movie/tmdb/{{$movie_id}}?server=1" frameborder="0" allowfullscreen></iframe>
            <iframe id="player"  src="https://2embed.org/embed/movie?tmdb=603692" allowfullscreen allowtransparency allow="autoplay">  </iframe>  --}}
            {{-- <iframe id="player" src="https://autoembed.to/movie/tmdb/{{$movie_id}}?server=1" allowfullscreen="" allowtransparency="" allow="autoplay">  </iframe>	 --}}
            {{-- <iframe id="vid-series" src="https://autoembed.to/tv/tmdb/{{$movie_id}}?server=1" allowfullscreen="" allowtransparency="" allow="autoplay">   </iframe> --}}
						
            {{-- Movie  ID "-" SEASON "-" EPISODE !!!!!!IMPORTANTE--}}  
            <iframe id="player" src="https://autoembed.to/tv/tmdb/{{$movie_id}}-{{$season=1}}-{{$episode=1}}?server=1" allowfullscreen="" allowtransparency="" allow="autoplay">   </iframe>
                        {{-- <iframe id="frame2" src="https://www.2embed.to/embed/tmdb/tv?id={{$movie_id}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen="" style="background: rgba(255, 255, 255, 0.79);"></iframe> --}}
          </div>
        </div>
      </div>
      <div class="container">
        <div id="controls">
          <div class="items">
            <div data-name="autoplay" class="ctl onoff d-none d-md-block">
              <i class="fa fa-circle" style="font-weight:400"></i> Auto play
            </div>
            <div data-name="autonext" data-default="1" class="ctl onoff d-none d-md-block">
              <i class="fa fa-check-circle"></i> Auto next
            </div>
            <div class="ctl light d-none d-md-block">
              <i class="fa fa-adjust"></i> Toggle light
            </div>
            <div class="bookmark" data-id="kxn7w" data-action="add" data-add="&lt;i class=&#39;fa fa-heart&#39; style=&#39;font-weight: 400&#39;&gt;&lt;/i&gt; Add to list" data-remove="&lt;i class=&#39;fa fa-times&#39;&gt;&lt;/i&gt; Remove from list" data-fetch="true">
              <i class="fa fa-heart" style="font-weight: 400"></i> Add to list
            </div>
            <div data-go="#comment">
              <i class="fa fa-comment"></i> Comment
            </div>
            <div class="ctl report" data-toggle="modal" data-target="#md-report">
              <i class="fa fa-exclamation-circle"></i> Report Issue
            </div>
          </div>
          <div class="share">
            <div class="share_toolbox" data-url="https://fmovies.wtf/movie/hypnotic-kxn7w" data-title="FMovies | Watch Hypnotic (2023) Online Free on fmovies.wtf" data-description="Watch Hypnotic 2023 full Movie free, download hypnotic 2023. Stars: Ben Affleck, Alice Braga, Jd Pardo" style="clear: both;">
              <div id="share_box" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-a5321174-ab2e-4484-b709-3f2c90fbacad" role="region">
                <span id="at-a5321174-ab2e-4484-b709-3f2c90fbacad" class="at4-visually-hidden">AddThis Sharing Buttons</span>
                <div class="at-share-btn-elements">
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 0px;">
                    <span class="at4-visually-hidden">Share to Facebook</span>
                    <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                        <title id="at-svg-facebook-1">Facebook</title>
                        <g>
                          <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Facebook</span>
                  </a>
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 0px;">
                    <span class="at4-visually-hidden">Share to Twitter</span>
                    <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                        <title id="at-svg-twitter-2">Twitter</title>
                        <g>
                          <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Twitter</span>
                  </a>
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-email" style="background-color: rgb(132, 132, 132); border-radius: 0px;">
                    <span class="at4-visually-hidden">Share to Email</span>
                    <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-email-3" class="at-icon at-icon-email" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                        <title id="at-svg-email-3">Email</title>
                        <g>
                          <g fill-rule="evenodd"></g>
                          <path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path>
                          <path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Email</span>
                  </a>
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-pinterest_share" style="background-color: rgb(203, 32, 39); border-radius: 0px;">
                    <span class="at4-visually-hidden">Share to Pinterest</span>
                    <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-pinterest_share-4" class="at-icon at-icon-pinterest_share" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                        <title id="at-svg-pinterest_share-4">Pinterest</title>
                        <g>
                          <path d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z" fill-rule="evenodd"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Pinterest</span>
                  </a>
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-whatsapp" style="background-color: rgb(77, 194, 71); border-radius: 0px;">
                    <span class="at4-visually-hidden">Share to WhatsApp</span>
                    <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-whatsapp-5" class="at-icon at-icon-whatsapp" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                        <title id="at-svg-whatsapp-5">WhatsApp</title>
                        <g>
                          <path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">WhatsApp</span>
                  </a>
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-telegram" style="background-color: rgb(0, 136, 204); border-radius: 0px;">
                    <span class="at4-visually-hidden">Share to Telegram</span>
                    <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-telegram-6" class="at-icon at-icon-telegram" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                        <title id="at-svg-telegram-6">Telegram</title>
                        <g>
                          <g fill-rule="evenodd"></g>
                          <path d="M15.02 20.814l9.31-12.48L9.554 17.24l1.92 6.42c.225.63.114.88.767.88l.344-5.22 2.436 1.494z" opacity=".6"></path>
                          <path d="M12.24 24.54c.504 0 .727-.234 1.008-.51l2.687-2.655-3.35-2.054-.344 5.22z" opacity=".3"></path>
                          <path d="M12.583 19.322l8.12 6.095c.926.52 1.595.25 1.826-.874l3.304-15.825c.338-1.378-.517-2.003-1.403-1.594L5.024 14.727c-1.325.54-1.317 1.29-.24 1.625l4.98 1.58 11.53-7.39c.543-.336 1.043-.156.633.214"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Telegram</span>
                  </a>
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 0px;">
                    <span class="at4-visually-hidden">Share to More</span>
                    <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-7" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                        <title id="at-svg-addthis-7">AddThis</title>
                        <g>
                          <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">More</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="watch-extra" itemscope="" itemtype="http://schema.org/Movie">
        @foreach ( $findMovie as $movie)
          <div class="bl-1">
            <section class="info">
              <div class="poster">
                <span>
                  <img itemprop="image" src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="">
                </span>
              </div>
              <div class="info">
                {{-- <div class="rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" data-value="5.8" data-count="60">
                  <meta itemprop="bestRating" content="10">
                  <span class="stars">
                    <span class="fa fa-star" data-value="2">
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="fa fa-star" data-value="4">
                      <i class="fa fa-star"></i>
                    </span>
                    <span class="fa fa-star" data-value="6">
                      <i class="fa fa-star-half"></i>
                    </span>
                    <span class="fa fa-star" data-value="8">
                      <i class="fa fa-star none"></i>
                    </span>
                    <span class="fa fa-star" data-value="10">
                      <i class="fa fa-star none"></i>
                    </span>
                  </span>
                  <span class="text" data-text="&lt;span itemprop=&#39;ratingValue&#39;&gt;$1&lt;/span&gt; of &lt;span itemprop=&#39;ratingCount&#39;&gt;$2&lt;/span&gt;">
                    <span itemprop="ratingValue">5.8</span> of <span itemprop="ratingCount">60</span>
                  </span>
                </div> --}}
                <h1 itemprop="name" class="title">{{$movie['name']}}</h1>
                <div class="meta lg">
                  <span class="imdb">
                    <i class="fa fa-star"></i> {{$movie['vote_average']}} </span>
                </div>
                <div itemprop="description" class="desc shorting" data-type="text"> {{$movie['overview']}} </div>
                <div class="meta">
                  <div>
                    <span>Genre:</span>
                    <span>

                      @foreach ( $genres as $genre )
                        @foreach ( $movie['genre_ids'] as $id)                  
                            @if ($id == $genre['id'])
                            <a href="https://fmovies.wtf/genre/thriller" title="{{$genre['name']}}">{{$genre['name']}}</a>,                           
                            @endif        
                          @endforeach
                      @endforeach
                    </span>
                  </div>
                  <div>
                    <span>Release:</span>
                    <span itemprop="dateCreated">{{$movie['first_air_date']}}</span>
                  </div>
              <div class="clearfix"></div>
            </section>
            <section id="comment" class="bl" data-src="https://fmoviescomment.disqus.com/embed.js" data-identifier="66601" data-url="https://fmovies.wtf/watch/kxn7w">
              <div class="heading simple">
                <h2 class="title">Comment</h2>
              </div>
            </section>
          </div> 
        @endforeach
          <div class="bl-2">
            <section class="bl">
              <div class="heading simple">
                <h2 class="title">You may also like</h2>
              </div>
              <div class="content">
                <div class="filmlist ">
                  @foreach ($popularMovies as $movie)
                  <div class="item tooltipstered" data-tip="">
                    <div class="icons">
                      <div class="quality">HD</div>
                    </div>
                    <a href="/movie/{{$movie['id']}}" title="{{$movie['title']}}" class="poster">
                      <img  src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}">
                    </a>
                    <span class="imdb">
                      <i class="fa fa-star"></i> {{$movie['vote_average']}} </span>
                    <h3>
                      <a class="title" href="/movie/{{$movie['id']}}" title="{{$movie['title']}}">{{$movie['title']}}</a>
                    </h3>
                    <div class="meta"> {{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}  <i class="type"> Movie </i>
                    </div>
                  </div>
                  @endforeach
                  <div class="clearfix"></div>
                </div>
              </div>
            </section>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    @endforeach
    <div class="modal fade" id="md-share" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">Sharing is caring</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <p>It's the biggest motivation to help us to make the site better.</p>
            <div class="addthis_inline_share_toolbox_5d42" data-url="https://fmovies.wtf/movie/hypnotic-kxn7w" data-title="FMovies | Watch Hypnotic (2023) Online Free on fmovies.wtf" data-description="Watch Hypnotic 2023 full Movie free, download hypnotic 2023. Stars: Ben Affleck, Alice Braga, Jd Pardo" style="clear: both;">
              <div id="atstbx4" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-399d4777-120c-45ae-bf8d-5f1c60bbce2a" role="region">
                <span id="at-399d4777-120c-45ae-bf8d-5f1c60bbce2a" class="at4-visually-hidden">AddThis Sharing Buttons</span>
                <div class="at-share-btn-elements">
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 4px;">
                    <span class="at4-visually-hidden">Share to Facebook</span>
                    <span class="at-icon-wrapper" style="line-height: 48px; height: 48px; width: 48px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-8" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 48px; height: 48px;">
                        <title id="at-svg-facebook-8">Facebook</title>
                        <g>
                          <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 12.6px; line-height: 48px; height: 48px; color: rgb(255, 255, 255);">Facebook</span>
                  </a>
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 4px;">
                    <span class="at4-visually-hidden">Share to Twitter</span>
                    <span class="at-icon-wrapper" style="line-height: 48px; height: 48px; width: 48px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-9" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 48px; height: 48px;">
                        <title id="at-svg-twitter-9">Twitter</title>
                        <g>
                          <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 12.6px; line-height: 48px; height: 48px; color: rgb(255, 255, 255);">Twitter</span>
                  </a>
                  <a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 4px;">
                    <span class="at4-visually-hidden">Share to More</span>
                    <span class="at-icon-wrapper" style="line-height: 48px; height: 48px; width: 48px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-10" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 48px; height: 48px;">
                        <title id="at-svg-addthis-10">AddThis</title>
                        <g>
                          <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="at-label" style="font-size: 12.6px; line-height: 48px; height: 48px; color: rgb(255, 255, 255);">More</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="md-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 450px">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">Report an Issue</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body mb-4">
            <div style="display: none;"></div>
            <form method="POST">
              <p> Thank you for reporting an issue with this video. <br> Please let us know what's wrong so we can fix it ASAP. </p>
              <div class="form-group">
                <div class="name">Hypnotic (2023)</div>
                <div class="episode">
                  <span></span>
                </div>
              </div>
              <div class="form-group">
                <label>Video:</label>
                <div class="options">
                  <label>
                    <input type="checkbox" value="movie_empty"> No video </label>
                  <label>
                    <input type="checkbox" value="movie_wrong"> Wrong video </label>
                  <label>
                    <input type="checkbox" value="movie_other"> Other <small>(Please describe below)</small>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label>Audio:</label>
                <div class="options">
                  <label>
                    <input type="checkbox" value="audio_empty"> No Audio </label>
                  <label>
                    <input type="checkbox" value="audio_wrong"> Wrong Audio </label>
                  <label>
                    <input type="checkbox" value="audio_other"> Other <small>(Please describe below)</small>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label>Other:</label>
                <div class="options">
                  <textarea name="message"></textarea>
                </div>
              </div>
              <div class="form-group text-center">
                <button type="submit" class="mt-3 btn btn-lg btn-primary">Send Report</button>
              </div>
              <div class="loader"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

