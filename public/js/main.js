// MAIN JS FOR XMOVIES

document.getElementById("user").addEventListener("click", function() {
    document.getElementById("md-login").style.display = "block";
    document.getElementById("md-login").style.opacity = "1";
});

document.getElementsByClassName("close-Btn")[0].addEventListener("click", function() {
    document.getElementById("md-login").style.display = "none";
});

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Perform login logic here
    // You can retrieve the entered username and password using:
    // var username = document.getElementById("username").value;
    // var password = document.getElementById("password").value;
    // Example: check if the username is "admin" and the password is "password"
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username === "admin" && password === "password") {
        alert("Login successful!");
        document.getElementById("md-login").style.display = "none";
    } else {
        alert("Invalid username or password. Please try again.");
    }
});

// IMAGE SWIPER
    window.onload = function() {
      var swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          768: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
        },
        pagination: {
          el: '.swiper-pagination'
        },
        slidesPerView: 1,
        spaceBetween: 0
      });

      var swiperSlides = Array.from(swiper.slides);

      swiperSlides.forEach(function(slide) {
        openFullscreenSliderHandler(slide);
        closeFullscreenSliderHandler(slide);
      });

      function openFullscreenSliderHandler(slide) {
        var slideImage = slide.querySelector('img');

        slideImage.addEventListener('click', function() {
          var slideNumber = slide.dataset.swiperSlideIndex;
          openFullscreenSwiper(slideNumber);
        });
      }

      function openFullscreenSwiper(slideNumber) {
        swiper.el.classList.add('fullscreen');
        swiper.params.slidesPerView = 1;
        swiper.update();
        swiper.slideToLoop(parseInt(slideNumber, 10), 0);
      }

      function closeFullscreenSliderHandler(slide) {
        var slideNumber = slide.dataset.swiperSlideIndex;
        var backdrop = document.createElement('div');
        var closeButton = document.createElement('div');

        slide.appendChild(backdrop);
        slide.appendChild(closeButton);
        backdrop.classList.add('backdrop');
        closeButton.classList.add('close-button');
        closeButton.innerHTML = 'x';

        backdrop.addEventListener('click', function() {
          closeFullscreenSwiper(slideNumber);
        });

        closeButton.addEventListener('click', function() {
          closeFullscreenSwiper(slideNumber);
        });
      }

      function closeFullscreenSwiper(slideNumber) {
        swiper.el.classList.remove('fullscreen');
        swiper.params.slidesPerView = 1;
        swiper.update();
        swiper.slideToLoop(parseInt(slideNumber, 10), 0);
      }
    }


    // ================================
    $(document).ready(() => {
      $('#searchForm').on('input', (e) => {
  
          let searchText = $('#searchText').val();
  
          if (searchText == null) {
             // console.log(true);
          }
  
          getMovies(searchText);
          e.preventDefault();
      })
  })
  $(document).ready(() => {
      $('#searchForm2').on('input', (e) => {
  
          let searchText = $('#searchText2').val();
  
          if (searchText == null) {
              //console.log(true);
          }
  
          getMovies(searchText);
          e.preventDefault();
      })
  })
  $(document).ready(() => {
      $('#searchFormTv').on('input', (e) => {
  
          let searchTextTv = $('#searchTextTv').val();
  
          if (searchTextTv == null) {
              //console.log(true);
          }
  
          getTVShows(searchTextTv);
          e.preventDefault();
      })
  })
  // for pagination IMPORTANT!!
  let pageNum = 1;
  let pageNum2 = 2;
  
  // -----------------------------------
  
  
  
  
  
  
  // var btn = document.getElementById('searchBtn');
  // var search = document.getElementById('searchBox')
  // btn.addEventListener('submit', (event) => {
  //     e.preventDefault()
  //     getMovies(search.value);
  // })
  /*function popularMovies() {
    let one = "https://api.themoviedb.org/3/movie/popular?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=" + pageNum
    let two = "https://api.themoviedb.org/3/movie/popular?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=2"
      const requestOne = axios.get(one)
    const requestTwo = axios.get(two)
  
          axios.all([requestOne, requestTwo]).then(axios.spread((...responses) => {
    const responseOne = responses[0];
    const responseTwo = responses[1];
  
    //const joined = responseOne.concat(responseTwo);
           //   console.log(responseOne);
        // console.log(responseTwo);
  
              let movies = responseOne.data.results;			
              let output = '';
              $.each(movies, (index, movie) => {
  
                  if (movie.poster_path === null) {
                      poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movie.poster_path;
                  }
  
                  let date = movie.release_date;
  
                  let year = date.slice(0, 4);
                  output += `
                        
                        <div class="box" >
              <div class="flip-card-inner">
                <div class="flip-card-front">
                          <img src="${poster}" alt="poster" width="210" height="315" class="img" onclick="">
                            </div>
                             
                              <div class="flip-card-back"> 
                    <div class="browse-movie-bottom">
                       <div class="browse-movie-title">${movie.title}</div> 
                      <div class="browse-movie-year">${year}</div>
                      <p class="browse-movie-overview">${movie.overview}</p>
            
            
                                <div class="rating"> <i class="fa fa-star" style="color:#febf15;"> </i> ${movie.vote_average} </div>
                      <button type="submit" class="button" onclick="movieSelected('${movie.id}')">Watch</button>
                    </div>
                             </div>
      
                          </div>
                        </div>
                     
          
              `
              });
              $('#movies').html(output);
          })).catch(errors => {
          
             // console.log(error);
          });
  } */
  
  
  
  function getMovies(searchText) {
  
      axios.get('https://api.themoviedb.org/3/search/multi?api_key=5ec279387e9aa9488ef4d00b22acc451&query=' + searchText)
          //  axios.get('http://www.omdbapi.com/?apikey=a15bc27e&s=' + searchText)
          .then((response) => {
            //  console.log(response);
        
              let movies = response.data.results;
              let output = '';
              let output1 = '';
        
              $.each(movies, (index, movie) => {
          let media = movie.media_type;
                  if (movie.poster_path === null) {
                      poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else if (media === 'person') {
                      poster = "https://image.tmdb.org/t/p/w342" + movie.profile_path;	
              if (movie.profile_path === null){
                poster = "https://movieuniverse.se/wp-content/uploads/2022/09/hidden.jpg";
              }							
            }
                                                   
          else {
                poster = "https://image.tmdb.org/t/p/w342" + movie.poster_path;
                  }
                  
                      
          let name = [movie.title || movie.name] ;
                  let date = [movie.release_date || movie.first_air_date];				
          let year1 = date[0];				
          year1 = (year1 || []).slice(0,4);
          let year2 = date[1];
          year2 = (year2 || []).slice(0,4);
          let year3 = [year1 || year2]
          if (media === 'movie' || media === 'tv')
  {
                  output += `
                        
               <div class="search-container">
                <button type="button" class="search-list" value="${media}" onclick="setValueMedia(this); movieSelectedSearch('${movie.id}');">
                  <img src="${poster}" alt="poster" width="210" height="315" class="img-search" onclick="">
                  <div class="title-search">${name}</div> 
                  <div class="rating-search"> <i class="fa fa-star" style="color:#febf15;"> </i> ${movie.vote_average} </div> <i class="dot"></i>
                  <div class="year-search">${year3}</div>                        
                   <i class="dot"></i> 
                  <div class="media-search">${media}</div>  
                </button>
                </div>	 	
                       
                                                                                                                       
                                          
                  `		}	
  
          else
  {
                  output += `
                        
               <div class="search-container">
                <button type="button" class="search-list" value="${media}" onclick="setValueMedia(this); movieSelectedSearch('${movie.id}');">
                  <img src="${poster}" alt="poster" width="210" height="315" class="img-search" onclick="">
                  <div class="title-search">${name}</div> 								
                  <div class="media-search" style="padding-left:10px;">${media}</div>  
                </button>
                </div>	 	
                       
                                                                                                                       
                                          
                  `		}	
  
  
  
  
  
      
              });
              $('#search').html(output);
        $('#search2').html(output);
          })
          .catch((error) => {
             // console.log(error);
          });
  }
  // function for search to know if it's a movie or tv show
  function setValueMedia(o) {
    localStorage.setItem('media', o.value);
  }  
  
  
  // for selecting the id and opening the right page for the movie or tv show
  function movieSelectedSearch(id) {
      localStorage.setItem('id', id);
    let mediaType =	localStorage.getItem('media');
      //console.log(mediaType);
    if (mediaType == 'movie')
  {
      window.location = 'movie'; 
  }
    else if (mediaType == 'tv')
    window.location = 'tv-show';	
      
    else 
    window.location = '';
      return false;
  
  }
  function movieSelected(id) {
      localStorage.setItem('id', id);
      window.location = 'movie';
      return false;
  }
  function tvShowSelected(id) {
      localStorage.setItem('id', id);
      window.location = 'tv-show';
      return false;
  }
  
  
  
  function getReviews() {
  
      let movieId = localStorage.getItem('id');
      axios.get(`https://api.themoviedb.org/3/movie/${movieId}/reviews?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=1`)
  
      .then((response) => {
              // https://api.themoviedb.org/3/movie/299536/reviews?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=1
            //  console.log(response);
              let reviews = response.data.results;
             // console.log(reviews);
              let output = '';
        let output1 = '';
        if (reviews.length == 0) {
          output1 = '';
        }
        else	
        output1+=`<div class="container">
                  <div class="container main-review">
                <h1 class="title-second review-text">Review</h1>
                <div id="reviews"></div>
              </div>
            </div>`
              $.each(reviews, (index, review) => {
  
                  output += `
                          <div class="row review">
                              
                              <div class="col-md-10 box-review2">
                                  <h5>Reviewed by ${review.author}</h5>
                                  <div class="content">
                                      <p style="color:silver;">${review.content}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  `
              });
        $('#reviewsTitle').html(output1);
              $('#reviews').html(output);
          })
          .catch((error) => {
            //  console.log(error);
          });
  }
  
  function getMovie() {
      let movieId = localStorage.getItem('id');
  
      //test id -> 299536
      axios.get(`https://api.themoviedb.org/3/movie/${movieId}?api_key=5ec279387e9aa9488ef4d00b22acc451&append_to_response=credits,videos`)
          .then((response) => {
              // https://api.themoviedb.org/3/movie/299536/reviews?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=1
             // console.log(response);
              let movie = response.data;
  
              if (movie.poster_path === null) {
                  poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
              } else {
                  poster = "https://image.tmdb.org/t/p/w780" + movie.poster_path;
              }
  
              let date = movie.release_date;
        let credits = movie.credits;
        let cast = credits.cast;
        let index = [0];
        let video = response.data.videos.results;
        let videoID = '';
        // this is to determine if the video is trailer if not show the first video if not blank.
        if (video.length > 0 ){
        videoID = video[0].key;
          }
        
        for (let i = 0; i <= video.length; i++) {						
        if (video[i] && video[i].type == 'Trailer') {
           videoID = video[i].key;				 
          }				
          }
        
        
        //let cast_name = cast[index].name
        //let cast_character = cast[index].character;
        
              let year = date.slice(0, 4);
              let Rating = movie.vote_average;
        let rating = Math.round(Rating * 10) / 10;
                 
        let background = "https://image.tmdb.org/t/p/w1280" + movie.backdrop_path;			
        let tagline = response.tagline;
              let genre = [];			 
              movie.genres.forEach(element => {
                  genre.push(element.name);
              });
  
              genres = genre.join(' / ');
    let output2= '';
        
              let output1 = `
              <div class="row">
          <img class="backImage" src="${background}"> </img>
                  <div class="box1">
                      <img src="${poster}" class="poster-image">
            <div class="buttons-wrap">
            <div class="buttons-desktop">
                          <a href="http://imdb.com/title/${movie.imdb_id}" target="_blank" class="btn-one">View IMDB</a>
                          <!-- <a href="http://imdb.com/title/${movie.imdb_id}" target="_blank" class="btn-info">View IMDB</a> -->
                         <a class="iframe-lightbox-link btn-second" href="https://www.youtube.com/embed/${videoID}?autoplay=0" data-padding-bottom="56.25%">Trailer</a>						
                </div>
            </div>
                  </div>				
                  <div class="box2">
                      <h5 class="movie-title">${movie.title}
            <p class="tagline">${movie.tagline}</p>
            </h5>
            
                      <div class="movie-year">${year} &nbsp; ${genres} &nbsp; Rating: ${rating} &nbsp; Duration: ${movie.runtime} min</div>
  
            
  
                      <p class="overview">${movie.overview}</p> <div class="movie1">
  `	
    
    for (let index = 0; index < cast.length; index++) {
      if (cast.length > 4) {
                cast.length = 4;
              }
      if (cast[index].profile_path === null) {
                poster_profile = "https://movieuniverse.se/wp-content/uploads/2022/09/hidden.jpg";
              } else {
                  poster_profile = "https://image.tmdb.org/t/p/w92" + cast[index].profile_path;
              }		           
      
        
         output1 += `
              <div class="cast">
              <img class="cast_img" src="${poster_profile}">
                  <div class="cast_data">
                  <div class="cast_name">${cast[index].name}</div>
                <div class="cast_character">${cast[index].character}</div>
                
                   </div>
                  
              </div>
  `};
  
  output1 += `</div>
                     <div class="buttons">
                          <a href="http://imdb.com/title/${movie.imdb_id}" target="_blank" class="btn-one">View IMDB</a>
                          <!-- <a href="http://imdb.com/title/${movie.imdb_id}" target="_blank" class="btn-info">View IMDB</a> -->
                         <a class="iframe-lightbox-link btn-second" href="https://www.youtube.com/embed/${videoID}?autoplay=0" data-padding-bottom="56.25%">Trailer</a>						
                </div>
                      </div>
                  </div>
  </div>		
        <div id="video">
              <iframe class="iframe1" id="vid" src="https://autoembed.to/movie/tmdb/${movieId}?server=1" allowfullscreen allowtransparency allow="autoplay" >  </iframe> 
        <p class="under-video">If the current server is buffering or doesn't work please change to another one!</p>	
        </div>
  <!--
        <div id="video2" style="display:none;">
              <iframe class="iframe2" id="vid" src="https://2embed.org/embed/movie?tmdb=${movieId}" allowfullscreen allowtransparency allow="autoplay">  </iframe> 	
        <p class="under-video">If the current server is buffering or doesn't work please change a source below!</p>
        </div>
          <div class="sources">
          <div class="source1 source-series-active" onclick="listColorSource(this)" value="1">Source 1</div>
          <div class="source2 source-series-active" onclick="listColorSource(this)" value="2">Source 2</div>		
          </div>
  -->
              `
  $(document).ready(function() {
      $('.source2').click(function() {
          $("#video").hide();	
          $("#video2").show();
          $('.iframe1').attr('src', $('.iframe1').attr('src'));
          
      })
  });
    $(document).ready(function() {
       $('.source1').click(function() {
          $("#video2").hide();
           $("#video").show();        
           $('.iframe2').attr('src', $('.iframe2').attr('src'));
      })
    
  });
  
              $('#movie').html(output1);
        iframe();
          })
          .catch((error) => {
              //console.log(error);
          });
  }
  
  
  
  function similarMovies() {
    let movieId = localStorage.getItem('id');
      axios.get(`https://api.themoviedb.org/3/movie/${movieId}/recommendations?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=1`)
          .then((response) => {
            //  console.log(response);
  
              let movies = response.data.results;
              let output = '';
         let date = '';
        let output1 = '';
        if (movies.length == 0) {
          output1 = '';
        }
        else
         output1+= `<h3 class="headingLike">You may also like</h3>`
              for (let index = 0; index < movies.length; index++) {
          if (movies.length > 6){
            movies.length = 6
          }
          
          if (movies[index].poster_path === null){
                    
                      poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movies[index].poster_path;
             date = movies[index].release_date;
                  }
          
                  let Rating = movies[index].vote_average;
          let rating = Math.round(Rating * 10) / 10;
                  let year = date.slice(0, 4);				
                  output += `
                        
          <div class="box">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                          <img src="${poster}" alt="poster" width="210" height="315" class="img" onclick="" loading="lazy">
                            </div>
                             
                              <div class="flip-card-back"> 
                    <div class="browse-movie-bottom-similar">
                       <div class="browse-movie-title-similar">${movies[index].title}</div> 
                      <div class="browse-movie-year-similar">${year}</div>
                      <p class="browse-movie-overview-similar">${movies[index].overview}</p>
            
            
                                <div class="rating"> <i class="fa fa-star" style="color:#febf15;"> </i> ${rating} </div>
                      <button type="submit" class="button-similar" onclick="movieSelected('${movies[index].id}')">Watch</button>
                    </div>
                             </div>
      
                          </div>
                        </div>
              `	
              };
        $('#headingLike').html(output1);
              $('#movies').html(output);
          })
          .catch((error) => {
             // console.log(error);
          });
  }
  
  
  
  //// for top rated movies
  function TopMovies() {
    let one = ("https://api.themoviedb.org/3/movie/top_rated?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=" + pageNum)
    let two = ("https://api.themoviedb.org/3/movie/top_rated?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page="	+ pageNum2)
      const requestOne = axios.get(one)
    const requestTwo = axios.get(two)	
  
      axios.all([requestOne, requestTwo]).then(axios.spread((...responses) => {
    const responseOne = responses[0];
    const responseTwo = responses[1];
    
    const joined = responseOne.data.results.concat(responseTwo.data.results);
    
             // console.log(joined);
  
              let movies = joined;
              let output = '';
              $.each(movies, (index, movie) => {
  
                  if (movie.poster_path === null) {
                      poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movie.poster_path;
                  }
  
                  let date = movie.release_date;
          let rating = movie.vote_average
                  let year = date.slice(0, 4);
                  output += `
                      
                        <div class="box popout">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                          <img src="${poster}" alt="poster" width="210" height="315" class="img" onclick="" loading="lazy">
                            </div>
                             
                              <div class="flip-card-back"> 
                    <div class="browse-movie-bottom">
                       <div class="browse-movie-title">${movie.title}</div> 
                      <div class="browse-movie-year">${year}</div>
                      <p class="browse-movie-overview">${movie.overview}</p>
            
            
                                <div class="rating"> <i class="fa fa-star" style="color:#febf15;"> </i> ${movie.vote_average} </div>
                      <button type="submit" class="button" onclick="movieSelected('${movie.id}')">Watch</button>
                    </div>
                             </div>
      
                          </div>
                        </div>
          
              `
             });
          
              $('#movies').html(output);
          })).catch(errors => {
          
             //console.log(error);
          });
  } 
  
  
  
  
  /*function upcomingMovies() {
      axios.get('https://api.themoviedb.org/3/movie/upcoming?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=1')
          .then((response) => {
           //   console.log(response);
  
              let movies = response.data.results;
              let output = '';
              $.each(movies, (index, movie) => {
  
                  if (movie.poster_path === null) {
                      poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movie.poster_path;
                  }
  
                  let date = movie.release_date;
  
                  let year = date.slice(0, 4);
                  output += `
                      
                        <div class="box">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                          <img src="${poster}" alt="poster" width="210" height="315" class="img" onclick="">
                            </div>
                             
                              <div class="flip-card-back"> 
                    <div class="browse-movie-bottom">
                       <div class="browse-movie-title">${movie.title}</div> 
                      <div class="browse-movie-year">${year}</div>
                      <p class="browse-movie-overview">${movie.overview}</p>
            
            
                                <div class="rating"> <i class="fa fa-star" style="color:#febf15;"> </i> ${movie.vote_average} </div>
                      <button type="submit" class="button" onclick="movieSelected('${movie.id}')">Watch</button>
                    </div>
                             </div>
      
                          </div>
                        </div>
          
              `
              });
              $('#movies').html(output);
          })
          .catch((error) => {
              console.log(error);
          });
  }
  */
  
  
  // function to list all the genres in dropdown and give them an ID
  function movieGenres() {
    
      axios.get('https://api.themoviedb.org/3/genre/movie/list?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US')
          .then((response) => {
           //   console.log(response);
        
              let genres = response.data.genres;
        
              let output = '';
              $.each(genres, (id, genre) => {
                      let genreId = genre.id;
            
            let genreName = genre.name;
                  output += `
            <label class="container-radio" >						
                        <li class="list">${genreName}
                <input type="radio" class="radio" value="1" name="sorting1" onclick="genreSelected('${genreId}');resetPage(); discoverGenres();">
                              <span class="checkmark"></span>
  
  
              </li>                     	
            </label>
  
          
              `
              });
        //console.log(genreId);
              $('#genres').html(output);
        $('#genresMob').html(output);
      
          })
          .catch((error) => {
             // console.log(error);
          });
  
  }
  // function for sorting by years
  let year = 2023;
  function movieYears() {
    let output = '';
    
    for (let i = 2023; i >= 1950; i-- ) {
      
        output += `
          <label class="container-radio" >						
                        <li class="list"> ${year}
                <input type="radio" class="radio" value="${year}" name="sorting2" onclick="setValue(this);resetPage();discoverGenres();">
                              <span class="checkmark"></span>
  
  
              </li>                     	
            </label>
  
      
  `
  year--;
  $('#yearsMob').html(output);
  $('#years').html(output);
  
    }
  //console.log(year);
  }
  
  // function for setting the value of year on click
  function setValue(o) {
    sessionStorage.setItem('year', o.value);
  }
  
  
  
  // setting the genre so we can get below in query
  function genreSelected(genreId) {
     sessionStorage.setItem('genreid', genreId)   
      return false;
    
  } 
  // setting the genre so we can get below in query
  function genreSelectedTV(genreIdTV) {
     sessionStorage.setItem('genreidtv', genreIdTV)   
      return false;
    
  }
  // variable for sorting defined here
  let sortBy = 'popularity.desc';
  let genreReseted = 'null';
  
  
  
  // main function for homepage movies
  function discoverGenres() {
    let	genreId = sessionStorage.getItem('genreid');
    let years = sessionStorage.getItem('year');
    
   let one = ('https://api.themoviedb.org/3/discover/movie?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&sort_by=' + sortBy + '&with_genres=' + genreId + '&primary_release_year=' + years + '&page=' + pageNum)
   let two = ('https://api.themoviedb.org/3/discover/movie?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&sort_by=' + sortBy + '&with_genres=' + genreId + '&primary_release_year=' + years + '&page=' + pageNum2)
   
    const requestOne = axios.get(one)
    const requestTwo = axios.get(two)
    
  
      axios.all([requestOne, requestTwo]).then(axios.spread((...responses) => {
    const responseOne = responses[0];
    const responseTwo = responses[1]; 
    
  
    const joined = responseOne.data.results.concat(responseTwo.data.results);	
         
             // console.log(joined);
  
              let movies = joined;
              let output = '';
              $.each(movies, (index, movie) => {
  
                  if (movie.poster_path === null) {
                   poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movie.poster_path;
                  }
          
          
                  let date = movie.release_date;
          let rating = movie.vote_average
                  let year = date?.slice(0, 4);
                  output += `
                      
                        <div class="box popout">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                          <img src="${poster}"  alt="watch movies online" class="img" width="210" height="315" loading="lazy" >
                            </div>
                             
                              <div class="flip-card-back"> 
                    <div class="browse-movie-bottom">
                       <div class="browse-movie-title">${movie.title}</div> 
                      <div class="browse-movie-year">${year}</div>
                      <p class="browse-movie-overview">${movie.overview}</p>
            
            
                                <div class="rating"> <i class="fa fa-star" style="color:#febf15;"> </i> ${movie.vote_average} </div>
                      <button type="submit" class="button"  onclick="movieSelected('${movie.id}')">Watch</button>
                    </div>
                             </div>
      
                          </div>
                        </div>
            
              `
        
              });			
              
              $('#movies').html(output);
          
      //console.log (genreId);
          }))
          .catch((error) => {
              console.log(error);
          });
  }
  // Functions for pagination
  function nextPage() {
    pageNum +=2;
    pageNum2 +=2;	
    return {pageNum, pageNum2};
    
  }
  
  function prevPage() {
    while (pageNum > 1)
    {
    pageNum -=2;
    pageNum2 -=2;
    return {pageNum, pageNum2};
    }
  }
  function resetPage() {
    pageNum = 1;
    pageNum2 = 2;
    return {pageNum, pageNum2};
    
  }  
  //function to set revenue value and delete it for sorting
  function sortRevenue() {
    if (sortBy == 'revenue.desc')
      sortBy = 'popularity.desc';
    else 
    sortBy = 'revenue.desc'
    return sortBy;
    
  }
  //function to set vote count value and delete it for sorting
  function sortVote() {
    if (sortBy == 'vote_count.desc')
      sortBy = 'popularity.desc';
    else 
    sortBy = 'vote_count.desc'
    return sortBy;
    
  }
  
  // function on click to reset genre (button ALL)
  function genreReset() {
    sessionStorage.removeItem('genreid');
    sessionStorage.removeItem('genreidtv');
  }
  // function on click to reset genre (button ALL)
  function yearReset() {
    sessionStorage.removeItem('year');
  }
  
  
  
  
  //----------------------------------------------------------------------------------------- TV SHOWS ------------------------------------------------------------------
  
  function popularTVShows() {
    let	genreId = sessionStorage.getItem('genreidtv');
    let years = sessionStorage.getItem('year');
  
      let one = ('https://api.themoviedb.org/3/discover/tv?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US' + '&with_genres=' + genreId + '&first_air_date_year=' + years + '&page=' + pageNum)
      let two = ('https://api.themoviedb.org/3/discover/tv?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US' + '&with_genres=' + genreId + '&first_air_date_year=' + years + '&page=' + pageNum2)	
    const requestOne = axios.get(one)
    const requestTwo = axios.get(two)	
  
      axios.all([requestOne, requestTwo]).then(axios.spread((...responses) => {
      const responseOne = responses[0];
      const responseTwo = responses[1]; 	 
  
    
    const joined = responseOne.data.results.concat(responseTwo.data.results);
    
  
  
              let movies = joined;
              let output = '';
              $.each(movies, (index, movie) => {
  
                  if (movie.poster_path === null) {
                      poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movie.poster_path;
                  }
          let date = movie.first_air_date;
          let year = date.slice(0, 4);
                  let rating = movie.vote_average;
  
                  
                  output += `
                      
                        <div class="box popout">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                          <img src="${poster}" data-src="${poster}" alt="poster" width="210" height="315" class="img" onclick="" loading="lazy">
                            </div>
                             
                              <div class="flip-card-back"> 
                    <div class="browse-movie-bottom">
                       <div class="browse-movie-title">${movie.name}</div> 
                      <div class="browse-movie-year">${year}</div>
                      <p class="browse-movie-overview">${movie.overview}</p>
            
            
                                <div class="rating"> <i class="fa fa-star" style="color:#febf15;"> </i> ${movie.vote_average} </div>
                      <button type="submit" class="button" onclick="tvShowSelected('${movie.id}')">Watch</button>
                    </div>
                             </div>
      
                          </div>
                        </div>
          
              `
              });
        
        
              $('#movies').html(output);
          }))
          .catch((error) => {
              console.log(error);
          });
  }
  // function to list all the genres in dropdown and give them an ID
  function tvGenres() {
    
      axios.get('https://api.themoviedb.org/3/genre/tv/list?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US')
          .then((response) => {
             // console.log(response);
        
              let genres = response.data.genres;
        
              let output = '';
              $.each(genres, (id, genre) => {
                      let genreId = genre.id;
            
            let genreName = genre.name;
                  output += `
            <label class="container-radio" >						
                        <li class="list">${genreName} 
                <input type="radio" class="radio" value="1" name="sorting1" onclick="genreSelectedTV('${genreId}');resetPage(); popularTVShows();">
                              <span class="checkmark"></span>
  
  
              </li>                     	
            </label>
  
          
              `
              });
        //console.log(genreId);
              $('#genres').html(output);
        $('#genresMob').html(output);
      
          })
          .catch((error) => {
           //   console.log(error);
          });
  
  }
  
  
  // list the years in dropdown menu
  function tvYears() {
    let output = '';
    
    for (let i = 2023; i >= 1950; i-- ) {
      
        output += `
          <label class="container-radio" >						
                        <li class="list"> ${year}
                <input type="radio" class="radio" value="${year}" name="sorting2" onclick="setValue(this);resetPage();popularTVShows();">
                              <span class="checkmark"></span>
  
  
              </li>                     	
            </label>
  
      
  `
  year--;
  $('#yearsMob').html(output);
  $('#years').html(output);
    }
  //console.log(year);
  }
  
  
  
  
  function getTVShow() {
      let movieId = localStorage.getItem('id');
  
      //test id -> 299536
      axios.get(`https://api.themoviedb.org/3/tv/${movieId}?api_key=5ec279387e9aa9488ef4d00b22acc451&append_to_response=credits,videos`)
          .then((response) => {           
             // console.log(response);
              let movie = response.data;
  
              if (movie.poster_path === null) {
                  poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
              } else {
                  poster = "https://image.tmdb.org/t/p/w780" + movie.poster_path;
              }
  
              let date = movie.first_air_date;
        let credits = movie.credits;
        let cast = credits.cast;
        let index = [0];
        let video = response.data.videos.results;
        let videoID = '';
        // this is to determine if the video is trailer if not show the first video if not blank.
        if (video.length > 0 ){
        videoID = video[0].key;
          }
        
        for (let i = 0; i <= video.length; i++) {						
        if (video[i] && video[i].type == 'Trailer') {
           videoID = video[i].key;				 
          }				
          }
        
              let year = date.slice(0, 4);
              let Rating = movie.vote_average;
        let rating = Math.round(Rating * 10) / 10;
          
  
              let poster_profile = "https://image.tmdb.org/t/p/w92" + cast[index].profile_path;
        let background = "https://image.tmdb.org/t/p/w1280" + movie.backdrop_path;
        let tagline = response.tagline;
              let genre = [];			
              movie.genres.forEach(element => {
                  genre.push(element.name);
              });
  
              genres = genre.join(' / ');
        let output2= '';			
              let output1 = `
              <div class="row">
          <img class="backImage" src="${background}"> </img>
                  <div class="box1">
                      <img src="${poster}" class="poster-image">
            <div class="buttons-wrap">
            <div class="buttons-desktop-series">                      
                         <a class="iframe-lightbox-link btn-second-series" href="https://www.youtube.com/embed/${videoID}?autoplay=0" data-padding-bottom="56.25%">Trailer</a>						
                </div>
            </div>
                  </div>
        
                  <div class="box2">
                      <h5 class="movie-title">${movie.name}
            <p class="tagline">${movie.tagline}</p>
            </h5>
            
                      <div class="movie-year">${year} &nbsp; ${genres} &nbsp; Rating: ${rating} &nbsp; Seasons: ${movie.number_of_seasons} </div>
  
            
  
                      <p class="overview">${movie.overview}</p> <div class="movie1">
  `	
    
    for (let index = 0; index < cast.length; index++) {
      if (cast.length > 4) {
                cast.length = 4;
              }
      if (cast[index].profile_path === null) {
                  poster_profile = "https://movieuniverse.se/wp-content/uploads/2022/09/hidden.jpg";
              } else {
                  poster_profile = "https://image.tmdb.org/t/p/w92" + cast[index].profile_path;
              }		           
        
         output1 += `
              <div class="cast">
              <img class="cast_img" src="${poster_profile}">
                  <div class="cast_data">
                  <div class="cast_name">${cast[index].name}</div>
                <div class="cast_character">${cast[index].character}</div>
                
                   </div>
                  
              </div>
  `};
  output1 += `</div>
                     <div class="buttons-series">
                          
                          <a class="iframe-lightbox-link btn-one" href="https://www.youtube.com/embed/${videoID}?autoplay=0" data-padding-bottom="56.25%" style="padding: 8px 45px; font-size:14px;">Trailer</a>
                      </div>
                  </div>
  </div>		
              
  
              `
          
              $('#movie').html(output1);
        iframe();
          })
          .catch((error) => {
            //  console.log(error);
          });
  }
  let seasonNum = 0;
  // function to list all seasons
  function tvSeasons() {
    
       let movieId = localStorage.getItem('id');
     
      axios.get(`https://api.themoviedb.org/3/tv/${movieId}?api_key=5ec279387e9aa9488ef4d00b22acc451&append_to_response=credits`)
          .then((response) => {           
            //  console.log(response);
  
        let index = 0;
              let seasons = response.data.seasons;
        //let seasonCount = response.data.number_of_seasons;	
          seasonNum = seasons[0].season_number;						
              let output = '';
        let output1 = '';
              for (index = 0; index < seasons.length; index++) {                    			
            let seasonName = (seasons[index] && seasons[index].name);
             seasonNum = (seasons[index] && seasons[index].season_number);
              if(seasons.length >= 6){
                  output1 += `									
                <li class="list" onclick="setValueSeason(this); tvEpisodes(); listColor(this)" value="${seasonNum}">${seasonName} </li>   
                               
                  
              `
              
        seasonNum++;
        $('#seasons1').html(output1);
        $("#seasons1").css("display", "inline-block"); 
         
              }
          else
          {
            output += `									
                <li class="list" onclick="setValueSeason(this); tvEpisodes(); listColor(this)" value="${seasonNum}">${seasonName} </li>   
                               
                  
              `
              
        seasonNum++;
        $('#seasons').html(output);
        $("#seasons").css("display", "inline-block"); 
        
          }
        }		
                  $("#seasons li[value=1]").addClass('active');	
            $("#seasons1 li[value=1]").addClass('active');  				
          })
  
          .catch((error) => {
              console.log(error);
          });
          
       
  
  }
  
  // function to list all episodes in a selected season
  function tvEpisodes() {
    
       let movieId = localStorage.getItem('id');
         let seasonNumber = sessionStorage.getItem('seasonnumber')
      axios.get(`https://api.themoviedb.org/3/tv/${movieId}/season/${seasonNumber}?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US`)
          .then((response) => {           
            //  console.log(response);
  
        let index = [];
              let episodes = response.data.episodes;								
              let output = '';
        
              for (let i = 0; i < episodes.length; i++) {                    			
          let episodeName = (episodes[i] && episodes[i].name);
          let episodeNum = (episodes[i] && episodes[i].episode_number);				
                  output += `									
                <li class="list-episodes" value=${episodeNum} onclick="setValueEpisode(this); tvOverview(); listColorEp(this) ">${episodeNum}. ${episodeName} </li>   
                                   
              
            
          
              `
        
        }
        
      let value =	sessionStorage.getItem('episodeSelected');
        //console.log(value);
              $('#episodes').html(output);
        $("#episodes li[value=1]").addClass('active'); 
        
          })
  
          .catch((error) => {
             // console.log(error);
          });
  
  }
  sessionStorage.setItem('seasonnumber', 1);
    sessionStorage.setItem('episode', 1);
  // function to show episode overview
  function tvOverview() {
    let movieId = localStorage.getItem('id');
       let seasonNumber = sessionStorage.getItem('seasonnumber');	
    let episodeNumber = sessionStorage.getItem('episode');
  
    axios.get(`https://api.themoviedb.org/3/tv/${movieId}/season/${seasonNumber}/episode/${episodeNumber}?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US`)
          .then((response) => {           
            //  console.log(response);
                                  
         let output = '';
      let episodeName = response.data.name;
      let seasonNum = response.data.season_number;
      let episodeDate = response.data.air_date;
      let episodeDuration = response.data.runtime;
      let episodeOverview = response.data.overview;
      let episodePoster = "https://image.tmdb.org/t/p/w780" + response.data.still_path;	
                output += `									
              <div class="episode-overview"><h2>Season ${seasonNum} Episode ${episodeNumber} : ${episodeName} </h2>		
              <div class="series-wrap1">					
              <iframe id="vid-series"							
                src="https://autoembed.to/tv/tmdb/${movieId}-${seasonNum}-${episodeNumber}?server=1"							
                allowfullscreen
                allowtransparency
                allow="autoplay"
                >   </iframe>
                <p class="under-video">If the current server is buffering or doesn't work please change to another one!</p>   
                </div>
              <!--
  
              <div class="series-wrap2"  style="display:none">
              <iframe id="vid-series2"
                src="https://2embed.org/embed/series?tmdb=${movieId}&s=${seasonNum}&e=${episodeNumber}"							
                allowfullscreen
                allowtransparency
                allow="autoplay"
                >   </iframe>
                <p class="under-video">If the current server is buffering or doesn't work please change a source below!</p>
                </div>							
                 <div class="sources-series">
                  <div class="source1-series source-series-active" onclick="listColorSource(this)" value="1">Source 1</div>
                  <div class="source2-series source-series-active" onclick="listColorSource(this)" value="2">Source 2</div>		
                </div>  	 -->
              <p class="episode-data"> Release Date: <b>${episodeDate}</b> <br> Duration: <b>${episodeDuration} min</b></p>
              <p class="episode-description">${episodeOverview}</p>
  
                        
  </div>
                                   
              
  
          
              `			
  
    $(document).ready(function() {
      $('.source2-series').click(function() {
        $(".series-wrap1").hide();	
        $(".series-wrap2").show();
        $('#vid-series').attr('src', $('#vid-series').attr('src'));
  
      })
    });
      $(document).ready(function() {
       $('.source1-series').click(function() {
        $(".series-wrap2").hide();
         $(".series-wrap1").show();        
         $('#vid-series2').attr('src', $('#vid-series2').attr('src'));
      })
  
    });
  
          $('#overview').html(output);
          sessionStorage.setItem('episodeSelected', episodeNumber);
             })
  
        .catch((error) => {
         //  console.log(error);
        });
    }
  
  
  function similarTVShows() {
    let movieId = localStorage.getItem('id');
      axios.get(`https://api.themoviedb.org/3/tv/${movieId}/recommendations?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=1`)
          .then((response) => {
             // console.log(response);
  
              let movies = response.data.results;
              let output = '';
        let output1 = '';
        if (movies.length == 0) {
          output1 = '';
        }
        else
         output1+= `<h3 class="headingLike">You may also like</h3>`
  
              for (let index = 0; index < movies.length; index++) {
          if (movies.length > 6){
            movies.length = 6
          }
    
                  if (movies[index].poster_path === null) {
                    let poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movies[index].poster_path;
                  }
          let date = movies[index].first_air_date;
          let year = date.slice(0,4);
                  let Rating = movies[index].vote_average;	
          let rating = Math.round(Rating * 10) / 10;		
                  output += `					
                        <div class="box">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                          <img src="${poster}" alt="poster" width="210" height="315" class="img" onclick="" loading="lazy">
                            </div>
                             
                              <div class="flip-card-back"> 
                    <div class="browse-movie-bottom-similar">
                       <div class="browse-movie-title-similar">${movies[index].name}</div> 
                      <div class="browse-movie-year-similar">${year}</div>
                      <p class="browse-movie-overview-similar">${movies[index].overview}</p>
            
            
                                <div class="rating"> <i class="fa fa-star" style="color:#febf15;"> </i> ${rating} </div>
                      <button type="submit" class="button-similar" onclick="tvShowSelected('${movies[index].id}')">Watch</button>
                    </div>
                             </div>
      
                          </div>
                        </div>
              `	
              };
        $('#headingLike').html(output1);
              $('#movies').html(output);
        
          })
          .catch((error) => {
           //   console.log(error);
          });
  }
  
  function getTVShowReviews() {
    
      let movieId = localStorage.getItem('id');
      axios.get(`https://api.themoviedb.org/3/tv/${movieId}/reviews?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=1`)
  
      .then((response) => {
              
           // console.log(response);
              let reviews = response.data.results;            
              let output = '';
        let output1 = '';
        if (reviews.length == 0) {
          output1 = '';
        }
        else	
        output1+=`<div class="container">
                  <div class="container main-review">
                <h1 class="title-second review-text">Review</h1>
                <div id="reviews"></div>
              </div>
            </div>`
              $.each(reviews, (index, review) => {
  
                  output += `
                          <div class="row review">
                             
                              <div class="col-md-10 box-review2">
                                  <h5>Reviewed by ${review.author}</h5>
                                  <div class="content">
                                      <p style="color:silver;">${review.content}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  `
              });
        $('#reviewsTitle').html(output1);
              $('#reviews').html(output);
          })
          .catch((error) => {
            //  console.log(error);
          });
  }
  
  function TopTvShows() {
    let one = ("https://api.themoviedb.org/3/tv/top_rated?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page=" + pageNum)
    let two = ("https://api.themoviedb.org/3/tv/top_rated?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&page="	+ pageNum2)
      const requestOne = axios.get(one)
    const requestTwo = axios.get(two)	
  
      axios.all([requestOne, requestTwo]).then(axios.spread((...responses) => {
    const responseOne = responses[0];
    const responseTwo = responses[1];
    
    const joined = responseOne.data.results.concat(responseTwo.data.results);
    
              console.log(joined);
  
              let movies = joined;
              let output = '';
              $.each(movies, (index, movie) => {
  
                  if (movie.poster_path === null) {
                      poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movie.poster_path;
                  }
  
                  let date = movie.first_air_date;
          let rating = movie.vote_average
                  let year = date.slice(0, 4);
                  output += `
                      
                        <div class="box popout">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                          <img src="${poster}" alt="poster" width="210" height="315" class="img" loading="lazy">
                            </div>
                             
                              <div class="flip-card-back"> 
                    <div class="browse-movie-bottom">
                       <div class="browse-movie-title">${movie.name}</div> 
                      <div class="browse-movie-year">${year}</div>
                      <p class="browse-movie-overview">${movie.overview}</p>
            
            
                                <div class="rating"> <i class="fa fa-star" style="color:#febf15;"> </i> ${movie.vote_average} </div>
                      <button type="submit" class="button" onclick="tvShowSelected('${movie.id}')">Watch</button>
                    </div>
                             </div>
      
                          </div>
                        </div>
          
              `
             });
          
              $('#movies').html(output);
          })).catch(errors => {
          
             console.log(error);
          });
  } 
  
  
  
  function getTVShows(searchTextTv) {
  
      axios.get('https://api.themoviedb.org/3/search/tv?api_key=5ec279387e9aa9488ef4d00b22acc451&query=' + searchTextTv)
          //  axios.get('http://www.omdbapi.com/?apikey=a15bc27e&s=' + searchText)
          .then((response) => {
           //   console.log(response);
  
              let movies = response.data.results;
              let output = '';
              let output1 = '';
              $.each(movies, (index, movie) => {
  
                   if (movie.poster_path === null) {
                      poster = "https://movieuniverse.se/wp-content/uploads/2022/08/default-movie.png";
                  } else {
                      poster = "https://image.tmdb.org/t/p/w342" + movie.poster_path;
                  }
  
                 
          let rating = movie.vote_average;
                  
                  output += `
                          <div class="col-md-3 box">
                            <div class="movieBox">
                              <img src="${poster}" alt="poster" width="210" height="315" class="img" onclick="tvShowSelected('${movie.id}')">
                              <div class="browse-movie-bottom">
                                  <a href="#" onclick="tvShowSelected('${movie.id}')" class="browse-movie-title">${movie.name}</a>
                                  <div class="browse-movie-year">Rating ${rating}</div>
                                  
                              </div>
                              </div>
                          </div>
                  `
              });
              $('#movies').html(output);
          })
          .catch((error) => {
            //  console.log(error);
          });
  }
  
  // setting the season id for using in query
  function setValueSeason(o) {
    sessionStorage.setItem('seasonnumber', o.value);
  }  
  function setValueEpisode(o) {
    sessionStorage.setItem('episode', o.value)
  }
  // for changing li color on click (seasons)
  function listColor(elem) {
      var a = document.getElementsByClassName('list')
      for (i = 0; i < a.length; i++) {
          a[i].classList.remove('active')
      }
      elem.classList.add('active');
  }
  // for changing li color on click (episodes)
  function listColorEp(elem) {
      var a = document.getElementsByClassName('list-episodes')
      for (i = 0; i < a.length; i++) {
          a[i].classList.remove('active')
      }
      elem.classList.add('active');
  }
  // for changing source color on click 
  function listColorSource(elem) {
      var a = document.getElementsByClassName('source-series-active')
      for (i = 0; i < a.length; i++) {
          a[i].classList.remove('active')
      }
      elem.classList.add('active');
  }
  //------------------------------------------------------------LAZY LOAD IMAGES INTERSECTION OBSERVER API--------------------------------------------------------------//
   
  //-------------------------------------------
  
  /*document.addEventListener('DOMContentLoaded', () => {
  const images = Array.from(document.querySelectorAll('.js-lazy-image'));
          
  if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  const image = entry.target;
  
                  image.src = image.dataset.src;
                  //image.onload = () => image.previousElementSibling.remove();
  
                  imageObserver.unobserve(image);
              }
          });
      });
  
      images.forEach(img => imageObserver.observe(img));
  }
  
  }); 
  */
  
  
  //--------------------------------------------------------- IFRAME POPUP TRAILER -----------------------------------------------------------------------------//
  
  function iframe(){
  (function (root, document) {
    "use strict";
    var docBody = document.body || "";
    
    var appendChild = "appendChild";
    var classList = "classList";
    var createElement = "createElement";
    var dataset = "dataset";
    var getAttribute = "getAttribute";
    var getElementById = "getElementById";
    var getElementsByClassName = "getElementsByClassName";
    var _addEventListener = "addEventListener";
    
    var containerClass = "iframe-lightbox";
    var iframeLightboxOpenClass = "iframe-lightbox--open";
    var iframeLightboxLinkIsBindedClass = "iframe-lightbox-link--is-binded";
    
    var isLoadedClass = "is-loaded";
    var isOpenedClass = "is-opened";
    var isShowingClass = "is-showing";
    
    var IframeLightbox = function (elem, settings) {
      var options = settings || {};
      this.trigger = elem;
      this.el = document[getElementsByClassName](containerClass)[0] || "";
      this.body = this.el ? this.el[getElementsByClassName]("body")[0] : "";
      this.content = this.el ? this.el[getElementsByClassName]("content")[0] : "";
      this.src = elem[dataset].src || "";
      this.href = elem[getAttribute]("href") || "";
      this.dataPaddingBottom = elem[dataset].paddingBottom || "";
      this.dataScrolling = elem[dataset].scrolling || "";
      this.rate = options.rate || 500;
      this.scrolling = options.scrolling;
      /*!
       * Event handlers
       */
      this.onOpened = options.onOpened;
      this.onIframeLoaded = options.onIframeLoaded;
      this.onLoaded = options.onLoaded;
      this.onCreated = options.onCreated;
      this.onClosed = options.onClosed;
      this.init();
    };
    IframeLightbox.prototype.init = function () {
      var _this = this;
      if (!this.el) {
        this.create();
      }
      var debounce = function (func, wait) {
        var timeout,
        args,
        context,
        timestamp;
        return function () {
          context = this;
          args = [].slice.call(arguments, 0);
          timestamp = new Date();
          var later = function () {
            var last = (new Date()) - timestamp;
            if (last < wait) {
              timeout = setTimeout(later, wait - last);
            } else {
              timeout = null;
              func.apply(context, args);
            }
          };
          if (!timeout) {
            timeout = setTimeout(later, wait);
          }
        };
      };
      var logic = function () {
        _this.open();
      };
      if (!this.trigger[classList].contains(iframeLightboxLinkIsBindedClass)) {
        this.trigger[classList].add(iframeLightboxLinkIsBindedClass);
        this.trigger[_addEventListener]("click", function (e) {
          e.stopPropagation();
          e.preventDefault();
          debounce(logic, this.rate).call();
        });
      }
    };
    IframeLightbox.prototype.create = function () {
      var _this = this,
      bd = document[createElement]("div");
      this.el = document[createElement]("div");
      this.content = document[createElement]("div");
      this.body = document[createElement]("div");
      this.el[classList].add(containerClass);
      bd[classList].add("backdrop");
      this.content[classList].add("content");
      this.body[classList].add("body");
      this.el[appendChild](bd);
      this.content[appendChild](this.body);
      this.contentHolder = document[createElement]("div");
      this.contentHolder[classList].add("content-holder");
      this.contentHolder[appendChild](this.content);
      this.el[appendChild](this.contentHolder);
      this.btnClose = document[createElement]("a");
      this.btnClose[classList].add("btn-close");
      /* jshint -W107 */
      this.btnClose.setAttribute("href", "javascript:void(0);");
      /* jshint +W107 */
      this.el[appendChild](this.btnClose);
      docBody[appendChild](this.el);
      bd[_addEventListener]("click", function () {
        _this.close();
      });
      this.btnClose[_addEventListener]("click", function () {
        _this.close();
      });
      root[_addEventListener]("keyup", function (ev) {
        if (27 === (ev.which || ev.keyCode)) {
          _this.close();
        }
      });
      var clearBody = function () {
        if (_this.isOpen()) {
          return;
        }
        _this.el[classList].remove(isShowingClass);
        _this.body.innerHTML = "";
      };
      this.el[_addEventListener]("transitionend", clearBody, false);
      this.el[_addEventListener]("webkitTransitionEnd", clearBody, false);
      this.el[_addEventListener]("mozTransitionEnd", clearBody, false);
      this.el[_addEventListener]("msTransitionEnd", clearBody, false);
      this.callCallback(this.onCreated, this);
    };
    IframeLightbox.prototype.loadIframe = function () {
      var _this = this;
      this.iframeId = containerClass + Date.now();
      this.iframeSrc = this.src || this.href || "";
      /*!
       * @see {@link https://stackoverflow.com/questions/18648203/how-remove-horizontal-scroll-bar-for-iframe-on-google-chrome}
       */
      var iframeHTML = [];
      iframeHTML.push('<iframe src="' + this.iframeSrc + '" name="' + this.iframeId + '" id="' + this.iframeId + '" onload="this.style.opacity=1;" style="opacity:0;border:none;" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" height="166" frameborder="no"></iframe>');
      /*!
       * @see {@link https://epic-spinners.epicmax.co/}
       */
      /*iframeHTML.push('<div class="spring-spinner"><div class="spring-spinner-part top"><div class="spring-spinner-rotator"></div></div><div class="spring-spinner-part bottom"><div class="spring-spinner-rotator"></div></div></div>');*/
      iframeHTML.push('<div class="half-circle-spinner"><div class="circle circle-1"></div><div class="circle circle-2"></div></div>');
      this.body.innerHTML = iframeHTML.join("");
      (function (iframeId, body) {
        var iframe = document[getElementById](iframeId);
        iframe.onload = function () {
          /* console.log("loaded iframe:", this.iframeSrc); */
          this.style.opacity = 1;
          body[classList].add(isLoadedClass);
          if (_this.scrolling || _this.dataScrolling) {
            iframe.removeAttribute("scrolling");
            iframe.style.overflow = "scroll";
          } else {
            iframe.setAttribute("scrolling", "no");
            iframe.style.overflow = "hidden";
          }
          _this.callCallback(_this.onIframeLoaded, _this);
          _this.callCallback(_this.onLoaded, _this);
        };
      })(this.iframeId, this.body);
    };
    IframeLightbox.prototype.open = function () {
      this.loadIframe();
      if (this.dataPaddingBottom) {
        this.content.style.paddingBottom = this.dataPaddingBottom;
      } else {
        this.content.removeAttribute("style");
      }
      this.el[classList].add(isShowingClass);
      this.el[classList].add(isOpenedClass);
      docBody[classList].add(iframeLightboxOpenClass);
      this.callCallback(this.onOpened, this);
    };
    IframeLightbox.prototype.close = function () {
      this.el[classList].remove(isOpenedClass);
      this.body[classList].remove(isLoadedClass);
      docBody[classList].remove(iframeLightboxOpenClass);
      this.callCallback(this.onClosed, this);
    };
    IframeLightbox.prototype.isOpen = function () {
      return this.el[classList].contains(isOpenedClass);
    };
    IframeLightbox.prototype.callCallback = function (func, data) {
      if (typeof func !== "function") {
        return;
      }
      var caller = func.bind(this);
      caller(data);
    };
    root.IframeLightbox = IframeLightbox;
  })("undefined" !== typeof window ? window : this, document);
  
  
    (function(root, document) {
      "use strict";
      [].forEach.call(document.getElementsByClassName("iframe-lightbox-link"), function(el) {
        el.lightbox = new IframeLightbox(el, {
          onCreated: function() {
            /* show your preloader */
          },
          onLoaded: function() {
            /* hide your preloader */
          },
          onError: function() {
            /* hide your preloader */
          },
          onClosed: function() {
            /* hide your preloader */
          },
          scrolling: false,
          /* default: false */
          rate: 500 /* default: 500 */
        });
      });
    })("undefined" !== typeof window ? window : this, document);
  }
  
  /* -------------------------------- ON LOAD VARIABLES -------------------------- */
  
  // reset the genre and year to (null) MOST POPULAR when the page is reloaded
  window.onbeforeunload = function () {
    sessionStorage.setItem('origin', window.location.href);		
    sessionStorage.setItem('seasonnumber', 1);
    sessionStorage.setItem('episode', 1);	
    
  }
  window.onload = function (){
     sessionStorage.setItem('seasonnumber', 1);
    sessionStorage.setItem('episode', 1);
     if (window.location.href == sessionStorage.getItem('origin')) {
          sessionStorage.removeItem('genreid');
      sessionStorage.removeItem('genreidtv');
      sessionStorage.removeItem('year');
      }
     };
     
  
  
  