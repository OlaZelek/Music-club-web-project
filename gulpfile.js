var gulp = require('gulp');	
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('scss', function(){				//tworzymy naszego taska - tu "scss"
    return gulp.src("sass/**/*.scss")		//wyszukaj folder sass i w nim plik scss /**/* - szuka nazwy tego pliku
        .pipe(sourcemaps.init())			//pipe - przestrzeń w gulpie gdzie możemy umieszczać moduły
        .pipe(sass({						//tu moduły sourcemaps, sass
         errLogToConsole: true,				//jesli będzie błąd to pokaż go w konsoli
         outputStyle: 'expanded', 			//czy wynikowy css ma być zminimalizowany czy rozszerzony
         // sourceComments: true, 
        }).on('error', sass.logError))		//podczas pisania kodu sprawdza błędy, jesli jest ok, 		  to kompiluje wynikowo css
        .pipe(sourcemaps.write())		//sourcemaps pokazuje w której linii w pliku scss jest dana właściwość z css
        .pipe(gulp.dest("css"))			//tworzy plik wynikowy css - css to nazwa folderu gdzie ma sie znaleźć wynikowy kod
})

gulp.task('default', ['scss'], function() { 	//default - domyslny
    gulp.watch('sass/**/*.scss', ['scss'])		//watch - obserwuj wszystkie pkili w tym folderze
});