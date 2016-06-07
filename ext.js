var asyncRequest; // variable to hold XMLHttpRequest object

 // set up and send the asynchronous request
function getContent( url )
 {
 // attempt to create the XMLHttpRequest and make the request

	try
	{
	asyncRequest = new XMLHttpRequest(); // create request object
	// register event handler
	asyncRequest.onreadystatechange = stateChange;
	asyncRequest.open( 'GET', url, true ); // prepare the request
	asyncRequest.send( null ); // send the request
	} // end try


	catch ( exception )
	{
	alert( 'Request failed.  Asyn' );
	} // end catch

} // end function getContent

// displays the response

function stateChange()
{
   if ( asyncRequest.readyState == 4 && asyncRequest.status == 200 )
     {
		document.getElementById( 'contentArea' ).innerHTML =
		asyncRequest.responseText; // places text in contentArea
	} // end if
} // end function StateChange

// clear the content of de box 
function clearContent()
{
   document.getElementById('contentArea').innerHTML = '';
}
 