function songDecoder(song){
    return song.split(/WUB/).filter(x => x.length > 0).join(" ")
}
