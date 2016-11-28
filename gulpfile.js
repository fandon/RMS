var gulp = require("gulp");
	clean = require("gulp-clean");
	mincss = require("gulp-minify-css");
	minjs = require("gulp-uglify");
	minimage = require("gulp-imagemin");

gulp.task('clean',function(){
	gulp.src(['./public/js','./public/css','./public/images'])
	.pipe(clean());
});

gulp.task('mincss',function(){
	gulp.src("./src/css/*.css")
	.pipe(mincss())
	.pipe(gulp.dest("./public/css"));
});

gulp.task('minjs',function(){
	gulp.src("./src/js/*.js")
	.pipe(minjs())
	.pipe(gulp.dest("./public/js"));
});

gulp.task('minimage',function(){
	gulp.src("./src/images/*")
	.pipe(minimage())
	.pipe(gulp.dest('./public/images'));
});

gulp.task('default',['clean'],function(){
	gulp.start('mincss','minjs','minimage');
});