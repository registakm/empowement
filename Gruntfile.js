module.exports = function (grunt) {

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    path: {
      sass: '_sass'
    },
    watch: {
      compass: {
        files: ['<%= path.sass %>/{,*/}*.{scss,sass}'],
        tasks: ['compass', 'autoprefixer', 'concat:scssset', "csscomb", "csso",]
      },
      livereload: {
        options: {
          livereload: true
        },
        files: [
          '{,*/}*.html',
          '{,*/}*.php',
          'style.css',
          'images/{,*/}*.{png,jpg,jpeg,gif}',
          'js/script.js'
        ]
      },
      gruntfile: {
        files: ['Gruntfile.js']
      }
    },
    autoprefixer: {
      options: {
        browser: ['last 2 version', 'ie 8', "ie 9"]
      },
      dist: {
        files: [{
          src: 'css/{,*/}*.css',
          dest: '<%= autoprefixer.dist.src%>'
        }]
      }
    },

    connect: {
      options: {
        port: 9000,
        // hostname: 'localhost',
        livereload: 35729
      },
      livereload: {
        options: {
          open: true,
          base: ['*']
        }
      }
    },

    concurrent: {
      server: [
        'compass'
        // 'imagemin'
      ]
    },

    compass: {
      dist: {
        options: {
          config: "config.rb"
        }
      }
    },

    concat: {
      scssset: {
        src: 'css/{,*/}*.css',
        dest: 'style.css'
      },
      jsset: {
        src: ["js/lib/{,*/}*.js", "js/scripts/{,*/}*.js"],
        dest: "js/script.js"
      }
    },

    uglify: {
      default: {
        src: "<%= concat.jsset.dest %>",
        dest: "<%= concat.jsset.dest %>"
      }
    },


    csso: {
      dist: {
        banner: {
          options: {
            banner: '/*\n' +
            'Theme Name: <%= pkg.title %>\n' +
            'Theme URI: <%= pkg.homepage %>\n' +
            'Author: <%= pkg.author.name %>\n' +
            'Author URI: <%= pkg.author.url %>\n' +
            'Description: <%= pkg.description %>\n' +
            'Version: <%= pkg.version %>\n' +
            'License: GNU General Public License v2 or later\n' +
            'License URI: http://www.gnu.org/licenses/gpl-2.0.html\n' +
            '*/\n'
          },
          files : {'<%= concat.scssset.dest %>': ['<%= concat.scssset.dest %>']}
        },
        files: [{
          src: '<%= concat.scssset.dest %>',
          dest: '<%= concat.scssset.dest %>'
        }]
      }
    },

    csscomb: {
      dist: {
        files: [{
          src: '<%= concat.scssset.dest %>',
          dest: '<%= concat.scssset.dest %>'
        }]
      }
    },

    imagemin: {
      dist: {
        files: [{
        expand: true,
        cwd: 'images/',
        src: ['{,*/}*.{png,jpg,jpeg,gif}'],
        dest: 'images'
        }]
      }
    }

  });


  grunt.registerTask('serve', [
    // 'connect:livereload',
    'concurrent:server',
    'watch',
    "concat:jsset",
    "csscomb",
    "csso"
  ]);

    grunt.registerTask('clean', [
    "uglify",
    "imagemin"
  ]);


};