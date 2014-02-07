(function() {
    tinymce.create('tinymce.plugins.buttons', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init : function(ed, url) {
                        
            ed.addCommand('lockIcon', function() {
                
                return_text = '[icon-lock]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('smokingIcon', function() {
                
                return_text = '[icon-smoking]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('bookIcon', function() {
                
                return_text = '[icon-book]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('phoneIcon', function() {
                
                return_text = '[icon-phone]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });

			ed.addCommand('cameraIcon', function() {
                
                return_text = '[icon-camera]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('wifiIcon', function() {
                
                return_text = '[icon-wifi]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('screenIcon', function() {
                
                return_text = '[icon-screen]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
			ed.addCommand('coffeeIcon', function() {
                
                return_text = '[icon-coffee]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('caseIcon', function() {
                
                return_text = '[icon-case]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
                        
            
            
            //and here come the buttons...
            
                        
            ed.addButton('lockIcon', {
                title : 'Lock Icon',
                cmd : 'lockIcon',
                image : url + '/SVG/lock.svg'
            });
            
            ed.addButton('smokingIcon', {
                title : 'Smoking Icon',
                cmd : 'smokingIcon',
                image : url + '/SVG/smoking.svg'
            });
            
            ed.addButton('bookIcon', {
                title : 'Book Icon',
                cmd : 'bookIcon',
                image : url + '/SVG/book.svg'
            });
            
            ed.addButton('phoneIcon', {
                title : 'Phone Icon',
                cmd : 'phoneIcon',
                image : url + '/SVG/phone.svg'
            });
            
            ed.addButton('wifiIcon', {
                title : 'Wifi Icon',
                cmd : 'wifiIcon',
                image : url + '/SVG/wifi.svg'
            });
            
            ed.addButton('screenIcon', {
                title : 'Screen Icon',
                cmd : 'screenIcon',
                image : url + '/SVG/screen.svg'
            });
            
            ed.addButton('coffeeIcon', {
                title : 'Coffee Icon',
                cmd : 'coffeeIcon',
                image : url + '/SVG/coffee.svg'
            });
            
            ed.addButton('caseIcon', {
                title : 'Case Icon',
                cmd : 'caseIcon',
                image : url + '/SVG/case.svg'
            });           
            
            ed.addButton('cameraIcon', {
                title : 'Camera Icon',
                cmd : 'cameraIcon',
                image : url + '/SVG/camera.svg'
            });
            
        },

        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl : function(n, cm) {
            return null;
        },

        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo : function() {
            return {
                    longname : 'WPTuts Buttons',
                    author : 'Lee',
                    authorurl : 'http://wp.tutsplus.com/author/leepham',
                    infourl : 'http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/example',
                    version : "0.1"
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('buttons', tinymce.plugins.buttons);
})();