# Movie Search App

Welcome to the Movie Search App, a powerful web application built using Laravel, Livewire, Alpine.js, and Tailwind CSS. This application connects to the Movie Database API to provide you with an interactive platform for discovering popular movies, TV shows, now playing films, and exploring actor profiles.

## Features

- **Popular Movies:** Explore trending movies with details such as cast, crew, release date, and synopsis.
- **Popular TV Shows:** Discover top-rated TV shows with episode information and creator details.
- **Now Playing Movies:** Stay updated with the latest films currently in theaters.
- **Movie and TV Show Search:** Find your favorite movies and TV shows by title, genre, actor, or any other criteria.
- **Actor Profiles:** Dive into actor profiles, explore their filmography, and learn more about their careers.

## Technologies Used

The Movie Search App leverages the following technologies:

- [Laravel](https://laravel.com/): A robust PHP framework for web application development.
- [Livewire](https://laravel-livewire.com/): A full-stack framework for building dynamic web interfaces.
- [Alpine.js](https://alpinejs.dev/): A minimal framework for adding interactivity to your web pages.
- [Tailwind CSS](https://tailwindcss.com/): A utility-first CSS framework for rapidly designing custom web interfaces.

## Getting Started

To get the Movie Search App up and running on your local environment, follow these steps:

1. Clone the repository to your machine:

```bash
git clone https://github.com/your-username/movie-search-app.git
```

2. Navigate to the project directory:

```bash
cd movie-search-app
```

3. Install the project dependencies:

```bash
composer install
npm install
```

4. Set up your environment variables. You will need to add your Movie Database API key to the `.env` file.

5. Run the migrations and seed the database:

```bash
php artisan migrate
php artisan db:seed
```

6. Start the development server:

```bash
php artisan serve
```

You can access the Movie Search App at `http://localhost:8000`.

## API Integration

For this app to function properly, you must obtain an API key from [The Movie Database](https://www.themoviedb.org/documentation/api) and add it to your `.env` file as follows:

```env
TMDB_API_KEY=your-api-key-here
```

## Usage

Once your local development server is up, you can access the following routes:

- `/` - The home page, displaying a list of popular movies and TV shows.
- `/now-playing` - A list of movies currently playing in theaters.
- `/search` - A search feature for movies and TV shows based on various criteria.
- `/actors` - Explore actor profiles, view their filmography, and learn more about their careers.

## Contributing

We welcome contributions to this project. If you'd like to enhance or resolve any issues, please submit a pull request.

## License

The Movie Search App is open-source and available under the [MIT License](LICENSE). You are encouraged to use, modify, and distribute it as needed.

Enjoy your exploration of movies and TV shows with the Movie Search App. If you have questions or encounter issues, don't hesitate to reach out.

Happy movie and TV show discovery! 🍿📺🎥🎬
