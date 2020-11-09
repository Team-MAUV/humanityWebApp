(function($, w){
    
    var lightroom = function(opts, element){
        if ( !(this instanceof lightroom) ) {
            return new lightroom(opts, this);
        }
        
        var me = this;
        
        me.opts = {
            image_container_selector: "div",
            img_selector: "img",
            img_class_loaded: "jlr_loaded",
            img_space: 5,
            img_mode: 'min',
            init_callback: function(elem){}
        };
        
        $.extend(me.opts, opts);
        
        me.init = function(){
            if(typeof $.fn.imagesLoaded === 'undefined') { 
                console.log("imagesLoaded plugin is required: http://imagesloaded.desandro.com");
            }
            
            $(element).imagesLoaded(_imageLoaded);
            $(w).resize(function(){
                if(me.risize_timeout){clearTimeout(me.risize_timeout);}
                me.risize_timeout = setTimeout(_resize, 500);
            });
            
        }
        
        var _imageLoaded = function(){
            $(me.opts.img_selector, element).each(function(i, img){
                $.data(img, "jlr", {
                    "org_height": $(img).innerHeight(),
                    "org_width" : $(img).innerWidth()
                })
            });
            
            _resize();
            me.opts.init_callback(element);
        };
        
        var container_width = 0;
        
        var _resize = function(){
            if($(element).innerWidth() == container_width) {return;}
            container_width = $(element).innerWidth();
            
            var row_items = [];
            var row_width = 0;
            
            $(me.opts.img_selector, element).each(function(i, img){
               var image_width = $.data(img, "jlr").org_width;

               if(row_width > 0 && row_width + image_width < container_width){
                   row_items.push(img);
                   row_width += image_width;
                   return;
               }else if (row_width > 0 && me.opts.img_mode == "max" && row_width + (2 * me.opts.img_space) < container_width){
                   row_items.push(img);
                   row_width += image_width;
                   _calculate_row(row_items, row_width);
                   row_width = 0;
                   row_items = [];
                   return;
               } else if (row_width > 0){
                   _calculate_row(row_items, row_width);
               }
               
               row_width = image_width;
               row_items = [img];
            });
            
            if (row_width > 0){
                   _calculate_row(row_items,row_width);
            }
        };
        
        var _calculate_row = function(row_items, row_width){
            var px_width_image = container_width - (row_items.length * 2 * me.opts.img_space);
            
            if(row_width < container_width * 0.80 && me.opts.img_mode == "max"){
                row_width = container_width;
            }
            
             $(row_items).each(function(i, img){
                 var pc_image_width_org = $.data(img, "jlr").org_width / row_width * 100;
                 
                 var px_image_width_new = px_width_image / 100 * pc_image_width_org;
                 px_image_width_new += 2 * me.opts.img_space;
                 var pc_image_width_new  = px_image_width_new / container_width * 100;

                $(img).closest(me.opts.image_container_selector).css("width", pc_image_width_new + '%');
                $(img).css("width", '100%');
                $(img).css("height", "auto");

                $(img).addClass(me.opts.img_class_loaded);
            });
        }
    }
    
    $.fn.lightroom = lightroom;
})(jQuery, window)