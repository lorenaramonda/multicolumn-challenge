'use strict';

var
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    markdown = require('gulp-markdown')
    ;

gulp.task('sass', function () {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError)) //nested, expanded, compact, compressed
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./assets/css'));
});

// not used
gulp.task('md', function () {
    return gulp.src('./src/md/**/*.md')
        .pipe(markdown())
        .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./src/sass/**/*.scss', ['sass']);
});

gulp.task('watch', ['sass:watch']);

gulp.task('default', ['sass']);


