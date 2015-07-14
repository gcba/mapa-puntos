'use strict';
module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'dist/css/estilos.css': '**/*.scss'
                }
            }
        },
        watch: {
            css: {
                files: 'dist/css/*.scss',
                tasks: ['sass','cssmin','beep:2']
            },
            js: {
                files: 'dist/js/*.js',
                tasks: ['uglify','beep:2']
            }
        },
        cssmin: {
            target:{
                files:{
                'css/estilos.min.css': 'dist/css/estilos.css'
                }
            }
        },

        uglify: {
            dist: {
              files: {
                'js/main.min.js': 'dist/js/main.js'
              }
            }
        }
    });


    //Register modules to user
    grunt.loadNpmTasks('grunt-beep');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    //Register tasks
    grunt.registerTask('default', ['watch']);
};