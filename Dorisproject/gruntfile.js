module.exports = function (grunt) {
    grunt.initConfig({
        watch: {
            files: 'src/AppointmentBundle/Resources/public/css/*.scss',
            tasks: ['sass']
        },
        sass: {
            dev: {
                files: {
                    'src/AppointmentBundle/Resources/public/css/': 'src/AppointmentBundle/Resources/public/css/app.scss'
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'ssrc/AppointmentBundle/Resources/public/css/*.css'
                    ]
                },
                options: {
                    watchTask: true,
                    server: '/'
                }
            }
        }
    });

    // load npm tasks
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    // define default task
    grunt.registerTask('default', ['browserSync', 'watch']);
};