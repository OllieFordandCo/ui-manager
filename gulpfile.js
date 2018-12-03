/**
 * Created by Madila on 10/11/2017.
 */
var gulp = require('gulp');
var $ = {
    gutil: require('gulp-util'),
    sass: require('gulp-sass'),
    rename: require('gulp-rename'),
    merge: require('merge-stream'),
    minify: require('gulp-minify'),
    plumber: require('gulp-plumber'),
    pump: require('pump'),
    postcss: require('gulp-postcss'),
    autoprefixer: require('autoprefixer'),
    cssnano: require('cssnano'),
    async: require('async'),
    sourcemaps: require('gulp-sourcemaps')
};

/*
 Gulp Functions - Use on Gulp Tasks
 */

/**
 * Sass Compilation
 * Pre-processing of CSS files on /assets/scss directory to /assets/css
 **/

function compileScss() {
    return gulp.src(['./assets/scss/**/*.scss'])
        .pipe($.sass())
        .pipe(gulp.dest('./assets/css'));
}

/**
 * PostCss
 * Post-processing of CSS files on /assets/css directory to assets/css
 **/

function postCss() {
    var options = [
        $.autoprefixer({browsers: ['last 3 version']}),
        $.cssnano({
            discardUnused: {
                keyframes: false
            },
            discardComments: {
                removeAll: true
            },
            reduceIdents: {
                keyframes: false
            },
            convertValues: true,
            zindex: false
        })
    ];
    return gulp.src(['./assets/css/**/*.css'])
        .pipe($.postcss(options))
        .pipe(gulp.dest('./public/css'));
}


/*
 Gulp Tasks
 */

gulp.task('sass', function(cb) {
    $.async.series([
        function (next) {
            compileScss().on('end', next);
        },
        function (next) {
            postCss().on('end', next);
        }
    ], cb);
});
