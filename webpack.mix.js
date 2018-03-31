const mix = require('laravel-mix');
const jigsaw = require('@joshmoreno/jigsaw');

const fs = require('file-system');
const _ = require('lodash');
const jsonfile = require('jsonfile');

const mixManifest = 'source/assets/mix-manifest.json';

mix.disableSuccessNotifications();

mix.setPublicPath('source/assets/');

mix.webpackConfig({
    plugins: [jigsaw.browserSync()]
});

mix.js('source/_assets/js/main.js', 'js/')
    .sass('source/_assets/sass/main.scss', 'css/')
    .version()
	.then(function () {
		jsonfile.readFile(mixManifest, function (err, obj) {
			const newJson = {};
			_.forIn(obj, function (value, key) {
				const newFilename = value.replace(/([^\.]+)\.([^\?]+)\?id=(.+)$/g, '$1.$3.$2');
				const oldAsGlob = value.replace(/([^\.]+)\.([^\?]+)\?id=(.+)$/g, '$1.$2');
				// copy as new versioned
				fs.copyFile('source/assets' + key, 'source/assets' + newFilename, function(err) {
					if (err) console.error(err);
				});

				// delete old versioned file
				fs.unlink('./source/assets' + oldAsGlob, (err) => {
					if (err) throw err;
				});
				newJson[key] = newFilename;
			});
			jsonfile.writeFile(mixManifest, newJson, {spaces: 2}, function (err) {
				if (err) console.error(err);
			});
		});
	});

jigsaw.watch();