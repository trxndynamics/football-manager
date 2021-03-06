module.exports = function(grunt) {

    //Initializing the configuration object
    grunt.initConfig({

        // paths
        paths: {
            assets: {
                css: './laravel/public/assets/stylesheets/',
                js: './laravel/public/assets/javascripts/',
                vendor: './laravel/public/assets/vendor/'
            },
            css: './laravel/public/css/',
            js: './laravel/public/js/'

        },
        // Task configuration
        less: {
            development: {
                options: {
                    compress: false  //NOT minifying the result
                },
                files: {
                    //compiling frontend.less into frontend.css
                    "<%= paths.css %>frontend.css":"<%= paths.assets.css %>frontend.less",
                    //compiling backend.less into backend.css
                    "<%= paths.css %>backend.css":"<%= paths.assets.css %>backend.less"
                }
            },
            production: {
                options: {
                    compress: true  //minifying the result
                },
                files: {
                    //compiling frontend.less into frontend.css
                    "<%= paths.css %>frontend.min.css":"<%= paths.assets.css %>frontend.less",
                    //compiling backend.less into backend.css
                    "<%= paths.css %>backend.min.css":"<%= paths.assets.css %>backend.less"
                }
            }
        },
        concat: {
            options: {
                separator: ';'
            },
            js_frontend: {
                src: [
                    '<%= paths.assets.vendor %>jquery/dist/jquery.js',
                    '<%= paths.assets.vendor %>bootstrap/dist/js/bootstrap.js',
                    '<%= paths.assets.js %>frontend.js'
                ],
                dest: '<%= paths.js %>frontend.js'
            },
            js_backend: {
                src: [
                    '<%= paths.assets.vendor %>jquery/dist/jquery.js',
                    '<%= paths.assets.vendor %>bootstrap/dist/js/bootstrap.js',
                    '<%= paths.assets.js %>backend.js'
                ],
                dest: '<%= paths.js %>backend.js'
            }
        },
        uglify: {
            options: {
                mangle: false  // Use if you want the names of your functions and variables unchanged
            },
            frontend: {
                files: {
                    '<%= paths.js %>frontend.min.js': '<%= paths.js %>frontend.js'
                }
            },
            backend: {
                files: {
                    '<%= paths.js %>backend.min.js': '<%= paths.js %>backend.js'
                }
            }
        },
        phpunit: {
            classes: {
                dir: 'laravel/app/tests/'   //location of the tests
            },
            options: {
                bin: 'laravel/vendor/bin/phpunit',
                colors: true
            }
        },

        watch: {
            js_frontend: {
                files: [
                    //watched files
                    '<%= paths.assets.vendor %>jquery/dist/jquery.js',
                    '<%= paths.assets.vendor %>bootstrap/dist/js/bootstrap.js',
                    '<%= paths.assets.js %>frontend.js'
                ],
                tasks: ['concat:js_frontend','uglify:frontend'],     //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            js_backend: {
                files: [
                    //watched files
                    '<%= paths.assets.vendor %>jquery/dist/jquery.js',
                    '<%= paths.assets.vendor %>bootstrap/dist/js/bootstrap.js',
                    '<%= paths.assets.js %>backend.js'
                ],
                tasks: ['concat:js_backend','uglify:backend'],     //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            less: {
                files: ['<%= paths.assets.css %>*.less'],  //watched files
                tasks: ['less'],                          //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            tests: {
                files: ['laravel/app/controllers/*.php','laravel/app/models/*.php'],  //the task will run only when you save files in this location
                tasks: ['phpunit']
            }
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-phpunit');

    // Task definition
    grunt.registerTask('default', ['watch']);

};