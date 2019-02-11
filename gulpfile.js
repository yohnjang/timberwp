var gulp = require('gulp');
var sass = require('gulp-sass');
var cleancss = require('gulp-clean-css');
var csscomb = require('gulp-csscomb');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var minify = require('gulp-minify');
var browserSync = require('browser-sync'); 
var concat = require('gulp-concat');
var terser = require ('gulp-terser');

// configure the paths
var watch_dir = './sass/**/*.scss';
var src_dir = './sass/*.scss';
var dest_dir = './src';

var paths = {
    source: src_dir
};

gulp.task('compress', function() {
  gulp.src(['js/*.js', 'js/*.mjs'])
  .pipe(concat('theme.js'))
  .pipe(terser())
  .pipe(gulp.dest('./src'))
});

gulp.task('watch', function() {
  gulp.watch(['js/**/*.js','sass/**/*.scss','templates/**/*.twig','./*.php'], ['compress','build']);
  browserSync.init(["js/*.js","sass/**/*.scss","./**/*.php", "templates/**/*.twig"], {
    proxy: "http://localhost:8888/timber"
  });
});

gulp.task('browser-sync', function() {  
  browserSync.init(["css/*.css", "js/*.js", "./*.php", "templates/**/*.twig"], {
    proxy: "http://localhost:8888/timber"
  });
});

gulp.task('build',function() {
  gulp.src(['./sass/*.scss','./sass/colors/*.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compact', precision: 10})
      .on('error', sass.logError)
    )
    .pipe(sourcemaps.write())
    .pipe(autoprefixer())       
    .pipe(gulp.dest('src'))
    .pipe(csscomb())
    .pipe(cleancss())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('src'));
});

gulp.task('default', ['build']);
