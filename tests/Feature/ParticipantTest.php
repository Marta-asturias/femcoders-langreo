<?php

namespace Tests\Feature;

use App\Models\Participant;
use App\Models\Workshop;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ParticipantTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_attach_workshop_to_participant()
    {
        $participant = new Participant([
            'first_name' => "jiji",
                "last_name"=> "jiji",
                "birth_date"=> "28/02/2022",
                'email'=> "jiji@jiji.com",
                "whatsapp"=>"655555222",
                "city"=>"madrid",
                "how_did_you_meet_us"=>"jiji",
                'legals'=>"jiji"
        ]);

        $workshop = new Workshop([
            'title' => 'hola',
                'image'=> 'hola.jpg',
                'details'=>'ho',
                'age'=> 'hol',
                'duration'=> '100min',
                'format'=> 'hola',
                'date1'=> '21/02/2021',
                'date2'=> '22/02/2021',
                'date3'=> '23/02/2021',
                'date4'=> '24/02/2021'
        ]);

        $participant->workshops()->attach($workshop->id);

        $this->assertEquals("jiji", $participant->first_name);
        $this->assertEquals("hola", $workshop->title);
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $participant->workshops);
        $this->assertEquals(1, $participant->workshops()->count());
        $this->assertInstanceOf(Workshop::class, $participant->workshops[0]);
        //$this->assertEquals($workshop->title, $participant->workshops()->find(1));
    }
}
