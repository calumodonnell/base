/*jslint browser: true, plusplus: true*/
/*global $, jQuery, alert, module*/

module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        paths: {
            src: {
                js: 'res/js/*.js'
            },
            dest: {
                js: 'res/js/bin/main.js',
                jsMin: 'res/js/bin/main.min.js'
            }
        },
        concat: {
            js: {
                options: {
                    separator: ';'
                },
                src: '<%= paths.src.js %>',
                dest: '<%= paths.dest.js %>'
            }
        },
        uglify: {
            options: {
                compress: true,
                mangle: true,
                sourceMap: true
            },
            build: {
                src: '<%= paths.src.js %>',
                dest: '<%= paths.dest.jsMin %>'
            }
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'res/img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'res/img/'
                }]
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'res/css/style.css': 'res/sass/style.sass',
                    'res/css/print.css': 'res/sass/print.sass'
                }
            }
        },
        autoprefixer: {
            dist: {
                files: {
                    'res/css/style.css': 'res/css/style.css',
                    'res/css/print.css': 'res/css/print.css'
                }
            }
        },
        watch: {
            scripts: {
                files: ['res/js/**/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false
                }
            },
            sass: {
                files: ['res/sass/**/*.sass'],
                tasks: ['sass', 'autoprefixer']
            }
        }
    });


    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['concat', 'uglify', 'imagemin', 'sass', 'autoprefixer', 'watch']);
};
