/* Global
 * Installing gulp: sudo npm install gulp -g
 */

/* Project
 * npm init
 * npm install gulp --save-dev
 */

/* Dependencies
 * npm install --save-dev gulp-if
 * npm install --save-dev gulp-autoprefixer
 * npm install --save-dev gulp-csso
 * npm install --save-dev gulp-concat-css
 * npm install --save-dev gulp-concat
 * npm install --save-dev gulp-minify
 * npm install --save-dev gulp-uglify
 * npm install --save-dev gulp4-run-sequence
 * npm install --save-dev gulp-rtlcss
 * npm install --save-dev gulp-wp-pot
 * npm install --save-dev gulp-rename
 * npm install --save-dev gulp-replace-name
 * npm install --save-dev vinyl-ftp
 * npm install --save-dev gulp-sftp
 * npm install --save-dev autoprefixer
 * npm install --save-dev gulp-postcss
 * npm install --save-dev sass
 * npm install --save-dev gulp-sass
 * npm i -d postcss
 */

/*
 * Vars
 */
var gulp                     = require( 'gulp' );
var gulpif                   = require( 'gulp-if' );
var autoprefixer             = require( 'gulp-autoprefixer' );
var minify_css               = require( 'gulp-csso' );
var concat_css               = require( 'gulp-concat-css' );
var concat_js                = require( 'gulp-concat' );
var uglify_js                = require( 'gulp-uglify' );
var runSequence              = require( 'gulp4-run-sequence' );
var rtlcss                   = require( 'gulp-rtlcss' );
var wpPot                    = require( 'gulp-wp-pot' );
var rename                   = require( 'gulp-rename' );
var ftp                      = require( 'vinyl-ftp' );
var sftp                     = require( 'gulp-sftp' );
var alternative_autoprefixer = require( 'autoprefixer' )
var postcss                  = require( 'gulp-postcss' );
var sass                     = require( 'gulp-sass' )( require( 'sass' ) );

/*
 * Configuration
 */
const AUTOPREFIXER_BROWSERS = [
	'ie      >= 10',
	'ie_mob  >= 10',
	'ff      >= 30',
	'chrome  >= 34',
	'safari  >= 7',
	'opera   >= 23',
	'ios     >= 7',
	'android >= 4.4',
	'bb      >= 10'
];

function get_connection() {

	const config = require( './sftp-config.json' );

	if ( config.type == 'ftp' ) {
		var conn = ftp.create({
			host    : config.host,
			user    : config.user,
			password: config.password,
			parallel: 10,
			reload  :   true,
		});

		return conn;
	} else if ( config.type == 'sftp' ) {
		var conn = sftp({
			host: config.host,
			user: config.user,
			pass: config.password,
		});

		return conn;
	}

	return false;
}

var enable_upload = 'yes';
var upload_path   = './wpjobster/';

function upload_file( upload_dest ) {
	// if config file doesn't exist, return gulp and set upload path to current path

	var fs = require('fs');
	if ( fs.existsSync('./sftp-config.json') ) {
		return get_connection();
	} else {
		// fallback: if you forgot enable_upload == 'yes' and don't have a config file
		// files will stay on the same location
		upload_path = '';

		// prevent get_connection(...).dest is not a function error when no config file
		// reason: gulpif still evaluates the function even if condition not passed
		return gulp;
	}
}

/*
 * Styles
 */
gulp.task( 'admin-style', function () {
	return gulp.src([
			'./assets/css/vendor/common/*.css',
			'./assets/css/vendor/admin/*.css',
			'./assets/css/common/*.css',
			'./assets/css/admin/*.css',
			'./lib/plugins/wpjobster-reports/assets/css/admin-styles.css'
		])
		.pipe( autoprefixer( { overrideBrowserlist: AUTOPREFIXER_BROWSERS } ) )
		.pipe( concat_css( 'wpjobster-admin.min.css' ) )
		.pipe( minify_css({ comments: false }) )
		.pipe( gulp.dest( './assets/min' ) )
		.pipe( gulpif( enable_upload == 'yes', upload_file().dest( upload_path + 'assets/min' ) ) )
});

gulp.task( 'sass-style', () => {
	return gulp.src( './assets/scss/main.scss' )
		.pipe( sass().on( 'error', sass.logError ) )
		.pipe( postcss([alternative_autoprefixer()]) )
		.pipe( rename( 'wpjobster-front-scss.ltr.css' ) )
		.pipe( gulp.dest( './assets/min' ) )
		.pipe( gulpif( enable_upload == 'yes', upload_file().dest( upload_path + 'assets/min' ) ) )
});

gulp.task( 'front-ltr-style', function () {
	return gulp.src([
			'./assets/css/vendor/common/*.css',
			'./assets/css/vendor/front/featherlight.css',
			'./assets/css/vendor/front/*.css',
			'./assets/css/common/*.css',
			'./assets/css/front/semantic-custom.css',
			'./assets/css/front/*.css',
			'./lib/plugins/wpjobster-reports/assets/css/styles.css',
			'./lib/plugins/zm-ajax-login-register/assets/*.css',
			'./assets/min/wpjobster-front-scss.ltr.css',
		], { base: 'assets/min' })
		.pipe( autoprefixer( { overrideBrowserlist: AUTOPREFIXER_BROWSERS } ) )
		.pipe( concat_css( 'wpjobster-front.ltr.min.css' ) )
		.pipe( minify_css({ comments: false }) )
		.pipe( gulp.dest( './assets/min' ) )
		.pipe( gulpif( enable_upload == 'yes', upload_file().dest( upload_path + 'assets/min' ) ) )
});

gulp.task( 'sass-rtl-style', () => {
	return gulp.src( './assets/scss/main.scss' )
		.pipe( sass().on( 'error', sass.logError ) )
		.pipe( rtlcss() )
		.pipe( postcss([alternative_autoprefixer()]) )
		.pipe( rename( 'wpjobster-front-scss.rtl.css' ) )
		.pipe( gulp.dest( './assets/min' ) )
		.pipe( gulpif( enable_upload == 'yes', upload_file().dest( upload_path + 'assets/min' ) ) )
});

gulp.task( 'front-rtl-concat-style', function () {
	return gulp.src([
			'./assets/css/front/*.css',
			'./lib/plugins/wpjobster-reports/assets/css/styles.css',
			'./lib/plugins/zm-ajax-login-register/assets/*.css'
		])
		.pipe( autoprefixer( { overrideBrowserlist: AUTOPREFIXER_BROWSERS } ) )
		.pipe( rtlcss() )
		.pipe( concat_css( 'wpjobster-front.rtl.css' ) )
		.pipe( gulp.dest( './assets/min' ) )
		.pipe( gulpif( enable_upload == 'yes', upload_file().dest( upload_path + 'assets/min' ) ) )
});

gulp.task( 'front-rtl-minify-style', function () {
	return gulp.src([
			'./assets/css/vendor/common/*.css',
			'./assets/css/vendor/front/featherlight.css',
			'./assets/css/vendor/front/*.css',
			'./assets/css/common/*.css',
			'./assets/min/wpjobster-front.rtl.css',
			'./assets/css/front-rtl/style-extra.css',
			'./assets/min/wpjobster-front-scss.rtl.css',
		])
		.pipe( autoprefixer( { overrideBrowserlist: AUTOPREFIXER_BROWSERS } ) )
		.pipe( concat_css( 'wpjobster-front.rtl.min.css' ) )
		.pipe( minify_css({ comments: false }) )
		.pipe( gulp.dest( './assets/min' ) )
		.pipe( gulpif( enable_upload == 'yes', upload_file().dest( upload_path + 'assets/min' ) ) )
});

gulp.task( 'front-rtl-style', function( callback ) {
	runSequence(
		'front-rtl-concat-style',
		'front-rtl-minify-style',
		callback
	);
});

/*
 * Scripts
 */
gulp.task( 'admin-script', function() {
	return gulp.src([
			'./assets/js/vendor/common/hooks.js',
			'./assets/js/vendor/common/moment.js',
			'./assets/js/vendor/common/*.js',
			'./assets/js/vendor/admin/daterangepicker.js',
			'./assets/js/vendor/admin/*.js',
			'./assets/js/common/helpers.js',
			'./assets/js/common/*.js',
			'./assets/js/admin/*.js',
			'./assets/js/extensions/admin/*.js'
		])
		.pipe( concat_js( 'wpjobster-admin.min.js' ) )
		.pipe( uglify_js() )
		.pipe( gulp.dest( './assets/min' ) )
		.pipe( gulpif( enable_upload == 'yes', upload_file().dest( upload_path + 'assets/min' ) ) )
});

gulp.task( 'front-script', function() {
	return gulp.src([
			'./assets/js/vendor/common/hooks.js',
			'./assets/js/vendor/common/moment.js',
			'./assets/js/vendor/common/*.js',
			'./assets/js/vendor/front/modernizr.touch.js',
			'./assets/js/vendor/front/featherlight.js',
			'./assets/js/vendor/front/*.js',
			'./assets/js/common/helpers.js',
			'./assets/js/common/*.js',
			'./assets/js/front/initializations.js',
			'./assets/js/front/!(page-load)*.js',
			'./assets/js/front/page-load.js',
			'./lib/plugins/wpjobster-reports/assets/js/scripts.js',
			'./lib/plugins/zm-ajax-login-register/assets/*.js',
			'./assets/js/extensions/front/*.js'
		])
		.pipe( concat_js( 'wpjobster-front.min.js' ) )
		.pipe( uglify_js() )
		.pipe( gulp.dest( './assets/min' ) )
		.pipe( gulpif( enable_upload == 'yes', upload_file().dest( upload_path + 'assets/min' ) ) )
});

/*
 * POT
 */
gulp.task( 'pot', function() {
	return gulp.src( './**/*.php' )
		.pipe( wpPot( {
			domain: 'wpjobster',
			package: 'wpjobster'
		} ) )
		.pipe( gulp.dest( 'languages/wpjobster.pot' ) )
});

/*
 * Build
 */
gulp.task( 'build', function( callback ) {
	runSequence(
		'admin-style',
		'sass-style',
		'front-ltr-style',
		'sass-rtl-style',
		'front-rtl-style',
		'admin-script',
		'front-script',
		'pot',
		callback
	);
});

/*
 * Watch
 */
gulp.task( 'watch', function () {
	/* Styles */
	gulp.watch(['./assets/css/admin/*.css', './assets/css/vendor/admin/*.css', './lib/plugins/wpjobster-reports/assets/css/admin-styles.css'], gulp.series( 'admin-style' ) );
	gulp.watch(['./assets/css/common/*.css', './assets/css/vendor/common/*.css'], gulp.series( 'admin-style', 'sass-style', 'front-ltr-style', 'sass-rtl-style', 'front-rtl-style' ) );
	gulp.watch([
		'./assets/css/front/*.css',
		'./assets/css/vendor/front/*.css',
		'./lib/plugins/wpjobster-reports/assets/css/styles.css',
		'./lib/plugins/zm-ajax-login-register/assets/*.css'
	], gulp.series ( 'sass-style', 'front-ltr-style', 'sass-rtl-style', 'front-rtl-style' ) );
	gulp.watch(['./assets/css/front-rtl/style-extra.css'], gulp.series( 'sass-rtl-style', 'front-rtl-style' ) );
	gulp.watch( './assets/scss/**/*.scss', gulp.series( 'sass-style', 'front-ltr-style', 'sass-rtl-style', 'front-rtl-style' ) );

	/* Scripts */
	gulp.watch(['./assets/js/admin/*.js', './assets/js/vendor/admin/*.js', './assets/js/extensions/admin/*.js'], gulp.series ( 'admin-script' ) );
	gulp.watch(['./assets/js/common/*.js', './assets/js/vendor/common/*.js'], gulp.series ( 'admin-script', 'front-script' ) );
	gulp.watch([
		'./assets/js/front/*.js',
		'./assets/js/vendor/front/*.js',
		'./lib/plugins/wpjobster-reports/assets/js/scripts.css',
		'./lib/plugins/zm-ajax-login-register/assets/*.js',
		'./assets/js/extensions/front/*.js'
	], gulp.series( 'front-script' ) );

	/* POT */
	gulp.watch( './**/*.php', gulp.series ( 'pot' ) );
});

gulp.task( 'sass:watch', function() {
	gulp.watch( './assets/scss/**/*.scss', gulp.series ( 'sass-style', 'sass-rtl-style') );
});