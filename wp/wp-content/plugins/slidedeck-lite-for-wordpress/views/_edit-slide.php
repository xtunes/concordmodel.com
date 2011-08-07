<?php
/**
 * Individual slide markup
 * 
 * SlideDeck for WordPress 1.4.1 - 2011-03-30
 * Copyright 2011 digital-telepathy  (email : support@digital-telepathy.com)
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 * @package SlideDeck
 * @subpackage SlideDeck for WordPress
 * 
 * @author digital-telepathy
 * @version 1.4.1
 * 
 * @uses slidedeck_get_option()
 * @uses slidedeck_dir()
 */

?>
<div id="slide_editor_<?php echo $count; ?>" class="postbox slide">
    
    <div title="Click to toggle" class="handlediv">&nbsp;</div>
    
	<h3 class="hndle"><span><?php echo empty( $slide['title'] ) ? "Slide " . $slide['slide_order'] : $slide['title']; ?></span></h3>
	
	<div class="inside">
	    
		<?php if( isset( $slide['id']) && !empty( $slide['id'] ) ): ?>
			<input type="hidden" name="slide[<?php echo $count; ?>][id]" value="<?php echo $slide['id']; ?>" />
		<?php endif; ?>
        
		<div class="add-delete-controls">
            <a class="button slide-convert-vertical slide-toggle-vertical disabled" title="Available in Pro version only">Convert to Vertical Slide</a>

			<a href="#<?php echo $count; ?>" class="slide-delete">Delete Slide</a>
		</div>
        
		<input type="hidden" name="slide[<?php echo $count; ?>][slide_order]" value="<?php echo $slide['slide_order']; ?>" class="slide-order" />
        
		<ol class="formRows">
		    
			<li>
				<label>Slide Title:</label>
				<input type="text" name="slide[<?php echo $count; ?>][title]" value="<?php echo empty( $slide['title'] ) ? 'Slide ' . $count : $slide['title']; ?>" size="40" maxlength="255" class="slide-title" />
			</li>
            
			<li class="editor-area">
				<?php $editor_id = "slide_{$count}_content"; ?>

                <span class="horizontal-slide-media">
				    <?php include('_editor_media_buttons.php'); ?>
                </span>
				
				<div class="editor-container">
					<textarea name="slide[<?php echo $count; ?>][content]" cols="80" rows="10" class="horizontal slide-content" id="<?php echo $editor_id; ?>"><?php echo htmlspecialchars( slidedeck_process_slide_content( $slide['content'], true ), ENT_QUOTES ); ?></textarea>
				</div>
			</li>
                 
			<li class="slide-background-url">
				<label class="disabled">Slide Background Image URL:</label>
				<input type="text" name="slidedeck_options[slide_backgrounds][]" readonly="readonly" value="" size="30" maxlength="255" />
                
                <a href="#" class="button disabled" title="Add a Background Image" onclick="return false;">Upload/Set</a>
                
                <em><strong>Beta Feature</strong> - <strong>NEW!</strong> Now upload images using the media library!</em>
            </li>
                                    
		</ol>
        
	</div>
    
</div>