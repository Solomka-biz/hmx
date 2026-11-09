jQuery.fn.plainText= function( text ){
    if( arguments.length ) return this.text( text )
    
    var node= document.createElement( 'div' )
    
    node.innerHTML=
    this.html()
    .replace( /<div[^<>]*>(<br[^<>]*>)?/gi, '\n' )
    .replace( /<p[^<>]*>(<br[^<>]*>)?/gi, '\n' )
    .replace( /<br[^<>]*>/gi, '\n' )
    .replace( /<[^<>]+>/g, '' )
    
    node= node.firstChild
    text= node ? jQuery.trim( node.nodeValue ) : ''
    
    return text
}