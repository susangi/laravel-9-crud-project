<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookReservationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * a book add to library
     *
     * @return void
     */
    public function test_a_book_can_be_added_to_the_library()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/books', [
            'title' => 'Book',
            'author' => 'Victor'
        ]);

        //check response come ok (success)
        $response->assertOk();

        $this->assertCount(1, Book::all());
    }

    public function test_a_book_title_is_required()
    {
    }
}
