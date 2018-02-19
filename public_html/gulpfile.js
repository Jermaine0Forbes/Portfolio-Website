var gulp = require('gulp');
var sass  = require('gulp-sass');

gulp.task('default', ['watch']);

gulp.task('sass', function(){

  gulp.src('./scss/style.scss')
  .pipe(sass())
  .pipe(gulp.dest('./css'));

})

gulp.task('watch',['sass'],function(){

gulp.watch('./scss/*.scss',['sass']);
})
