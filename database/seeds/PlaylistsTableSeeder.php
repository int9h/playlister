<?php

use Illuminate\Database\Seeder;

class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlist_id = \App\Playlists::insert([
            'hash' => 'f52399980bef9bed4dc20fc5e45da450',
            'name' => 'Awesome list of videos <3'
        ]);

        $videos = [
          [
            'title' => 'Deborah de Luca @ Château de Chambord for Cercle',
            'video' => 'yEbrvMljMCg'
          ],
          [
            'title' => 'Deborah De Luca @ Alltimeclubbing Bucharest (BE-AT.TV)',
            'video' => 'TwON9KsqyDk'
          ],
          [
            'title' => 'N\'to - Trauma (Worakls Remix) [1 Hour Version] [320kbps]',
            'video' => 'F_I38e-XXrM'
          ],
          [
            'title' => 'Best Of Tropical Deep House Music 2018 Chill Out Mix 🌱 Ibiza Summer Mix 2018 🌱',
            'video' => 'T2U3b0Xpin4'
          ],
          [
            'title' => 'Ibiza Summer Mix 2018 \' Best Summer Hits - Best Of Tropical Deep House Music 2018 Chill Out Mix',
            'video' => 'aG6lHHy7Aj4'
          ],
          [
            'title' => 'Summer Mix 2018 - Best Of Deep House Sessions Music Chill Out Mix By Pete Bellis',
            'video' => '1WU2cwqfAkk'
          ],
        ];

        foreach($videos as $video) {
          \App\Videos::insert([
              'playlist_id' => $playlist_id,
              'title' => $video['title'],
              'video' => $video['video']
          ]);
        }
    }
}
