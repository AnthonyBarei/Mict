# Makefile génération site MICT

# target: 

# target: help - Displays help.
help:
	@egrep "^# target:" Makefile |cut -d" " -f3-

# target: 

# Patterns matching HTML files that should be minified. Files with a -min.html
# suffix will be ignored.
HTML_FILES = $(filter-out %-min.html,$(wildcard \
	*.html))

# Patterns matching HTML files that should be minified. Files with a -min.html
# suffix will be ignored.
PHP_FILES = $(filter-out %-min.php,$(wildcard \
	*.php))

# Patterns matching CSS files that should be minified. Files with a -min.css
# suffix will be ignored.
CSS_FILES = $(filter-out %-min.css,$(wildcard \
	*.css \
))

# Patterns matching JS files that should be minified. Files with a -min.js
# suffix will be ignored.
JS_FILES = made_in_chez_toi.js

# Command to run to execute the HTML minifying
HTML_MINIFYER = ./html_minifyer.sh

# Command to run to execute the YUI Compressor.
YUI_COMPRESSOR = /usr/bin/yui-compressor

# Flags to pass to the YUI Compressor for both CSS and JS.
YUI_COMPRESSOR_FLAGS = --charset utf-8 --verbose

HTML_MINIFIED = $(HTML_FILES:.html=-min.html)
PHP_MINIFIED = $(PHP_FILES:.php=-min.php)
CSS_MINIFIED = $(CSS_FILES:.css=-min.css)
JS_MINIFIED = $(JS_FILES:.js=-min.js)

# target: minify - Minifies CSS and JS.
#minify: minify-css minify-js
minify: minify-css minify-html minify-js

# target: minify-html - Minifies HTML.
minify-html: 
	$(HTML_MINIFYER)

# target: minify-css - Minifies CSS.
minify-css: $(CSS_FILES) $(CSS_MINIFIED)

# target: minify-js - Minifies JS.
minify-js: $(JS_FILES) $(JS_MINIFIED)


%-min.css: %.css
	@echo '==> Minifying $<'
	$(YUI_COMPRESSOR) $(YUI_COMPRESSOR_FLAGS) --type css $< >$@
	@echo

%-min.js: %.js
	@echo '==> Minifying $<'
	$(YUI_COMPRESSOR) $(YUI_COMPRESSOR_FLAGS) --type js $< >$@
	@echo

# target: min-clean - Removes minified CSS and HTML files.
min-clean:
	rm -f $(CSS_MINIFIED) $(HTML_MINIFIED) 

# target: style.css
#style.css: style.orig
	/usr/bin/perl generate_style_css.pl

# target: ateliers.html - regénère la page ateliers.html
#ateliers.html: ateliers_header.src ateliers_fiche.src ateliers_footer.src liste_ateliers.csv generate_page_ateliers.pl
#	/usr/bin/perl generate_page_ateliers.pl

# target: 

# target: main-resize - génère les images du site principal
main-resize:

# target: gallery-resize - génère les photos de la gallerie
gallery-resize:
	cd Gallery/images/album1 && mogrify -resize 640x640 *.jpg
	cd Gallery/images/album1 && mogrify -path thumbs -thumbnail 140x140 *.jpg
	cd Gallery/images/album2 && mogrify -resize 640x640 *.jpg
	cd Gallery/images/album2 && mogrify -path thumbs -thumbnail 140x140 *.jpg

# Variables copy site
DEST_DIR=../Site\ MICT/
FICHIERS_SITE=*.jpg *.png *-min.css made_in_chez_toi-min.js madeincheztoi-min.js robots.txt sitemap.xml css images js fonts promo

# target: 

# target: local - génère le site local
local:
	cat jquery.min.js jquery.scrollTo-1.4.3-min.js made_in_chez_toi.js > madeincheztoi-min.js
	cat jquery.min.js jquery.scrollTo-1.4.3-min.js made_in_chez_toi-min.js > madeincheztoi-min.js
	cp -a $(FICHIERS_SITE) $(DEST_DIR)
	for i in $(HTML_MINIFIED) ; do cp -a $$i $(DEST_DIR)/`basename $$i -min.html`.html; done
	for i in $(PHP_MINIFIED) ; do cp -a $$i $(DEST_DIR)/`basename $$i -min.php`.php; done

# target: local-clean - nettoie et génère le site local
local-clean:
	rm -Rf $(DEST_DIR)
	mkdir $(DEST_DIR)
	make local

# target: pre - upload en préprod
pre:
	echo "lcd $(DEST_DIR) \n\
	cd vhosts/www.madeincheztoi.com/htdocs/pre/ \n\
	put -r *" | sftp 2195445@sftp.dc0.gpaas.net

# target: pre-base - upload base en préprod
pre-base:
	echo "lcd $(DEST_DIR) \n\
	cd vhosts/www.madeincheztoi.com/htdocs/pre/ \n\
	put *html\n\
	put *php\n\
	put *js\n\
	put *css" | sftp 2195445@sftp.dc0.gpaas.net

# target: pre-clean - nettoie et upload en préprod
pre-clean:
	echo "lcd $(DEST_DIR) \n\
	cd vhosts/www.madeincheztoi.com/htdocs/pre/ \n\
	rm * \n\
	rm */* \n\
	rm */*/* \n\
	rm */*/*/* \n\
	rm */*/*/*/* \n\
	rmdir images \n\
	rmdir images/album1 \n\
	rmdir images/album1/thumbs \n\
	rmdir images/album2 \n\
	rmdir images/album2/thumbs \n\
	rmdir js \n\
	rmdir icons \n\
	rmdir css \n\
	mkdir css \n\
	mkdir icons \n\
	mkdir images \n\
	mkdir js \n\
	put -r *" | sftp 2195445@sftp.dc0.gpaas.net

# target: prod - upload en prod
prod:
	cp .htaccess $(DEST_DIR)
	echo "lcd $(DEST_DIR) \n\
	cd vhosts/www.madeincheztoi.com/htdocs/ \n\
	put -r * \n\
	put .htaccess" | sftp 2195445@sftp.dc0.gpaas.net
	rm -f $(DEST_DIR)/.htaccess

# target: prod-base - upload base en prod
prod-base:
	cp .htaccess $(DEST_DIR)
	echo "lcd $(DEST_DIR) \n\
	cd vhosts/www.madeincheztoi.com/htdocs/ \n\
	put *html\n\
	put *php\n\
	put *js\n\
	put *css\n\
	put .htaccess" | sftp 2195445@sftp.dc0.gpaas.net

# target: prod-clean - nettoie et upload en prod
prod-clean:
	cp .htaccess $(DEST_DIR)
	echo "lcd $(DEST_DIR) \n\
	cd vhosts/www.madeincheztoi.com/htdocs/ \n\
	rm * \n\
	rm */* \n\
	rm */*/* \n\
	rm */*/*/* \n\
	rm */*/*/*/* \n\
	rmdir Gallery/css \n\
	rmdir Gallery/icons \n\
	rmdir Gallery/js \n\
	rmdir Gallery/images/album1/thumbs \n\
	rmdir Gallery/images/album1 \n\
	rmdir Gallery/images/album2/thumbs \n\
	rmdir Gallery/images/album2 \n\
	rmdir Gallery/images \n\
	rmdir Gallery \n\
	rmdir images \n\
	rmdir images/album1 \n\
	rmdir images/album1/thumbs \n\
	rmdir images/album2 \n\
	rmdir images/album2/thumbs \n\
	rmdir js \n\
	rmdir icons \n\
	rmdir css \n\
	mkdir css \n\
	mkdir images \n\
	mkdir js \n\
	mkdir fonts \n\
	put -r * \n\
	put .htaccess" | sftp 2195445@sftp.dc0.gpaas.net
	rm -f $(DEST_DIR)/.htaccess


# target: 

# target: all - minify ateliers.html local-clean
#all: style.css ateliers.html minify local-clean
#all: style.css minify local-clean
all: minify local-clean

# target: 

