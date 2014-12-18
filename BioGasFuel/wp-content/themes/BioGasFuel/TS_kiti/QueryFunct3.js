//<![CDATA[

var firstcategory = 1;
var firststatus = 1;

function changemenu(index)
{ 
	var categories = new Array();
	
	var i = firstcategory;
	var j = firststatus;
	
	var theSearchForm = false
	
	if (document.searchform)
	{
		theSearchForm = document.searchform;
	}
	else if (document.getElementById('searchform'))
	{
		theSearchForm = document.getElementById('searchform');
	}
	
	if (theSearchForm.elements['channel_id'])
	{
		var channel_obj = theSearchForm.elements['channel_id'];
	}
	else
	{
		var channel_obj = theSearchForm.elements['channel_id[]'];
	}
	
	var channels = channel_obj.options[index].value;
	
	var reset = 0;

	for (var g = 0; g < channel_obj.options.length; g++)
	{
		if (channel_obj.options[g].value != 'null' && 
			channel_obj.options[g].selected == true)
		{reset++;}
	} 
  
	with (theSearchForm.elements['cat_id[]'])
	{			
		if (channels == "6")
		{	

		} // END if channels
			
				
		if (channels == "9")
		{	

		} // END if channels
			
				
		if (channels == "5")
		{	

		} // END if channels
			
				
		if (channels == "10")
		{	

		} // END if channels
			
				
		if (channels == "7")
		{	
			categories[i] = new Option("-------", ""); i++; 
			categories[i] = new Option("Billing", "7"); i++; 
			categories[i] = new Option("General Questions", "1"); i++; 
			categories[i] = new Option("Integration", "3"); i++; 
			categories[i] = new Option("Phone ID", "6"); i++; 
			categories[i] = new Option("Phone Verification", "2"); i++; 
			categories[i] = new Option("Verification by SMS", "5"); i++; 
			categories[i] = new Option("Verification by Voice Calls", "4"); i++; 

		} // END if channels
			
				
		if (channels == "4")
		{	

		} // END if channels
			
				
		if (channels == "2")
		{	

		} // END if channels
			
				
		if (channels == "1")
		{	

		} // END if channels
			
				
		if (channels == "11")
		{	

		} // END if channels
			
				
		if (channels == "3")
		{	

		} // END if channels
			
				
		if (channels == "12")
		{	

		} // END if channels
			
		 
								
		if (reset > 1)
		{
			 categories = new Array();
		}

		spaceString = eval("/!-!/g");
		
		with (theSearchForm.elements['cat_id[]'])
		{
			for (i = length-1; i >= firstcategory; i--)
				options[i] = null;
			
			for (i = firstcategory; i < categories.length; i++)
			{
				options[i] = categories[i];
				options[i].text = options[i].text.replace(spaceString, String.fromCharCode(160));
			}
			
			options[0].selected = true;
		}
		
	}
}

//]]>