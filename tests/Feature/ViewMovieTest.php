<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ViewMovieTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function the_main_page_shows_correct_info()
    {
        $response = $this->get(route('movie.index'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
    }

    // public function the_search_dropdown_works_correctly()
    // {
    //     Http::fake([
    //         'https://api.themoviedb.org/3/search/movie?query=jumanji' => $this->fakeSearch(),
    //     ]);
    // }
}
