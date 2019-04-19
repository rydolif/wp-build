var syntax        = 'sass'; // Syntax: sass or scss;

var gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browsersync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		rsync         = require('gulp-rsync'),
		svgstore      = require('gulp-svgstore'),
		svgmin        = require('gulp-svgmin'),
		cheerio       = require('gulp-cheerio'),
		rename        = require('gulp-rename'),
		plumber       = require('gulp-plumber');

gulp.task('browser-sync', function() {
	browsersync({
		proxy: "http://localhost:81/build/",
		notify: false
	})
});

gulp.task('styles', function() {
	return gulp.src('build/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('build/css'))
	.pipe(browsersync.reload( {stream: true} ))
});

gulp.task('js', function() {
	return gulp.src([
		'build/libs/jquery/dist/jquery.min.js',  			//----jquery
		'build/libs/jquery.validate.js', 					//----форма
		'build/libs/jquery.mask.min.js', 					//----форма
		'build/libs/jquery.popupoverlay.js', 				//----модалки
		'build/libs/slick/slick.js', 						//----слайдер
		'build/libs/swiper/swiper.min.js', 			//----слайдер
		'build/libs/fancybox/jquery.fancybox.js', 		//----картінка прикліку
		// 'app/libs/jquery.spincrement.min.js', 		//----цифри анімованні
		// 'app/libs/masonry.pkgd.js',					//----сетка елементов
		'build/libs/isotope.pkgd.min.js', 				//----сетка елементов + фильтр
		// 'build/libs/lazy-line-painter-1.9.1.js', 				//----сетка елементов + фильтр
		'build/libs/lazy-line-painter-1.9.1.min.js', 				//----сетка елементов + фильтр
		'build/libs/animation/wow.min.js', 	
		'build/js/common.js', // Always at the end
		])
	.pipe(plumber())
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('build/js'))
	.pipe(browsersync.reload({ stream: true }))
});

gulp.task('rsync', function() {
	return gulp.src('build/**')
	.pipe(rsync({
		root: 'build/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_html/',
		// include: ['*.htaccess'], // Includes files to deploy
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});

gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
	gulp.watch('build/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch(['libs/**/*.js', 'build/js/common.js'], ['js']);
	gulp.watch('build/*.html', browsersync.reload);
	gulp.watch('build/**/*.php', browsersync.reload);
});

//--------------------------------svg-sprite-----------------------------
gulp.task('symbols', function() {
  return gulp.src('build/img/icon/*.svg')
    .pipe(svgmin())
    .pipe(svgstore({
      inlineSvg: true
    }))
    .pipe(cheerio({
      run: function($) {
        $('[fill]').removeAttr('fill');
        $('[style]').removeAttr('style');
        $('[class]').removeAttr('class');
        $('title').remove();
        $('defs').remove();
        $('style').remove();
        $('svg').attr('style', 'display:none');
      }
    }))
    .pipe(rename('symbols.html'))
    .pipe(gulp.dest('build/img'));
});

gulp.task('default', ['watch']);
