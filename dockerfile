# ---- Build the Showdown client ----
FROM node:20 AS build
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN node build full

# ---- Serve it with a lightweight webserver ----
FROM node:20-alpine
WORKDIR /app
RUN npm install -g serve
COPY --from=build /app/play.pokemonshowdown.com ./play.pokemonshowdown.com
EXPOSE 3000
CMD ["serve", "-s", "play.pokemonshowdown.com", "-l", "3000"]
