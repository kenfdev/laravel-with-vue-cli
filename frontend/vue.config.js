module.exports = {
    // output built static files to Laravel's public `app` dir.
    outputDir: '../public/app',

    // set a subdirectory for the assets to have proper URLs
    publicPath: '/app',

    // make the vue application a multi-page app
    pages: {
        app1: {
            entry: 'src/app1/main.js',
            template: 'templates/base.html',
            filename: `../../resources/views/spa/app1.blade.php`,
        },
    },
};
