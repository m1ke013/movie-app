@extends('layouts.app')
@section('content')
  <!-- MAIN CONTENT -->
  <section id="main-content">
      <div class="container">
          <div class="row">
              <div class="col content-center">

                  <div class="logo">
                      <img src="logo2.png">
                  </div>

                  <div class="mb-4 share-btns" data-url="https://fmovies.wtf/" data-title="FMovies | Watch Movies Online Free on FMovies.to" data-description="Watch online movies for free, watch movies free in high quality without registration.  Just a better place for watching online movies for free. Fmovies.to, FFmovies.is, FFmovies.to">
                      <div id="share-btns-wrapper" class="resp-share-element style-responsive share-btns-mobile share-smartlayers share-btns-animated share-btns-show" aria-labelledby="Share Buttons" role="region">
                          <span id="share-apps" class="share-apps-hidden">Social Media Share Buttons</span>
                          <div class="share-btns-attr">

                              <!-- FACEBOOK -->
                              <a role="button" tabindex="0" class="share-icon-wrapper social-share-btn social-share-facebook" style="background-color: rgb(59, 89, 152); border-radius: 0px;">
                                  <span class="share-apps-hidden">Share to Facebook</span>
                                  <span class="share-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                          <title id="at-svg-facebook-1">Facebook</title>
                                          <g>
                                              <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                                          </g>
                                      </svg>
                                  </span>
                                  <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Facebook</span>
                              </a>

                              <!-- TWITTER -->
                              <a role="button" tabindex="0" class="share-icon-wrapper social-share-btn social-share-twitter" style="background-color: rgb(29, 161, 242); border-radius: 0px;">
                                  <span class="share-apps-hidden">Share to Twitter</span>
                                  <span class="share-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                          <title id="at-svg-twitter-2">Twitter</title>
                                          <g>
                                              <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                                          </g>
                                      </svg>
                                  </span>
                                  <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Twitter</span>
                              </a>

                              <!-- EMAIL -->
                              <a role="button" tabindex="0" class="share-icon-wrapper social-share-btn social-share-email" style="background-color: rgb(132, 132, 132); border-radius: 0px;">
                                  <span class="share-apps-hidden">Share to Email</span>
                                  <span class="share-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
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

                              <!-- PINTEREST -->
                              <a role="button" tabindex="0" class="share-icon-wrapper social-share-btn social-share-pinterest_share" style="background-color: rgb(203, 32, 39); border-radius: 0px;">
                                  <span class="share-apps-hidden">Share to Pinterest</span>
                                  <span class="share-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-pinterest_share-4" class="at-icon at-icon-pinterest_share" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                          <title id="at-svg-pinterest_share-4">Pinterest</title>
                                          <g>
                                              <path d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z" fill-rule="evenodd"></path>
                                          </g>
                                      </svg>
                                  </span>
                                  <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Pinterest</span>
                              </a>

                              <!-- WHATSAPP -->
                              <a role="button" tabindex="0" class="share-icon-wrapper social-share-btn social-share-whatsapp" style="background-color: rgb(77, 194, 71); border-radius: 0px;">
                                  <span class="share-apps-hidden">Share to WhatsApp</span>
                                  <span class="share-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-whatsapp-5" class="at-icon at-icon-whatsapp" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                          <title id="at-svg-whatsapp-5">WhatsApp</title>
                                          <g>
                                              <path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
                                          </g>
                                      </svg>
                                  </span>
                                  <span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">WhatsApp</span>
                              </a>

                              <!-- TELEGRAM -->
                              <a role="button" tabindex="0" class="share-icon-wrapper social-share-btn social-share-telegram" style="background-color: rgb(0, 136, 204); border-radius: 0px;">
                                  <span class="share-apps-hidden">Share to Telegram</span>
                                  <span class="share-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
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

                              <!-- SHARE MORE -->
                              <a role="button" tabindex="0" class="share-icon-wrapper social-share-btn social-share-compact" style="background-color: rgb(255, 101, 80); border-radius: 0px;">
                                  <span class="share-apps-hidden">Share to More</span>
                                  <span class="share-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-7" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                          <title id="at-svg-addthis-7">AddThis</title>
                                          <g>
                                              <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
                                          </g>
                                      </svg>
                                  </span>
                                  <span class="share-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">More</span>
                                  <span class="at4-share-count-container" style="font-size: 10.2px; line-height: 16px; color: rgb(255, 255, 255);">91.2K</span>
                              </a>

                          </div>
                      </div>
                  </div>
                  <div class="content-text">
                      <h1 class="title-text">Watch Movies Online Free</h1>
                      <div class="text-muted">
                          <div class="shorting-text"> fmovies.to - Just a better place to <strong>watch movies online for free</strong>. It allows you to <strong>watch movies online</strong> in high quality for free. No registration is required. The content is updated daily with fast streaming servers, multi-language subtitles supported. Just open fmovies.to and watch your... <span class="more">
                              <i class="fa fa-plus"></i> more </span>
                          </div>
                          <div>Please help us by sharing this site with your friends. Thanks!</div>
                      </div>
                      <div>
                          <a href="https://twitter.com" target="_blank">
                              <i class="fab fa-twitter"></i> Connect with us on twitter 
                          </a>
                      </div>
                  </div> 
                  <a href="home.html" class="mt-5 btn btn-lg btn-outline-primary">Go to fmovies.wtf</a>
              </div> 
          </div>
      </div>
  </section>
@endsection