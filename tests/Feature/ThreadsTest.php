<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function setUp(){
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }
    public function test_a_user_can_browse_threads()
    {
//        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');
        $response->assertSee($this ->thread->title);
    }

    public function test_a_user_can_read_a_single_thread()
    {
//        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads/' . $this->thread->id);
        $response->assertSee($this->thread->title);
    }
    public function a_user_can_read_replies_that_are_associated_with_a_thread()
    {
        // given we have a thread
        // and that thread includes replies
        // when we visit a thread page
        // then we should see the replies
    }
}
