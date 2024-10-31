/* 
 * jQuery UI Multilevel Accordion v.1 
 * Copyright (c) 2011 Pieter Pareit 
 * http://www.scriptbreaker.com 
 */ 

(function($) {
	$.fn.extend({
	  accordion: function(options) {
		var defaults = {
		  accordion: 'true',
		  speed: 300,
		  closedSign: '',
		  openedSign: ' '
		};
		var opts = $.extend(defaults, options);
		var $this = $(this);
  
		$this.find("li").each(function() {
		  if ($(this).find("ul").children("li").length > 0) {
			$(this).append("<span>" + opts.closedSign + "</span>");
			
		  }
		});
  
		$this.find("li.active").each(function() {
		  $(this).find("ul").slideDown(opts.speed);
		  $(this).parents("ul").slideDown(opts.speed);
		  $(this).parents("ul").parent("li").find("span:first").html(opts.openedSign);
		});
  
  
  
		$this.find("li span").click(function() {
		  if ($(this).siblings("ul").children("li").length > 0) {
			if (opts.accordion) {
			  if (!$(this).siblings("ul").is(':visible')) {
				parents = $(this).parent().parents("ul");
				visible = $this.find("ul:visible");
				if (opts.accordion) {
				  if (!$(this).parent().find("ul").is(':visible')) {
					parents = $(this).parent().parents("ul");
					visible = $this.find("ul:visible");
					visible.each(function(visibleIndex) {
					  var close = true;
					  parents.each(function(parentIndex) {
						if (parents[parentIndex] == visible[visibleIndex]) {
						  close = false;
						  return false;
						}
					  });
					  if (close) {
						if ($(this).parent().find("ul") != visible[visibleIndex]) {
						  $(visible[visibleIndex]).slideUp(opts.speed, function() {
							$(this).parent("li").find("span:first").html(opts.closedSign);
						  });
						}
					  }
					});
				  }
				}
				if ($(this).parent().find("ul:first").is(":visible")) {
				  $(this).parent().find("ul:first").slideUp(opts.speed, function() {
					$(this).parent("li").find("span:first").delay(opts.speed).html(opts.closedSign);
				  });
				} else {
				  $(this).parent().find("ul:first").slideDown(opts.speed, function() {
					$(this).parent("li").find("span:first").delay(opts.speed).html(opts.openedSign);
				  });
				}
			  }
			}
			if ($(this).siblings("ul:first").is(":visible")) {
			  $(this).siblings("ul:first").slideUp(opts.speed, function() {
				$(this).parent("li").find("span:first").delay(opts.speed).html(opts.closedSign);
			  });
			} else {
			  $(this).siblings("ul:first").slideDown(opts.speed, function() {
				$(this).parent("li").find("span:first").delay(opts.speed).html(opts.openedSign);
			  });
			}
		  }
		});
		
	  }
	});
  })(jQuery);