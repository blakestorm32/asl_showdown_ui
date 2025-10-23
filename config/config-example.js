// play.pokemonshowdown.com/config/config-test.js
/** @type {import('../play.pokemonshowdown.com/src/client-main').PSConfig} */
Config.defaultserver = {
  id: 'asl',
  host: 'aslpokemonbattling-up-railway-app.psim.us', // your battle server host
  port: 443,        // HTTPS/WSS
  httpport: 8000,   // HTTP fallback
  altport: 80,
  registered: true
};

/*************************************************************
 * Route configuration (used for links inside the UI)
 *************************************************************/
Config.routes = {
  root: "pokemonshowdown.com",
  client: "aslshowdownui-production.up.railway.app",
  dex: "asl-pokemon-showdown-dex-production.up.railway.app",
  replays: "asl-pokemon-showdown-client-production.up.railway.app",
  users: "pokemonshowdown.com/users",
  teams: "teams.pokemonshowdown.com"
};
