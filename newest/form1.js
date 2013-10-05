
function make_select2()
 {
 var fm = document.form1;


for ( var i= fm.select2.length-1 ; i > 0 ; i-- )
 {
 fm.select2.remove( i );
 }


 //MEN 
switch ( fm.select1.selectedIndex )
 {
 case 1:
 var oOption = document.createElement("OPTION");
 oOption.text="H&M";
oOption.value="1";
 fm.select2.add( oOption );
 var oOption1 = document.createElement("OPTION");
 oOption1.text="GAP";
oOption1.value="2";
 fm.select2.add( oOption1 );
 var oOption2 = document.createElement("OPTION");
 oOption2.text="ZARA";
oOption2.value="3";
 fm.select2.add( oOption2 );
 break;
//WOMEN
 case 2:
 var oOption = document.createElement("OPTION");
 oOption.text="H&M";
oOption.value="101";
 fm.select2.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="GAP";
oOption1.value="102";
 fm.select2.add( oOption1 );
  var oOption2 = document.createElement("OPTION");
 oOption2.text="ZARA";
oOption2.value="103";
 fm.select2.add( oOption2 );
 break;
 }
 }

 function make_select3()
 {
 var fm = document.form1;

 // 清除舊的選項, 只保留第一個 "行政區" 選項
for ( var i= fm.select3.length-1 ; i > 0 ; i-- )
 {
 fm.select3.remove( i );
 }


 //MENHM
switch ( fm.select2[ fm.select2.selectedIndex ].value )
 {
 case "1":
 var oOption = document.createElement("OPTION");
 oOption.text="SHIRTS";
oOption.value="201";
 fm.select3.add( oOption );
 var oOption1 = document.createElement("OPTION");
 oOption1.text="TOP";
oOption1.value="202";
 fm.select3.add( oOption1 );
 var oOption2 = document.createElement("OPTION");
 oOption2.text="JEANS";
oOption2.value="203";
 fm.select3.add( oOption2 );
  var oOption3 = document.createElement("OPTION");
 oOption3.text="PANTS";
oOption3.value="204";
 fm.select3.add( oOption3 );
 break;

//MENGAP
 case "2":
 var oOption = document.createElement("OPTION");
 oOption.text="COATS";
oOption.value="11";
 fm.select3.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="SHIRTS";
oOption1.value="12";
 fm.select3.add( oOption1 );
 var oOption2 = document.createElement("OPTION");
 oOption2.text="BOTTOMS";
oOption2.value="13";
 fm.select3.add( oOption2 );
 
 break;
 
 //MENZARA
 case "3":
 var oOption = document.createElement("OPTION");
 oOption.text="COATS";
oOption.value="14";
 fm.select3.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="FOOTWEAR";
oOption1.value="15";
 fm.select3.add( oOption1 );
  var oOption2 = document.createElement("OPTION");
 oOption2.text="SOCKS";
oOption2.value="16";
 fm.select3.add( oOption2 );
   var oOption3 = document.createElement("OPTION");
 oOption3.text="HAT";
oOption3.value="17";
 fm.select3.add( oOption3 );
    var oOption4 = document.createElement("OPTION");
 oOption4.text="GLOVES";
oOption4.value="18";
 fm.select3.add( oOption4 );
     var oOption5 = document.createElement("OPTION");
 oOption5.text="BELTS";
oOption5.value="19";
 fm.select3.add( oOption5 );
     var oOption6 = document.createElement("OPTION");
 oOption6.text="SHIRTS";
oOption6.value="20";
 fm.select3.add( oOption6 );
      var oOption7 = document.createElement("OPTION");
 oOption7.text="T-SHIRTS";
oOption7.value="21";
 fm.select3.add( oOption7 );
       var oOption8 = document.createElement("OPTION");
 oOption8.text="JEANS";
oOption8.value="22";
 fm.select3.add( oOption8 );
 break;
 
 //WOMENHM
 case "101":
 var oOption = document.createElement("OPTION");
 oOption.text="TOPS";
 oOption.value="321";
 fm.select3.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="JEANS";
 oOption1.value="322";
 fm.select3.add( oOption1 );
 break;

//WOMENGAP
 case "102":
 var oOption = document.createElement("OPTION");
 oOption.text="TOPS";
 oOption.value="323";
 fm.select3.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="JEANS";
 oOption1.value="324";
 fm.select3.add( oOption1 );
  var oOption2 = document.createElement("OPTION");
 oOption2.text="PANTS";
 oOption2.value="325";
 fm.select3.add( oOption2 );
   var oOption3 = document.createElement("OPTION");
 oOption3.text="SKIRTS";
 oOption3.value="326";
 fm.select3.add( oOption3 );
    var oOption4 = document.createElement("OPTION");
 oOption4.text="DRESSES";
 oOption4.value="327";
 fm.select3.add( oOption4 );
 break;
 
 //WOMENZARA
  case "103":
 var oOption = document.createElement("OPTION");
 oOption.text="COATS";
 oOption.value="328";
 fm.select3.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="TIGHTS";
 oOption1.value="329";
 fm.select3.add( oOption1 );
   var oOption2 = document.createElement("OPTION");
 oOption2.text="FOOTWEAR";
 oOption2.value="330";
 fm.select3.add( oOption2 );
 break;
 
 
 }
 }
 
  
function make_select4()
 {
 var fm = document.form1;


for ( var i= fm.select4.length-1 ; i > 0 ; i-- )
 {
 fm.select4.remove( i );
 }
 switch ( fm.select3[ fm.select3.selectedIndex ].value )
 {
  case "323":
 var oOption = document.createElement("OPTION");
 oOption.text="REG";
 oOption.value="401";
 fm.select4.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="PET";
 oOption1.value="402";
 fm.select4.add( oOption1 );
   var oOption2 = document.createElement("OPTION");
 oOption2.text="TALL";
 oOption2.value="403";
 fm.select4.add( oOption2 );
 break;
 
   case "324":
 var oOption = document.createElement("OPTION");
 oOption.text="REG";
 oOption.value="404";
 fm.select4.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="PET";
 oOption1.value="405";
 fm.select4.add( oOption1 );
   var oOption2 = document.createElement("OPTION");
 oOption2.text="TALL";
 oOption2.value="406";
 fm.select4.add( oOption2 );
 break;
 
    case "325":
 var oOption = document.createElement("OPTION");
 oOption.text="REG";
 oOption.value="407";
 fm.select4.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="PET";
 oOption1.value="408";
 fm.select4.add( oOption1 );
   var oOption2 = document.createElement("OPTION");
 oOption2.text="TALL";
 oOption2.value="409";
 fm.select4.add( oOption2 );
 break;
 
    case "326":
 var oOption = document.createElement("OPTION");
 oOption.text="REG";
 oOption.value="410";
 fm.select4.add(oOption);
 var oOption1 = document.createElement("OPTION");
 oOption1.text="PET";
 oOption1.value="411";
 fm.select4.add( oOption1 );
   var oOption2 = document.createElement("OPTION");
 oOption2.text="TALL";
 oOption2.value="412";
 fm.select4.add( oOption2 );
  break;
 
    case "327":
 var oOption = document.createElement("OPTION");
 oOption.text="TALL";
 oOption.value="413";
 fm.select4.add( oOption );

 break;

 }
  }
