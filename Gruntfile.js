module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            sass: {
                files: ['src/assets/scss/*.scss'],
                tasks: ['sass:dist', 'cssmin',]
            },
            concat: {
                files: ['public/js/*.js'],
                tasks: ['concat']
            },
            uglify: {
                files: ['public/js/*.js'],
                tasks: ['uglify']
            }
        },
        sass: {
            dist: {
                files:{
                  'dist/assets/css/main.css' :'src/assets/scss/style.scss'
                },
                path: {
                  'dist/assets/css/main.css' :'src/assets/scss/style.scss'
                },
            }
        },
        cssmin: {
            target: {
              files: [{
                expand: true,
                cwd: 'dist/assets/css',
                src: ['*.css', '!*.min.css'],
                dest: 'dist/assets/css',
                ext: '.min.css'
              }]
            }
          },
          concat: {
            dist: {
                src: ['src/assets/js/*.js', '!src/assets/js/built.js'],
                dest: 'dist/assets/js/built.js',
              }
          },
          uglify: {
              options: {

              },
            my_target: {
              files: {
                'dist/assets/js/main.min.js': ['src/assets/js/main.js'],
              }
            }
          },
          browserSync: {
            dev: {
              bsFiles: {
                src: ['dist/assets/**/*.{js,css}', '*.php', 'parts/*.php']
              },
              options: {
                proxy: 'localhost:8888',
                watchTask: true
              }
            }
          }
    });
    grunt.registerTask('default', ['browserSync', 'watch']);
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-browser-sync');
};