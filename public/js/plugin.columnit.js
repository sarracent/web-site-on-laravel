/**
 * ColumnIt jQuery Plugin
 * 
 * Author: Julian Burr
 * Version: 0.1
 * Date: 2015/04/13
 *
 * Copyright (c) 2015 Julian Burr
 * License: Published under MIT license
 *
 * Description:
 * 		Transforms content of selected Element into Columns
 *		To do so the plugin runs through the content and splits
 *		it into defined (or calculated) number of colums.
 *
 * Please not that the calculation and splitting of words to
 * split the paragraphs at the right positions is very heavy
 * for browsers and might slow down the page used for longer
 * texts!
 *
 * TODOS:
 * - support for options "column_width" and "column_height"
 * - handling of other tags than paragraphs
 *		-- e.g. no headline as end of column
 *		-- e.g. calculations and transformations of / with images
 * - connect columns (needs to be calculated differently)
 **/

(function ( $ ) {
 
    $.fn.columnIt = function( options ) {
 
 		//General settings
        var settings = $.extend({
			column_count:3, 	//Number of columns
			word_accuracy:1,	//Accurancy of words for splitting paragraphs
			column_class:null,	//Optional class added to all colums
			
			//Not supported yet
			column_width:null,	//Optional fixed column width
			column_height:null	//Optional fixed column height
        }, options );
		
		return this.each(function(){
			var colcontent = $(this);
			colcontent.addClass("colcontent");
			
			//Cache origin element content
			colcontent.after("<div class='cache'></div>");
			$(".cache").append( $(this).children().clone(true) );
			colcontent.html('');
			
			var colclasses = "col";
			var colattributes = "";
			
			if(settings.column_class) colclasses += " " + settings.column_class;
			if(settings.column_width){
				colclasses += " fixedwidth";
				colattributes += " style='width=" + settings.column_width + "px'";
			} else {
				if(settings.column_count) colclasses += " col" + settings.column_count;
			}
			
			//Check height of content in one column of specified width
			colcontent.append("<div class='height_test colcontent'><div class='" + colclasses + "' " + colattributes + ">" + $(".cache").html() + "</div></div>");
			for(var i=0; i<settings.column_count; i++){
				//Append empty paragraphs to remove difference from added paragraphs 
				//due to splitting origin paragraphs
				$(".height_test .col").append("<p>&nbsp</p>");
			}
			var content_height = $(".height_test").outerHeight();
			$(".height_test").remove();
			
			//Set column height or calculate it if not set in options
			var column_height = 0;
			if(settings.column_height > 0){
				column_height = settings.column_height;
			} else {
				column_height = content_height / settings.column_count;
			}
			
			//Create first column wrapper
			colcontent.append("<div class='current col col" + settings.column_count + "'></div>");
			
			//Loop through all elements (first level) of the origin content
			$(".cache > *").each(function(){
				
				var splitText = '';
				
				//Split paragraphs if they are too long
				if($(this).prop("tagName") == "P"){
					//Append new paragraph to current column
					colcontent.find(".col.current p.current").removeClass("current");
					colcontent.find(".col.current").append("<p class='current'></p>");
					
					//Loop through all the words in the paragraph
					//Security limit of 10000 words per paragraph
					var restText = $(this).html();
					while(restText.length){
						if (restText.indexOf(' ') != '-1') {
							//If white space is in string, split it there
							//considering the given accuracy
							splitText = restText.substring(0, restText.indexOf(' ', settings.word_accuracy));
						} else {
							splitText = restText;
						}
						
						//Backup current content of current paragraph
						var bak = colcontent.find(".col.current p.current").html();
						
						//Append word(s) to current paragraph
						colcontent.find(".col.current p.current").append(splitText + " ");
						
						//If height of current paragraph is more than the calculated maximum
						//Set back to backup and create new column and new paragraph
						if(colcontent.find(".col.current").height() > column_height){
							colcontent.find(".col.current p.current").html(bak);
							colcontent.find(".current").removeClass("current");
							colcontent.append("<div class='current " + colclasses + "'></div>");
							colcontent.find(".col.current").append("<p class='current'>" + splitText + " </p>");
						}
						
						//Remove added string from rest string used for the loop
						restText = restText.substring(splitText.length + 1);
						
						//Increase security counter
						i++;
					}
				} else {
					//All other elements are added to the columns like they are so far!!!
					colcontent.find(".col.current").append($(this)[0].outerHTML);
				}
			});
			
			//Remove helping classes
			colcontent.find(".col.current").removeClass("current");
			colcontent.find(".col p.curren").removeClass("current");
			
			//Add counting classes
			if(settings.column_count > 0){
				if(colcontent.find(".col").length > settings.column_count){
					//If more colums than defined column count
					//e.g. if fixed height is defined
					//add classes to first and last element in each row
					var k = 0;
					colcontent.find(".col").each(function(){
						if(k >= settings.column_count) k = 0;
						if(k == 0) $(this).addClass("first");
						if(k == settings.column_count-1) $(this).addClass("last");
						k++;
					});
				} else {
					//Otherwise just add classes to first and last column element
					colcontent.find(".col:first").addClass("first");
					colcontent.find(".col:last").addClass("last");
				}
			}
			
			//Set fixed height if set
			if(settings.column_height > 0){
				colcontent.find(".col").height(settings.column_height);
			}
			
			//Remove cache
			$(".cache").remove();
		});
		
	};
 
}( jQuery ));