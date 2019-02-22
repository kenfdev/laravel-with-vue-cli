# Doing MSPA(Multi-Single Page Application) with Vue CLI and Laravel

## Quick Start

### Prepare the frontend(Vue)

```bash
# change directories
cd frontend

# install dependencies
npm install

# build the assets
npm run build
```

### Start the backend(Laravel)


```bash
# prepare an .env file
cp .env.example .env

# generate an app key
./vessel php artisan key:generate

# install dependencies
./vessel composer install

# start the server
./vessel start
```

Access http://localhost/app1 and you should see the `app1` Vue SPA running.