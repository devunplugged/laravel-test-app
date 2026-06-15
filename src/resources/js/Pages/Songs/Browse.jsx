export default function BrowseSongsPage({ songs }){
    
    return (
        <div className="p-8">

            <h1 className="text-2xl mb-6">Lista</h1>

            <div className="space-y-12">
            {songs.map((song) => (

                <div key={song.id} className="border rounded p-4">

                    <h2 className="text-lg font-semibold">{song.title}</h2>

                    <div className="text-sm text-gray-600">
                        Artists: 
                        {song.artists.map((artist) => artist.name).join(", ")}
                    </div>

                </div>
            ))}
            </div>

        </div>
    );

}