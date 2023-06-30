function defaultTask(cb) {
	console.log("Gulp is working!");
	cb();
}

const { src, dest, watch } = require("gulp");
const compileSASS = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const htmlmin = require("gulp-htmlmin");
const concat = require("gulp-concat");
const pug = require("gulp-pug");
const browserSync = require('browser-sync').create();

function css() {
  return src("../src/sass/*.scss")
		.pipe(compileSASS({style:"expanded"}).on("error", compileSASS.logError))
		.pipe(dest("../"));
		//.pipe(cleanCSS())
		//.pipe(dest("../"));
}

function js() {
  return src("../src/javascript/*.js")
		//.pipe(uglify())
		.pipe(concat("scripts.js"))
		.pipe(dest("../"));
}

function html() {
  return src("../src/pug/*.pug")
		.pipe(pug({pretty: true,}))
		//.pipe(htmlmin({ collapseWhitespace: true }))
		.pipe(dest("../"));
}

exports.default = defaultTask;
exports.css = css;
exports.js = js;
exports.html = html;
exports.watch = function () {
	browserSync.init({server: "../"});
  watch("../src/sass/*.scss", css).on("change", browserSync.reload);
  watch("../src/pug/**/*.pug", html).on("change", browserSync.reload);
  watch("../src/javascript/*.js", js).on("change", browserSync.reload);
};