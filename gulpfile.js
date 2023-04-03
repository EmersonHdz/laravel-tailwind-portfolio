const { src, dest, watch, parallel } = require('gulp');

// CSS


// Imagenes
const cache = require('gulp-cache');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

// Javascript


// Webpack


const paths = {
    imagenes: 'resources/img/**/*'
}



function imagenes() {
    return src(paths.imagenes)
        .pipe( dest('public/image'))
}

function versionWebp( done ) {
    const opciones = {
        quality: 50
    };
    src('resources/img/**/*.{png,jpg}')
        .pipe( webp(opciones) )
        .pipe( dest('public/image') )
    done();
}

function versionAvif( done ) {
    const opciones = {
        quality: 50
    };
    src('resources/img/**/*.{png,jpg}')
        .pipe( avif(opciones) )
        .pipe( dest('public/image') )
    done();
}

function dev(done) {
    watch( paths.imagenes, imagenes)
    watch( paths.imagenes, versionWebp)
    watch( paths.imagenes, versionAvif)
    done()
}

exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.dev = parallel(  imagenes, versionWebp, versionAvif, dev) ;

  
  