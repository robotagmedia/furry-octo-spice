// JavaScript Document



function setColor(area,data,config,i,j,animPct,value)
{
  if(value > 35)return("rgba(220,0,0,"+animPct);
  else return("rgba(0,220,0,"+animPct);
  
}

var charJSPersonnalDefaultOptions = { decimalSeparator : "," , thousandSeparator : ".", roundNumber : "none", graphTitleFontSize: 2 };

defCanvasWidth=600;
defCanvasHeight=440;


var mydata1 = {
	labels : ["2010","2011","2012","2013","2014"],
	datasets : [
		{
			fillColor : ["rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(177,152,37,1)"],
			data : [20000000,20000000,30000000,58000000,80000000],
      title : "2014",
		},
		{
			fillColor : ["rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(242,209,59,1)"],
			data : [0,10000000,16000000,22000000,15000000],
      title : "2013"
		},
	]
}               

var startWithDataset =1;
var startWithData =1;

var opt2 = {
	scaleOverride: true,
    scaleSteps: 6,
	scaleStepWidth:20000000,
    scaleStartValue: 0,
      animationStartWithDataset : startWithDataset,
      animationStartWithData : startWithData,
      /* animationLeftToRight : true, */
      animationSteps : 40,
      animationEasing: "linear",
	  barValueSpacing : 45,
	  responsive:true,
	  barShowStroke : false,
	  dynamicDisplay: true,
	  scaleShowGridLines: false
}

