function sum(x)
{	var s=0;
	for(i=0;i<=x;i++)
	{
		document.write("<B><i>"+i+"</i></B></BR>");
		//document.write(i);
		s=s+i;
	}
	return s;
}