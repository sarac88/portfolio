module.exports = function(grunt){
 
    grunt.initConfig({
	      svgstore: {
	        default: {
	          files: {
	          'includes/defs.svg': ['img/svg/*.svg'],
	        },
	      },
	    },
    });
 	grunt.loadNpmTasks('grunt-svgstore');
};