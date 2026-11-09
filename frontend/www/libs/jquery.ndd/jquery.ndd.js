// Fix events fix...
var originalFix = jQuery.event.fix;

jQuery.event.fix = function(event) {
    event = originalFix.apply(this, [event]);
    if (event.type.indexOf('drag') == 0 || event.type.indexOf('drop') == 0) {
        event.dataTransfer = event.originalEvent.dataTransfer;
    }
    return event;
};

// Add Drag&Drop handlers
jQuery.each(("drag dragenter dragleave dragover dragend drop dragstart").split(" "), function(i, name) {

    // Handle event binding
    jQuery.fn[ name ] = function(fn) {
        return fn ? this.bind(name, fn) : this.trigger(name);
    };

    if (jQuery.attrFn) {
        jQuery.attrFn[ name ] = true;
    }
});