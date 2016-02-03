function disableSubmit()
{
	document.getElementByID("submit").disabled=true;
	document.getElementByID("terms").value="unchecked";

}

function activatesubmit(element)
{
	if(element.checked)
	{
		document.getElementByID("terms").value="checked";
		document.getElementByID("submit").disabled=false;
	}
	else
		document.getElementByID("submit").disabled=true;
}
