/* Modulos gulp */
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    livereload = require('gulp-livereload');

/* Configuración de rutas */
var config = {
    sassPath: './src/sass',
    buildPath: './assets'
}

/* Preprocesamiento de estilos Sass */
gulp.task('sass', function(){
    gulp.src([
        config.sassPath + '/style.scss'
    ])
    .pipe(sass())
    .pipe(gulp.dest('./'))
    .pipe(livereload());
});

/* Vigilar cambios en archivos */
gulp.task('watch', function(){
  livereload.listen();
  gulp.watch(config.sassPath + '/*.scss', ['sass']);
});

gulp.task('default', ['sass','watch']);