<?php

namespace Database\Seeders;

use App\Models\ArtistRole;
use App\Models\Artist;
use App\Models\Song;
use App\Models\SongContributors;
use App\Models\SongFile;
use App\Models\SongFileFormat;
use App\Models\SongFileType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistsAndSongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolePerformer = ArtistRole::create([
            'name' => 'performer'
        ]);

        $roleContributor = ArtistRole::create([
            'name' => 'contributor'
        ]);

        $formatMp3 = SongFileFormat::create([
            'code' => 'mp3',
            'label' => 'Mp3'
        ]);

        $typeDemo = SongFileType::create([
            'code' => 'demo',
            'label' => 'Demo'
        ]);

        $songs = Song::factory()->createMany(10);

        $artists = Artist::factory()->createMany(10);

        foreach($songs as $key => $song){

            SongContributors::create([
                'artist_id' => $artists[$key]->id,
                'song_id' => $song->id,
                'artist_role_id' => $rolePerformer->id,
            ]);

            SongFile::create([
                'song_id' => $song->id,
                'song_file_format_id' => $formatMp3->id,
                'song_file_type_id' => $typeDemo->id,
                'storage_path' => 'songs/' . fake()->slug() . '.' . fake()->fileExtension(),
            ]);
        }
    }
}
