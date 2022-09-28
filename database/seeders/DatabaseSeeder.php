<?php

namespace Database\Seeders;

use App\Models\Date;
use App\Models\Participant;
use App\Models\User;
use App\Models\Workshop;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                WorkshopSeeder::class
            ]
            );
      
        DB::statement("SET foreign_key_checks=0");
            DB::table('participant_workshop')->truncate();
            Participant::truncate();
        DB::statement("SET foreign_key_checks=1");


        $useradmin= User::where('email','admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin')    
        ]);
        //user admin
        $participant= Participant::where('email','admin@admin.com')->first();
        if ($participant) {
            $participant->delete();
        }
        $participant= Participant::create([
            'first_name' =>'admin',
            'last_name'=>'admin',
            'birth_date'=>'1985-11-02',
            'email'=>'admin',
            'whatsapp'=>'admin',
            'city'=>'admin',
            'how_did_you_meet_us'=>'admin',
            'legals'=>1,
        ]);
        
            $workshop= Workshop::create([
                'title' => 'hola',
                // 'image',
                'details'=>'hola',
                'age'=> 'hola',
                'duration'=> 'hola',
                'format'=> 'hola',
           
              
        ]);

        $date= Date::create([
            'date' =>'2021-03-12',
           
       
          
    ]);
        
           

        $participant->workshops()->sync([ $workshop->id ]);
        $date->workshops()->sync([ $workshop->id ]);
        
        //table role_user
       
    }
}
