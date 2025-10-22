#!/usr/bin/env node
/**
 * Usage:
 *   node select-caddyfile.js play
 *   node select-caddyfile.js replay
 *   node select-caddyfile.js main
 *
 * Copies the appropriate Caddyfile from its subdirectory to the project root.
 */

const fs = require("fs");
const path = require("path");

const target = process.argv[2];
if (!target || !["play", "replay", "main"].includes(target)) {
  console.error("❌ Usage: node select-caddyfile.js [play|replay|main]");
  process.exit(1);
}

const rootDir = path.resolve(__dirname);
const dirMap = {
  play: "play.pokemonshowdown.com",
  replay: "replay.pokemonshowdown.com",
  main: "pokemonshowdown.com",
};

const src = path.join(rootDir, dirMap[target], "Caddyfile");
const dest = path.join(rootDir, "Caddyfile");

if (!fs.existsSync(src)) {
  console.error(`❌ Missing source Caddyfile: ${src}`);
  process.exit(1);
}

try {
  fs.copyFileSync(src, dest);
  console.log(`✅ Copied ${src} → ${dest}`);
} catch (err) {
  console.error("❌ Failed to copy:", err);
  process.exit(1);
}
