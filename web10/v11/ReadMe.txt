MyMovie readme file.

There are 1 API used to get result.
live link : https://mymovie010101.000webhostapp.com/

--> First API is from cloudflare.com to get places names in typeahead textbox and catching respective places langitude and latitude.
    link: www.themoviedb.org
    API javascript link:
						http://image.tmdb.org/t/p/w500
						http://image.tmdb.org/t/p/w1000
						https://api.themoviedb.org/3/discover/movie?
						https://api.themoviedb.org/3/movie/
						https://api.themoviedb.org/3/discover/movie?&with_cast=

How to
--> When websites starts its display the list of top popular movies with respective movie poster & one search text box and search button.

--> We have to enter the movie name in search textbox and pressed enter.
	--> It will give you all movie names with posters that related to your search keyword.
	--> https://api.themoviedb.org/3/discover/movie? API link is use to fetch movies related to your search keyword

--> Click on any movie title or poster to see the details about that respective movie.
	--> The details includes movie poster, title, summary, cast, budget etc.

--> Click on respective movie cast it will gives you all movies that related to that cast.
	--> https://api.themoviedb.org/3/discover/movie?&with_cast= API link is use to fetch movie cast details.