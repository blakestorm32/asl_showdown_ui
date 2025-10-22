// play.pokemonshowdown.com/config/config-test.js
/** @type {import('../play.pokemonshowdown.com/src/client-main').PSConfig} */
var Config = Config || {};
/* version */ Config.version = "0";

Config.defaultserver = {
  id: 'asl',                                  // any id you like
  host: 'https://aslpokemonbattling-up-railway-app.psim.us/',         // <-- change this
  port: 443,                                  // HTTPS/WSS
  altport: 80,
  registered: true
};
