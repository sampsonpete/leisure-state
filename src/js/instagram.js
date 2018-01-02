/**
 * File instagram.js.
 *
 * Load an Instagram feed
 */

// requires: vendor/instafeed.js

( function( $ ) {

  var feed = new Instafeed({
    get: 'user',
    userId: '3022060396', // @leisure_state
    accessToken: '192260528.3a81a9f.d0cab468398a4bc5b0e4a529173c8c6b'
  });
  feed.run();

} )( jQuery );
