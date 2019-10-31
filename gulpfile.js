// Gulp.js configuration
'use strict';

const

    themeName = 'photonzv4',

    // source and build folders
    dir = {
        src: 'src/',
        build: 'photonzv4/'
    },

    // Gulp and plugins
    gulp = require('gulp'),
    gutil = require('gulp-util'),
    newer = require('gulp-newer'),
    imagemin = require('gulp-imagemin'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    deporder = require('gulp-deporder'),
    concat = require('gulp-concat'),
    stripdebug = require('gulp-strip-debug'),
    uglify = require('gulp-uglify'),

    // service worker
    workboxBuild = require('workbox-build');

// Browser-sync
var browsersync = false;


// PHP settings
const php = {
    src: dir.src + 'template/**/*',
    build: dir.build
};

// copy PHP files
gulp.task('php', () => {
    return gulp.src(php.src)
        .pipe(newer(php.build))
        .pipe(gulp.dest(php.build));

});

// image settings
const images = {
    src: dir.src + 'images/**/*',
    build: dir.build + 'images/'
};

// image processing
gulp.task('images', () => {
    return gulp.src(images.src)
        .pipe(newer(images.build))
        .pipe(imagemin())
        .pipe(gulp.dest(images.build));
});

// CSS settings
var css = {
    src: dir.src + 'scss/*',
    watch: dir.src + 'scss/**/*',
    build: dir.build,
    sassOpts: {
        outputStyle: 'nested',
        imagePath: images.build,
        precision: 3,
        errLogToConsole: true
    },
    processors: [
        require('postcss-assets')({
            loadPaths: ['images/'],
            basePath: dir.build,
            baseUrl: '/wp-content/themes/' + themeName + '/'
        }),
       /* require('autoprefixer')({
                browsers: ['last 2 versions', '> 2%']
            }),*/
        require('css-mqpacker'),
        require('cssnano')
  ]
};

// CSS processing
gulp.task('css', gulp.series('images', () => {
    return gulp.src(css.src)
        .pipe(sass(css.sassOpts))
        .pipe(postcss(css.processors))
        .pipe(gulp.dest(css.build))
        .pipe(browsersync ? browsersync.reload({
            stream: true
        }) : gutil.noop());
}));

// JavaScript settings
const js = {
    src: dir.src + 'js/**/*',
    build: dir.build + 'js/',
    filename: 'photonz.min.js'
};

// JavaScript processing
gulp.task('js', () => {

    return gulp.src(js.src)
        .pipe(deporder())
        .pipe(concat(js.filename))
        //.pipe(stripdebug())
        .pipe(uglify())
        .pipe(gulp.dest(js.build))
        .pipe(browsersync ? browsersync.reload({
            stream: true
        }) : gutil.noop());

});

// ServiceWorker processing
gulp.task('sw', () => {
    return workboxBuild.generateSW({
        globDirectory: 'photonzv4',
        globPatterns: [
          '**\/*.{html,json,js}',
            /*'images\/*.{jpg,png,ico}',
            'images\/tools\/*.{jpg,png,ico}',
            'favicon\/*.{jpg,png,ico}',*/
        ],
        swDest: 'photonzv4/sw.js',
        clientsClaim: true,
        skipWaiting: true,
        runtimeCaching: [{
            urlPattern: new RegExp('https://fonts.(?:googleapis|gstatic).com/(.*)'),
            handler: 'CacheFirst'

        }, {
            urlPattern: /\.(?:js|css)$/,
            handler: 'StaleWhileRevalidate'
        }, {
            urlPattern: /\.(?:png|gif|jpg|jpeg|svg)$/,
            handler: 'CacheFirst',
            options: {
                // Use a custom cache name.
                cacheName: 'images',

                // Only cache 10 images.
                expiration: {
                    maxEntries: 50,
                },
            },
        }, {
            urlPattern: new RegExp('/(https:\/\/)+?(.[A-Za-z0-9]+.)+(\/wp-admin\/)+?(.*)/ig'),
            handler: 'NetworkOnly'
        }]
    }).then(({
        warnings
    }) => {
        // In case there are any warnings from workbox-build, log them.
        for (const warning of warnings) {
            console.warn(warning);
        }
        console.info('Service worker generation completed.');
    }).catch((error) => {
        console.warn('Service worker generation failed:', error);
    });
});

// run all tasks
gulp.task('build', gulp.series('php', 'css', 'js', 'sw', (done) => {
    done();
}));

//// Browsersync options
//const syncOpts = {
//    proxy: 'localhost',
//    files: dir.build + '**/*',
//    open: false,
//    notify: false,
//    ghostMode: false,
//    ui: {
//        port: 8001
//    }
//};
//
//
//// browser-sync
//gulp.task('browsersync', () => {
//    if (browsersync === false) {
//        browsersync = require('browser-sync').create();
//        browsersync.init(syncOpts);
//    }
//});
//
//// watch for file changes
///*gulp.task('watch', ['browsersync'], () => {*/
//
gulp.task('watch', () => {

    // page changes
    /*gulp.watch(php.src, ['php'], browsersync ? browsersync.reload : {});*/
    gulp.watch(php.src, ['php']);

    // image changes
    gulp.watch(images.src, ['images']);

    // CSS changes
    gulp.watch(css.watch, ['css']);

    // JavaScript main changes
    gulp.watch(js.src, ['js']);

});

// default task
gulp.task('default', gulp.series('build', 'watch', (done) => {
    done()
}));
