"use strict";
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    bower = require('gulp-bower');

var config = {
    sassSrc: './Resources/Private/Sass/materialize-theme.scss',
    sassDestPath: './Resources/Public/Css/',
    bowerDir: './bower_components',
    jsDir: './Resources/Public/Javascript',
    jsVendorDir: './Resources/Public/Javascript/Vendor'

};

gulp.task('css', function() {
    return sass(config.sassSrc, {
            style: 'compressed',
            stopOnError: true,
            loadPath: [config.bowerDir+"/materialize/sass"]
        }).on('error', sass.logError)
        .pipe(gulp.dest(config.sassDestPath));
});

//bower install
gulp.task('bower', function() {
    return bower()
        .pipe(gulp.dest(config.bowerDir));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
    gulp.watch(config.sassSrc + '/**/*.scss', ['css']);
});


gulp.task('default', ['bower', 'css']);