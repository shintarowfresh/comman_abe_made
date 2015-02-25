var gulp = require('gulp');
var gulputil = require('gulp-util');
var sass = require('gulp-ruby-sass');
var pleeease = require('gulp-pleeease');
var plumber = require('gulp-plumber');
var compass = require('gulp-compass');
var csscomb = require('gulp-csscomb');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');


gulp.task('cssmin', function () {
    gulp.src('css/style.css')
    .pipe(cssmin())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('css'));
});

gulp.task('css', function () {
    return gulp.src('./css/*.css')
    .pipe(csscomb())
    .pipe(pleeease({
        autoprefixer: {
            "browsers": ["last 2 versions"]
        },
        minifier: false
    }))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass', function() {
    return sass('./sass/*scss')
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
    gulp.src('./sass/*.scss')
    .pipe(plumber())
    .pipe(compass({
        config_file: './config.rb',
        css: 'css',
        sass: 'sass'
    }))

    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
    gulp.watch(['./sass/*.scss'], ['compass']);
    return gulp.watch(['./css/*.css'], ['css']);
});

gulp.task('default',['compass']);
