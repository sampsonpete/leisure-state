/**
 * File instagram.js.
 *
 * Load an Instagram feed
 */

// requires: vendor/instafeed.js

(function() {

  var feed = new Instafeed({
    get: 'user',
    userId: '3022060396', // @leisure_state
    resolution: 'standard_resolution',
    limit: 15,
    clientId: '9d7dca59b98b4a42a7e0728a90b672e0',
    accessToken: '3022060396.1677ed0.94c9d8e3e1a24a1890022d5e6781885b'
  });
  feed.run();

})();
