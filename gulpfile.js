var gulp = require('gulp');
var gulputil = require('gulp-util');
var sass = require('gulp-ruby-sass');
var pleeease = require('gulp-pleeease');
var plumber = require('gulp-plumber');
var compass = require('gulp-compass');

// Sass(SCSS)ビルドタスク
gulp.task('sass', function () {

    return sass('sass/style.scss',{style: 'expanded'})
    .on('error', function (err) {
        console.error('Error!', err.message);
    })

    .pipe(gulp.dest('./css'));
});

gulp.task('ple', function() {
    return gulp.src('./css/*.css')
    .pipe(pleeease({
        autoprefixer: {
            "browsers": ["last 4 versions", "ie 7"]
        },
    }))
    .pipe(gulp.dest('./css/'));
});

gulp.task('compass', function() {
    gulp.src('./saaa/*.scss')
    .pipe(compass({
        config_file: './config.rb',
    }))
    .pipe(gulp.dest('app/assets/temp'));
});

gulp.task('watch', function() {
    gulp.watch(['./sass/*.scss'], ['compass']);
    return gulp.watch(['./css/*.css'], ['ple']);
});

gulp.task('default',['compass']);
