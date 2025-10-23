#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="/play.pokemonshowdown.com"
LOG_FILE="deleted_files.log"

# Create a log file
echo "Deletion started at $(date)" > "$LOG_FILE"

# Function for deleting with logging
delete_path() {
  local target="$1"
  if [ -e "$target" ]; then
    echo "Deleting: $target"
    rm -rf "$target"
    echo "$target" >> "$LOG_FILE"
  else
    echo "Not found: $target"
  fi
}

# Directories
delete_path "$ROOT_DIR/dirindex/webfonts"
delete_path "$ROOT_DIR/sprites"
delete_path "$ROOT_DIR/audio"
delete_path "$ROOT_DIR/data"
delete_path "$ROOT_DIR/js/server"

# Patterns
find "$ROOT_DIR/dirindex" -type f -name "fontawesome5*" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "*.js.map" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "battle*.js" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "panel*.js" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "replay-embed.js" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "client-endload.js" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "client-main.js" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "client-core.js" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "client-connection.js" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "client-connection-worker.js" -exec rm -f {} \; -print >> "$LOG_FILE"
find "$ROOT_DIR/js" -type f -name "miniedit.js" -exec rm -f {} \; -print >> "$LOG_FILE"

# Specific files
for f in index.php index.html index-test.html preactalpha.html crossprotocol.html ads.txt; do
  delete_path "$ROOT_DIR/$f"
done

echo "Deletion completed at $(date)" >> "$LOG_FILE"
echo "✅ All specified files deleted. Log saved to $LOG_FILE."
