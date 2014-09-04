
	function ShowHide(d1,d2,d3)
	{
		if(document.getElementById(d1).style.display == 'none')
		{
			document.getElementById(d1).style.display='block';
			document.getElementById(d2).style.display = 'none';
			document.getElementById(d3).style.display = 'none';
		}
		else
		{
			document.getElementById(d1).style.display = 'none';
		}
	}
	