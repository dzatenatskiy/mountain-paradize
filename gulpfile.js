// Подключаем Gulp и все необходимые библиотеки
var gulp           = require('gulp'),
		gutil          = require('gulp-util' ),
		sass           = require('gulp-sass'),
		browserSync    = require('browser-sync'),
		cleanCSS       = require('gulp-clean-css'),
		autoprefixer   = require('gulp-autoprefixer'),
		bourbon        = require('bourbon'),
		concat      = require('gulp-concat'),
		rename      = require('gulp-rename'),
		uglify      = require('gulp-uglifyjs'),
    cssnano     = require('gulp-cssnano'); 

// Обновление страниц сайта на локальном сервере
gulp.task('browser-sync', function() {
	browserSync({
		proxy: "localhost/mntdebag"
	});
});

// Компиляция stylesheet.css
gulp.task('sass', function() {
	return gulp.src('sass/**/*.sass')
		.pipe(sass({
			includePaths: bourbon.includePaths
		}).on('error', sass.logError))
		.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
		.pipe(cleanCSS())
		.pipe(gulp.dest('css'))
		.pipe(browserSync.stream())
});

gulp.task('scripts', function() {
    return gulp.src([ // Берем все необходимые библиотеки
        'js/query.nice-select.min.js',
        'js/jquery-ui.min.js',
        'js/lightslider.js',
        'js/libs.min.js',
        ])
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest('js')); // Выгружаем в папку js
});

gulp.task('css-libs', ['sass'], function() {
    return gulp.src('css/libs.css') // Выбираем файл для минификации
        .pipe(cssnano()) // Сжимаем
        .pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
        .pipe(gulp.dest('css')); // Выгружаем в папку css
});

// Наблюдение за файлами
gulp.task('watch', ['browser-sync', 'css-libs', 'scripts'], function() {
	gulp.watch('sass/main.sass', ['sass']);
	gulp.watch('**/*.php', browserSync.reload);
	gulp.watch('js/**/*.js', browserSync.reload);
});

gulp.task('default', ['watch']);