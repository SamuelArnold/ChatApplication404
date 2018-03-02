
// Place third party dependencies in the lib folder
//
// Configure loading modules from the lib directory,
requirejs.config({
    "baseUrl": "js/vendor",
    "paths": {
      "app": "../app"
    },
    "shim": {
		'socketio': { exports: 'io' },
        "backbone": ["jquery", "underscore"],
        "bootstrap": ["jquery"]
    }
});

// Load the main app module to start the app
requirejs(["app/main"]);