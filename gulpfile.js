var gulp = require('gulp');
var zip = require('gulp-zip');

gulp.task('zip', function () {
    return gulp.src(['disqus/**/*'], {base: "."})
        .pipe(zip('disqus.zip'))
        .pipe(gulp.dest('./build'));
});

gulp.task('default', ['zip']);