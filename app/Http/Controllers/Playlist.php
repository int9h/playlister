<?php

namespace App\Http\Controllers;

use App\Playlists;
use App\Videos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class Playlist extends Controller
{
    public function save(Request $request)
    {
        $hash = md5(uniqid() . '7e4f9d98-9d76-4153-b23c-c465062a5e99');
        $title = $request->input('title');
        $playlist = Playlists::firstOrCreate(
            ['hash' => $hash],
            [
                'name' => $title,
            ]
        );

        $videos = $request->input('videos');
        foreach($videos as $video) {
            Videos::create([
                'playlist_id' => $playlist->id,
                'video' => $video['id'],
                'title' => $video['title']
            ]);
        }

        return [
            "error" => false,
            'hash' => $hash
        ];
    }

    public function read($hash)
    {
        $playlist = Playlists::where('hash', $hash)->firstOrFail();
        $videos = $playlist->videos()->get()->map(function ($video) {
            return [
                "title" => $video->title,
                "id" => $video->video
            ];
        });

        return [
            'title' => $playlist->name,
            'videos' => $videos
        ];
    }
}