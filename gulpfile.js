/**
 * Created by shawnsandy on 11/6/16.
 */

var gulp = require('gulp');
var q = require('q');
var path = require('path');
var fs = require('fs');
var _ = require('underscore');
var imagemin = require('gulp-imagemin');
var sass = require('gulp-sass');
var notify = require('gulp-notify');
var changed = require('gulp-changed');
var toast = require('node-notifier');

gulp.task('copy:js', function () {
    gulp.src(['/node'])
        .pipe(gulp.dest('./src/public/assets/'));
});

gulp.task('build', function () {
    gulp.src([
        './node_modules/font-awesome/css/**/*.*',
        './node_modules/font-awesome/fonts/**/*.*'
    ], {'base': 'node_modules'})
        .pipe(gulp.dest('src/public/assets/'))
});

gulp.task('sass', function () {
    return gulp.src('./src/resources/assets/css/**/*.scss', {'base': './src/resources/assets/'})
        .pipe(sass().on('error', notify.onError('Error processing')))
        .pipe(gulp.dest('./src/resources/assets'))

});

gulp.task('watch:sass', function () {
    gulp.watch('./src/resources/assets/css/**/*.scss', ['sass']);
});
