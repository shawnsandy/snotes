/**
 * Created by shawnsandy on 11/6/16.
 */

gulp = require('gulp');

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
    return gulp.src('./src/resources/assets/**/*.scss', {'base': './src/resources/assets/'})
        .pipe(changed('./src/resources/assets/**/*.scss'))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./src/resources/assets'))
        .pipe(notify({
            title: "Pages Notification",
            message: "SCSS files compiled, enjoy",
            onLast: true
        }))
});
