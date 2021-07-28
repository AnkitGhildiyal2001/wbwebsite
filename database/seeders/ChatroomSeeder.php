<?php
namespace Database\Seeders;

use App\Chatroom;
use App\Message;
use Illuminate\Database\Seeder;

class ChatroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chat1 = Chatroom::create();

        $chat2 = Chatroom::create();

        $chat3 = Chatroom::create();

        $chat1->members()->attach([
            12,
            1
        ]);

        $chat2->members()->attach([
            17,
            1
        ]);

        $chat3->members()->attach([
            4,
            1
        ]);

        Message::create([
            'chatroom_id' => $chat1->id,
            'user_id' => 12,
            'content' => "Hi was geht ihr Spinner, ich hasse die Mustermann GmbH!!!",
        ]);

        Message::create([
            'chatroom_id' => $chat1->id,
            'user_id' => 1,
            'content' => "Wir hassen dich auch! Bitte gehen Sie.",
        ]);

        Message::create([
            'chatroom_id' => $chat1->id,
            'user_id' => 12,
            'content' => "Ja dann ist ja jut.",
        ]);

        Message::create([
            'chatroom_id' => $chat2->id,
            'user_id' => 17,
            'content' => "Ich bewerben mich auf Kampagne, ja ja!",
        ]);

        Message::create([
            'chatroom_id' => $chat2->id,
            'user_id' => 17,
            'content' => "Hallo???? Wieso antwortet keiner?????",
        ]);

        Message::create([
            'chatroom_id' => $chat2->id,
            'user_id' => 17,
            'content' => "Pfuiiiii",
        ]);

        Message::create([
            'chatroom_id' => $chat3->id,
            'user_id' => 4,
            'content' => "Lorem ipsum dies das bla bla Ananas.",
        ]);

    }
}
