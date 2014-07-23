# setting path
http_path = "/"
css_dir = "css"
sass_dir = "_sass"
images_dir = "images"
javascripts_dir = "js"

# .sass-cache output
cache = false

# the asset cache buster
asset_cache_buster :none

# can be understood sass file by the browser
sass_options = { :debug_info => false }

# output_style
output_style = :compact
# output_style = :compressed

# relative_assets or absolute_assets
relative_assets = true

# whether line comments should be added to compiled css 
line_comments = false