/*

1.) make a copy of this file
2.) rename copy to config.js
3.) add your desired configs/creds

*/
var ftconfigs = {
   roomName: "night.drivee.fm", // what you'd like your room name to be displayed as
   roomNameShort: "night.drive.fm", // if you have a long room name, put a shorter version here (like 2 words probably max).
   defaultAlbumArtUrl: "", // url of an image to use for tracks with no album art. should be a square and at least 500x500 px for best results.
   logoImage: "", // url of an image to use for logo
   facebookURL: "",
   soundcloudURL: "",
   redditURL: "",
   lastfmURL: "",
   discordURL: "https://twitter.com/Morpheus_X8",
   roomInfoUrl: "", // Change what the "?" button at the top of the page links to. This can be any URL
   firebase:{ // put the info from your Firebase app here. can be found in the Firebase console
    apiKey: "AIzaSyBVePJEt6WwVTmCAw3tC8AGS6MBZvN2zHE",
    authDomain: "firetable-d2199.firebaseapp.com",
    databaseURL: "https://firetable-d2199-default-rtdb.europe-west1.firebasedatabase.app"
  },
  youtubeKey: "AIzaSyDBxiMHPrKMGqel7nQtvDrT3D3ox1zBars", // Your youtube api client key. Be sure to whitelist your domain for this key in the google api console.
  soundcloudKey: "xxxxxxxxxxxxxxxxxxxx" // Your soundcloud api key
};
