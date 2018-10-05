var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create(),
php = require('gulp-connect-php');

// gulp.task('php', function() {
//     php.server({ base: 'absidaproj/app/', port: 80, keepalive: true});
// });

gulp.task('watch', function() {

    browserSync.init({
        proxy: 'localhost:80/absidaproj/app/index.html',
        port: 80,
        open: true,
        notify: false
    });
  
    watch('./public/assets/style/**/*.css', function() {
      gulp.start('cssInject');
    });

    watch('./app/*.html', function() {
      browserSync.reload();
    });
  
});

gulp.task('cssInject', ['styles'], function() {
    return gulp.src('./app/style.css')
    .pipe(browserSync.stream());
});