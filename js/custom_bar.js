// JavaScript Document


defCanvasWidth=600;
defCanvasHeight=400;


var mydata1 = {
	labels : ["2010","2011","2012","2013","2014"],
	datasets : [
		{
			fillColor : ["rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(177,152,37,1)"],
			highlightFill: ["rgba(141,155,159,0.5)","rgba(141,155,159,0.75)","rgba(141,155,159,0.75)","rgba(141,155,159,0.75)","rgba(177,152,37,0.75)"],
			data : [20000000,20000000,30000000,46000000,68000000],
      title : "2014",
		},
		{
			fillColor : ["rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(242,209,59,1)"],
			highlightFill: ["rgba(231,233,233,0.75)","rgba(231,233,233,0.75)","rgba(231,233,233,0.75)","rgba(231,233,233,0.75)","rgba(242,209,59,1)"],
			data : [0,10000000,16000000,22000000,18000000],
      title : "2013"
		},
	]
}               

var startWithDataset =1;
var startWithData =1;

var opt2 = {
	thousandSeparator : ",",
	scaleOverride: true,
    scaleSteps: 6,
	scaleStepWidth:20000000,
    scaleStartValue: 0,
      animationStartWithDataset : startWithDataset,
      animationStartWithData : startWithData,
      animationLeftToRight : true,
      animationSteps : 40,
	  barValueSpacing : 45,
	  responsive:true,
	  barShowStroke : false,
	  dynamicDisplay: true,
	  annotateDisplay : true,
	  scaleShowGridLines: false,
	  scaleFontSize : 15
}

